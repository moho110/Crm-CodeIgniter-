<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class CmfSupplyproductModel extends CI_Model {
	public function __construct() {
		parent::__construct();
	}

	/*
	 * 获取搜索选项并分页
	 */
	function getSearchPage($limit,$start,$searchvalue,$keyword) {
		$this->db->select('*');
		$this->db->from('cmf_supplyproduct');
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
		$this->db->from('cmf_supplyproduct');
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
			$query = $this->db->get_where('cmf_supplyproduct', array('rowid' => $id));
			return $query->row_array();
		} else {
			$query = $this->db->get('cmf_supplyproduct');
			return $query->result_array();
		}
	}

	//获取分页
	public function get_systemlang($limit, $start) {
        $this->db->limit($limit, $start);
        $query = $this->db->get('cmf_supplyproduct');
        $rows = $query->result();
        return $rows;
    }

	/**
	* 获取总数
	*/
	public function get_count() {
        return $this->db->count_all_results('cmf_supplyproduct');
    }

	/**
	 * 插入cmf_accessprepay
	 */
	public function insert() {
		//prepare post data
            $CmfSupplyproductData = array(
                'user_id'       => $this->input->post('user_id'),
                'supplyid'      => $this->input->post('supplyid'),
                'productid'     => $this->input->post('productid'),
                'productprice'  => $this->input->post('productprice'),
                'pricedate'     => $this->input->post('pricedate'),
                'explianstr'    => $this->input->post('explianstr'),
                'user_flag'     => $this->input->post('user_flag'),
                'cycle'         => $this->input->post('cycle'),
                'fujian'        => $this->input->post('fujian')
            );

		$insert = $this->db->insert('cmf_supplyproduct', $CmfSupplyproductData);
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
            $CmfSupplyproductData = array(
                'user_id'       => $this->input->post('user_id'),
                'supplyid'      => $this->input->post('supplyid'),
                'productid'     => $this->input->post('productid'),
                'productprice'  => $this->input->post('productprice'),
                'pricedate'     => $this->input->post('pricedate'),
                'explianstr'    => $this->input->post('explianstr'),
                'user_flag'     => $this->input->post('user_flag'),
                'cycle'         => $this->input->post('cycle'),
                'fujian'        => $this->input->post('fujian')
            );

		if(!empty($CmfSupplyproductData) && !empty($id)) {
			$update = $this->db->update('cmf_supplyproduct' ,$CmfSupplyproductData, array('rowid' => $id));
			return $update?true:false;
		} else {
			return false;
		}
	}

	/**
	 * 删除cmf_accessprepay
	 */
	
	public function delete($id) {
		$delete = $this->db->delete('cmf_supplyproduct' , array('rowid' => $id));
		return $delete?true:false;
	}
}
?>