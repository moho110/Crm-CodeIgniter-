<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class CmfHrmsZpjihuaModel extends CI_Model {
	public function __construct() {
		parent::__construct();
	}

	/*
	 * 获取搜索选项并分页
	 */
	function getSearchPage($limit,$start,$searchvalue,$keyword) {
		$this->db->select('*');
		$this->db->from('cmf_hrms_zpjihua');
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
		$this->db->from('cmf_hrms_zpjihua');
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
			$query = $this->db->get_where('cmf_hrms_zpjihua', array('ID' => $id));
			return $query->row_array();
		} else {
			$query = $this->db->get('cmf_hrms_zpjihua');
			return $query->result_array();
		}
	}

	//获取分页
	public function get_systemlang($limit, $start) {
        $this->db->limit($limit, $start);
        $query = $this->db->get('cmf_hrms_zpjihua');
        $rows = $query->result();
        return $rows;
    }

	/**
	* 获取总数
	*/
	public function get_count() {
        return $this->db->count_all_results('cmf_hrms_zpjihua');
    }

	/**
	 * 插入cmf_hrms_zpjihua
	 */
	public function insert() {
		//prepare post data
            $CmfHrmsZpjihuaData = array(
                'departName'    => $this->input->post('departName'),
				'desp'          => $this->input->post('desp'),
				'need'          => $this->input->post('need'),
				'personNumber'  => $this->input->post('personNumber'),
				'startTime'     => $this->input->post('startTime'),
				'endTime'       => $this->input->post('endTime'),
				'applyMan'      => $this->input->post('applyMan'),
				'applyTime'     => $this->input->post('applyTime'),
				'exMan'         => $this->input->post('exMan'),
				'exTime'        => $this->input->post('exTime'),
				'exStatus'      => $this->input->post('exStatus')
            );

		$insert = $this->db->insert('cmf_hrms_zpjihua', $CmfHrmsZpjihuaData);
		if($insert) {
			return $this->db->insert_id();
		} else {
			return false;
		}
	}

	/**
	 * 更新cmf_hrms_zpjihua
	 */
	public function update($id) {
		//prepare cms page data
            $CmfHrmsZpjihuaData = array(
                'departName'    => $this->input->post('departName'),
				'desp'          => $this->input->post('desp'),
				'need'          => $this->input->post('need'),
				'personNumber'  => $this->input->post('personNumber'),
				'startTime'     => $this->input->post('startTime'),
				'endTime'       => $this->input->post('endTime'),
				'applyMan'      => $this->input->post('applyMan'),
				'applyTime'     => $this->input->post('applyTime'),
				'exMan'         => $this->input->post('exMan'),
				'exTime'        => $this->input->post('exTime'),
				'exStatus'      => $this->input->post('exStatus')
            );

		if(!empty($CmfHrmsZpjihuaData) && !empty($id)) {
			$update = $this->db->update('cmf_hrms_zpjihua' ,$CmfHrmsZpjihuaData, array('ID' => $id));
			return $update?true:false;
		} else {
			return false;
		}
	}

	/**
	 * 删除cmf_hrms_zpjihua
	 */
	
	public function delete($id) {
		$delete = $this->db->delete('cmf_hrms_zpjihua' , array('ID' => $id));
		return $delete?true:false;
	}
}
?>