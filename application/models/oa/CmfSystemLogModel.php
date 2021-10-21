<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class CmfSystemLogModel extends CI_Model {
	public function __construct() {
		parent::__construct();
	}

	/*
	 * 获取搜索选项并分页
	 */
	function getSearchPage($limit,$start,$searchvalue,$keyword) {
		$this->db->select('*');
		$this->db->from('cmf_system_log');
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
		$this->db->from('cmf_system_log');
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
			$query = $this->db->get_where('cmf_system_log', array('system_log_id' => $id));
			return $query->row_array();
		} else {
			$query = $this->db->get('cmf_system_log');
			return $query->result_array();
		}
	}

	//获取分页
	public function get_systemlang($limit, $start) {
        $this->db->limit($limit, $start);
        $query = $this->db->get('cmf_system_log');
        $rows = $query->result();
        return $rows;
    }

	/**
	* 获取总数
	*/
	public function get_count() {
        return $this->db->count_all_results('cmf_system_log');
    }

	/**
	 * 插入cmf_accessprepay
	 */
	public function insert() {
		//prepare post data
            $CmfSystemLogData = array(
                'loginaction'      => $this->input->post('loginaction'),
                'DATE'             => $this->input->post('DATE'),
                'REMOTE_ADDR'      => $this->input->post('REMOTE_ADDR'),
                'HTTP_USER_AGENT'  => $this->input->post('HTTP_USER_AGENT'),
                'QUERY_STRING'     => $this->input->post('QUERY_STRING'),
                'QUERY_STRING'     => $this->input->post('SCRIPT_NAME'),
                'USERID'           => $this->input->post('USERID'),
                'SQLTEXT'          => $this->input->post('SQLTEXT')
            );

		$insert = $this->db->insert('cmf_system_log', $CmfSystemLogData);
		if($insert) {
			return $this->db->insert_id();
		} else {
			return false;
		}
	}

	/**
	 * 更新cmf_accessprepay
	 */
	public function update($id) {
		//prepare cms page data
            $CmfSystemLogData = array(
                'loginaction'      => $this->input->post('loginaction'),
                'DATE'             => $this->input->post('DATE'),
                'REMOTE_ADDR'      => $this->input->post('REMOTE_ADDR'),
                'HTTP_USER_AGENT'  => $this->input->post('HTTP_USER_AGENT'),
                'QUERY_STRING'     => $this->input->post('QUERY_STRING'),
                'QUERY_STRING'     => $this->input->post('SCRIPT_NAME'),
                'USERID'           => $this->input->post('USERID'),
                'SQLTEXT'          => $this->input->post('SQLTEXT')
            );

		if(!empty($CmfSystemLogData) && !empty($id)) {
			$update = $this->db->update('cmf_system_log' ,$CmfSystemLogData, array('system_log_id' => $id));
			return $update?true:false;
		} else {
			return false;
		}
	}

	/**
	 * 删除cmf_accessprepay
	 */
	
	public function delete($id) {
		$delete = $this->db->delete('cmf_system_log' , array('system_log_id' => $id));
		return $delete?true:false;
	}
}
?>