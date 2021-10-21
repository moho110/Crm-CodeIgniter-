<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class CmfOfficeproductcangkuModel extends CI_Model {
	public function __construct() {
		parent::__construct();
	}

	/*
	 * 获取搜索选项并分页
	 */
	function getSearchPage($limit,$start,$searchvalue,$keyword) {
		$this->db->select('*');
		$this->db->from('cmf_officeproductcangku');
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
		$this->db->from('cmf_officeproductcangku');
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
			$query = $this->db->get_where('cmf_officeproductcangku', array('ID' => $id));
			return $query->row_array();
		} else {
			$query = $this->db->get('cmf_officeproductcangku');
			return $query->result_array();
		}
	}

	//获取分页
	public function get_systemlang($limit, $start) {
        $this->db->limit($limit, $start);
        $query = $this->db->get('cmf_officeproductcangku');
        $rows = $query->result();
        return $rows;
    }

	/**
	* 获取总数
	*/
	public function get_count() {
        return $this->db->count_all_results('cmf_officeproductcangku');
    }

	/**
	 * 插入cmf_officeproductcangku
	 */
	public function insert() {
		//prepare post data
            $CmfOfficeproductcangkuData = array(
                'warehouseName'      => $this->input->post('warehouseName'),
				'warehouseMan'       => $this->input->post('warehouseMan'),
				'telphone'           => $this->input->post('telphone'),
				'warehouseAddress'   => $this->input->post('warehouseAddress'),
				'memo'               => $this->input->post('memo')
            );

		$insert = $this->db->insert('cmf_officeproductcangku', $CmfOfficeproductcangkuData);
		if($insert) {
			return $this->db->insert_id();
		} else {
			return false;
		}
	}

	/**
	 * 更新cmf_officeproductcangku
	 */
	public function update($id) {
		//prepare cms page data
            $CmfOfficeproductcangkuData = array(
                'warehouseName'      => $this->input->post('warehouseName'),
				'warehouseMan'       => $this->input->post('warehouseMan'),
				'telphone'           => $this->input->post('telphone'),
				'warehouseAddress'   => $this->input->post('warehouseAddress'),
				'memo'               => $this->input->post('memo')
            );

		if(!empty($CmfOfficeproductcangkuData) && !empty($id)) {
			$update = $this->db->update('cmf_officeproductcangku' ,$CmfOfficeproductcangkuData, array('ID' => $id));
			return $update?true:false;
		} else {
			return false;
		}
	}

	/**
	 * 删除cmf_officeproductcangku
	 */
	
	public function delete($id) {
		$delete = $this->db->delete('cmf_officeproductcangku' , array('ID' => $id));
		return $delete?true:false;
	}
}
?>