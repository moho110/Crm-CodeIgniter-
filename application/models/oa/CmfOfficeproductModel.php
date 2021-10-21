<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class CmfOfficeproductModel extends CI_Model {
	public function __construct() {
		parent::__construct();
	}

	/*
	 * 获取搜索选项并分页
	 */
	function getSearchPage($limit,$start,$searchvalue,$keyword) {
		$this->db->select('*');
		$this->db->from('cmf_officeproduct');
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
		$this->db->from('cmf_officeproduct');
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
			$query = $this->db->get_where('cmf_officeproduct', array('id' => $id));
			return $query->row_array();
		} else {
			$query = $this->db->get('cmf_officeproduct');
			return $query->result_array();
		}
	}

	//获取分页
	public function get_systemlang($limit, $start) {
        $this->db->limit($limit, $start);
        $query = $this->db->get('cmf_officeproduct');
        $rows = $query->result();
        return $rows;
    }

	/**
	* 获取总数
	*/
	public function get_count() {
        return $this->db->count_all_results('cmf_officeproduct');
    }

	/**
	 * 插入cmf_officeproduct
	 */
	public function insert() {
		//prepare post data
            $CmfOfficeproductData = array(
                'officeName'     => $this->input->post('officeName'),
				'officeNo'       => $this->input->post('officeNo'),
				'officeType'     => $this->input->post('officeType'),
				'specSize'       => $this->input->post('specSize'),
				'unit'           => $this->input->post('unit'),
				'quantity'       => $this->input->post('quantity'),
				'warehouseInfo'  => $this->input->post('warehouseInfo'),
				'price'          => $this->input->post('price'),
				'totalCount'     => $this->input->post('totalCount'),
				'brand'          => $this->input->post('brand'),
				'savedPlace'     => $this->input->post('savedPlace'),
				'memo'           => $this->input->post('memo'),
				'creator'        => $this->input->post('creator'),
				'createTime'     => $this->input->post('createTime')
            );

		$insert = $this->db->insert('cmf_officeproduct', $CmfOfficeproductData);
		if($insert) {
			return $this->db->insert_id();
		} else {
			return false;
		}
	}

	/**
	 * 更新cmf_officeproduct
	 */
	public function update($id) {
		//prepare cms page data
            $CmfOfficeproductData = array(
                'officeName'     => $this->input->post('officeName'),
				'officeNo'       => $this->input->post('officeNo'),
				'officeType'     => $this->input->post('officeType'),
				'specSize'       => $this->input->post('specSize'),
				'unit'           => $this->input->post('unit'),
				'quantity'       => $this->input->post('quantity'),
				'warehouseInfo'  => $this->input->post('warehouseInfo'),
				'price'          => $this->input->post('price'),
				'totalCount'     => $this->input->post('totalCount'),
				'brand'          => $this->input->post('brand'),
				'savedPlace'     => $this->input->post('savedPlace'),
				'memo'           => $this->input->post('memo'),
				'creator'        => $this->input->post('creator'),
				'createTime'     => $this->input->post('createTime')
            );

		if(!empty($CmfOfficeproductData) && !empty($id)) {
			$update = $this->db->update('cmf_officeproduct' ,$CmfOfficeproductData, array('ID' => $id));
			return $update?true:false;
		} else {
			return false;
		}
	}

	/**
	 * 删除cmf_officeproduct
	 */
	
	public function delete($id) {
		$delete = $this->db->delete('cmf_officeproduct' , array('ID' => $id));
		return $delete?true:false;
	}
}
?>