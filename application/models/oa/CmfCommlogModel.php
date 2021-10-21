<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class CmfCommlogModel extends CI_Model {
	public function __construct() {
		parent::__construct();
	}

	/*
	 * 获取搜索选项并分页
	 */
	function getSearchPage($limit,$start,$searchvalue,$keyword) {
		$this->db->select('*');
		$this->db->from('cmf_commlog');
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
		$this->db->from('cmf_commlog');
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
			$query = $this->db->get_where('cmf_commlog', array('ROWID' => $id));
			return $query->row_array();
		} else {
			$query = $this->db->get('cmf_commlog');
			return $query->result_array();
		}
	}

	//获取分页
	public function get_systemlang($limit, $start) {
        $this->db->limit($limit, $start);
        $query = $this->db->get('cmf_commlog');
        $rows = $query->result();
        return $rows;
    }

	/**
	* 获取总数
	*/
	public function get_count() {
        return $this->db->count_all_results('cmf_commlog');
    }

	/**
	 * 插入cmf_commlog
	 */
	public function insert() {
		//prepare post data
            $CmfCommlogData = array(
                'sysuser'             => $this->input->post('sysuser'),
				'user_id'             => $this->input->post('user_id'),
				'customerid'          => $this->input->post('customerid'),
				'commdate'            => $this->input->post('commdate'),
				'linkmanid'           => $this->input->post('linkmanid'),
				'project'             => $this->input->post('project'),
				'productid'           => $this->input->post('productid'),
				'projectphase'        => $this->input->post('projectphase'),
				'iscompete'           => $this->input->post('iscompete'),
				'comminfo'            => $this->input->post('comminfo'),
				'moniterinfo'         => $this->input->post('moniterinfo'),
				'moniterman'          => $this->input->post('moniterman'),
				'user_flag'           => $this->input->post('user_flag')
            );

		$insert = $this->db->insert('cmf_commlog', $CmfCommlogData);
		if($insert) {
			return $this->db->insert_id();
		} else {
			return false;
		}
	}

	/**
	 * 更新cmf_commlog
	 */
	public function update($id) {
		//prepare cms page data
            $CmfCommlogData = array(
                'sysuser'             => $this->input->post('sysuser'),
				'user_id'             => $this->input->post('user_id'),
				'customerid'          => $this->input->post('customerid'),
				'commdate'            => $this->input->post('commdate'),
				'linkmanid'           => $this->input->post('linkmanid'),
				'project'             => $this->input->post('project'),
				'productid'           => $this->input->post('productid'),
				'projectphase'        => $this->input->post('projectphase'),
				'iscompete'           => $this->input->post('iscompete'),
				'comminfo'            => $this->input->post('comminfo'),
				'moniterinfo'         => $this->input->post('moniterinfo'),
				'moniterman'          => $this->input->post('moniterman'),
				'user_flag'           => $this->input->post('user_flag')
            );

		if(!empty($CmfCommlogData) && !empty($id)) {
			$update = $this->db->update('cmf_commlog' ,$CmfCommlogData, array('ROWID' => $id));
			return $update?true:false;
		} else {
			return false;
		}
	}

	/**
	 * 删除cmf_commlog
	 */
	
	public function delete($id) {
		$delete = $this->db->delete('cmf_commlog' , array('ROWID' => $id));
		return $delete?true:false;
	}
}
?>