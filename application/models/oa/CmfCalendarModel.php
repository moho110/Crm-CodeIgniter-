<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class CmfCalendarModel extends CI_Model {
	public function __construct() {
		parent::__construct();
	}

	/*
	 * 获取搜索选项并分页
	 */
	function getSearchPage($limit,$start,$searchvalue,$keyword) {
		$this->db->select('*');
		$this->db->from('cmf_calendar');
		$this->db->like($searchvalue,$keyword,'both');
		$this->db->where("$searchvalue LIKE '%$keyword%'");
		$this->db->limit($limit,$start);
		$query = $this->db->get();
		$rows = $query->result();
		return $rows;
	}

	/**
	 * 获取搜索选项
	 */
	function getSearch($searchvalue,$keyword) {
		$this->db->select('*');
		$this->db->from('cmf_calendar');
		$this->db->like($searchvalue,$keyword,'both');
		$this->db->where("$searchvalue LIKE '%$keyword%'");
		$query = $this->db->get();
		$rows = $query->result();
		return $rows;
	}

	/**
	 * 获取列
	 */
	function getRows($id = "") {
		if(!empty($id)) {
			$query = $this->db->get_where('cmf_calendar', array('id' => $id));
			return $query->row_array();
		} else {
			$query = $this->db->get('cmf_calendar');
			return $query->result_array();
		}
	}

	//获取分页
	public function get_systemlang($limit, $start) {
        $this->db->limit($limit, $start);
        $query = $this->db->get('cmf_calendar');
        $rows = $query->result();
        return $rows;
    }

	/**
	* 获取总数
	*/
	public function get_count() {
        return $this->db->count_all_results('cmf_calendar');
    }

	/**
	 * 插入cmf_calendar
	 */
	public function insert() {
		//prepare post data
            $CmfCalendarData = array(
                'USER_ID'             => $this->input->post('USER_ID'),
				'CAL_TIME'            => $this->input->post('CAL_TIME'),
				'END_TIME'            => $this->input->post('END_TIME'),
				'CAL_TYPE'            => $this->input->post('CAL_TYPE'),
				'CAL_LEVEL'	          => $this->input->post('CAL_LEVEL'),
				'CONTENT'             => $this->input->post('CONTENT'),
				'MANAGER_ID'          => $this->input->post('MANAGER_ID'),
				'OVER_STATUS'         => $this->input->post('OVER_STATUS'),
				'ifsms'               => $this->input->post('ifsms'),
				'tixingtime'          => $this->input->post('tixingtime'),
				'url'                 => $this->input->post('url'),
				'guanlianid'          => $this->input->post('guanlianid')
            );

		$insert = $this->db->insert('cmf_calendar', $CmfCalendarData);
		if($insert) {
			return $this->db->insert_id();
		} else {
			return false;
		}
	}

	/**
	 * 更新cmf_calendar
	 */
	public function update($id) {
		//prepare cms page data
            $CmfCalendarData = array(
                'USER_ID'             => $this->input->post('USER_ID'),
				'CAL_TIME'            => $this->input->post('CAL_TIME'),
				'END_TIME'            => $this->input->post('END_TIME'),
				'CAL_TYPE'            => $this->input->post('CAL_TYPE'),
				'CAL_LEVEL'	          => $this->input->post('CAL_LEVEL'),
				'CONTENT'             => $this->input->post('CONTENT'),
				'MANAGER_ID'          => $this->input->post('MANAGER_ID'),
				'OVER_STATUS'         => $this->input->post('OVER_STATUS'),
				'ifsms'               => $this->input->post('ifsms'),
				'tixingtime'          => $this->input->post('tixingtime'),
				'url'                 => $this->input->post('url'),
				'guanlianid'          => $this->input->post('guanlianid')
            );

		if(!empty($CmfCalendarData) && !empty($id)) {
			$update = $this->db->update('cmf_calendar' ,$CmfCalendarData, array('id' => $id));
			return $update?true:false;
		} else {
			return false;
		}
	}

	/**
	 * 删除cmf_calendar
	 */
	
	public function delete($id) {
		$delete = $this->db->delete('cmf_calendar' , array('id' => $id));
		return $delete?true:false;
	}
}
?>