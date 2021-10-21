<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class CmfStockModel extends CI_Model {
	public function __construct() {
		parent::__construct();
	}

	/*
	 * 获取搜索选项并分页
	 */
	function getSearchPage($limit,$start,$searchvalue,$keyword) {
		$this->db->select('*');
		$this->db->from('cmf_stock');
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
		$this->db->from('cmf_stock');
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
			$query = $this->db->get_where('cmf_stock', array('ROWID' => $id));
			return $query->row_array();
		} else {
			$query = $this->db->get('cmf_stock');
			return $query->result_array();
		}
	}

	//获取分页
	public function get_systemlang($limit, $start) {
        $this->db->limit($limit, $start);
        $query = $this->db->get('cmf_stock');
        $rows = $query->result();
        return $rows;
    }

	/**
	* 获取总数
	*/
	public function get_count() {
        return $this->db->count_all_results('cmf_stock');
    }

	/**
	 * 插入cmf_stock
	 */
	public function insert() {
		//prepare post data
            $CmfStockData = array(
                'name'       => $this->input->post('name'),
				'id'         => $this->input->post('id'),
				'user_flag'  => $this->input->post('user_flag'),
				'user_id'    => $this->input->post('user_id'),
				'isClock'    => $this->input->post('isClock'),
				'leverno'    => $this->input->post('leverno'),
				'costtype'   => $this->input->post('costtype')
            );

		$insert = $this->db->insert('cmf_stock', $CmfStockData);
		if($insert) {
			return $this->db->insert_id();
		} else {
			return false;
		}
	}

	/**
	 * 更新cmf_stock
	 */
	public function update($id) {
		//prepare cms page data
            $CmfStockData = array(
                'name'       => $this->input->post('name'),
				'id'         => $this->input->post('id'),
				'user_flag'  => $this->input->post('user_flag'),
				'user_id'    => $this->input->post('user_id'),
				'isClock'    => $this->input->post('isClock'),
				'leverno'    => $this->input->post('leverno'),
				'costtype'   => $this->input->post('costtype')
            );

		if(!empty($CmfStockData) && !empty($id)) {
			$update = $this->db->update('cmf_stock' ,$CmfStockData, array('ROWID' => $id));
			return $update?true:false;
		} else {
			return false;
		}
	}

	/**
	 * 删除cmf_stock
	 */
	
	public function delete($id) {
		$delete = $this->db->delete('cmf_stock' , array('ROWID' => $id));
		return $delete?true:false;
	}
}
?>