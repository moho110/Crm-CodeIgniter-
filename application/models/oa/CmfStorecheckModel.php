<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class CmfStorecheckModel extends CI_Model {
	public function __construct() {
		parent::__construct();
	}

	/*
	 * 获取搜索选项并分页
	 */
	function getSearchPage($limit,$start,$searchvalue,$keyword) {
		$this->db->select('*');
		$this->db->from('cmf_storecheck');
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
		$this->db->from('cmf_storecheck');
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
			$query = $this->db->get_where('cmf_storecheck', array('billid' => $id));
			return $query->row_array();
		} else {
			$query = $this->db->get('cmf_storecheck');
			return $query->result_array();
		}
	}

	//获取分页
	public function get_systemlang($limit, $start) {
        $this->db->limit($limit, $start);
        $query = $this->db->get('cmf_storecheck');
        $rows = $query->result();
        return $rows;
    }

	/**
	* 获取总数
	*/
	public function get_count() {
        return $this->db->count_all_results('cmf_storecheck');
    }

	/**
	 * 插入cmf_accessprepay
	 */
	public function insert() {
		//prepare post data
            $CmfStorecheckData = array(
                'zhuti'       => $this->input->post('zhuti'),
                'storeid'     => $this->input->post('storeid'),
                'totalmoney'  => $this->input->post('totalmoney'),
                'state'       => $this->input->post('state'),
                'createman'   => $this->input->post('createman'),
                'createtime'  => $this->input->post('createtime'),
                'memo'        => $this->input->post('memo')
            );

		$insert = $this->db->insert('cmf_storecheck', $CmfStorecheckData);
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
            $CmfStorecheckData = array(
                'zhuti'       => $this->input->post('zhuti'),
                'storeid'     => $this->input->post('storeid'),
                'totalmoney'  => $this->input->post('totalmoney'),
                'state'       => $this->input->post('state'),
                'createman'   => $this->input->post('createman'),
                'createtime'  => $this->input->post('createtime'),
                'memo'        => $this->input->post('memo')
            );

		if(!empty($CmfStorecheckData) && !empty($id)) {
			$update = $this->db->update('cmf_storecheck' ,$CmfStorecheckData, array('billid' => $id));
			return $update?true:false;
		} else {
			return false;
		}
	}

	/**
	 * 删除cmf_accessprepay
	 */
	
	public function delete($id) {
		$delete = $this->db->delete('cmf_storecheck' , array('billid' => $id));
		return $delete?true:false;
	}
}
?>