<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class CmfEduZhongcengxingmuModel extends CI_Model {
	public function __construct() {
		parent::__construct();
	}

	/*
	 * 获取搜索选项并分页
	 */
	function getSearchPage($limit,$start,$searchvalue,$keyword) {
		$this->db->select('*');
		$this->db->from('cmf_edu_zhongcengxingmu');
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
		$this->db->from('cmf_edu_zhongcengxingmu');
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
			$query = $this->db->get_where('cmf_edu_zhongcengxingmu', array('ID' => $id));
			return $query->row_array();
		} else {
			$query = $this->db->get('cmf_edu_zhongcengxingmu');
			return $query->result_array();
		}
	}

	//获取分页
	public function get_systemlang($limit, $start) {
        $this->db->limit($limit, $start);
        $query = $this->db->get('cmf_edu_zhongcengxingmu');
        $rows = $query->result();
        return $rows;
    }

	/**
	* 获取总数
	*/
	public function get_count() {
        return $this->db->count_all_results('cmf_edu_zhongcengxingmu');
    }

	/**
	 * 插入cmf_edu_zhongcengxingmu
	 */
	public function insert() {
		//prepare post data
            $CmfEduZhongcengxingmuData = array(
                'projects'       => $this->input->post('projects'),
				'scoreinvalue'   => $this->input->post('scoreinvalue')
            );

		$insert = $this->db->insert('cmf_edu_zhongcengxingmu', $CmfEduZhongcengxingmuData);
		if($insert) {
			return $this->db->insert_id();
		} else {
			return false;
		}
	}

	/**
	 * 更新cmf_edu_zhongcengxingmu
	 */
	public function update($id) {
		//prepare cms page data
            $CmfEduZhongcengxingmuData = array(
                'projects'       => $this->input->post('projects'),
				'scoreinvalue'   => $this->input->post('scoreinvalue')
            );

		if(!empty($CmfEduZhongcengxingmuData) && !empty($id)) {
			$update = $this->db->update('cmf_edu_zhongcengxingmu' ,$CmfEduZhongcengxingmuData, array('ID' => $id));
			return $update?true:false;
		} else {
			return false;
		}
	}

	/**
	 * 删除cmf_edu_zhongcengxingmu
	 */
	
	public function delete($id) {
		$delete = $this->db->delete('cmf_edu_zhongcengxingmu' , array('ID' => $id));
		return $delete?true:false;
	}
}
?>