<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class CmfBuyplanstateModel extends CI_Model {
	public function __construct() {
		parent::__construct();
	}

	/*
	 * 获取搜索选项并分页
	 */
	function getSearchPage($limit,$start,$searchvalue,$keyword) {
		$this->db->select('*');
		$this->db->from('cmf_buyplanstate');
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
		$this->db->from('cmf_buyplanstate');
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
			$query = $this->db->get_where('cmf_buyplanstate', array('id' => $id));
			return $query->row_array();
		} else {
			$query = $this->db->get('cmf_buyplanstate');
			return $query->result_array();
		}
	}

	//获取分页
	public function get_systemlang($limit, $start) {
        $this->db->limit($limit, $start);
        $query = $this->db->get('cmf_buyplanstate');
        $rows = $query->result();
        return $rows;
    }

	/**
	* 获取总数
	*/
	public function get_count() {
        return $this->db->count_all_results('cmf_buyplanstate');
    }

	/**
	 * 插入cmf_buyplanstate
	 */
	public function insert() {
		//prepare post data
            $CmfBuyplanstateData = array(
                'name'         => $this->input->post('name')
            );

		$insert = $this->db->insert('cmf_buyplanstate', $CmfBuyplanstateData);
		if($insert) {
			return $this->db->insert_id();
		} else {
			return false;
		}
	}

	/**
	 * 更新cmf_buyplanstate
	 */
	public function update($id) {
		//prepare cms page data
            $CmfBuyplanstateData = array(
                'name'         => $this->input->post('name')
            );

		if(!empty($CmfBuyplanstateData) && !empty($id)) {
			$update = $this->db->update('cmf_buyplanstate' ,$CmfBuyplanstateData, array('id' => $id));
			return $update?true:false;
		} else {
			return false;
		}
	}

	/**
	 * 删除cmf_buyplanstate
	 */
	
	public function delete($id) {
		$delete = $this->db->delete('cmf_buyplanstate' , array('id' => $id));
		return $delete?true:false;
	}
}
?>