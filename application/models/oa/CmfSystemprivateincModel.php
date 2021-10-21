<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class CmfSystemprivateincModel extends CI_Model {
	public function __construct() {
		parent::__construct();
	}

	/*
	 * 获取搜索选项并分页
	 */
	function getSearchPage($limit,$start,$searchvalue,$keyword) {
		$this->db->select('*');
		$this->db->from('cmf_systemprivateinc');
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
		$this->db->from('cmf_systemprivateinc');
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
			$query = $this->db->get_where('cmf_systemprivateinc', array('ID' => $id));
			return $query->row_array();
		} else {
			$query = $this->db->get('cmf_systemprivateinc');
			return $query->result_array();
		}
	}

	//获取分页
	public function get_systemlang($limit, $start) {
        $this->db->limit($limit, $start);
        $query = $this->db->get('cmf_systemprivateinc');
        $rows = $query->result();
        return $rows;
    }

	/**
	* 获取总数
	*/
	public function get_count() {
        return $this->db->count_all_results('cmf_systemprivateinc');
    }

	/**
	 * 插入cmf_accessprepay
	 */
	public function insert() {
		//prepare post data
            $CmfSystemprivateincData = array(
                'FILE'           => $this->input->post('FILE'),
                'MODULE'         => $this->input->post('MODULE'),
                'DEPT_ID'        => $this->input->post('DEPT_ID'),
                'DEPT_NAME'      => $this->input->post('DEPT_NAME'),
                'ROLE_ID'        => $this->input->post('ROLE_ID'),
                'ROLE_NAME'      => $this->input->post('ROLE_NAME'),
                'USER_ID'        => $this->input->post('USER_ID'),
                'USER_NAME'      => $this->input->post('USER_NAME')
            );

		$insert = $this->db->insert('cmf_systemprivateinc', $CmfSystemprivateincData);
		if($insert) {
			return $this->db->insert_id();
		} else {
			return false;
		}
	}

	/**
	 * 更新cmf_accessprepay
	 */
	public function update($id) {
		//prepare cms page data
            $CmfSystemprivateincData = array(
                'FILE'           => $this->input->post('FILE'),
                'MODULE'         => $this->input->post('MODULE'),
                'DEPT_ID'        => $this->input->post('DEPT_ID'),
                'DEPT_NAME'      => $this->input->post('DEPT_NAME'),
                'ROLE_ID'        => $this->input->post('ROLE_ID'),
                'ROLE_NAME'      => $this->input->post('ROLE_NAME'),
                'USER_ID'        => $this->input->post('USER_ID'),
                'USER_NAME'      => $this->input->post('USER_NAME')
            );

		if(!empty($CmfSystemprivateincData) && !empty($id)) {
			$update = $this->db->update('cmf_systemprivateinc' ,$CmfSystemprivateincData, array('ID' => $id));
			return $update?true:false;
		} else {
			return false;
		}
	}

	/**
	 * 删除cmf_accessprepay
	 */
	
	public function delete($id) {
		$delete = $this->db->delete('cmf_systemprivateinc' , array('ID' => $id));
		return $delete?true:false;
	}
}
?>