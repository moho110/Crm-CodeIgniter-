<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class CmfKaipiaorecordModel extends CI_Model {
	public function __construct() {
		parent::__construct();
	}

	/*
	 * 获取搜索选项并分页
	 */
	function getSearchPage($limit,$start,$searchvalue,$keyword) {
		$this->db->select('*');
		$this->db->from('cmf_kaipiaorecord');
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
		$this->db->from('cmf_kaipiaorecord');
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
			$query = $this->db->get_where('cmf_kaipiaorecord', array('id' => $id));
			return $query->row_array();
		} else {
			$query = $this->db->get('cmf_kaipiaorecord');
			return $query->result_array();
		}
	}

	//获取分页
	public function get_systemlang($limit, $start) {
        $this->db->limit($limit, $start);
        $query = $this->db->get('cmf_kaipiaorecord');
        $rows = $query->result();
        return $rows;
    }

	/**
	* 获取总数
	*/
	public function get_count() {
        return $this->db->count_all_results('cmf_kaipiaorecord');
    }

	/**
	 * 插入cmf_kaipiaorecord
	 */
	public function insert() {
		//prepare post data
            $CmfAccessprepayData = array(
                'customerid'      => $this->input->post('customerid'),
				'dingdanbillid'   => $this->input->post('dingdanbillid'),
				'kaipiaoneirong'  => $this->input->post('kaipiaoneirong'),
				'piaojutype'      => $this->input->post('piaojutype'),
				'piaojujine'      => $this->input->post('piaojujine'),
				'fapiaono'        => $this->input->post('fapiaono'),
				'kaipiaodate'     => $this->input->post('kaipiaodate'),
				'qici'            => $this->input->post('qici'),
				'kaipiaoren'      => $this->input->post('kaipiaoren'),
				'ifhuikuan'       => $this->input->post('ifhuikuan'),
				'huikuanid'       => $this->input->post('huikuanid'),
				'beizhu'          => $this->input->post('beizhu'),
				'createtime'      => $this->input->post('createtime')
            );

		$insert = $this->db->insert('cmf_kaipiaorecord', $CmfAccessprepayData);
		if($insert) {
			return $this->db->insert_id();
		} else {
			return false;
		}
	}

	/**
	 * 更新cmf_kaipiaorecord
	 */
	public function update($id) {
		//prepare cms page data
            $CmfAccessbankData = array(
                'customerid'      => $this->input->post('customerid'),
				'dingdanbillid'   => $this->input->post('dingdanbillid'),
				'kaipiaoneirong'  => $this->input->post('kaipiaoneirong'),
				'piaojutype'      => $this->input->post('piaojutype'),
				'piaojujine'      => $this->input->post('piaojujine'),
				'fapiaono'        => $this->input->post('fapiaono'),
				'kaipiaodate'     => $this->input->post('kaipiaodate'),
				'qici'            => $this->input->post('qici'),
				'kaipiaoren'      => $this->input->post('kaipiaoren'),
				'ifhuikuan'       => $this->input->post('ifhuikuan'),
				'huikuanid'       => $this->input->post('huikuanid'),
				'beizhu'          => $this->input->post('beizhu'),
				'createtime'      => $this->input->post('createtime')
            );

		if(!empty($CmfAccessbankData) && !empty($id)) {
			$update = $this->db->update('cmf_kaipiaorecord' ,$CmfAccessbankData, array('id' => $id));
			return $update?true:false;
		} else {
			return false;
		}
	}

	/**
	 * 删除cmf_kaipiaorecord
	 */
	
	public function delete($id) {
		$delete = $this->db->delete('cmf_kaipiaorecord' , array('id' => $id));
		return $delete?true:false;
	}
}
?>