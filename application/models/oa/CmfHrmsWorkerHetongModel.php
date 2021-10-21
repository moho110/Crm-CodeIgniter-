<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class CmfHrmsWorkerHetongModel extends CI_Model {
	public function __construct() {
		parent::__construct();
	}

	/*
	 * 获取搜索选项并分页
	 */
	function getSearchPage($limit,$start,$searchvalue,$keyword) {
		$this->db->select('*');
		$this->db->from('cmf_hrms_worker_hetong');
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
		$this->db->from('cmf_hrms_worker_hetong');
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
			$query = $this->db->get_where('cmf_hrms_worker_hetong', array('ID' => $id));
			return $query->row_array();
		} else {
			$query = $this->db->get('cmf_hrms_worker_hetong');
			return $query->result_array();
		}
	}

	//获取分页
	public function get_systemlang($limit, $start) {
        $this->db->limit($limit, $start);
        $query = $this->db->get('cmf_hrms_worker_hetong');
        $rows = $query->result();
        return $rows;
    }

	/**
	* 获取总数
	*/
	public function get_count() {
        return $this->db->count_all_results('cmf_hrms_worker_hetong');
    }

	/**
	 * 插入cmf_hrms_worker_hetong
	 */
	public function insert() {
		//prepare post data
            $CmfHrmsWorkerHetongData = array(
                'workId'       => $this->input->post('workId'),
				'name'         => $this->input->post('name'),
				'inDepartment' => $this->input->post('inDepartment'),
				'signTime'     => $this->input->post('signTime'),
				'endTime'      => $this->input->post('endTime'),
				'workedYear'   => $this->input->post('workedYear'),
				'creator'      => $this->input->post('creator'),
				'createTime'   => $this->input->post('createTime')
            );

		$insert = $this->db->insert('cmf_hrms_worker_hetong', $CmfHrmsWorkerHetongData);
		if($insert) {
			return $this->db->insert_id();
		} else {
			return false;
		}
	}

	/**
	 * 更新cmf_hrms_worker_hetong
	 */
	public function update($id) {
		//prepare cms page data
            $CmfHrmsWorkerHetongData = array(
                'workId'       => $this->input->post('workId'),
				'name'         => $this->input->post('name'),
				'inDepartment' => $this->input->post('inDepartment'),
				'signTime'     => $this->input->post('signTime'),
				'endTime'      => $this->input->post('endTime'),
				'workedYear'   => $this->input->post('workedYear'),
				'creator'      => $this->input->post('creator'),
				'createTime'   => $this->input->post('createTime')
            );

		if(!empty($CmfHrmsWorkerHetongData) && !empty($id)) {
			$update = $this->db->update('cmf_hrms_worker_hetong' ,$CmfHrmsWorkerHetongData, array('ID' => $id));
			return $update?true:false;
		} else {
			return false;
		}
	}

	/**
	 * 删除cmf_hrms_worker_hetong
	 */
	
	public function delete($id) {
		$delete = $this->db->delete('cmf_hrms_worker_hetong' , array('ID' => $id));
		return $delete?true:false;
	}
}
?>