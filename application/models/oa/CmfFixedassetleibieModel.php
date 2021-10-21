<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class CmfFixedassetleibieModel extends CI_Model {
	public function __construct() {
		parent::__construct();
	}

	/*
	 * 获取搜索选项并分页
	 */
	function getSearchPage($limit,$start,$searchvalue,$keyword) {
		$this->db->select('*');
		$this->db->from('cmf_fixedassetleibie');
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
		$this->db->from('cmf_fixedassetleibie');
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
			$query = $this->db->get_where('cmf_fixedassetleibie', array('ID' => $id));
			return $query->row_array();
		} else {
			$query = $this->db->get('cmf_fixedassetleibie');
			return $query->result_array();
		}
	}

	//获取分页
	public function get_systemlang($limit, $start) {
        $this->db->limit($limit, $start);
        $query = $this->db->get('cmf_fixedassetleibie');
        $rows = $query->result();
        return $rows;
    }

	/**
	* 获取总数
	*/
	public function get_count() {
        return $this->db->count_all_results('cmf_fixedassetleibie');
    }

	/**
	 * 插入cmf_fixedassetleibie
	 */
	public function insert() {
		//prepare post data
            $CmfFixedassetleibieData = array(
                'Name'         => $this->input->post('Name')
            );

		$insert = $this->db->insert('cmf_fixedassetleibie', $CmfFixedassetleibieData);
		if($insert) {
			return $this->db->insert_id();
		} else {
			return false;
		}
	}

	/**
	 * 更新cmf_fixedassetleibie
	 */
	public function update($id) {
		//prepare cms page data
            $CmfFixedassetleibieData = array(
                'Name'         => $this->input->post('Name')
            );

		if(!empty($CmfFixedassetleibieData) && !empty($id)) {
			$update = $this->db->update('cmf_fixedassetleibie' ,$CmfFixedassetleibieData, array('ID' => $id));
			return $update?true:false;
		} else {
			return false;
		}
	}

	/**
	 * 删除cmf_fixedassetleibie
	 */
	
	public function delete($id) {
		$delete = $this->db->delete('cmf_fixedassetleibie' , array('ID' => $id));
		return $delete?true:false;
	}
}
?>