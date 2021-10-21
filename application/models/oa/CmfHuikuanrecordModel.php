<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class CmfHuikuanrecordModel extends CI_Model {
	public function __construct() {
		parent::__construct();
	}

	/*
	 * 获取搜索选项并分页
	 */
	function getSearchPage($limit,$start,$searchvalue,$keyword) {
		$this->db->select('*');
		$this->db->from('cmf_huikuanrecord');
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
		$this->db->from('cmf_huikuanrecord');
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
			$query = $this->db->get_where('cmf_huikuanrecord', array('id' => $id));
			return $query->row_array();
		} else {
			$query = $this->db->get('cmf_huikuanrecord');
			return $query->result_array();
		}
	}

	//获取分页
	public function get_systemlang($limit, $start) {
        $this->db->limit($limit, $start);
        $query = $this->db->get('cmf_huikuanrecord');
        $rows = $query->result();
        return $rows;
    }

	/**
	* 获取总数
	*/
	public function get_count() {
        return $this->db->count_all_results('cmf_huikuanrecord');
    }

	/**
	 * 插入cmf_huikuanrecord
	 */
	public function insert() {
		//prepare post data
            $CmfHuikuanrecordMData = array(
                'customerid'    => $this->input->post('customerid'),
				'dingdanbillid' => $this->input->post('dingdanbillid'),
				'qici'          => $this->input->post('qici'),
				'paydate'       => $this->input->post('paydate'),
				'jine'          => $this->input->post('jine'),
				'ifkaipiao'     => $this->input->post('ifkaipiao'),
				'accountid'     => $this->input->post('accountid'),
				'beizhu'        => $this->input->post('beizhu'),
				'createman'     => $this->input->post('createman'),
				'createtime'    => $this->input->post('createtime'),
				'guanlianplanid'=> $this->input->post('guanlianplanid'),
				'oddment'       => $this->input->post('oddment')
            );

		$insert = $this->db->insert('cmf_huikuanrecord', $CmfHuikuanrecordMData);
		if($insert) {
			return $this->db->insert_id();
		} else {
			return false;
		}
	}

	/**
	 * 更新cmf_huikuanrecord
	 */
	public function update($id) {
		//prepare cms page data
            $CmfHuikuanrecordMData = array(
                'customerid'    => $this->input->post('customerid'),
				'dingdanbillid' => $this->input->post('dingdanbillid'),
				'qici'          => $this->input->post('qici'),
				'paydate'       => $this->input->post('paydate'),
				'jine'          => $this->input->post('jine'),
				'ifkaipiao'     => $this->input->post('ifkaipiao'),
				'accountid'     => $this->input->post('accountid'),
				'beizhu'        => $this->input->post('beizhu'),
				'createman'     => $this->input->post('createman'),
				'createtime'    => $this->input->post('createtime'),
				'guanlianplanid'=> $this->input->post('guanlianplanid'),
				'oddment'       => $this->input->post('oddment')
            );

		if(!empty($CmfHuikuanrecordMData) && !empty($id)) {
			$update = $this->db->update('cmf_huikuanrecord' ,$CmfHuikuanrecordMData, array('id' => $id));
			return $update?true:false;
		} else {
			return false;
		}
	}

	/**
	 * 删除cmf_huikuanrecord
	 */
	
	public function delete($id) {
		$delete = $this->db->delete('cmf_huikuanrecord' , array('id' => $id));
		return $delete?true:false;
	}
}
?>