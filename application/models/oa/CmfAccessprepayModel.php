<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class CmfAccessprepayModel extends CI_Model {
	public function __construct() {
		parent::__construct();
	}

	/*
	 * 获取搜索选项并分页
	 */
	function getSearchPage($limit,$start,$searchvalue,$keyword) {
		$this->db->select('*');
		$this->db->from('cmf_accessprepay');
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
		$this->db->from('cmf_accessprepay');
		$this->db->like($searchvalue,$keyword,'both');
		$this->db->where("$searchvalue LIKE '%$keyword%'");
		$query = $this->db->get();
		$rows = $query->result();
		return $rows;
	}

	/**
	 * 获取创建人并且预付款金额大于等于20元
	 */
	function getFind($createman,$jine) {
		$this->db->select('id,createman,jine');
		$this->db->from('cmf_accessprepay');
		$this->db->like('createman',$createman,'both');
		$this->db->where("createman LIKE '%$createman%'");
		$this->db->where('jine>=',$jine);
		$query = $this->db->get();
		$rows = $query->result();
		return $rows;
	}

	//销售日报
    function getMustAccessPrepay($limit, $start) {
    	$this->db->select('cabk.id,cabk.bankid,cabk.oldjine,cabk.jine,
			cabk.opertype,cabk.guanlianbillid,cabk.createman,
			capy.supplyid,capy.linkmanid,capy.billdeptid,capy.accountid,
			cc.supplyname,cc.phone,cc.fax,cc.email');
		$this->db->from('cmf_accessprepay as capy');
		$this->db->join('cmf_accessbank as cabk','cabk.id=capy.id','left');
		$this->db->join('cmf_customer as cc','cc.id=capy.id','left');
		$this->db->limit($limit, $start);
		$query = $this->db->get();
		$rows = $query->result();
		return $rows;
	}

	//销售日报明细
	function getMustAccessPrepayDetails($id = "") {
		if(!empty($id)) {
			$this->db->select('cabk.id,cabk.bankid,cabk.oldjine,cabk.jine,
			cabk.opertype,cabk.guanlianbillid,cabk.createman,
			capy.supplyid,capy.linkmanid,capy.billdeptid,capy.accountid,
			cc.supplyname,cc.phone,cc.fax,cc.email');
			$this->db->from('cmf_accessprepay as capy');
			$this->db->join('cmf_accessbank as cabk','cabk.id=capy.id','left');
			$this->db->join('cmf_customer as cc','cc.id=capy.id','left');
			$query = $this->db->get_where('cmf_accessprepay', array('capy.id' => $id));
			return $query->row_array();
		} else {
			$query = $this->db->get('cmf_accessprepay');
			return $query->result_array();
		}
	}

	/**
	 * 获取列
	 */
	function getRows($id = "") {
		if(!empty($id)) {
			$query = $this->db->get_where('cmf_accessprepay', array('id' => $id));
			return $query->row_array();
		} else {
			$query = $this->db->get('cmf_accessprepay');
			return $query->result_array();
		}
	}

	//获取分页
	public function get_systemlang($limit, $start) {
        $this->db->limit($limit, $start);
        $query = $this->db->get('cmf_accessprepay');
        $rows = $query->result();
        return $rows;
    }

	/**
	* 获取总数
	*/
	public function get_count() {
        return $this->db->count_all_results('cmf_accessprepay');
    }

	/**
	 * 插入cmf_accessprepay
	 */
	public function insert() {
		//prepare post data
            $CmfAccessprepayData = array(
                'supplyid'       => $this->input->post('supplyid'),
				'linkmanid'      => $this->input->post('linkmanid'),
				'curchuzhi'      => $this->input->post('curchuzhi'),
				'jine'           => $this->input->post('jine'),
				'createman'      => $this->input->post('createman'),
				'opertype'       => $this->input->post('opertype'),
				'guanlianbillid' => $this->input->post('guanlianbillid'),
				'createtime'     => $this->input->post('createtime'),
				'billdeptid'     => $this->input->post('billdeptid'),
				'accountid'	     => $this->input->post('accountid'),
				'beizhu'         => $this->input->post('beizhu')
            );

		$insert = $this->db->insert('cmf_accessprepay', $CmfAccessprepayData);
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
            $CmfAccessprepayData = array(
                'supplyid'       => $this->input->post('supplyid'),
				'linkmanid'      => $this->input->post('linkmanid'),
				'curchuzhi'      => $this->input->post('curchuzhi'),
				'jine'           => $this->input->post('jine'),
				'createman'      => $this->input->post('createman'),
				'opertype'       => $this->input->post('opertype'),
				'guanlianbillid' => $this->input->post('guanlianbillid'),
				'createtime'     => $this->input->post('createtime'),
				'billdeptid'     => $this->input->post('billdeptid'),
				'accountid'	     => $this->input->post('accountid'),
				'beizhu'         => $this->input->post('beizhu')
            );

		if(!empty($CmfAccessprepayData) && !empty($id)) {
			$update = $this->db->update('cmf_accessprepay' ,$CmfAccessprepayData, array('id' => $id));
			return $update?true:false;
		} else {
			return false;
		}
	}

	/**
	 * 删除cmf_accessprepay
	 */
	
	public function delete($id) {
		$delete = $this->db->delete('cmf_accessprepay' , array('id' => $id));
		return $delete?true:false;
	}
}
?>