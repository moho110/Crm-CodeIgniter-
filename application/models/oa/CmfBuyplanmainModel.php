<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class CmfBuyplanmainModel extends CI_Model {
	public function __construct() {
		parent::__construct();
	}

	/*
	 * 获取搜索选项并分页
	 */
	function getSearchPage($limit,$start,$searchvalue,$keyword) {
		$this->db->select('*');
		$this->db->from('cmf_buyplanmain');
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
		$this->db->from('cmf_buyplanmain');
		$this->db->like($searchvalue,$keyword,'both');
		$this->db->where("$searchvalue LIKE '%$keyword%'");
		$query = $this->db->get();
		$rows = $query->result();
		return $rows;
	}

	/**
	 * 供应商供货汇总列表
	 */
	function getMustBuyplanmain($limit, $start) {
		$this->db->select('cb.billid,cb.zhuti,cb.supplyid,cb.linkman,cb.caigoudate,
					cb.danhao,cb.totalmoney,cs.ROWID,cs.supplyname,cs.phone,
					cbd.id,cbd.prodname,cbd.prodguige,cbd.prodxinghao,cbd.price,
					cbd.proddanwei,cbd.opertype');
		$this->db->from('cmf_buyplanmain as cb');
		$this->db->join('cmf_supply as cs','cs.ROWID=cb.billid','left');
		$this->db->join('cmf_buyplanmain_detail as cbd','cbd.id=cs.ROWID','left');
		$this->db->limit($limit, $start);
		$query = $this->db->get();
		$rows = $query->result();
		return $rows;
	}

	//供应商供货汇总明细
	function getMustBuyplanmainDetails($id = "") {
		if(!empty($id)) {
			$this->db->select('cb.billid,cb.zhuti,cb.supplyid,cb.linkman,cb.caigoudate,
					cb.danhao,cb.totalmoney,cs.ROWID,cs.supplyname,cs.phone,
					cbd.id,cbd.prodname,cbd.prodguige,cbd.prodxinghao,cbd.price,
					cbd.proddanwei,cbd.opertype');
			$this->db->from('cmf_buyplanmain as cb');
			$this->db->join('cmf_supply as cs','cs.ROWID=cb.billid','left');
			$this->db->join('cmf_buyplanmain_detail as cbd','cbd.id=cs.ROWID','left');
			$query = $this->db->get_where('cmf_buyplanmain', array('cb.billid' => $id));
			return $query->row_array();
		} else {
			$query = $this->db->get('cmf_buyplanmain');
			return $query->result_array();
		}
	}

	/**
	 * 获取列
	 */
	function getRows($id = "") {
		if(!empty($id)) {
			$query = $this->db->get_where('cmf_buyplanmain', array('billid' => $id));
			return $query->row_array();
		} else {
			$query = $this->db->get('cmf_buyplanmain');
			return $query->result_array();
		}
	}

	//获取分页
	public function get_systemlang($limit, $start) {
        $this->db->limit($limit, $start);
        $query = $this->db->get('cmf_buyplanmain');
        $rows = $query->result();
        return $rows;
    }

	/**
	* 获取总数
	*/
	public function get_count() {
        return $this->db->count_all_results('cmf_buyplanmain');
    }

	/**
	 * 插入cmf_buyplanmain
	 */
	public function insert() {
		//prepare post data
            $CmfBuyplanmainData = array(
                'zhuti'                   => $this->input->post('zhuti'),
				'supplyid'                => $this->input->post('supplyid'),
				'linkman'                 => $this->input->post('linkman'),
				'caigoudate'              => $this->input->post('caigoudate'),
				'storeid'                 => $this->input->post('storeid'),
				'daohuodate'              => $this->input->post('daohuodate'),
				'danhao'	              => $this->input->post('danhao'),
				'createman'               => $this->input->post('createman'),
				'createtime'              => $this->input->post('createtime'),
				'totalmoney'              => $this->input->post('totalmoney'),
				'guanliandingdan'         => $this->input->post('guanliandingdan'),
				'guanliankehu'            => $this->input->post('guanliankehu'),
				'beizhu'                  => $this->input->post('beizhu'),
				'beiyong1'                => $this->input->post('beiyong1'),
				'beiyong2'                => $this->input->post('beiyong2'),
				'beiyong3'                => $this->input->post('beiyong3'),
				'paymoney'                => $this->input->post('paymoney'),
				'state'                   => $this->input->post('state'),
				'rukumoney'               => $this->input->post('rukumoney'),
				'shoupiaomoney'           => $this->input->post('shoupiaomoney'),
				'ifpay'                   => $this->input->post('ifpay'),
				'shoupiaostate'           => $this->input->post('shoupiaostate'),
				'oddment'                 => $this->input->post('oddment'),
				'user_flag'               => $this->input->post('user_flag'),
				'accountid'               => $this->input->post('accountid')
            );

		$insert = $this->db->insert('cmf_buyplanmain', $CmfBuyplanmainData);
		if($insert) {
			return $this->db->insert_id();
		} else {
			return false;
		}
	}

	/**
	 * 更新cmf_buyplanmain
	 */
	public function update($id) {
		//prepare cms page data
            $CmfBuyplanmainData = array(
                'zhuti'                   => $this->input->post('zhuti'),
				'supplyid'                => $this->input->post('supplyid'),
				'linkman'                 => $this->input->post('linkman'),
				'caigoudate'              => $this->input->post('caigoudate'),
				'storeid'                 => $this->input->post('storeid'),
				'daohuodate'              => $this->input->post('daohuodate'),
				'danhao'	              => $this->input->post('danhao'),
				'createman'               => $this->input->post('createman'),
				'createtime'              => $this->input->post('createtime'),
				'totalmoney'              => $this->input->post('totalmoney'),
				'guanliandingdan'         => $this->input->post('guanliandingdan'),
				'guanliankehu'            => $this->input->post('guanliankehu'),
				'beizhu'                  => $this->input->post('beizhu'),
				'beiyong1'                => $this->input->post('beiyong1'),
				'beiyong2'                => $this->input->post('beiyong2'),
				'beiyong3'                => $this->input->post('beiyong3'),
				'paymoney'                => $this->input->post('paymoney'),
				'state'                   => $this->input->post('state'),
				'rukumoney'               => $this->input->post('rukumoney'),
				'shoupiaomoney'           => $this->input->post('shoupiaomoney'),
				'ifpay'                   => $this->input->post('ifpay'),
				'shoupiaostate'           => $this->input->post('shoupiaostate'),
				'oddment'                 => $this->input->post('oddment'),
				'user_flag'               => $this->input->post('user_flag'),
				'accountid'               => $this->input->post('accountid')
            );

		if(!empty($CmfBuyplanmainData) && !empty($id)) {
			$update = $this->db->update('cmf_buyplanmain' ,$CmfBuyplanmainData, array('billid' => $id));
			return $update?true:false;
		} else {
			return false;
		}
	}

	/**
	 * 删除cmf_buyplanmain
	 */
	
	public function delete($id) {
		$delete = $this->db->delete('cmf_buyplanmain' , array('billid' => $id));
		return $delete?true:false;
	}
}
?>