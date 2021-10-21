<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class CmfOfficeproductoutModel extends CI_Model {
	public function __construct() {
		parent::__construct();
	}

	/*
	 * 获取搜索选项并分页
	 */
	function getSearchPage($limit,$start,$searchvalue,$keyword) {
		$this->db->select('*');
		$this->db->from('cmf_officeproductout');
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
		$this->db->from('cmf_officeproductout');
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
			$query = $this->db->get_where('cmf_officeproductout', array('ID' => $id));
			return $query->row_array();
		} else {
			$query = $this->db->get('cmf_officeproductout');
			return $query->result_array();
		}
	}

	//获取分页
	public function get_systemlang($limit, $start) {
        $this->db->limit($limit, $start);
        $query = $this->db->get('cmf_officeproductout');
        $rows = $query->result();
        return $rows;
    }

	/**
	* 获取总数
	*/
	public function get_count() {
        return $this->db->count_all_results('cmf_officeproductout');
    }

	/**
	 * 插入cmf_officeproductout
	 */
	public function insert() {
		//prepare post data
            $CmfOfficeproductoutData = array(
                'officeName'       => $this->input->post('officeName'),
				'officeNo'         => $this->input->post('officeNo'),
				'outWarehouse'     => $this->input->post('outWarehouse'),
				'outQuantity'      => $this->input->post('outQuantity'),
				'applyMan'         => $this->input->post('applyMan'),
				'outStatus'        => $this->input->post('outStatus'),
				'isExamine'        => $this->input->post('isExamine'),
				'approvalMan'      => $this->input->post('approvalMan'),
				'memo'             => $this->input->post('memo'),
				'creator'          => $this->input->post('creator'),
				'createTime'       => $this->input->post('createTime'),
				'price'            => $this->input->post('price'),
				'quantity'         => $this->input->post('quantity'),
				'count'            => $this->input->post('count'),
				'returnLimited'    => $this->input->post('returnLimited'),
				'isReturn'         => $this->input->post('isReturn'),
				'returnReiceiver'  => $this->input->post('returnReiceiver'),
				'realReturnDate'   => $this->input->post('realReturnDate'),
				'examineTime'      => $this->input->post('examineTime')
            );

		$insert = $this->db->insert('cmf_officeproductout', $CmfOfficeproductoutData);
		if($insert) {
			return $this->db->insert_id();
		} else {
			return false;
		}
	}

	/**
	 * 更新cmf_officeproductout
	 */
	public function update($id) {
		//prepare cms page data
            $CmfOfficeproductoutData = array(
                'officeName'       => $this->input->post('officeName'),
				'officeNo'         => $this->input->post('officeNo'),
				'outWarehouse'     => $this->input->post('outWarehouse'),
				'outQuantity'      => $this->input->post('outQuantity'),
				'applyMan'         => $this->input->post('applyMan'),
				'outStatus'        => $this->input->post('outStatus'),
				'isExamine'        => $this->input->post('isExamine'),
				'approvalMan'      => $this->input->post('approvalMan'),
				'memo'             => $this->input->post('memo'),
				'creator'          => $this->input->post('creator'),
				'createTime'       => $this->input->post('createTime'),
				'price'            => $this->input->post('price'),
				'quantity'         => $this->input->post('quantity'),
				'count'            => $this->input->post('count'),
				'returnLimited'    => $this->input->post('returnLimited'),
				'isReturn'         => $this->input->post('isReturn'),
				'returnReiceiver'  => $this->input->post('returnReiceiver'),
				'realReturnDate'   => $this->input->post('realReturnDate'),
				'examineTime'      => $this->input->post('examineTime')
            );

		if(!empty($CmfOfficeproductoutData) && !empty($id)) {
			$update = $this->db->update('cmf_officeproductout' ,$CmfOfficeproductoutData, array('ID' => $id));
			return $update?true:false;
		} else {
			return false;
		}
	}

	/**
	 * 删除cmf_officeproductout
	 */
	
	public function delete($id) {
		$delete = $this->db->delete('cmf_officeproductout' , array('ID' => $id));
		return $delete?true:false;
	}
}
?>