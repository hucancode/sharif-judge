<?php
/**
 * Sharif Judge online judge
 * @file Submit_model.php
 * @author Mohammad Javad Naderi <mjnaderi@gmail.com>
 */
defined('BASEPATH') OR exit('No direct script access allowed');

class Submit_model extends CI_Model {

	public function __construct()
	{
		parent::__construct();
	}


	// ------------------------------------------------------------------------


	/**
	 * Returns table row for a specific submission
	 */
	public function get_submission($assignment, $submit_id)
	{
		$query = $this->db->get_where('submissions',
			array(
				'assignment'=>$assignment,
				'submit_id'=>$submit_id
			)
		);
		if($query->num_rows()!=1)
			return FALSE;
		return $query->row_array();
	}


	// ------------------------------------------------------------------------


	public function get_final_submissions($assignment_id, $user_level, $userid, $page_number = NULL, $filter_user = NULL, $filter_problem = NULL)
	{
		$arr['assignment'] = $assignment_id;
		$arr['is_final'] = 1;
		if ($user_level === 0)// students can only get final submissions of themselves
			$arr['userid']=$userid;
		elseif ($filter_user !== NULL)
			$arr['userid'] = $filter_user;
		if ($filter_problem !== NULL)
			$arr['problem'] = $filter_problem;
		if ($page_number === NULL)
			return $this->db->order_by('userid asc, problem asc')->get_where('submissions', $arr)->result_array();
		else
		{
			$per_page = $this->settings_model->get_setting('results_per_page_final');
			if ($per_page == 0)
				return $this->db->order_by('userid asc, problem asc')->get_where('submissions', $arr)->result_array();
			else
				return $this->db->order_by('userid asc, problem asc')->limit($per_page,($page_number-1)*$per_page)->get_where('submissions', $arr)->result_array();
		}

	}


	// ------------------------------------------------------------------------


	public function get_all_submissions($assignment_id, $user_level, $userid, $page_number = NULL, $filter_user = NULL, $filter_problem = NULL)
	{
		$arr['assignment']=$assignment_id;
		if ($user_level === 0)
			$arr['userid'] = $userid;
		elseif ($filter_user !== NULL)
			$arr['userid'] = $filter_user;
		if ($filter_problem !== NULL)
			$arr['problem'] = $filter_problem;
		if ($page_number === NULL)
			return $this->db->order_by('submit_id','desc')->get_where('submissions', $arr)->result_array();
		else
		{
			$per_page = $this->settings_model->get_setting('results_per_page_all');
			if ($per_page == 0)
				return $this->db->order_by('submit_id','desc')->get_where('submissions', $arr)->result_array();
			else
				return $this->db->order_by('submit_id','desc')->limit($per_page,($page_number-1)*$per_page)->get_where('submissions', $arr)->result_array();
		}
	}


	// ------------------------------------------------------------------------


	public function count_final_submissions($assignment_id, $user_level, $userid, $filter_user = NULL, $filter_problem = NULL)
	{
		$arr['assignment'] = $assignment_id;
		$arr['is_final'] = 1;
		if ($user_level === 0)
			$arr['userid']=$userid;
		elseif ($filter_user !== NULL)
			$arr['userid'] = $filter_user;
		if ($filter_problem !== NULL)
			$arr['problem'] = $filter_problem;
		return $this->db->where($arr)->count_all_results('submissions');
	}


	// ------------------------------------------------------------------------


	public function count_all_submissions($assignment_id, $user_level, $userid, $filter_user = NULL, $filter_problem = NULL)
	{
		$arr['assignment']=$assignment_id;
		if ($user_level === 0)
			$arr['userid']=$userid;
		elseif ($filter_user !== NULL)
			$arr['userid'] = $filter_user;
		if ($filter_problem !== NULL)
			$arr['problem'] = $filter_problem;
		return $this->db->where($arr)->count_all_results('submissions');
	}


	// ------------------------------------------------------------------------


	public function set_final_submission($userid, $assignment, $problem, $submit_id)
	{
		$this->db->where(array(
			'is_final' => 1,
			'userid' => $userid,
			'problem' => $problem,
			'assignment' => $assignment
		))->update('submissions', array('is_final'=>0));

		$this->db->where(array(
			'userid' => $userid,
			'assignment' => $assignment,
			'problem' => $problem,
			'submit_id' => $submit_id
		))->update('submissions', array('is_final'=>1));

		return TRUE;
	}

}
