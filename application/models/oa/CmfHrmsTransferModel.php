<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class CmfHrmsTransferModel extends CI_Model {
	public function __construct() {
		parent::__construct();
	}

	/*
	 * 获取搜索选项并分页
	 */
	function getSearchPage($limit,$start,$searchvalue,$keyword) {
		$this->db->select('*');
		$this->db->from('cmf_hrms_transfer');
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
		$this->db->from('cmf_hrms_transfer');
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
			$query = $this->db->get_where('cmf_hrms_transfer', array('ID' => $id));
			return $query->row_array();
		} else {
			$query = $this->db->get('cmf_hrms_transfer');
			return $query->result_array();
		}
	}

	//获取分页
	public function get_systemlang($limit, $start) {
        $this->db->limit($limit, $start);
        $query = $this->db->get('cmf_hrms_transfer');
        $rows = $query->result();
        return $rows;
    }

	/**
	* 获取总数
	*/
	public function get_count() {
        return $this->db->count_all_results('cmf_hrms_transfer');
    }

	/**
	 * 插入cmf_hrms_transfer
	 */
	public function insert() {
		//prepare post data
            $CmfHrmsTransferData = array(
                'workId'         => $this->input->post('workId'),
				'name'           => $this->input->post('name'),
				'transferDate'   => $this->input->post('transferDate'),
				'inDepartment'   => $this->input->post('inDepartment'),
				'afterDep'       => $this->input->post('afterDep'),
				'beforeStaff'    => $this->input->post('beforeStaff'),
				'afterStaff'     => $this->input->post('afterStaff'),
				'beforegangwei'  => $this->input->post('beforegangwei'),
				'aftergangwei'   => $this->input->post('aftergangwei'),
				'transferReason' => $this->input->post('transferReason'),
				'staffMan'       => $this->input->post('staffMan'),
				'memo'           => $this->input->post('memo'),
				'jobsSituation'  => $this->input->post('jobsSituation'),
				'transferType'   => $this->input->post('transferType'),
				'creator'        => $this->input->post('creator'),
				'creatTime'      => $this->input->post('creatTime')
            );

		$insert = $this->db->insert('cmf_hrms_transfer', $CmfHrmsTransferData);
		if($insert) {
			return $this->db->insert_id();
		} else {
			return false;
		}
	}

	/**
	 * 更新cmf_hrms_transfer
	 */
	public function update($id) {
		//prepare cms page data
            $CmfHrmsTransferData = array(
                'workId'         => $this->input->post('workId'),
				'name'           => $this->input->post('name'),
				'transferDate'   => $this->input->post('transferDate'),
				'inDepartment'   => $this->input->post('inDepartment'),
				'afterDep'       => $this->input->post('afterDep'),
				'beforeStaff'    => $this->input->post('beforeStaff'),
				'afterStaff'     => $this->input->post('afterStaff'),
				'beforegangwei'  => $this->input->post('beforegangwei'),
				'aftergangwei'   => $this->input->post('aftergangwei'),
				'transferReason' => $this->input->post('transferReason'),
				'staffMan'       => $this->input->post('staffMan'),
				'memo'           => $this->input->post('memo'),
				'jobsSituation'  => $this->input->post('jobsSituation'),
				'transferType'   => $this->input->post('transferType'),
				'creator'        => $this->input->post('creator'),
				'creatTime'      => $this->input->post('creatTime')
            );

		if(!empty($CmfHrmsTransferData) && !empty($id)) {
			$update = $this->db->update('cmf_hrms_transfer' ,$CmfHrmsTransferData, array('ID' => $id));
			return $update?true:false;
		} else {
			return false;
		}
	}

	/**
	 * 删除cmf_hrms_transfer
	 */
	
	public function delete($id) {
		$delete = $this->db->delete('cmf_hrms_transfer' , array('ID' => $id));
		return $delete?true:false;
	}
}
?>