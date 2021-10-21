<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class CmfSystemLogtypeModel extends CI_Model {
	public function __construct() {
		parent::__construct();
	}

	/*
	 * 获取搜索选项并分页
	 */
	function getSearchPage($limit,$start,$searchvalue,$keyword) {
		$this->db->select('*');
		$this->db->from('cmf_system_logtype');
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
		$this->db->from('cmf_system_logtype');
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
			$query = $this->db->get_where('cmf_system_logtype', array('ID' => $id));
			return $query->row_array();
		} else {
			$query = $this->db->get('cmf_system_logtype');
			return $query->result_array();
		}
	}

	//获取分页
	public function get_systemlang($limit, $start) {
        $this->db->limit($limit, $start);
        $query = $this->db->get('cmf_system_logtype');
        $rows = $query->result();
        return $rows;
    }

	/**
	* 获取总数
	*/
	public function get_count() {
        return $this->db->count_all_results('cmf_system_logtype');
    }

	/**
	 * 插入cmf_accessprepay
	 */
	public function insert() {
		//prepare post data
            $CmfSystemLogtypeData = array(
                'NAME'        => $this->input->post('NAME'),
                'CODE'        => $this->input->post('CODE')
            );

		$insert = $this->db->insert('cmf_system_logtype', $CmfSystemLogtypeData);
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
            $CmfSystemLogtypeData = array(
                'NAME'        => $this->input->post('NAME'),
                'CODE'        => $this->input->post('CODE')
            );

		if(!empty($CmfSystemLogtypeData) && !empty($id)) {
			$update = $this->db->update('cmf_system_logtype' ,$CmfSystemLogtypeData, array('ID' => $id));
			return $update?true:false;
		} else {
			return false;
		}
	}

	/**
	 * 删除cmf_accessprepay
	 */
	
	public function delete($id) {
		$delete = $this->db->delete('cmf_system_logtype' , array('ID' => $id));
		return $delete?true:false;
	}
}
?>