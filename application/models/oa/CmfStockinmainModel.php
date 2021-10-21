<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class CmfStockinmainModel extends CI_Model {
	public function __construct() {
		parent::__construct();
	}

	/*
	 * 获取搜索选项并分页
	 */
	function getSearchPage($limit,$start,$searchvalue,$keyword) {
		$this->db->select('*');
		$this->db->from('cmf_stockinmain');
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
		$this->db->from('cmf_stockinmain');
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
			$query = $this->db->get_where('cmf_stockinmain', array('billid' => $id));
			return $query->row_array();
		} else {
			$query = $this->db->get('cmf_stockinmain');
			return $query->result_array();
		}
	}

	//获取分页
	public function get_systemlang($limit, $start) {
        $this->db->limit($limit, $start);
        $query = $this->db->get('cmf_stockinmain');
        $rows = $query->result();
        return $rows;
    }

	/**
	* 获取总数
	*/
	public function get_count() {
        return $this->db->count_all_results('cmf_stockinmain');
    }

	/**
	 * 插入cmf_stockinmain
	 */
	public function insert() {
		//prepare post data
            $CmfStockinmainData = array(
                'zhuti'        => $this->input->post('zhuti'),
				'storeid'      => $this->input->post('storeid'),
				'indate'       => $this->input->post('indate'),
				'createman'    => $this->input->post('createman'),
				'createtime'   => $this->input->post('createtime'),
				'caigoubillid' => $this->input->post('caigoubillid'),
				'tuihuobillid' => $this->input->post('tuihuobillid'),
				'memo'         => $this->input->post('memo'),
				'state'        => $this->input->post('state'),
				'beiyong1'     => $this->input->post('beiyong1'),
				'beiyong2'     => $this->input->post('beiyong2'),
				'beiyong3'     => $this->input->post('beiyong3'),
				'totalnum'     => $this->input->post('totalnum'),
				'totalmoney'   => $this->input->post('totalmoney'),
				'instoreshenhe'=> $this->input->post('instoreshenhe'),
				'intype'       => $this->input->post('intype')
            );

		$insert = $this->db->insert('cmf_stockinmain', $CmfStockinmainData);
		if($insert) {
			return $this->db->insert_id();
		} else {
			return false;
		}
	}

	/**
	 * 更新cmf_stockinmain
	 */
	public function update($id) {
		//prepare cms page data
            $CmfStockinmainData = array(
                'zhuti'        => $this->input->post('zhuti'),
				'storeid'      => $this->input->post('storeid'),
				'indate'       => $this->input->post('indate'),
				'createman'    => $this->input->post('createman'),
				'createtime'   => $this->input->post('createtime'),
				'caigoubillid' => $this->input->post('caigoubillid'),
				'tuihuobillid' => $this->input->post('tuihuobillid'),
				'memo'         => $this->input->post('memo'),
				'state'        => $this->input->post('state'),
				'beiyong1'     => $this->input->post('beiyong1'),
				'beiyong2'     => $this->input->post('beiyong2'),
				'beiyong3'     => $this->input->post('beiyong3'),
				'totalnum'     => $this->input->post('totalnum'),
				'totalmoney'   => $this->input->post('totalmoney'),
				'instoreshenhe'=> $this->input->post('instoreshenhe'),
				'intype'       => $this->input->post('intype')
            );

		if(!empty($CmfStockinmainData) && !empty($id)) {
			$update = $this->db->update('cmf_stockinmain' ,$CmfStockinmainData, array('billid' => $id));
			return $update?true:false;
		} else {
			return false;
		}
	}

	/**
	 * 删除cmf_stockinmain
	 */
	
	public function delete($id) {
		$delete = $this->db->delete('cmf_stockinmain' , array('billid' => $id));
		return $delete?true:false;
	}
}
?>