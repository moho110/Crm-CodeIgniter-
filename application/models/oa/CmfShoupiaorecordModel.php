<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class CmfShoupiaorecordModel extends CI_Model {
	public function __construct() {
		parent::__construct();
	}

	/*
	 * 获取搜索选项并分页
	 */
	function getSearchPage($limit,$start,$searchvalue,$keyword) {
		$this->db->select('*');
		$this->db->from('cmf_shoupiaorecord');
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
		$this->db->from('cmf_shoupiaorecord');
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
			$query = $this->db->get_where('cmf_shoupiaorecord', array('id' => $id));
			return $query->row_array();
		} else {
			$query = $this->db->get('cmf_shoupiaorecord');
			return $query->result_array();
		}
	}

	//获取分页
	public function get_systemlang($limit, $start) {
        $this->db->limit($limit, $start);
        $query = $this->db->get('cmf_shoupiaorecord');
        $rows = $query->result();
        return $rows;
    }

	/**
	* 获取总数
	*/
	public function get_count() {
        return $this->db->count_all_results('cmf_shoupiaorecord');
    }

	/**
	 * 插入cmf_shoupiaorecord
	 */
	public function insert() {
		//prepare post data
            $CmfShoupiaorecordData = array(
                'supplyid'       => $this->input->post('supplyid'),
				'caigoubillid'   => $this->input->post('caigoubillid'),
				'kaipiaoneirong' => $this->input->post('kaipiaoneirong'),
				'piaojutype'     => $this->input->post('piaojutype'),
				'piaojujine'     => $this->input->post('piaojujine'),
				'fapiaono'       => $this->input->post('fapiaono'),
				'kaipiaodate'    => $this->input->post('kaipiaodate'),
				'qici'           => $this->input->post('qici'),
				'kaipiaoren'     => $this->input->post('kaipiaoren'),
				'ifhuikuan'      => $this->input->post('ifhuikuan'),
				'huikuanid'      => $this->input->post('huikuanid'),
				'beizhu'         => $this->input->post('beizhu'),
				'createtime'     => $this->input->post('createtime')
            );

		$insert = $this->db->insert('cmf_shoupiaorecord', $CmfShoupiaorecordData);
		if($insert) {
			return $this->db->insert_id();
		} else {
			return false;
		}
	}

	/**
	 * 更新cmf_shoupiaorecord
	 */
	public function update($id) {
		//prepare cms page data
            $CmfShoupiaorecordData = array(
                'supplyid'       => $this->input->post('supplyid'),
				'caigoubillid'   => $this->input->post('caigoubillid'),
				'kaipiaoneirong' => $this->input->post('kaipiaoneirong'),
				'piaojutype'     => $this->input->post('piaojutype'),
				'piaojujine'     => $this->input->post('piaojujine'),
				'fapiaono'       => $this->input->post('fapiaono'),
				'kaipiaodate'    => $this->input->post('kaipiaodate'),
				'qici'           => $this->input->post('qici'),
				'kaipiaoren'     => $this->input->post('kaipiaoren'),
				'ifhuikuan'      => $this->input->post('ifhuikuan'),
				'huikuanid'      => $this->input->post('huikuanid'),
				'beizhu'         => $this->input->post('beizhu'),
				'createtime'     => $this->input->post('createtime')
            );

		if(!empty($CmfShoupiaorecordData) && !empty($id)) {
			$update = $this->db->update('cmf_shoupiaorecord' ,$CmfShoupiaorecordData, array('id' => $id));
			return $update?true:false;
		} else {
			return false;
		}
	}

	/**
	 * 删除cmf_shoupiaorecord
	 */
	
	public function delete($id) {
		$delete = $this->db->delete('cmf_shoupiaorecord' , array('id' => $id));
		return $delete?true:false;
	}
}
?>