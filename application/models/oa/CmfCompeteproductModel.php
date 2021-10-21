<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class CmfCompeteproductModel extends CI_Model {
	public function __construct() {
		parent::__construct();
	}

	/*
	 * 获取搜索选项并分页
	 */
	function getSearchPage($limit,$start,$searchvalue,$keyword) {
		$this->db->select('*');
		$this->db->from('cmf_competeproduct');
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
		$this->db->from('cmf_competeproduct');
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
			$query = $this->db->get_where('cmf_competeproduct', array('ROWID' => $id));
			return $query->row_array();
		} else {
			$query = $this->db->get('cmf_competeproduct');
			return $query->result_array();
		}
	}

	//获取分页
	public function get_systemlang($limit, $start) {
        $this->db->limit($limit, $start);
        $query = $this->db->get('cmf_competeproduct');
        $rows = $query->result();
        return $rows;
    }

	/**
	* 获取总数
	*/
	public function get_count() {
        return $this->db->count_all_results('cmf_competeproduct');
    }

	/**
	 * 插入cmf_competeproduct
	 */
	public function insert() {
		//prepare post data
            $CmfCompeteproductData = array(
                'user_id'     => $this->input->post('user_id'),
				'customerid'  => $this->input->post('customerid'),
				'productid'   => $this->input->post('productid'),
				'infofrom'    => $this->input->post('infofrom'),
				'comproduct'  => $this->input->post('comproduct'),
				'compname'    => $this->input->post('compname'),
				'compexcel'   => $this->input->post('compexcel'),
				'compdefect'  => $this->input->post('compdefect'),
				'compprice'   => $this->input->post('compprice'),
				'user_flag'   => $this->input->post('user_flag'),
				'fileaddress' => $this->input->post('fileaddress'),
				'createtime'  => $this->input->post('createtime')
            );

		$insert = $this->db->insert('cmf_competeproduct', $CmfCompeteproductData);
		if($insert) {
			return $this->db->insert_id();
		} else {
			return false;
		}
	}

	/**
	 * 更新cmf_competeproduct
	 */
	public function update($id) {
		//prepare cms page data
            $CmfCompeteproductData = array(
                'user_id'     => $this->input->post('user_id'),
				'customerid'  => $this->input->post('customerid'),
				'productid'   => $this->input->post('productid'),
				'infofrom'    => $this->input->post('infofrom'),
				'comproduct'  => $this->input->post('comproduct'),
				'compname'    => $this->input->post('compname'),
				'compexcel'   => $this->input->post('compexcel'),
				'compdefect'  => $this->input->post('compdefect'),
				'compprice'   => $this->input->post('compprice'),
				'user_flag'   => $this->input->post('user_flag'),
				'fileaddress' => $this->input->post('fileaddress'),
				'createtime'  => $this->input->post('createtime')
            );

		if(!empty($CmfCompeteproductData) && !empty($id)) {
			$update = $this->db->update('cmf_competeproduct' ,$CmfCompeteproductData, array('ROWID' => $id));
			return $update?true:false;
		} else {
			return false;
		}
	}

	/**
	 * 删除cmf_competeproduct
	 */
	
	public function delete($id) {
		$delete = $this->db->delete('cmf_competeproduct' , array('ROWID' => $id));
		return $delete?true:false;
	}
}
?>