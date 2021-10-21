<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class CmfMeasureModel extends CI_Model {
	public function __construct() {
		parent::__construct();
	}

	/*
	 * 获取搜索选项并分页
	 */
	function getSearchPage($limit,$start,$searchvalue,$keyword) {
		$this->db->select('*');
		$this->db->from('cmf_measure');
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
		$this->db->from('cmf_measure');
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
			$query = $this->db->get_where('cmf_measure', array('ROWID' => $id));
			return $query->row_array();
		} else {
			$query = $this->db->get('cmf_measure');
			return $query->result_array();
		}
	}

	//获取分页
	public function get_systemlang($limit, $start) {
        $this->db->limit($limit, $start);
        $query = $this->db->get('cmf_measure');
        $rows = $query->result();
        return $rows;
    }

	/**
	* 获取总数
	*/
	public function get_count() {
        return $this->db->count_all_results('cmf_measure');
    }

	/**
	 * 插入cmf_measure
	 */
	public function insert() {
		//prepare post data
            $CmfMeasureData = array(
                'name'       => $this->input->post('name'),
				'user_id'    => $this->input->post('user_id'),
				'code'       => $this->input->post('code'),
				'user_flag'  => $this->input->post('user_flag')
            );

		$insert = $this->db->insert('cmf_measure', $CmfMeasureData);
		if($insert) {
			return $this->db->insert_id();
		} else {
			return false;
		}
	}

	/**
	 * 更新cmf_measure
	 */
	public function update($id) {
		//prepare cms page data
            $CmfMeasureData = array(
                'name'       => $this->input->post('name'),
				'user_id'    => $this->input->post('user_id'),
				'code'       => $this->input->post('code'),
				'user_flag'  => $this->input->post('user_flag')
            );

		if(!empty($CmfMeasureData) && !empty($id)) {
			$update = $this->db->update('cmf_measure' ,$CmfMeasureData, array('ROWID' => $id));
			return $update?true:false;
		} else {
			return false;
		}
	}

	/**
	 * 删除cmf_measure
	 */
	
	public function delete($id) {
		$delete = $this->db->delete('cmf_measure' , array('ROWID' => $id));
		return $delete?true:false;
	}
}
?>