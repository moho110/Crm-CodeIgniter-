<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class CmfImportantModel extends CI_Model {
	public function __construct() {
		parent::__construct();
	}

	/*
	 * 获取搜索选项并分页
	 */
	function getSearchPage($limit,$start,$searchvalue,$keyword) {
		$this->db->select('*');
		$this->db->from('cmf_important');
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
		$this->db->from('cmf_important');
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
			$query = $this->db->get_where('cmf_important', array('id' => $id));
			return $query->row_array();
		} else {
			$query = $this->db->get('cmf_important');
			return $query->result_array();
		}
	}

	//获取分页
	public function get_systemlang($limit, $start) {
        $this->db->limit($limit, $start);
        $query = $this->db->get('cmf_important');
        $rows = $query->result();
        return $rows;
    }

	/**
	* 获取总数
	*/
	public function get_count() {
        return $this->db->count_all_results('cmf_important');
    }

	/**
	 * 插入cmf_important
	 */
	public function insert() {
		//prepare post data
            $CmfImportantData = array(
                'name'         => $this->input->post('name')
            );

		$insert = $this->db->insert('cmf_important', $CmfImportantData);
		if($insert) {
			return $this->db->insert_id();
		} else {
			return false;
		}
	}

	/**
	 * 更新cmf_important
	 */
	public function update($id) {
		//prepare cms page data
            $CmfImportantData = array(
                'name'         => $this->input->post('name')
            );

		if(!empty($CmfImportantData) && !empty($id)) {
			$update = $this->db->update('cmf_important' ,$CmfImportantData, array('id' => $id));
			return $update?true:false;
		} else {
			return false;
		}
	}

	/**
	 * 删除cmf_important
	 */
	
	public function delete($id) {
		$delete = $this->db->delete('cmf_important' , array('id' => $id));
		return $delete?true:false;
	}
}
?>