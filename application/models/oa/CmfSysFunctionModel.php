<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class CmfSysFunctionModel extends CI_Model {
	public function __construct() {
		parent::__construct();
	}

	/*
	 * 获取搜索选项并分页
	 */
	function getSearchPage($limit,$start,$searchvalue,$keyword) {
		$this->db->select('*');
		$this->db->from('cmf_sys_function');
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
		$this->db->from('cmf_sys_function');
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
			$query = $this->db->get_where('cmf_sys_function', array('FUNC_ID' => $id));
			return $query->row_array();
		} else {
			$query = $this->db->get('cmf_sys_function');
			return $query->result_array();
		}
	}

	//获取分页
	public function get_systemlang($limit, $start) {
        $this->db->limit($limit, $start);
        $query = $this->db->get('cmf_sys_function');
        $rows = $query->result();
        return $rows;
    }

	/**
	* 获取总数
	*/
	public function get_count() {
        return $this->db->count_all_results('cmf_sys_function');
    }

	/**
	 * 插入cmf_accessprepay
	 */
	public function insert() {
		//prepare post data
            $CmfSysFunctionData = array(
                'MENU_ID'      => $this->input->post('MENU_ID'),
                'FUNC_NAME'    => $this->input->post('FUNC_NAME'),
                'FUNC_CODE'    => $this->input->post('FUNC_CODE'),
                'FUNC_LINK'    => $this->input->post('FUNC_LINK'),
                'ENGLISHNAME'  => $this->input->post('ENGLISHNAME'),
                'UniMenu'      => $this->input->post('UniMenu')
            );

		$insert = $this->db->insert('cmf_sys_function', $CmfSysFunctionData);
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
            $CmfSysFunctionData = array(
                'MENU_ID'      => $this->input->post('MENU_ID'),
                'FUNC_NAME'    => $this->input->post('FUNC_NAME'),
                'FUNC_CODE'    => $this->input->post('FUNC_CODE'),
                'FUNC_LINK'    => $this->input->post('FUNC_LINK'),
                'ENGLISHNAME'  => $this->input->post('ENGLISHNAME'),
                'UniMenu'      => $this->input->post('UniMenu')
            );

		if(!empty($CmfSysFunctionData) && !empty($id)) {
			$update = $this->db->update('cmf_sys_function' ,$CmfSysFunctionData, array('FUNC_ID' => $id));
			return $update?true:false;
		} else {
			return false;
		}
	}

	/**
	 * 删除cmf_accessprepay
	 */
	
	public function delete($id) {
		$delete = $this->db->delete('cmf_sys_function' , array('FUNC_ID' => $id));
		return $delete?true:false;
	}
}
?>