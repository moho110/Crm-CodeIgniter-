<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class CmfFixedassetgroupModel extends CI_Model {
	public function __construct() {
		parent::__construct();
	}

	/*
	 * 获取搜索选项并分页
	 */
	function getSearchPage($limit,$start,$searchvalue,$keyword) {
		$this->db->select('*');
		$this->db->from('cmf_fixedassetgroup');
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
		$this->db->from('cmf_fixedassetgroup');
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
			$query = $this->db->get_where('cmf_fixedassetgroup', array('ID' => $id));
			return $query->row_array();
		} else {
			$query = $this->db->get('cmf_fixedassetgroup');
			return $query->result_array();
		}
	}

	//获取分页
	public function get_systemlang($limit, $start) {
        $this->db->limit($limit, $start);
        $query = $this->db->get('cmf_fixedassetgroup');
        $rows = $query->result();
        return $rows;
    }

	/**
	* 获取总数
	*/
	public function get_count() {
        return $this->db->count_all_results('cmf_fixedassetgroup');
    }

	/**
	 * 插入cmf_fixedassetgroup
	 */
	public function insert() {
		//prepare post data
            $CmfFixedassetgroupData = array(
                'Name'         => $this->input->post('Name'),
				'sort'         => $this->input->post('sort'),
				'preLeveType'  => $this->input->post('preLeveType')
            );

		$insert = $this->db->insert('cmf_fixedassetgroup', $CmfFixedassetgroupData);
		if($insert) {
			return $this->db->insert_id();
		} else {
			return false;
		}
	}

	/**
	 * 更新cmf_fixedassetgroup
	 */
	public function update($id) {
		//prepare cms page data
            $CmfFixedassetgroupData = array(
                'Name'         => $this->input->post('Name'),
				'sort'         => $this->input->post('sort'),
				'preLeveType'  => $this->input->post('preLeveType')
            );

		if(!empty($CmfFixedassetgroupData) && !empty($id)) {
			$update = $this->db->update('cmf_fixedassetgroup' ,$CmfFixedassetgroupData, array('ID' => $id));
			return $update?true:false;
		} else {
			return false;
		}
	}

	/**
	 * 删除cmf_fixedassetgroup
	 */
	
	public function delete($id) {
		$delete = $this->db->delete('cmf_fixedassetgroup' , array('ID' => $id));
		return $delete?true:false;
	}
}
?>