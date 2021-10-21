<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class CmfWuBooleanModel extends CI_Model {
	public function __construct() {
		parent::__construct();
	}

	/*
	 * 获取搜索选项并分页
	 */
	function getSearchPage($limit,$start,$searchvalue,$keyword) {
		$this->db->select('*');
		$this->db->from('cmf_wu_boolean');
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
		$this->db->from('cmf_wu_boolean');
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
			$query = $this->db->get_where('cmf_wu_boolean', array('id' => $id));
			return $query->row_array();
		} else {
			$query = $this->db->get('cmf_wu_boolean');
			return $query->result_array();
		}
	}

	//获取分页
	public function get_systemlang($limit, $start) {
        $this->db->limit($limit, $start);
        $query = $this->db->get('cmf_wu_boolean');
        $rows = $query->result();
        return $rows;
    }

	/**
	* 获取总数
	*/
	public function get_count() {
        return $this->db->count_all_results('cmf_wu_boolean');
    }

	/**
	 * 插入cmf_accessprepay
	 */
	public function insert() {
		//prepare post data
            $CmfWuBooleanData = array(
                'yesorno'     => $this->input->post('yesorno'),
                'memo'        => $this->input->post('memo'),
                'creator'     => $this->input->post('creator'),
                'createTime'  => $this->input->post('createTime')
            );

		$insert = $this->db->insert('cmf_wu_boolean', $CmfWuBooleanData);
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
            $CmfWuBooleanData = array(
                'yesorno'     => $this->input->post('yesorno'),
                'memo'        => $this->input->post('memo'),
                'creator'     => $this->input->post('creator'),
                'createTime'  => $this->input->post('createTime')
            );

		if(!empty($CmfWuBooleanData) && !empty($id)) {
			$update = $this->db->update('cmf_wu_boolean' ,$CmfWuBooleanData, array('id' => $id));
			return $update?true:false;
		} else {
			return false;
		}
	}

	/**
	 * 删除cmf_accessprepay
	 */
	
	public function delete($id) {
		$delete = $this->db->delete('cmf_wu_boolean' , array('id' => $id));
		return $delete?true:false;
	}
}
?>