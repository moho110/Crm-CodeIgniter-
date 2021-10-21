<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class CmfDepartmentModel extends CI_Model {
	public function __construct() {
		parent::__construct();
	}

	/*
	 * 获取搜索选项并分页
	 */
	function getSearchPage($limit,$start,$searchvalue,$keyword) {
		$this->db->select('*');
		$this->db->from('cmf_department');
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
		$this->db->from('cmf_department');
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
			$query = $this->db->get_where('cmf_department', array('DEPT_ID' => $id));
			return $query->row_array();
		} else {
			$query = $this->db->get('cmf_department');
			return $query->result_array();
		}
	}

	//获取分页
	public function get_systemlang($limit, $start) {
        $this->db->limit($limit, $start);
        $query = $this->db->get('cmf_department');
        $rows = $query->result();
        return $rows;
    }

	/**
	* 获取总数
	*/
	public function get_count() {
        return $this->db->count_all_results('cmf_department');
    }

	/**
	 * 插入cmf_department
	 */
	public function insert() {
		//prepare post data
            $CmfDepartmentData = array(
                'DEPT_NAME'          => $this->input->post('DEPT_NAME'),
				'TEL_NO'             => $this->input->post('TEL_NO'),
				'FAX_NO'             => $this->input->post('FAX_NO'),
				'DEPT_NO'            => $this->input->post('DEPT_NO'),
				'DEPT_PARENT'        => $this->input->post('DEPT_PARENT'),
				'MANAGER'            => $this->input->post('MANAGER'),
				'LEADER1'            => $this->input->post('LEADER1'),
				'LEADER2'            => $this->input->post('LEADER2'),
				'DEPT_FUNC'          => $this->input->post('DEPT_FUNC'),
				'orderno'            => $this->input->post('orderno')
            );

		$insert = $this->db->insert('cmf_department', $CmfDepartmentData);
		if($insert) {
			return $this->db->insert_id();
		} else {
			return false;
		}
	}

	/**
	 * 更新cmf_department
	 */
	public function update($id) {
		//prepare cms page data
            $CmfDepartmentData = array(
                'DEPT_NAME'          => $this->input->post('DEPT_NAME'),
				'TEL_NO'             => $this->input->post('TEL_NO'),
				'FAX_NO'             => $this->input->post('FAX_NO'),
				'DEPT_NO'            => $this->input->post('DEPT_NO'),
				'DEPT_PARENT'        => $this->input->post('DEPT_PARENT'),
				'MANAGER'            => $this->input->post('MANAGER'),
				'LEADER1'            => $this->input->post('LEADER1'),
				'LEADER2'            => $this->input->post('LEADER2'),
				'DEPT_FUNC'          => $this->input->post('DEPT_FUNC'),
				'orderno'            => $this->input->post('orderno')
            );

		if(!empty($CmfDepartmentData) && !empty($id)) {
			$update = $this->db->update('cmf_department' ,$CmfDepartmentData, array('DEPT_ID' => $id));
			return $update?true:false;
		} else {
			return false;
		}
	}

	/**
	 * 删除cmf_department
	 */
	
	public function delete($id) {
		$delete = $this->db->delete('cmf_department' , array('DEPT_ID' => $id));
		return $delete?true:false;
	}
}
?>