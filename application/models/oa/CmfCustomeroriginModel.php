<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class CmfCustomeroriginModel extends CI_Model {
	public function __construct() {
		parent::__construct();
	}

	/*
	 * 获取搜索选项并分页
	 */
	function getSearchPage($limit,$start,$searchvalue,$keyword) {
		$this->db->select('*');
		$this->db->from('cmf_customerorigin');
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
		$this->db->from('cmf_customerorigin');
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
			$query = $this->db->get_where('cmf_customerorigin', array('ROWID' => $id));
			return $query->row_array();
		} else {
			$query = $this->db->get('cmf_customerorigin');
			return $query->result_array();
		}
	}

	//获取分页
	public function get_systemlang($limit, $start) {
        $this->db->limit($limit, $start);
        $query = $this->db->get('cmf_customerorigin');
        $rows = $query->result();
        return $rows;
    }

	/**
	* 获取总数
	*/
	public function get_count() {
        return $this->db->count_all_results('cmf_customerorigin');
    }

	/**
	 * 插入cmf_customerorigin
	 */
	public function insert() {
		//prepare post data
            $CmfCustomeroriginData = array(
                'name'      => $this->input->post('name'),
				'user_id'   => $this->input->post('user_id'),
				'code'      => $this->input->post('code'),
				'user_flag' => $this->input->post('user_flag')
            );

		$insert = $this->db->insert('cmf_customerorigin', $CmfCustomeroriginData);
		if($insert) {
			return $this->db->insert_id();
		} else {
			return false;
		}
	}

	/**
	 * 更新cmf_customerorigin
	 */
	public function update($id) {
		//prepare cms page data
            $CmfCustomeroriginData = array(
                'name'      => $this->input->post('name'),
				'user_id'   => $this->input->post('user_id'),
				'code'      => $this->input->post('code'),
				'user_flag' => $this->input->post('user_flag')
            );

		if(!empty($CmfCustomeroriginData) && !empty($id)) {
			$update = $this->db->update('cmf_customerorigin' ,$CmfCustomeroriginData, array('ROWID' => $id));
			return $update?true:false;
		} else {
			return false;
		}
	}

	/**
	 * 删除cmf_customerorigin
	 */
	
	public function delete($id) {
		$delete = $this->db->delete('cmf_customerorigin' , array('ROWID' => $id));
		return $delete?true:false;
	}
}
?>