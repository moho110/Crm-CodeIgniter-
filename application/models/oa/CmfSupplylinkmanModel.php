<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class CmfSupplylinkmanModel extends CI_Model {
	public function __construct() {
		parent::__construct();
	}

	/*
	 * 获取搜索选项并分页
	 */
	function getSearchPage($limit,$start,$searchvalue,$keyword) {
		$this->db->select('*');
		$this->db->from('cmf_supplylinkman');
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
		$this->db->from('cmf_supplylinkman');
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
			$query = $this->db->get_where('cmf_supplylinkman', array('ROWID' => $id));
			return $query->row_array();
		} else {
			$query = $this->db->get('cmf_supplylinkman');
			return $query->result_array();
		}
	}

	//获取分页
	public function get_systemlang($limit, $start) {
        $this->db->limit($limit, $start);
        $query = $this->db->get('cmf_supplylinkman');
        $rows = $query->result();
        return $rows;
    }

	/**
	* 获取总数
	*/
	public function get_count() {
        return $this->db->count_all_results('cmf_supplylinkman');
    }

	/**
	 * 插入cmf_accessprepay
	 */
	public function insert() {
		//prepare post data
            $CmfSupplylinkmanData = array(
                'supplyname'     => $this->input->post('supplyname'),
                'beiyong'        => $this->input->post('beiyong'),
                'gender'         => $this->input->post('gender'),
                'phone'          => $this->input->post('phone'),
                'fax'            => $this->input->post('fax'),
                'email'          => $this->input->post('email'),
                'postcode'       => $this->input->post('postcode'),
                'mark'           => $this->input->post('mark'),
                'business'       => $this->input->post('business'),
                'businessexpian' => $this->input->post('businessexpian'),
                'address'        => $this->input->post('address'),
                'user_flag'      => $this->input->post('user_flag'),
                'user_id'        => $this->input->post('user_id'),
                'supplycn'       => $this->input->post('supplycn'),
                'supplyid'       => $this->input->post('supplyid')
            );

		$insert = $this->db->insert('cmf_supplylinkman', $CmfSupplylinkmanData);
		if($insert) {
			return $this->db->insert_id();
		} else {
			return false;
		}
	}

	/**
	 * 更新cmf_accessprepay
	 */
	public function update($id) {
		//prepare cms page data
            $CmfSupplylinkmanData = array(
                'supplyname'     => $this->input->post('supplyname'),
                'beiyong'        => $this->input->post('beiyong'),
                'gender'         => $this->input->post('gender'),
                'phone'          => $this->input->post('phone'),
                'fax'            => $this->input->post('fax'),
                'email'          => $this->input->post('email'),
                'postcode'       => $this->input->post('postcode'),
                'mark'           => $this->input->post('mark'),
                'business'       => $this->input->post('business'),
                'businessexpian' => $this->input->post('businessexpian'),
                'address'        => $this->input->post('address'),
                'user_flag'      => $this->input->post('user_flag'),
                'user_id'        => $this->input->post('user_id'),
                'supplycn'       => $this->input->post('supplycn'),
                'supplyid'       => $this->input->post('supplyid')
            );

		if(!empty($CmfSupplylinkmanData) && !empty($id)) {
			$update = $this->db->update('cmf_supplylinkman' ,$CmfSupplylinkmanData, array('ROWID' => $id));
			return $update?true:false;
		} else {
			return false;
		}
	}

	/**
	 * 删除cmf_accessprepay
	 */
	
	public function delete($id) {
		$delete = $this->db->delete('cmf_supplylinkman' , array('ROWID' => $id));
		return $delete?true:false;
	}
}
?>