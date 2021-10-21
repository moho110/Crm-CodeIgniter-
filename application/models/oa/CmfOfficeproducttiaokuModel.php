<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class CmfOfficeproducttiaokuModel extends CI_Model {
	public function __construct() {
		parent::__construct();
	}

	/*
	 * 获取搜索选项并分页
	 */
	function getSearchPage($limit,$start,$searchvalue,$keyword) {
		$this->db->select('*');
		$this->db->from('cmf_officeproducttiaoku');
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
		$this->db->from('cmf_officeproducttiaoku');
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
			$query = $this->db->get_where('cmf_officeproducttiaoku', array('ID' => $id));
			return $query->row_array();
		} else {
			$query = $this->db->get('cmf_officeproducttiaoku');
			return $query->result_array();
		}
	}

	//获取分页
	public function get_systemlang($limit, $start) {
        $this->db->limit($limit, $start);
        $query = $this->db->get('cmf_officeproducttiaoku');
        $rows = $query->result();
        return $rows;
    }

	/**
	* 获取总数
	*/
	public function get_count() {
        return $this->db->count_all_results('cmf_officeproducttiaoku');
    }

	/**
	 * 插入cmf_officeproducttiaoku
	 */
	public function insert() {
		//prepare post data
            $CmfOfficeproducttiaokuData = array(
                'officeName'           => $this->input->post('officeName'),
				'officeNo'             => $this->input->post('officeNo'),
				'transferOutWarehouse' => $this->input->post('transferOutWarehouse'),
				'transferInWarehouse'  => $this->input->post('transferInWarehouse'),
				'transferQuantity'     => $this->input->post('transferQuantity'),
				'staffMan'             => $this->input->post('staffMan'),
				'approvalMan'          => $this->input->post('approvalMan'),
				'memo'                 => $this->input->post('memo'),
				'creator'              => $this->input->post('creator'),
				'creatTime'            => $this->input->post('creatTime'),
				'price'                => $this->input->post('price'),
				'quantity'             => $this->input->post('quantity'),
				'count'                => $this->input->post('count'),
				'isExamine'            => $this->input->post('isExamine'),
				'exTime'               => $this->input->post('exTime')
            );

		$insert = $this->db->insert('cmf_officeproducttiaoku', $CmfOfficeproducttiaokuData);
		if($insert) {
			return $this->db->insert_id();
		} else {
			return false;
		}
	}

	/**
	 * 更新cmf_officeproducttiaoku
	 */
	public function update($id) {
		//prepare cms page data
            $CmfOfficeproducttiaokuData = array(
                'officeName'           => $this->input->post('officeName'),
				'officeNo'             => $this->input->post('officeNo'),
				'transferOutWarehouse' => $this->input->post('transferOutWarehouse'),
				'transferInWarehouse'  => $this->input->post('transferInWarehouse'),
				'transferQuantity'     => $this->input->post('transferQuantity'),
				'staffMan'             => $this->input->post('staffMan'),
				'approvalMan'          => $this->input->post('approvalMan'),
				'memo'                 => $this->input->post('memo'),
				'creator'              => $this->input->post('creator'),
				'creatTime'            => $this->input->post('creatTime'),
				'price'                => $this->input->post('price'),
				'quantity'             => $this->input->post('quantity'),
				'count'                => $this->input->post('count'),
				'isExamine'            => $this->input->post('isExamine'),
				'exTime'               => $this->input->post('exTime')
            );

		if(!empty($CmfOfficeproducttiaokuData) && !empty($id)) {
			$update = $this->db->update('cmf_officeproducttiaoku' ,$CmfOfficeproducttiaokuData, array('ID' => $id));
			return $update?true:false;
		} else {
			return false;
		}
	}

	/**
	 * 删除cmf_officeproducttiaoku
	 */
	
	public function delete($id) {
		$delete = $this->db->delete('cmf_officeproducttiaoku' , array('ID' => $id));
		return $delete?true:false;
	}
}
?>