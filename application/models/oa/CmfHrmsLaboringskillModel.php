<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class CmfHrmsLaboringskillModel extends CI_Model {
	public function __construct() {
		parent::__construct();
	}

	/*
	 * 获取搜索选项并分页
	 */
	function getSearchPage($limit,$start,$searchvalue,$keyword) {
		$this->db->select('*');
		$this->db->from('cmf_hrms_laboringskill');
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
		$this->db->from('cmf_hrms_laboringskill');
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
			$query = $this->db->get_where('cmf_hrms_laboringskill', array('Id' => $id));
			return $query->row_array();
		} else {
			$query = $this->db->get('cmf_hrms_laboringskill');
			return $query->result_array();
		}
	}

	//获取分页
	public function get_systemlang($limit, $start) {
        $this->db->limit($limit, $start);
        $query = $this->db->get('cmf_hrms_laboringskill');
        $rows = $query->result();
        return $rows;
    }

	/**
	* 获取总数
	*/
	public function get_count() {
        return $this->db->count_all_results('cmf_hrms_laboringskill');
    }

	/**
	 * 插入cmf_hrms_laboringskill
	 */
	public function insert() {
		//prepare post data
            $CmfHrmsLaboringskillData = array(
                'workId'             => $this->input->post('workId'),
				'name'               => $this->input->post('name'),
				'inDepartment'       => $this->input->post('inDepartment'),
				'startTime'          => $this->input->post('startTime'),
				'endTime'            => $this->input->post('endTime'),
				'certifiationUnit'   => $this->input->post('certifiationUnit'),
				'certificationDep'   => $this->input->post('certificationDep'),
				'certificationName'  => $this->input->post('certificationName'),
				'proveMan'           => $this->input->post('proveMan'),
				'memo'               => $this->input->post('memo'),
				'creator'            => $this->input->post('creator'),
				'createTime'         => $this->input->post('createTime')
            );

		$insert = $this->db->insert('cmf_hrms_laboringskill', $CmfHrmsLaboringskillData);
		if($insert) {
			return $this->db->insert_id();
		} else {
			return false;
		}
	}

	/**
	 * 更新cmf_hrms_laboringskill
	 */
	public function update($id) {
		//prepare cms page data
            $CmfHrmsLaboringskillData = array(
                'workId'             => $this->input->post('workId'),
				'name'               => $this->input->post('name'),
				'inDepartment'       => $this->input->post('inDepartment'),
				'startTime'          => $this->input->post('startTime'),
				'endTime'            => $this->input->post('endTime'),
				'certifiationUnit'   => $this->input->post('certifiationUnit'),
				'certificationDep'   => $this->input->post('certificationDep'),
				'certificationName'  => $this->input->post('certificationName'),
				'proveMan'           => $this->input->post('proveMan'),
				'memo'               => $this->input->post('memo'),
				'creator'            => $this->input->post('creator'),
				'createTime'         => $this->input->post('createTime')
            );

		if(!empty($CmfHrmsLaboringskillData) && !empty($id)) {
			$update = $this->db->update('cmf_hrms_laboringskill' ,$CmfHrmsLaboringskillData, array('Id' => $id));
			return $update?true:false;
		} else {
			return false;
		}
	}

	/**
	 * 删除cmf_hrms_laboringskill
	 */
	
	public function delete($id) {
		$delete = $this->db->delete('cmf_hrms_laboringskill' , array('Id' => $id));
		return $delete?true:false;
	}
}
?>