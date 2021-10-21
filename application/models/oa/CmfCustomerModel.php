<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class CmfCustomerModel extends CI_Model {
	public function __construct() {
		parent::__construct();
	}

	/*
	 * 获取搜索选项并分页
	 */
	function getSearchPage($limit,$start,$searchvalue,$keyword) {
		$this->db->select('*');
		$this->db->from('cmf_customer');
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
		$this->db->from('cmf_customer');
		$this->db->like($searchvalue,$keyword,'both');
		$this->db->where("$searchvalue LIKE '%$keyword%'");
		$query = $this->db->get();
		$rows = $query->result();
		return $rows;
	}

	/**
	 * 导购排行列表
	 */
	function getMustCustomer($limit, $start) {
		$this->db->select('cc.id,cc.supplyname,cspm.zhuti,cspm.supplyid,
			cspm.chanceid,cspm.sellplanno,cspm.paytype,
			cspm.user_id');
		$this->db->from('cmf_customer as cc');
		$this->db->join('cmf_sellplanmain as cspm','cc.id=cspm.billid','left');
		$this->db->limit($limit, $start);
		$query = $this->db->get();
		$rows = $query->result();
		return $rows;
	}

	//导购排行明细
	function getMustCustomerDetails($id = "") {
		if(!empty($id)) {
			$this->db->select('cc.id,cc.supplyname,cspm.zhuti,cspm.supplyid,
			cspm.chanceid,cspm.sellplanno,cspm.paytype,
			cspm.user_id');
			$this->db->from('cmf_customer as cc');
			$this->db->join('cmf_sellplanmain as cspm','cc.id=cspm.billid','left');
			$query = $this->db->get_where('cmf_customer', array('cc.id' => $id));
			return $query->row_array();
		} else {
			$query = $this->db->get('cmf_customer');
			return $query->result_array();
		}
	}

	/**
	 * 获取列
	 */
	function getRows($id = "") {
		if(!empty($id)) {
			$query = $this->db->get_where('cmf_customer', array('id' => $id));
			return $query->row_array();
		} else {
			$query = $this->db->get('cmf_customer');
			return $query->result_array();
		}
	}

	//获取分页
	public function get_systemlang($limit, $start) {
        $this->db->limit($limit, $start);
        $query = $this->db->get('cmf_customer');
        $rows = $query->result();
        return $rows;
    }

	/**
	* 获取总数
	*/
	public function get_count() {
        return $this->db->count_all_results('cmf_customer');
    }

	/**
	 * 插入cmf_customer
	 */
	public function insert() {
		//prepare post data
            $CmfCustomerData = array(
                'supplyid'           => $this->input->post('supplyid'),
				'supplyname'         => $this->input->post('supplyname'),
				'supplyshortname'    => $this->input->post('supplyshortname'),
				'enterstype'         => $this->input->post('enterstype'),
				'calling'            => $this->input->post('calling'),
				'state'              => $this->input->post('state'),
				'membercard'         => $this->input->post('membercard'),
				'chargesection'      => $this->input->post('chargesection'),
				'postalcode'         => $this->input->post('postalcode'),
				'phone'              => $this->input->post('phone'),
				'fax'                => $this->input->post('fax'),
				'contactaddress'     => $this->input->post('contactaddress'),
				'email'              => $this->input->post('email'),
				'netword'            => $this->input->post('netword'),
				'bank'               => $this->input->post('bank'),
				'accountnumber'      => $this->input->post('accountnumber'),
				'startdate'          => $this->input->post('startdate'),
				'enddate'            => $this->input->post('enddate'),
				'style'              => $this->input->post('style'),
				'user_flag'          => $this->input->post('user_flag'),
				'user_id'            => $this->input->post('user_id'),
				'supplycn'           => $this->input->post('supplycn'),
				'sysuser'            => $this->input->post('sysuser'),
				'explainStr'         => $this->input->post('explainStr'),
				'briefStr'           => $this->input->post('briefStr'),
				'prodprice'          => $this->input->post('prodprice'),
				'amtagio'            => $this->input->post('amtagio'),
				'remark'             => $this->input->post('remark'),
				'recommand'          => $this->input->post('recommand'),
				'getaccount'         => $this->input->post('getaccount'),
				'yuchuzhi'           => $this->input->post('yuchuzhi'),
				'factgetmoney'       => $this->input->post('factgetmoney'),
				'nogetmoney'         => $this->input->post('nogetmoney'),
				'origin'             => $this->input->post('origin'),
				'salemode'           => $this->input->post('salemode'),
				'property'           => $this->input->post('property'),
				'datascope'          => $this->input->post('datascope'),
				'createdate'         => $this->input->post('createdate'),
				'integral'           => $this->input->post('integral'),
				'lasttracetime'      => $this->input->post('lasttracetime')
            );

		$insert = $this->db->insert('cmf_customer', $CmfCustomerData);
		if($insert) {
			return $this->db->insert_id();
		} else {
			return false;
		}
	}

	/**
	 * 更新cmf_customer
	 */
	public function update($id) {
		//prepare cms page data
            $CmfCustomerData = array(
                'supplyid'           => $this->input->post('supplyid'),
				'supplyname'         => $this->input->post('supplyname'),
				'supplyshortname'    => $this->input->post('supplyshortname'),
				'enterstype'         => $this->input->post('enterstype'),
				'calling'            => $this->input->post('calling'),
				'state'              => $this->input->post('state'),
				'membercard'         => $this->input->post('membercard'),
				'chargesection'      => $this->input->post('chargesection'),
				'postalcode'         => $this->input->post('postalcode'),
				'phone'              => $this->input->post('phone'),
				'fax'                => $this->input->post('fax'),
				'contactaddress'     => $this->input->post('contactaddress'),
				'email'              => $this->input->post('email'),
				'netword'            => $this->input->post('netword'),
				'bank'               => $this->input->post('bank'),
				'accountnumber'      => $this->input->post('accountnumber'),
				'startdate'          => $this->input->post('startdate'),
				'enddate'            => $this->input->post('enddate'),
				'style'              => $this->input->post('style'),
				'user_flag'          => $this->input->post('user_flag'),
				'user_id'            => $this->input->post('user_id'),
				'supplycn'           => $this->input->post('supplycn'),
				'sysuser'            => $this->input->post('sysuser'),
				'explainStr'         => $this->input->post('explainStr'),
				'briefStr'           => $this->input->post('briefStr'),
				'prodprice'          => $this->input->post('prodprice'),
				'amtagio'            => $this->input->post('amtagio'),
				'remark'             => $this->input->post('remark'),
				'recommand'          => $this->input->post('recommand'),
				'getaccount'         => $this->input->post('getaccount'),
				'yuchuzhi'           => $this->input->post('yuchuzhi'),
				'factgetmoney'       => $this->input->post('factgetmoney'),
				'nogetmoney'         => $this->input->post('nogetmoney'),
				'origin'             => $this->input->post('origin'),
				'salemode'           => $this->input->post('salemode'),
				'property'           => $this->input->post('property'),
				'datascope'          => $this->input->post('datascope'),
				'createdate'         => $this->input->post('createdate'),
				'integral'           => $this->input->post('integral'),
				'lasttracetime'      => $this->input->post('lasttracetime')
            );

		if(!empty($CmfCustomerData) && !empty($id)) {
			$update = $this->db->update('cmf_customer' ,$CmfCustomerData, array('id' => $id));
			return $update?true:false;
		} else {
			return false;
		}
	}

	/**
	 * 删除cmf_customer
	 */
	
	public function delete($id) {
		$delete = $this->db->delete('cmf_customer' , array('id' => $id));
		return $delete?true:false;
	}
}
?>