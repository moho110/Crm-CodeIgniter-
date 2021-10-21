<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class CmfAccessbankModel extends CI_Model {
	public function __construct() {
		parent::__construct();
	}

	/*
	 * 获取搜索选项并分页
	 */
	function getSearchPage($limit,$start,$searchvalue,$keyword) {
		$this->db->select('*');
		$this->db->from('cmf_accessbank');
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
		$this->db->from('cmf_accessbank');
		$this->db->like($searchvalue,$keyword,'both');
		$this->db->where("$searchvalue LIKE '%$keyword%'");
		$query = $this->db->get();
		$rows = $query->result();
		return $rows;
	}

	/**
	 * 获取执行人
	 */
	function getFind($createman) {
		$this->db->select('ca.id,ca.createman');
		$this->db->from('cmf_accessbank as ca');
		$this->db->like('createman',$createman,'both');
		$this->db->where("createman LIKE '%$createman%'");
		$query = $this->db->get();
		$rows = $query->result();
		return $rows;
	}

	/**
	 * 应付款列表
	 */
	function getMustPay() {
		$this->db->select('b.id,p.linkmanid,b.oldjine,b.jine,b.createman')
		->from('cmf_accessbank as b')
		->join('cmf_accessprepay as p','p.id=b.id','left');
		$query = $this->db->get();
		return $query->result();
	}

	/**
	 * 获取列
	 */
	function getRows($id = "") {
		if(!empty($id)) {
			$query = $this->db->get_where('cmf_accessbank', array('id' => $id));
			return $query->row_array();
		} else {
			$query = $this->db->get('cmf_accessbank');
			return $query->result_array();
		}
	}

	//获取分页
	public function get_systemlang($limit, $start) {
        $this->db->limit($limit, $start);
        $query = $this->db->get('cmf_accessbank');
        $rows = $query->result();
        return $rows;
    }

	/**
	* 获取总数
	*/
	public function get_count() {
        return $this->db->count_all_results('cmf_accessbank');
    }

	/**
	 * 插入cmf_accessbank
	 */
	public function insert() {
		//prepare post data
            $CmfAccessbankData = array(
                'bankid'         => $this->input->post('bankid'),
                'oldjine'        => $this->input->post('oldjine'),
                'jine'           => $this->input->post('jine'),
                'opertype'       => $this->input->post('opertype'),
                'guanlianbillid' => $this->input->post('guanlianbillid'),
                'createman'      => $this->input->post('createman'),
                'createtime'     => $this->input->post('createtime')
            );

		$insert = $this->db->insert('cmf_accessbank', $CmfAccessbankData);
		if($insert) {
			return $this->db->insert_id();
		} else {
			return false;
		}
	}

	/**
	 * 更新cmf_accessbank
	 */
	public function update($id) {
		//prepare cms page data
            $CmfAccessbankData = array(
                'bankid'         => $this->input->post('bankid'),
                'oldjine'        => $this->input->post('oldjine'),
                'jine'           => $this->input->post('jine'),
                'opertype'       => $this->input->post('opertype'),
                'guanlianbillid' => $this->input->post('guanlianbillid'),
                'createman'      => $this->input->post('createman'),
                'createtime'     => $this->input->post('createtime')
            );

		if(!empty($CmfAccessbankData) && !empty($id)) {
			$update = $this->db->update('cmf_accessbank' ,$CmfAccessbankData, array('id' => $id));
			return $update?true:false;
		} else {
			return false;
		}
	}

	/**
	 * 删除cmf_accessbank
	 */
	
	public function delete($id) {
		$delete = $this->db->delete('cmf_accessbank' , array('id' => $id));
		return $delete?true:false;
	}
}
?>