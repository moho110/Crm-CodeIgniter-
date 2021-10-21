<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class CmfCrmServiceModel extends CI_Model {
	public function __construct() {
		parent::__construct();
	}

	/*
	 * 获取搜索选项并分页
	 */
	function getSearchPage($limit,$start,$searchvalue,$keyword) {
		$this->db->select('*');
		$this->db->from('cmf_crm_service');
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
		$this->db->from('cmf_crm_service');
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
			$query = $this->db->get_where('cmf_crm_service', array('Id' => $id));
			return $query->row_array();
		} else {
			$query = $this->db->get('cmf_crm_service');
			return $query->result_array();
		}
	}

	//获取分页
	public function get_systemlang($limit, $start) {
        $this->db->limit($limit, $start);
        $query = $this->db->get('cmf_crm_service');
        $rows = $query->result();
        return $rows;
    }

	/**
	* 获取总数
	*/
	public function get_count() {
        return $this->db->count_all_results('cmf_crm_service');
    }

	/**
	 * 插入cmf_crm_service
	 */
	public function insert() {
		//prepare post data
            $CmfCrmServiceData = array(
                'serviceId'          => $this->input->post('serviceId'),
				'serviceStage'       => $this->input->post('serviceStage'),
				'lastLimited'        => $this->input->post('lastLimited'),
				'serviceSummary'     => $this->input->post('serviceSummary'),
				'clientName'         => $this->input->post('clientName'),
				'linkMan'            => $this->input->post('linkMan'),
				'seriousDegree'      => $this->input->post('seriousDegree'),
				'solveMan'           => $this->input->post('solveMan'),
				'solveMethod'        => $this->input->post('solveMethod'),
				'solveStatus'        => $this->input->post('solveStatus'),
				'isExamine'          => $this->input->post('isExamine'),
				'examineMan'         => $this->input->post('examineMan'),
				'examineTime'        => $this->input->post('examineTime'),
				'note'               => $this->input->post('note'),
				'attach'             => $this->input->post('attach'),
				'creator'            => $this->input->post('creator'),
				'createTime'         => $this->input->post('createTime'),
				'relationSaleList'   => $this->input->post('relationSaleList'),
				'customTwo'          => $this->input->post('customTwo'),
				'customThree'        => $this->input->post('customThree'),
				'customFour'         => $this->input->post('customFour'),
				'customFive'         => $this->input->post('customFive')
            );

		$insert = $this->db->insert('cmf_crm_service', $CmfCrmServiceData);
		if($insert) {
			return $this->db->insert_id();
		} else {
			return false;
		}
	}

	/**
	 * 更新cmf_crm_service
	 */
	public function update($id) {
		//prepare cms page data
            $CmfCrmServiceData = array(
                'serviceId'          => $this->input->post('serviceId'),
				'serviceStage'       => $this->input->post('serviceStage'),
				'lastLimited'        => $this->input->post('lastLimited'),
				'serviceSummary'     => $this->input->post('serviceSummary'),
				'clientName'         => $this->input->post('clientName'),
				'linkMan'            => $this->input->post('linkMan'),
				'seriousDegree'      => $this->input->post('seriousDegree'),
				'solveMan'           => $this->input->post('solveMan'),
				'solveMethod'        => $this->input->post('solveMethod'),
				'solveStatus'        => $this->input->post('solveStatus'),
				'isExamine'          => $this->input->post('isExamine'),
				'examineMan'         => $this->input->post('examineMan'),
				'examineTime'        => $this->input->post('examineTime'),
				'note'               => $this->input->post('note'),
				'attach'             => $this->input->post('attach'),
				'creator'            => $this->input->post('creator'),
				'createTime'         => $this->input->post('createTime'),
				'relationSaleList'   => $this->input->post('relationSaleList'),
				'customTwo'          => $this->input->post('customTwo'),
				'customThree'        => $this->input->post('customThree'),
				'customFour'         => $this->input->post('customFour'),
				'customFive'         => $this->input->post('customFive')
            );

		if(!empty($CmfCrmServiceData) && !empty($id)) {
			$update = $this->db->update('cmf_crm_service' ,$CmfCrmServiceData, array('Id' => $id));
			return $update?true:false;
		} else {
			return false;
		}
	}

	/**
	 * 删除cmf_crm_service
	 */
	
	public function delete($id) {
		$delete = $this->db->delete('cmf_crm_service' , array('Id' => $id));
		return $delete?true:false;
	}
}
?>