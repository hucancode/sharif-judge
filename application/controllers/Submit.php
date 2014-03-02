<?php
/**
 * Sharif Judge online judge
 * @file Submit.php
 * @author Mohammad Javad Naderi <mjnaderi@gmail.com>
 */
defined('BASEPATH') OR exit('No direct script access allowed');

class Submit extends CI_Controller
{

	private $data; //data sent to view
	private $username;
	private $userid;
	private $user_level;
	private $assignment;
	private $assignment_root;
	private $problems;
	private $problem;//submitted problem id
	private $filetype; //type of submitted file
	private $ext; //uploaded file extension
	private $file_name; //uploaded file name without extension
	private $coefficient;


	// ------------------------------------------------------------------------


	public function __construct()
	{
		parent::__construct();
		$this->load->driver('session');
		if ( ! $this->session->userdata('logged_in')) // if not logged in
			redirect('login');
		$this->load->library('upload')->model('queue_model');
		$this->username = $this->session->userdata('username');
		$this->userid = $this->user_model->username_to_user_id($this->username);
		$this->user_level = $this->user_model->get_user_level($this->username);
		$this->assignment = $this->assignment_model->assignment_info($this->user_model->selected_assignment($this->username));
		$this->assignment_root = $this->settings_model->get_setting('assignments_root');
		$this->problems = $this->assignment_model->all_problems($this->assignment['id']);

		$extra_time = $this->assignment['extra_time'];
		$delay = shj_now()-strtotime($this->assignment['finish_time']);;
		ob_start();
		if ( eval($this->assignment['late_rule']) === FALSE )
			$coefficient = "error";
		if (!isset($coefficient))
			$coefficient = "error";
		ob_end_clean();
		$this->coefficient = $coefficient;

	}


	// ------------------------------------------------------------------------


	public function _language_to_type($language)
	{
		$language = strtolower ($language);
		switch ($language) {
			case 'c': return 'c';
			case 'c++': return 'cpp';
			case 'c#': return 'cs';
			case 'python2': return 'py2';
			case 'python3': return 'py3';
			case 'java': return 'java';
			default: return FALSE;
		}
	}


	// ------------------------------------------------------------------------


	public function _match($type, $extension)
	{
		switch ($type) {
			case 'c': return ($extension==='c'?TRUE:FALSE);
			case 'cpp': return ($extension==='cpp'?TRUE:FALSE);
			case 'cs': return ($extension==='cs'?TRUE:FALSE);
			case 'py2': return ($extension==='py'?TRUE:FALSE);
			case 'py3': return ($extension==='py'?TRUE:FALSE);
			case 'java': return ($extension==='java'?TRUE:FALSE);
		}
	}


	// ------------------------------------------------------------------------


	public function _check_language($str)
	{
		if ($str=='0')
			return FALSE;
		if (in_array( strtolower($str),array('c', 'c++', 'c#', 'python2', 'python3', 'java')))
			return TRUE;
		return FALSE;
	}


	// ------------------------------------------------------------------------


	public function index()
	{
		$this->form_validation->set_rules('problem', 'problem', 'required|integer|greater_than[0]', array('greater_than' => 'Select a %s.'));
		$this->form_validation->set_rules('language', 'language', 'required|callback__check_language', array('_check_language' => 'Select a valid %s.'));

		if ($this->form_validation->run())
		{
			if ($this->_upload())
				redirect('submissions/all');
			else
				show_error('Error Uploading File: '.$this->upload->display_errors());
		}

		$this->data = array(
			'username' => $this->username,
			'user_level' => $this->user_level,
			'all_assignments' => $this->assignment_model->all_assignments(),
			'assignment' => $this->assignment,
			'problems' => $this->problems,
			'in_queue' => FALSE,
			'coefficient' => $this->coefficient,
			'upload_state' => '',
			'problems_js' => '',
			'error' => '',
		);
		foreach ($this->problems as $problem)
		{
			$languages = explode(',', $problem['allowed_languages']);
			$items='';
			foreach ($languages as $language)
			{
				$items = $items."'".trim($language)."',";
			}
			$items = substr($items,0,strlen($items)-1);
			$this->data['problems_js'] .= "shj.p[{$problem['id']}]=[{$items}]; ";
		}
		if ($this->assignment['id'] == 0)
			$this->data['error']='Please select an assignment first.';
		elseif ($this->user_model->get_user_level($this->username) == 0 && ! $this->assignment['open'])
			// if assignment is closed, non-student users (admin, instructors) still can submit
			$this->data['error'] = 'Selected assignment is closed.';
		elseif (shj_now() < strtotime($this->assignment['start_time']))
			$this->data['error'] = 'Selected assignment has not started.';
		elseif (shj_now() > strtotime($this->assignment['finish_time'])+$this->assignment['extra_time']) // deadline = finish_time + extra_time
			$this->data['error'] = 'Selected assignment has finished.';
		elseif ( ! $this->assignment_model->is_participant($this->assignment['participants'],$this->username) )
			$this->data['error'] = 'You are not registered for submitting.';
		else
			$this->data['error'] = 'none';

		$this->twig->display('pages/submit.twig', $this->data);

	}


