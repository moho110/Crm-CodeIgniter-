<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class CmfStockoutmainModel extends CI_Model {
	public function __construct() {
		parent::__construct();
	}

	/*
	 * 获取搜索选项并分页
	 */
	function getSearchPage($limit,$start,$searchvalue,$keyword) {
		$this->db->select('*');
		$this->db->from('cmf_stockoutmain');
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
		$this->db->from('cmf_stockoutmain');
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
			$query = $this->db->get_where('cmf_stockoutmain', array('billid' => $id));
			return $query->row_array();
		} else {
			$query = $this->db->get('cmf_stockoutmain');
			return $query->result_array();
		}
	}

	//获取分页
	public function get_systemlang($limit, $start) {
        $this->db->limit($limit, $start);
        $query = $this->db->get('cmf_stockoutmain');
        $rows = $query->result();
        return $rows;
    }

	/**
	* 获取总数
	*/
	public function get_count() {
        return $this->db->count_all_results('cmf_stockoutmain');
    }

	/**
	 * 插入cmf_stockoutmain
	 */
	public function insert() {
		//prepare post data
            $CmfStockoutmainData = array(
                'zhuti'          => $this->input->post('zhuti'),
				'storeid'        => $this->input->post('storeid'),
				'createman'      => $this->input->post('createman'),
				'createtime'     => $this->input->post('createtime'),
				'state'          => $this->input->post('state'),
				'totalnum'       => $this->input->post('totalnum'),
				'totalmoney'     => $this->input->post('totalmoney'),
				'dingdanbillid'  => $this->input->post('dingdanbillid'),
				'outdate'        => $this->input->post('outdate'),
				'outstoreshenhe' => $this->input->post('outstoreshenhe'),
				'memo'           => $this->input->post('memo'),
				'outtype'        => $this->input->post('outtype')
            );

		$insert = $this->db->insert('cmf_stockoutmain', $CmfStockoutmainData);
		if($insert) {
			return $this->db->insert_id();
		} else {
			return false;
		}
	}

	/**
	 * 更新cmf_stockoutmain
	 */
	public function update($id) {
		//prepare cms page data
            $CmfStockoutmainData = array(
                'zhuti'          => $this->input->post('zhuti'),
				'storeid'        => $this->input->post('storeid'),
				'createman'      => $this->input->post('createman'),
				'createtime'     => $this->input->post('createtime'),
				'state'          => $this->input->post('state'),
				'totalnum'       => $this->input->post('totalnum'),
				'totalmoney'     => $this->input->post('totalmoney'),
				'dingdanbillid'  => $this->input->post('dingdanbillid'),
				'outdate'        => $this->input->post('outdate'),
				'outstoreshenhe' => $this->input->post('outstoreshenhe'),
				'memo'           => $this->input->post('memo'),
				'outtype'        => $this->input->post('outtype')
            );

		if(!empty($CmfStockoutmainData) && !empty($id)) {
			$update = $this->db->update('cmf_stockoutmain' ,$CmfStockoutmainData, array('billid' => $id));
			return $update?true:false;
		} else {
			return false;
		}
	}

	/**
	 * 删除cmf_stockoutmain
	 */
	
	public function delete($id) {
		$delete = $this->db->delete('cmf_stockoutmain' , array('billid' => $id));
		return $delete?true:false;
	}
}
?>