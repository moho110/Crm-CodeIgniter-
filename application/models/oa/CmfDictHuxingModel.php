<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class CmfDictHuxingModel extends CI_Model {
	public function __construct() {
		parent::__construct();
	}

	/*
	 * 获取搜索选项并分页
	 */
	function getSearchPage($limit,$start,$searchvalue,$keyword) {
		$this->db->select('*');
		$this->db->from('cmf_dict_huxing');
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
		$this->db->from('cmf_dict_huxing');
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
			$query = $this->db->get_where('cmf_dict_huxing', array('Id' => $id));
			return $query->row_array();
		} else {
			$query = $this->db->get('cmf_dict_huxing');
			return $query->result_array();
		}
	}

	//获取分页
	public function get_systemlang($limit, $start) {
        $this->db->limit($limit, $start);
        $query = $this->db->get('cmf_dict_huxing');
        $rows = $query->result();
        return $rows;
    }

	/**
	* 获取总数
	*/
	public function get_count() {
        return $this->db->count_all_results('cmf_dict_huxing');
    }

	/**
	 * 插入cmf_dict_huxing
	 */
	public function insert() {
		//prepare post data
            $CmfDictHuxingData = array(
                'Name'         => $this->input->post('Name')
            );

		$insert = $this->db->insert('cmf_dict_huxing', $CmfDictHuxingData);
		if($insert) {
			return $this->db->insert_id();
		} else {
			return false;
		}
	}

	/**
	 * 更新cmf_dict_huxing
	 */
	public function update($id) {
		//prepare cms page data
            $CmfDictHuxingData = array(
                'Name'         => $this->input->post('Name')
            );

		if(!empty($CmfDictHuxingData) && !empty($id)) {
			$update = $this->db->update('cmf_dict_huxing' ,$CmfDictHuxingData, array('Id' => $id));
			return $update?true:false;
		} else {
			return false;
		}
	}

	/**
	 * 删除cmf_dict_huxing
	 */
	
	public function delete($id) {
		$delete = $this->db->delete('cmf_dict_huxing' , array('Id' => $id));
		return $delete?true:false;
	}
}
?>