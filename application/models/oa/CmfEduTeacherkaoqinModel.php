<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class CmfEduTeacherkaoqinModel extends CI_Model {
	public function __construct() {
		parent::__construct();
	}

	/*
	 * 获取搜索选项并分页
	 */
	function getSearchPage($limit,$start,$searchvalue,$keyword) {
		$this->db->select('*');
		$this->db->from('cmf_edu_teacherkaoqin');
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
		$this->db->from('cmf_edu_teacherkaoqin');
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
			$query = $this->db->get_where('cmf_edu_teacherkaoqin', array('Id' => $id));
			return $query->row_array();
		} else {
			$query = $this->db->get('cmf_edu_teacherkaoqin');
			return $query->result_array();
		}
	}

	//获取分页
	public function get_systemlang($limit, $start) {
        $this->db->limit($limit, $start);
        $query = $this->db->get('cmf_edu_teacherkaoqin');
        $rows = $query->result();
        return $rows;
    }

	/**
	* 获取总数
	*/
	public function get_count() {
        return $this->db->count_all_results('cmf_edu_teacherkaoqin');
    }

	/**
	 * 插入cmf_edu_teacherkaoqin
	 */
	public function insert() {
		//prepare post data
            $CmfEduTeacherkaoqinData = array(
                'teacherUserName'  => $this->input->post('teacherUserName'),
				'teacherName'      => $this->input->post('teacherName'),
				'dutyDate'         => $this->input->post('dutyDate'),
				'cardTime'         => $this->input->post('cardTime'),
				'dutyId'           => $this->input->post('dutyId'),
				'dutyPosition'     => $this->input->post('dutyPosition'),
				'dutyIP'           => $this->input->post('dutyIP')
            );

		$insert = $this->db->insert('cmf_edu_teacherkaoqin', $CmfEduTeacherkaoqinData);
		if($insert) {
			return $this->db->insert_id();
		} else {
			return false;
		}
	}

	/**
	 * 更新cmf_edu_teacherkaoqin
	 */
	public function update($id) {
		//prepare cms page data
            $CmfEduTeacherkaoqinData = array(
                'teacherUserName'  => $this->input->post('teacherUserName'),
				'teacherName'      => $this->input->post('teacherName'),
				'dutyDate'         => $this->input->post('dutyDate'),
				'cardTime'         => $this->input->post('cardTime'),
				'dutyId'           => $this->input->post('dutyId'),
				'dutyPosition'     => $this->input->post('dutyPosition'),
				'dutyIP'           => $this->input->post('dutyIP')
            );

		if(!empty($CmfEduTeacherkaoqinData) && !empty($id)) {
			$update = $this->db->update('cmf_edu_teacherkaoqin' ,$CmfEduTeacherkaoqinData, array('Id' => $id));
			return $update?true:false;
		} else {
			return false;
		}
	}

	/**
	 * 删除cmf_edu_teacherkaoqin
	 */
	
	public function delete($id) {
		$delete = $this->db->delete('cmf_edu_teacherkaoqin' , array('Id' => $id));
		return $delete?true:false;
	}
}
?>