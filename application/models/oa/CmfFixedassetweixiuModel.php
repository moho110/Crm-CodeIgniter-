<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class CmfFixedassetweixiuModel extends CI_Model {
	public function __construct() {
		parent::__construct();
	}

	/*
	 * 获取搜索选项并分页
	 */
	function getSearchPage($limit,$start,$searchvalue,$keyword) {
		$this->db->select('*');
		$this->db->from('cmf_fixedassetweixiu');
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
		$this->db->from('cmf_fixedassetweixiu');
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
			$query = $this->db->get_where('cmf_fixedassetweixiu', array('ID' => $id));
			return $query->row_array();
		} else {
			$query = $this->db->get('cmf_fixedassetweixiu');
			return $query->result_array();
		}
	}

	//获取分页
	public function get_systemlang($limit, $start) {
        $this->db->limit($limit, $start);
        $query = $this->db->get('cmf_fixedassetweixiu');
        $rows = $query->result();
        return $rows;
    }

	/**
	* 获取总数
	*/
	public function get_count() {
        return $this->db->count_all_results('cmf_fixedassetweixiu');
    }

	/**
	 * 插入cmf_fixedassetweixiu
	 */
	public function insert() {
		//prepare post data
            $CmfFixedassetweixiuData = array(
                'setName'        => $this->input->post('setName'),
				'setNo'          => $this->input->post('setNo'),
				'inDepartment'   => $this->input->post('inDepartment'),
				'repairUnit'     => $this->input->post('repairUnit'),
				'repairMan'      => $this->input->post('repairMan'),
				'thingIntro'     => $this->input->post('thingIntro'),
				'approvalMan'    => $this->input->post('approvalMan'),
				'memo'           => $this->input->post('memo'),
				'creator'        => $this->input->post('creator'),
				'creatTime'      => $this->input->post('creatTime'),
				'quantity'       => $this->input->post('quantity'),
				'count'          => $this->input->post('count')
            );

		$insert = $this->db->insert('cmf_fixedassetweixiu', $CmfFixedassetweixiuData);
		if($insert) {
			return $this->db->insert_id();
		} else {
			return false;
		}
	}

	/**
	 * 更新cmf_fixedassetweixiu
	 */
	public function update($id) {
		//prepare cms page data
            $CmfFixedassetweixiuData = array(
                'setName'        => $this->input->post('setName'),
				'setNo'          => $this->input->post('setNo'),
				'inDepartment'   => $this->input->post('inDepartment'),
				'repairUnit'     => $this->input->post('repairUnit'),
				'repairMan'      => $this->input->post('repairMan'),
				'thingIntro'     => $this->input->post('thingIntro'),
				'approvalMan'    => $this->input->post('approvalMan'),
				'memo'           => $this->input->post('memo'),
				'creator'        => $this->input->post('creator'),
				'creatTime'      => $this->input->post('creatTime'),
				'quantity'       => $this->input->post('quantity'),
				'count'          => $this->input->post('count')
            );

		if(!empty($CmfFixedassetweixiuData) && !empty($id)) {
			$update = $this->db->update('cmf_fixedassetweixiu' ,$CmfFixedassetweixiuData, array('ID' => $id));
			return $update?true:false;
		} else {
			return false;
		}
	}

	/**
	 * 删除cmf_fixedassetweixiu
	 */
	
	public function delete($id) {
		$delete = $this->db->delete('cmf_fixedassetweixiu' , array('ID' => $id));
		return $delete?true:false;
	}
}
?>