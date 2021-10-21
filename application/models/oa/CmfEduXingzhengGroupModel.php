<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class CmfEduXingzhengGroupModel extends CI_Model {
	public function __construct() {
		parent::__construct();
	}

	/*
	 * 获取搜索选项并分页
	 */
	function getSearchPage($limit,$start,$searchvalue,$keyword) {
		$this->db->select('*');
		$this->db->from('cmf_edu_xingzheng_group');
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
		$this->db->from('cmf_edu_xingzheng_group');
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
			$query = $this->db->get_where('cmf_edu_xingzheng_group', array('Id' => $id));
			return $query->row_array();
		} else {
			$query = $this->db->get('cmf_edu_xingzheng_group');
			return $query->result_array();
		}
	}

	//获取分页
	public function get_systemlang($limit, $start) {
        $this->db->limit($limit, $start);
        $query = $this->db->get('cmf_edu_xingzheng_group');
        $rows = $query->result();
        return $rows;
    }

	/**
	* 获取总数
	*/
	public function get_count() {
        return $this->db->count_all_results('cmf_edu_xingzheng_group');
    }

	/**
	 * 插入cmf_edu_xingzheng_group
	 */
	public function insert() {
		//prepare post data
            $CmfEduXingzhengGroupData = array(
                'departName'    => $this->input->post('departName'),
				'groupName'     => $this->input->post('groupName'),
				'memberName'    => $this->input->post('memberName'),
				'memo'          => $this->input->post('memo'),
				'creator'       => $this->input->post('creator'),
				'createTime	'   => $this->input->post('createTime')
            );

		$insert = $this->db->insert('cmf_edu_xingzheng_group', $CmfEduXingzhengGroupData);
		if($insert) {
			return $this->db->insert_id();
		} else {
			return false;
		}
	}

	/**
	 * 更新cmf_edu_xingzheng_group
	 */
	public function update($id) {
		//prepare cms page data
            $CmfEduXingzhengGroupData = array(
                'departName'    => $this->input->post('departName'),
				'groupName'     => $this->input->post('groupName'),
				'memberName'    => $this->input->post('memberName'),
				'memo'          => $this->input->post('memo'),
				'creator'       => $this->input->post('creator'),
				'createTime	'   => $this->input->post('createTime')
            );

		if(!empty($CmfEduXingzhengGroupData) && !empty($id)) {
			$update = $this->db->update('cmf_edu_xingzheng_group' ,$CmfEduXingzhengGroupData, array('Id' => $id));
			return $update?true:false;
		} else {
			return false;
		}
	}

	/**
	 * 删除cmf_edu_xingzheng_group
	 */
	
	public function delete($id) {
		$delete = $this->db->delete('cmf_edu_xingzheng_group' , array('Id' => $id));
		return $delete?true:false;
	}
}
?>