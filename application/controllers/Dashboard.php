<?php
/**
 * Sharif Judge online judge
 * @file Dashboard.php
 * @author Mohammad Javad Naderi <mjnaderi@gmail.com>
 */
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller
{

	private $username;
	private $email;
	private $assignment;
	private $user_level;


	// ------------------------------------------------------------------------


	public function __construct()
	{
		parent::__construct();
		if ( ! $this->db->table_exists('sessions'))
			redirect('install');
		$this->load->driver('session');
		if ( ! $this->session->userdata('logged_in')) // if not logged in
			redirect('login');
		$this->username = $this->session->userdata('username');
		$this->email = $this->user_model->user_email($this->username);
		$this->assignment = $this->assignment_model->assignment_info($this->user_model->selected_assignment($this->username));
		$this->user_level = $this->user_model->get_user_level($this->username);
		$this->load->model('notifications_model')->helper('text');
	}


	// ------------------------------------------------------------------------


	public function index()
	{
		$data = array(
			'username'=>$this->username,
			'email' => $this->email,
			'user_level' => $this->user_level,
			'all_assignments'=>$this->assignment_model->all_assignments(),
			'assignment' => $this->assignment,
			'week_start'=>$this->settings_model->get_setting('week_start'),
			'wp'=>$this->user_model->get_widget_positions($this->username),
			'notifications' => $this->notifications_model->get_latest_notifications()
		);

		// detecting errors:
		$data['errors'] = array();
		if($this->user_level === 3){
			$path = $this->settings_model->get_setting('assignments_root');
			if ( ! file_exists($path))
				array_push($data['errors'], 'The path to folder "assignments" is not set correctly. Move this folder somewhere not publicly accessible, and set its full path in Settings.');
			elseif ( ! is_writable($path))
				array_push($data['errors'], 'The folder <code>"'.$path.'"</code> is not writable by PHP. Make it writable. But make sure that this folder is only accessible by you. Codes will be saved in this folder!');

			$path = $this->settings_model->get_setting('tester_path');
			if ( ! file_exists($path))
				array_push($data['errors'], 'The path to folder "tester" is not set correctly. Move this folder somewhere not publicly accessible, and set its full path in Settings.');
			elseif ( ! is_writable($path))
				array_push($data['errors'], 'The folder <code>"'.$path.'"</code> is not writable by PHP. Make it writable. But make sure that this folder is only accessible by you.');
		}

		$this->twig->display('pages/dashboard.twig', $data);
	}


	// ------------------------------------------------------------------------

	/**
	 * Used by ajax request, for saving the user's Dashboard widget positions
	 */
	public function widget_positions()
	{
		if ( ! $this->input->is_ajax_request() )
			show_404();
		if ($this->input->post('positions') !== NULL)
			$this->user_model->save_widget_positions($this->username, $this->input->post('positions'));
	}

}
