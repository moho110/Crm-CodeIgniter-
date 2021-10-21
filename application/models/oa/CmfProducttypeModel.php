<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class CmfProducttypeModel extends CI_Model {
	public function __construct() {
		parent::__construct();
	}

	/*
	 * 获取搜索选项并分页
	 */
	function getSearchPage($limit,$start,$searchvalue,$keyword) {
		$this->db->select('*');
		$this->db->from('cmf_producttype');
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
		$this->db->from('cmf_producttype');
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
			$query = $this->db->get_where('cmf_producttype', array('ROWID' => $id));
			return $query->row_array();
		} else {
			$query = $this->db->get('cmf_producttype');
			return $query->result_array();
		}
	}

	//获取分页
	public function get_systemlang($limit, $start) {
        $this->db->limit($limit, $start);
        $query = $this->db->get('cmf_producttype');
        $rows = $query->result();
        return $rows;
    }

	/**
	* 获取总数
	*/
	public function get_count() {
        return $this->db->count_all_results('cmf_producttype');
    }

	/**
	 * 插入cmf_producttype
	 */
	public function insert() {
		//prepare post data
            $CmfProducttypeData = array(
                'name'       => $this->input->post('name'),
				'id'         => $this->input->post('id'),
				'Code'       => $this->input->post('Code'),
				'viewtype'   => $this->input->post('viewtype'),
				'user_id'    => $this->input->post('user_id'),
				'user_flag'  => $this->input->post('user_flag'),
				'leverno'    => $this->input->post('leverno'),
				'isbuyplan'  => $this->input->post('isbuyplan'),
				'isautoout'  => $this->input->post('isautoout'),
				'parentid'   => $this->input->post('parentid')
            );

		$insert = $this->db->insert('cmf_producttype', $CmfProducttypeData);
		if($insert) {
			return $this->db->insert_id();
		} else {
			return false;
		}
	}

	/**
	 * 更新cmf_producttype
	 */
	public function update($id) {
		//prepare cms page data
            $CmfProducttypeData = array(
                'name'       => $this->input->post('name'),
				'id'         => $this->input->post('id'),
				'Code'       => $this->input->post('Code'),
				'viewtype'   => $this->input->post('viewtype'),
				'user_id'    => $this->input->post('user_id'),
				'user_flag'  => $this->input->post('user_flag'),
				'leverno'    => $this->input->post('leverno'),
				'isbuyplan'  => $this->input->post('isbuyplan'),
				'isautoout'  => $this->input->post('isautoout'),
				'parentid'   => $this->input->post('parentid')
            );

		if(!empty($CmfProducttypeData) && !empty($id)) {
			$update = $this->db->update('cmf_producttype' ,$CmfProducttypeData, array('ROWID' => $id));
			return $update?true:false;
		} else {
			return false;
		}
	}

	/**
	 * 删除cmf_producttype
	 */
	
	public function delete($id) {
		$delete = $this->db->delete('cmf_producttype' , array('ROWID' => $id));
		return $delete?true:false;
	}
}
?>