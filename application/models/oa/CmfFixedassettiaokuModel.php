<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class CmfFixedassettiaokuModel extends CI_Model {
	public function __construct() {
		parent::__construct();
	}

	/*
	 * 获取搜索选项并分页
	 */
	function getSearchPage($limit,$start,$searchvalue,$keyword) {
		$this->db->select('*');
		$this->db->from('cmf_fixedassettiaoku');
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
		$this->db->from('cmf_fixedassettiaoku');
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
			$query = $this->db->get_where('cmf_fixedassettiaoku', array('ID' => $id));
			return $query->row_array();
		} else {
			$query = $this->db->get('cmf_fixedassettiaoku');
			return $query->result_array();
		}
	}

	//获取分页
	public function get_systemlang($limit, $start) {
        $this->db->limit($limit, $start);
        $query = $this->db->get('cmf_fixedassettiaoku');
        $rows = $query->result();
        return $rows;
    }

	/**
	* 获取总数
	*/
	public function get_count() {
        return $this->db->count_all_results('cmf_fixedassettiaoku');
    }

	/**
	 * 插入cmf_fixedassettiaoku
	 */
	public function insert() {
		//prepare post data
            $CmfFixedassettiaokuData = array(
                'setName'         => $this->input->post('setName'),
				'setNo'           => $this->input->post('setNo'),
				'oriInDepartment' => $this->input->post('oriInDepartment'),
				'nowInDepartment' => $this->input->post('nowInDepartment'),
				'approvalMan'     => $this->input->post('approvalMan'),
				'memo'            => $this->input->post('memo'),
				'creator'         => $this->input->post('creator'),
				'createTime'      => $this->input->post('createTime'),
				'price'           => $this->input->post('price'),
				'quantity'        => $this->input->post('quantity'),
				'count'           => $this->input->post('count')
            );

		$insert = $this->db->insert('cmf_fixedassettiaoku', $CmfFixedassettiaokuData);
		if($insert) {
			return $this->db->insert_id();
		} else {
			return false;
		}
	}

	/**
	 * 更新cmf_fixedassettiaoku
	 */
	public function update($id) {
		//prepare cms page data
            $CmfAccessbankData = array(
                'setName'         => $this->input->post('setName'),
				'setNo'           => $this->input->post('setNo'),
				'oriInDepartment' => $this->input->post('oriInDepartment'),
				'nowInDepartment' => $this->input->post('nowInDepartment'),
				'approvalMan'     => $this->input->post('approvalMan'),
				'memo'            => $this->input->post('memo'),
				'creator'         => $this->input->post('creator'),
				'createTime'      => $this->input->post('createTime'),
				'price'           => $this->input->post('price'),
				'quantity'        => $this->input->post('quantity'),
				'count'           => $this->input->post('count')
            );

		if(!empty($CmfAccessbankData) && !empty($id)) {
			$update = $this->db->update('cmf_fixedassettiaoku' ,$CmfAccessbankData, array('ID' => $id));
			return $update?true:false;
		} else {
			return false;
		}
	}

	/**
	 * 删除cmf_fixedassettiaoku
	 */
	
	public function delete($id) {
		$delete = $this->db->delete('cmf_fixedassettiaoku' , array('ID' => $id));
		return $delete?true:false;
	}
}
?>