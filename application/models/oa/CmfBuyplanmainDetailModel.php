<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class CmfBuyplanmainDetailModel extends CI_Model {
	public function __construct() {
		parent::__construct();
	}

	/*
	 * 获取搜索选项并分页
	 */
	function getSearchPage($limit,$start,$searchvalue,$keyword) {
		$this->db->select('*');
		$this->db->from('cmf_buyplanmain_detail');
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
		$this->db->from('cmf_buyplanmain_detail');
		$this->db->like($searchvalue,$keyword,'both');
		$this->db->where("$searchvalue LIKE '%$keyword%'");
		$query = $this->db->get();
		$rows = $query->result();
		return $rows;
	}

	/**
	 * 产品采购汇总列表
	 */
	function getMustBuyplanmain($limit, $start) {
		$this->db->select('cbd.id,cb.zhuti,cbd.prodname,cb.supplyid,cb.linkman,cb.caigoudate,cb.danhao,
				cb.daohuodate,cb.createman,cb.totalmoney,
				cbd.prodid,cbd.prodguige,cbd.prodxinghao,
				cbd.proddanwei,cbd.price,cbd.zhekou,cbd.num,cbd.jine');
		$this->db->from('cmf_buyplanmain_detail as cbd');
		$this->db->join('cmf_buyplanmain as cb','cbd.id=cb.billid','left');
		$this->db->limit($limit, $start);
		$query = $this->db->get();
		$rows = $query->result();
		return $rows;
	}

	//产品采购汇总明细
	function getMustBuyplanmainDetails($id = "") {
		if(!empty($id)) {
			$this->db->select('cb.zhuti,cbd.prodname,cb.supplyid,cb.linkman,cb.caigoudate,cb.danhao,
				cb.daohuodate,cb.createman,cb.totalmoney,
				cbd.prodid,cbd.prodguige,cbd.prodxinghao,
				cbd.proddanwei,cbd.price,cbd.zhekou,cbd.num,cbd.jine');
			$this->db->from('cmf_buyplanmain_detail as cbd');
			$this->db->join('cmf_buyplanmain as cb','cbd.id=cb.billid','left');
			$query = $this->db->get_where('cmf_buyplanmain_detail', array('cb.billid' => $id));
			return $query->row_array();
		} else {
			$query = $this->db->get('cmf_buyplanmain_detail');
			return $query->result_array();
		}
	}

	/**
	 * 获取列
	 */
	function getRows($id = "") {
		if(!empty($id)) {
			$query = $this->db->get_where('cmf_buyplanmain_detail', array('id' => $id));
			return $query->row_array();
		} else {
			$query = $this->db->get('cmf_buyplanmain_detail');
			return $query->result_array();
		}
	}

	//获取分页
	public function get_systemlang($limit, $start) {
        $this->db->limit($limit, $start);
        $query = $this->db->get('cmf_buyplanmain_detail');
        $rows = $query->result();
        return $rows;
    }

	/**
	* 获取总数
	*/
	public function get_count() {
        return $this->db->count_all_results('cmf_buyplanmain_detail');
    }

	/**
	 * 插入cmf_buyplanmain_detail
	 */
	public function insert() {
		//prepare post data
            $CmfBuyplanmainDetailData = array(
                'prodid'                => $this->input->post('prodid'),
				'prodname'              => $this->input->post('prodname'),
				'prodguige'             => $this->input->post('prodguige'),
				'prodxinghao'           => $this->input->post('prodxinghao'),
				'proddanwei'            => $this->input->post('proddanwei'),
				'price'                 => $this->input->post('price'),
				'zhekou'                => $this->input->post('zhekou'),
				'num'                   => $this->input->post('num'),
				'beizhu'                => $this->input->post('beizhu'),
				'mainrowid'             => $this->input->post('mainrowid'),
				'recnum'                => $this->input->post('recnum'),
				'jine'                  => $this->input->post('jine'),
				'oldprodid'             => $this->input->post('oldprodid'),
				'lastprice'             => $this->input->post('lastprice'),
				'opertype'              => $this->input->post('opertype')
            );

		$insert = $this->db->insert('cmf_buyplanmain_detail', $CmfBuyplanmainDetailData);
		if($insert) {
			return $this->db->insert_id();
		} else {
			return false;
		}
	}

	/**
	 * 更新cmf_buyplanmain_detail
	 */
	public function update($id) {
		//prepare cms page data
            $CmfBuyplanmainDetailData = array(
                'prodid'                => $this->input->post('prodid'),
				'prodname'              => $this->input->post('prodname'),
				'prodguige'             => $this->input->post('prodguige'),
				'prodxinghao'           => $this->input->post('prodxinghao'),
				'proddanwei'            => $this->input->post('proddanwei'),
				'price'                 => $this->input->post('price'),
				'zhekou'                => $this->input->post('zhekou'),
				'num'                   => $this->input->post('num'),
				'beizhu'                => $this->input->post('beizhu'),
				'mainrowid'             => $this->input->post('mainrowid'),
				'recnum'                => $this->input->post('recnum'),
				'jine'                  => $this->input->post('jine'),
				'oldprodid'             => $this->input->post('oldprodid'),
				'lastprice'             => $this->input->post('lastprice'),
				'opertype'              => $this->input->post('opertype')
            );

		if(!empty($CmfBuyplanmainDetailData) && !empty($id)) {
			$update = $this->db->update('cmf_buyplanmain_detail' ,$CmfBuyplanmainDetailData, array('id' => $id));
			return $update?true:false;
		} else {
			return false;
		}
	}

	/**
	 * 删除cmf_buyplanmain_detail
	 */
	
	public function delete($id) {
		$delete = $this->db->delete('cmf_buyplanmain_detail' , array('id' => $id));
		return $delete?true:false;
	}
}
?>