<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class CmfCustomerbelongModel extends CI_Model {
	public function __construct() {
		parent::__construct();
	}

	/*
	 * 获取搜索选项并分页
	 */
	function getSearchPage($limit,$start,$searchvalue,$keyword) {
		$this->db->select('*');
		$this->db->from('cmf_customerbelong');
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
		$this->db->from('cmf_customerbelong');
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
			$query = $this->db->get_where('cmf_customerbelong', array('id' => $id));
			return $query->row_array();
		} else {
			$query = $this->db->get('cmf_customerbelong');
			return $query->result_array();
		}
	}

	//获取分页
	public function get_systemlang($limit, $start) {
        $this->db->limit($limit, $start);
        $query = $this->db->get('cmf_customerbelong');
        $rows = $query->result();
        return $rows;
    }

	/**
	* 获取总数
	*/
	public function get_count() {
        return $this->db->count_all_results('cmf_customerbelong');
    }

	/**
	 * 插入cmf_customerbelong
	 */
	public function insert() {
		//prepare post data
            $CmfCustomerbelongData = array(
                'name'         => $this->input->post('name')
            );

		$insert = $this->db->insert('cmf_customerbelong', $CmfCustomerbelongData);
		if($insert) {
			return $this->db->insert_id();
		} else {
			return false;
		}
	}

	/**
	 * 更新cmf_customerbelong
	 */
	public function update($id) {
		//prepare cms page data
            $CmfCustomerbelongData = array(
                'name'         => $this->input->post('name')
            );

		if(!empty($CmfCustomerbelongData) && !empty($id)) {
			$update = $this->db->update('cmf_customerbelong' ,$CmfCustomerbelongData, array('id' => $id));
			return $update?true:false;
		} else {
			return false;
		}
	}

	/**
	 * 删除cmf_customerbelong
	 */
	
	public function delete($id) {
		$delete = $this->db->delete('cmf_customerbelong' , array('id' => $id));
		return $delete?true:false;
	}
}
?>