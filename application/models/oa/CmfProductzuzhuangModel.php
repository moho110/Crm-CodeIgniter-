<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class CmfProductzuzhuangModel extends CI_Model {
	public function __construct() {
		parent::__construct();
	}

	/*
	 * 获取搜索选项并分页
	 */
	function getSearchPage($limit,$start,$searchvalue,$keyword) {
		$this->db->select('*');
		$this->db->from('cmf_productzuzhuang');
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
		$this->db->from('cmf_productzuzhuang');
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
			$query = $this->db->get_where('cmf_productzuzhuang', array('billid' => $id));
			return $query->row_array();
		} else {
			$query = $this->db->get('cmf_productzuzhuang');
			return $query->result_array();
		}
	}

	//获取分页
	public function get_systemlang($limit, $start) {
        $this->db->limit($limit, $start);
        $query = $this->db->get('cmf_productzuzhuang');
        $rows = $query->result();
        return $rows;
    }

	/**
	* 获取总数
	*/
	public function get_count() {
        return $this->db->count_all_results('cmf_productzuzhuang');
    }

	/**
	 * 插入cmf_productzuzhuang
	 */
	public function insert() {
		//prepare post data
            $CmfProductzuzhuangData = array(
                'zhuti'            => $this->input->post('zhuti'),
				'outstoreid'       => $this->input->post('outstoreid'),
				'instoreid'        => $this->input->post('instoreid'),
				'createman'        => $this->input->post('createman'),
				'createtime'       => $this->input->post('createtime'),
				'totalmoney'       => $this->input->post('totalmoney'),
				'state'            => $this->input->post('state'),
				'outstoreshenhe'   => $this->input->post('outstoreshenhe'),
				'instoreshenhe'    => $this->input->post('instoreshenhe'),
				'outshenhetime'    => $this->input->post('outshenhetime'),
				'inshenhetime'     => $this->input->post('inshenhetime'),
				'memo'             => $this->input->post('memo')
            );

		$insert = $this->db->insert('cmf_productzuzhuang', $CmfProductzuzhuangData);
		if($insert) {
			return $this->db->insert_id();
		} else {
			return false;
		}
	}

	/**
	 * 更新cmf_productzuzhuang
	 */
	public function update($id) {
		//prepare cms page data
            $CmfProductzuzhuangData = array(
                'zhuti'            => $this->input->post('zhuti'),
				'outstoreid'       => $this->input->post('outstoreid'),
				'instoreid'        => $this->input->post('instoreid'),
				'createman'        => $this->input->post('createman'),
				'createtime'       => $this->input->post('createtime'),
				'totalmoney'       => $this->input->post('totalmoney'),
				'state'            => $this->input->post('state'),
				'outstoreshenhe'   => $this->input->post('outstoreshenhe'),
				'instoreshenhe'    => $this->input->post('instoreshenhe'),
				'outshenhetime'    => $this->input->post('outshenhetime'),
				'inshenhetime'     => $this->input->post('inshenhetime'),
				'memo'             => $this->input->post('memo')
            );

		if(!empty($CmfProductzuzhuangData) && !empty($id)) {
			$update = $this->db->update('cmf_productzuzhuang' ,$CmfProductzuzhuangData, array('billid' => $id));
			return $update?true:false;
		} else {
			return false;
		}
	}

	/**
	 * 删除cmf_productzuzhuang
	 */
	
	public function delete($id) {
		$delete = $this->db->delete('cmf_productzuzhuang' , array('billid' => $id));
		return $delete?true:false;
	}
}
?>