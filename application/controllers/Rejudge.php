<?php
/**
 * Sharif Judge online judge
 * @file Rejudge.php
 * @author Mohammad Javad Naderi <mjnaderi@gmail.com>
 */
defined('BASEPATH') OR exit('No direct script access allowed');

class Rejudge extends CI_Controller
{

	private $username;
	private $assignment;
	private $user_level;

	// ------------------------------------------------------------------------


	public function __construct()
	{
		parent::__construct();
		$this->load->driver('session');
		if ( ! $this->session->userdata('logged_in')) // if not logged in
			redirect('login');
		$this->username = $this->session->userdata('username');
		$this->assignment = $this->assignment_model->assignment_info($this->user_model->selected_assignment($this->username));
		$this->user_level = $this->user_model->get_user_level($this->username);
		if ( $this->user_level <= 1) // permission denied
			show_404();
		$this->problems = $this->assignment_model->all_problems($this->assignment['id']);
	}


	// ------------------------------------------------------------------------


	public function index()
	{
file_put_contents("/home/hu/Desktop/log.txt","rejudge index\r\n",FILE_APPEND|LOCK_EX);
		$this->form_validation->set_rules('problem_id', 'problem id', 'required|integer');

		$data = array(
			'username' => $this->username,
			'user_level' => $this->user_level,
			'all_assignments' => $this->assignment_model->all_assignments(),
			'assignment' => $this->assignment,
			'problems' => $this->problems,
			'msg' => array()
		);

		if ($this->form_validation->run())
		{
			$problem_id = $this->input->post('problem_id');
			$this->load->model('queue_model');
			$this->queue_model->rejudge($this->assignment['id'], $problem_id);
			process_the_queue();
file_put_contents("/home/hu/Desktop/log.txt","rejudge -> process_the_queue();\r\n",FILE_APPEND|LOCK_EX);
			$data['msg'] = array('Rejudge in progress');
		}

		$this->twig->display('pages/admin/rejudge.twig', $data);
	}


	// ------------------------------------------------------------------------


	public function rejudge_single()
	{
		if ( ! $this->input->is_ajax_request() )
			show_404();

		$this->form_validation->set_rules('submit_id', 'submit id', 'required|integer');
		$this->form_validation->set_rules('username', 'username', 'required|alpha_numeric');
		$this->form_validation->set_rules('assignment', 'assignment', 'required|integer');
		$this->form_validation->set_rules('problem', 'problem', 'required|integer');

		if ($this->form_validation->run())
		{
			$this->load->model('queue_model');
			$this->queue_model->rejudge_single(
				array(
					'submit_id' => $this->input->post('submit_id'),
					'username' => $this->input->post('username'),
					'assignment' => $this->input->post('assignment'),
					'problem' => $this->input->post('problem'),
				)
			);
			process_the_queue();
			$json_result = array('done' => 1);
		}
		else
			$json_result = array('done' => 0, 'message' => 'Input Error');

		$this->output->set_header('Content-Type: application/json; charset=utf-8');
		echo json_encode($json_result);
	}

}
