<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class CmfCommentModel extends CI_Model {
	public function __construct() {
		parent::__construct();
	}

	/*
	 * 获取搜索选项并分页
	 */
	function getSearchPage($limit,$start,$searchvalue,$keyword) {
		$this->db->select('*');
		$this->db->from('cmf_comment');
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
		$this->db->from('cmf_comment');
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
			$query = $this->db->get_where('cmf_comment', array('id' => $id));
			return $query->row_array();
		} else {
			$query = $this->db->get('cmf_comment');
			return $query->result_array();
		}
	}

	//获取分页
	public function get_systemlang($limit, $start) {
        $this->db->limit($limit, $start);
        $query = $this->db->get('cmf_comment');
        $rows = $query->result();
        return $rows;
    }

	/**
	* 获取总数
	*/
	public function get_count() {
        return $this->db->count_all_results('cmf_comment');
    }

	/**
	 * 插入cmf_comment
	 */
	public function insert() {
		//prepare post data
            $CmfCommentData = array(
                'parent_id'        => $this->input->post('parent_id'),
				'user_id'          => $this->input->post('user_id'),
				'to_user_id'       => $this->input->post('to_user_id'),
				'object_id'        => $this->input->post('object_id'),
				'like_count'       => $this->input->post('like_count'),
				'dislike_count'    => $this->input->post('dislike_count'),
				'floor'            => $this->input->post('floor'),
				'create_time'      => $this->input->post('create_time'),
				'delete_time'      => $this->input->post('delete_time'),
				'status'           => $this->input->post('status'),
				'type'             => $this->input->post('type'),
				'table_name'       => $this->input->post('table_name'),
				'full_name'        => $this->input->post('full_name'),
				'email'            => $this->input->post('email'),
				'path'             => $this->input->post('path'),
				'url'              => $this->input->post('url'),
				'content'          => $this->input->post('content'),
				'more'             => $this->input->post('more')
            );

		$insert = $this->db->insert('cmf_comment', $CmfCommentData);
		if($insert) {
			return $this->db->insert_id();
		} else {
			return false;
		}
	}

	/**
	 * 更新cmf_comment
	 */
	public function update($id) {
		//prepare cms page data
            $CmfCommentData = array(
                'parent_id'        => $this->input->post('parent_id'),
				'user_id'          => $this->input->post('user_id'),
				'to_user_id'       => $this->input->post('to_user_id'),
				'object_id'        => $this->input->post('object_id'),
				'like_count'       => $this->input->post('like_count'),
				'dislike_count'    => $this->input->post('dislike_count'),
				'floor'            => $this->input->post('floor'),
				'create_time'      => $this->input->post('create_time'),
				'delete_time'      => $this->input->post('delete_time'),
				'status'           => $this->input->post('status'),
				'type'             => $this->input->post('type'),
				'table_name'       => $this->input->post('table_name'),
				'full_name'        => $this->input->post('full_name'),
				'email'            => $this->input->post('email'),
				'path'             => $this->input->post('path'),
				'url'              => $this->input->post('url'),
				'content'          => $this->input->post('content'),
				'more'             => $this->input->post('more')
            );

		if(!empty($CmfCommentData) && !empty($id)) {
			$update = $this->db->update('cmf_comment' ,$CmfCommentData, array('id' => $id));
			return $update?true:false;
		} else {
			return false;
		}
	}

	/**
	 * 删除cmf_comment
	 */
	
	public function delete($id) {
		$delete = $this->db->delete('cmf_comment' , array('id' => $id));
		return $delete?true:false;
	}
}
?>