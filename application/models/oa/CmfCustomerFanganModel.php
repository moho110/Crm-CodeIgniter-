<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class CmfCustomerFanganModel extends CI_Model {
	public function __construct() {
		parent::__construct();
	}

	/*
	 * 获取搜索选项并分页
	 */
	function getSearchPage($limit,$start,$searchvalue,$keyword) {
		$this->db->select('*');
		$this->db->from('cmf_customer_fangan');
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
		$this->db->from('cmf_customer_fangan');
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
			$query = $this->db->get_where('cmf_customer_fangan', array('id' => $id));
			return $query->row_array();
		} else {
			$query = $this->db->get('cmf_customer_fangan');
			return $query->result_array();
		}
	}

	//获取分页
	public function get_systemlang($limit, $start) {
        $this->db->limit($limit, $start);
        $query = $this->db->get('cmf_customer_fangan');
        $rows = $query->result();
        return $rows;
    }

	/**
	* 获取总数
	*/
	public function get_count() {
        return $this->db->count_all_results('cmf_customer_fangan');
    }

	/**
	 * 插入cmf_customer_fangan
	 */
	public function insert() {
		//prepare post data
            $CmfCustomerFanganData = array(
                'zhuti'          => $this->input->post('zhuti'),
				'customerid'     => $this->input->post('customerid'),
				'chanceid'       => $this->input->post('chanceid'),
				'content'        => $this->input->post('content'),
				'fankui'         => $this->input->post('fankui'),
				'createman'      => $this->input->post('createman'),
				'createtime'     => $this->input->post('createtime'),
				'fujian'         => $this->input->post('fujian')
            );

		$insert = $this->db->insert('cmf_customer_fangan', $CmfCustomerFanganData);
		if($insert) {
			return $this->db->insert_id();
		} else {
			return false;
		}
	}

	/**
	 * 更新cmf_customer_fangan
	 */
	public function update($id) {
		//prepare cms page data
            $CmfCustomerFanganData = array(
                'zhuti'          => $this->input->post('zhuti'),
				'customerid'     => $this->input->post('customerid'),
				'chanceid'       => $this->input->post('chanceid'),
				'content'        => $this->input->post('content'),
				'fankui'         => $this->input->post('fankui'),
				'createman'      => $this->input->post('createman'),
				'createtime'     => $this->input->post('createtime'),
				'fujian'         => $this->input->post('fujian')
            );

		if(!empty($CmfCustomerFanganData) && !empty($id)) {
			$update = $this->db->update('cmf_customer_fangan' ,$CmfCustomerFanganData, array('id' => $id));
			return $update?true:false;
		} else {
			return false;
		}
	}

	/**
	 * 删除cmf_customer_fangan
	 */
	
	public function delete($id) {
		$delete = $this->db->delete('cmf_customer_fangan' , array('id' => $id));
		return $delete?true:false;
	}
}
?>