<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class CmfAffairModel extends CI_Model {
	public function __construct() {
		parent::__construct();
	}

	/*
	 * 获取搜索选项并分页
	 */
	function getSearchPage($limit,$start,$searchvalue,$keyword) {
		$this->db->select('*');
		$this->db->from('cmf_affair');
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
		$this->db->from('cmf_affair');
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
			$query = $this->db->get_where('cmf_affair', array('AFF_ID' => $id));
			return $query->row_array();
		} else {
			$query = $this->db->get('cmf_affair');
			return $query->result_array();
		}
	}

	//获取分页
	public function get_systemlang($limit, $start) {
        $this->db->limit($limit, $start);
        $query = $this->db->get('cmf_affair');
        $rows = $query->result();
        return $rows;
    }

	/**
	* 获取总数
	*/
	public function get_count() {
        return $this->db->count_all_results('cmf_affair');
    }

	/**
	 * 插入cmf_affair
	 */
	public function insert() {
		//prepare post data
            $CmfAccessprepayData = array(
                'USER_ID'          => $this->input->post('USER_ID'),
				'BEGIN_TIME'       => $this->input->post('BEGIN_TIME'),
				'END_TIME'         => $this->input->post('END_TIME'),
				'TYPE'             => $this->input->post('TYPE'),
				'REMIND_DATE'      => $this->input->post('REMIND_DATE'),
				'REMIND_TIME'      => $this->input->post('REMIND_TIME'),
				'CONTENT'          => $this->input->post('CONTENT'),
				'LAST_REMIND'      => $this->input->post('LAST_REMIND'),
				'SMS2_REMIND'      => $this->input->post('SMS2_REMIND'),
				'LAST_SMS2_REMIND' => $this->input->post('LAST_SMS2_REMIND'),
				'MANAGER_ID'       => $this->input->post('MANAGER_ID')
            );

		$insert = $this->db->insert('cmf_affair', $CmfAccessprepayData);
		if($insert) {
			return $this->db->insert_id();
		} else {
			return false;
		}
	}

	/**
	 * 更新cmf_affair
	 */
	public function update($id) {
		//prepare cms page data
            $CmfAccessbankData = array(
                'USER_ID'          => $this->input->post('USER_ID'),
				'BEGIN_TIME'       => $this->input->post('BEGIN_TIME'),
				'END_TIME'         => $this->input->post('END_TIME'),
				'TYPE'             => $this->input->post('TYPE'),
				'REMIND_DATE'      => $this->input->post('REMIND_DATE'),
				'REMIND_TIME'      => $this->input->post('REMIND_TIME'),
				'CONTENT'          => $this->input->post('CONTENT'),
				'LAST_REMIND'      => $this->input->post('LAST_REMIND'),
				'SMS2_REMIND'      => $this->input->post('SMS2_REMIND'),
				'LAST_SMS2_REMIND' => $this->input->post('LAST_SMS2_REMIND'),
				'MANAGER_ID'       => $this->input->post('MANAGER_ID')
            );

		if(!empty($CmfAccessbankData) && !empty($id)) {
			$update = $this->db->update('cmf_affair' ,$CmfAccessbankData, array('AFF_ID' => $id));
			return $update?true:false;
		} else {
			return false;
		}
	}

	/**
	 * 删除cmf_affair
	 */
	
	public function delete($id) {
		$delete = $this->db->delete('cmf_affair' , array('AFF_ID' => $id));
		return $delete?true:false;
	}
}
?>