	// ------------------------------------------------------------------------


	/**
	 * Saves submitted code and adds it to queue for judging
	 */
	private function _upload()
	{
		$now = shj_now();
		foreach($this->problems as $item)
			if ($item['id'] == $this->input->post('problem'))
			{
				$this->problem = $item;
				break;
			}
		$this->filetype = $this->_language_to_type(strtolower(trim($this->input->post('language'))));
		$this->ext = substr(strrchr($_FILES['userfile']['name'],'.'),1); // uploaded file extension
		$this->file_name = basename($_FILES['userfile']['name'], ".{$this->ext}"); // uploaded file name without extension
		if ( $this->queue_model->in_queue($this->username,$this->assignment['id'], $this->problem['id']) )
			show_error('You have already submitted for this problem. Your last submission is still in queue.');
		if ($this->user_model->get_user_level($this->username)==0 && !$this->assignment['open'])
			show_error('Selected assignment has been closed.');
		if ($now < strtotime($this->assignment['start_time']))
			show_error('Selected assignment has not started.');
		if ($now > strtotime($this->assignment['finish_time'])+$this->assignment['extra_time'])
			show_error('Selected assignment has finished.');
		if ( ! $this->assignment_model->is_participant($this->assignment['participants'],$this->username) )
			show_error('You are not registered for submitting.');
		$filetypes = explode(",",$this->problem['allowed_languages']);
		foreach ($filetypes as &$filetype)
		{
			$filetype = $this->_language_to_type(strtolower(trim($filetype)));
		}
		if ($_FILES['userfile']['error'] == 4)
			show_error('No file chosen.');
		if ( ! in_array($this->filetype, $filetypes))
			show_error('This file type is not allowed for this problem.');
		if ( ! $this->_match($this->filetype, $this->ext) )
			show_error('This file type does not match your selected language.');
		if ( ! preg_match('/^[a-zA-Z0-9_\-()]+$/', $this->file_name) )
			show_error('Invalid characters in file name.');

		$user_dir = rtrim($this->assignment_root, '/').'/assignment_'.$this->assignment['id'].'/p'.$this->problem['id'].'/'.$this->username;
		if ( ! file_exists($user_dir))
			mkdir($user_dir, 0700);

		$config['upload_path'] = $user_dir;
		$config['allowed_types'] = '*';
		$config['max_size']	= $this->settings_model->get_setting('file_size_limit');
		$config['file_name'] = $this->file_name."-".($this->assignment['total_submits']+1).".".$this->ext;
		$config['max_file_name'] = 20;
		$config['remove_spaces'] = TRUE;
		$this->upload->initialize($config);

		if ($this->upload->do_upload('userfile'))
		{
			$result = $this->upload->data();
			$this->load->model('submit_model');

			$submit_info = array(
				'submit_id' => $this->assignment_model->increase_total_submits($this->assignment['id']),
				'username' => $this->username,
				'userid' => $this->userid,
				'assignment' => $this->assignment['id'],
				'problem' => $this->problem['id'],
				'file_name' => $result['raw_name'],
				'main_file_name' => $this->file_name,
				'file_type' => $this->filetype,
				'coefficient' => $this->coefficient,
				'score' => 0,
				'time' => shj_now_str(),
			);
			$this->queue_model->add_to_queue($submit_info);
				process_the_queue();

			return TRUE;
		}

		return FALSE;
	}



}
