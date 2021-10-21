<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class CmfCertificateModel extends CI_Model {
	public function __construct() {
		parent::__construct();
	}

	/*
	 * 获取搜索选项并分页
	 */
	function getSearchPage($limit,$start,$searchvalue,$keyword) {
		$this->db->select('*');
		$this->db->from('cmf_certificate');
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
		$this->db->from('cmf_certificate');
		$this->db->like($searchvalue,$keyword,'both');
		$this->db->where("$searchvalue LIKE '%$keyword%'");
		$query = $this->db->get();
		$rows = $query->result();
		return $rows;
	}

	//应开票汇总
    function getCertificateInfo($limit, $start) {
    	$this->db->select('cc.ROWID,cc.user_id,cc.supplyid,cc.certificatetype,cc.certificateno,
				cc.certificateinfo,cc.fromdate,cc.enddate,cc.explianstr,cc.user_flag,
				cc.fileaddress,cs.supplyname');
		$this->db->from('cmf_certificate as cc');
		$this->db->join('cmf_supply as cs','cs.ROWID=cc.ROWID','left');
		$this->db->limit($limit, $start);
		$query = $this->db->get();
		$rows = $query->result();
		return $rows;
	}

	//应开票汇总明细
	function getCertificateInfoDetails($id = "") {
		if(!empty($id)) {
			$this->db->select('cc.ROWID,cc.user_id,cc.supplyid,cc.certificatetype,cc.certificateno,
				cc.certificateinfo,cc.fromdate,cc.enddate,cc.explianstr,cc.user_flag,
				cc.fileaddress,cs.supplyname');
		$this->db->from('cmf_certificate as cc');
		$this->db->join('cmf_supply as cs','cs.ROWID=cc.ROWID','left');
			$query = $this->db->get_where('cmf_certificate', array('cc.ROWID' => $id));
			return $query->row_array();
		} else {
			$query = $this->db->get('cmf_certificate');
			return $query->result_array();
		}
	}

	/**
	 * 获取列
	 */
	function getRows($id = "") {
		if(!empty($id)) {
			$query = $this->db->get_where('cmf_certificate', array('ROWID' => $id));
			return $query->row_array();
		} else {
			$query = $this->db->get('cmf_certificate');
			return $query->result_array();
		}
	}

	//获取分页
	public function get_systemlang($limit, $start) {
        $this->db->limit($limit, $start);
        $query = $this->db->get('cmf_certificate');
        $rows = $query->result();
        return $rows;
    }

	/**
	* 获取总数
	*/
	public function get_count() {
        return $this->db->count_all_results('cmf_certificate');
    }

	/**
	 * 插入cmf_certificate
	 */
	public function insert() {
		//prepare post data
            $CmfCertificateData = array(
                'user_id'           => $this->input->post('user_id'),
				'supplyid'          => $this->input->post('supplyid'),
				'certificatetype'   => $this->input->post('certificatetype'),
				'certificateno'     => $this->input->post('certificateno'),
				'certificateinfo'   => $this->input->post('certificateinfo'),
				'fromdate'          => $this->input->post('fromdate'),
				'enddate'           => $this->input->post('enddate'),
				'explianstr'        => $this->input->post('explianstr'),
				'user_flag'         => $this->input->post('user_flag'),
				'fileaddress'       => $this->input->post('fileaddress')
            );

		$insert = $this->db->insert('cmf_certificate', $CmfCertificateData);
		if($insert) {
			return $this->db->insert_id();
		} else {
			return false;
		}
	}

	/**
	 * 更新cmf_certificate
	 */
	public function update($id) {
		//prepare cms page data
            $CmfCertificateData = array(
                'user_id'           => $this->input->post('user_id'),
				'supplyid'          => $this->input->post('supplyid'),
				'certificatetype'   => $this->input->post('certificatetype'),
				'certificateno'     => $this->input->post('certificateno'),
				'certificateinfo'   => $this->input->post('certificateinfo'),
				'fromdate'          => $this->input->post('fromdate'),
				'enddate'           => $this->input->post('enddate'),
				'explianstr'        => $this->input->post('explianstr'),
				'user_flag'         => $this->input->post('user_flag'),
				'fileaddress'       => $this->input->post('fileaddress')
            );

		if(!empty($CmfCertificateData) && !empty($id)) {
			$update = $this->db->update('cmf_certificate' ,$CmfCertificateData, array('ROWID' => $id));
			return $update?true:false;
		} else {
			return false;
		}
	}

	/**
	 * 删除cmf_certificate
	 */
	
	public function delete($id) {
		$delete = $this->db->delete('cmf_certificate' , array('ROWID' => $id));
		return $delete?true:false;
	}
}
?>