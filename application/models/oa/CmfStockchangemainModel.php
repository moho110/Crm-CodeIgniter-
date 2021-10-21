<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class CmfStockchangemainModel extends CI_Model {
	public function __construct() {
		parent::__construct();
	}

	/*
	 * 获取搜索选项并分页
	 */
	function getSearchPage($limit,$start,$searchvalue,$keyword) {
		$this->db->select('*');
		$this->db->from('cmf_stockchangemain');
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
		$this->db->from('cmf_stockchangemain');
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
			$query = $this->db->get_where('cmf_stockchangemain', array('billid' => $id));
			return $query->row_array();
		} else {
			$query = $this->db->get('cmf_stockchangemain');
			return $query->result_array();
		}
	}

	//获取分页
	public function get_systemlang($limit, $start) {
        $this->db->limit($limit, $start);
        $query = $this->db->get('cmf_stockchangemain');
        $rows = $query->result();
        return $rows;
    }

	/**
	* 获取总数
	*/
	public function get_count() {
        return $this->db->count_all_results('cmf_stockchangemain');
    }

	/**
	 * 插入cmf_stockchangemain
	 */
	public function insert() {
		//prepare post data
            $CmfStockchangemainData = array(
                'zhuti'            => $this->input->post('zhuti'),
				'createman'        => $this->input->post('createman'),
				'createtime'       => $this->input->post('createtime'),
				'outstoreid'       => $this->input->post('outstoreid'),
				'instoreid'        => $this->input->post('instoreid'),
				'state'            => $this->input->post('state'),
				'outstoreshenhe'   => $this->input->post('outstoreshenhe'),
				'instoreshenhe'    => $this->input->post('instoreshenhe'),
				'outshenhetime'    => $this->input->post('outshenhetime'),
				'inshenhetime'     => $this->input->post('inshenhetime'),
				'memo'             => $this->input->post('memo'),
				'totalmoney'       => $this->input->post('totalmoney')
            );

		$insert = $this->db->insert('cmf_stockchangemain', $CmfStockchangemainData);
		if($insert) {
			return $this->db->insert_id();
		} else {
			return false;
		}
	}

	/**
	 * 更新cmf_stockchangemain
	 */
	public function update($id) {
		//prepare cms page data
            $CmfStockchangemainData = array(
                'zhuti'            => $this->input->post('zhuti'),
				'createman'        => $this->input->post('createman'),
				'createtime'       => $this->input->post('createtime'),
				'outstoreid'       => $this->input->post('outstoreid'),
				'instoreid'        => $this->input->post('instoreid'),
				'state'            => $this->input->post('state'),
				'outstoreshenhe'   => $this->input->post('outstoreshenhe'),
				'instoreshenhe'    => $this->input->post('instoreshenhe'),
				'outshenhetime'    => $this->input->post('outshenhetime'),
				'inshenhetime'     => $this->input->post('inshenhetime'),
				'memo'             => $this->input->post('memo'),
				'totalmoney'       => $this->input->post('totalmoney')
            );

		if(!empty($CmfStockchangemainData) && !empty($id)) {
			$update = $this->db->update('cmf_stockchangemain' ,$CmfStockchangemainData, array('billid' => $id));
			return $update?true:false;
		} else {
			return false;
		}
	}

	/**
	 * 删除cmf_stockchangemain
	 */
	
	public function delete($id) {
		$delete = $this->db->delete('cmf_stockchangemain' , array('billid' => $id));
		return $delete?true:false;
	}
}
?>