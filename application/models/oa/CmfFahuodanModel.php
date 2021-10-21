<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class CmfFahuodanModel extends CI_Model {
	public function __construct() {
		parent::__construct();
	}

	/*
	 * 获取搜索选项并分页
	 */
	function getSearchPage($limit,$start,$searchvalue,$keyword) {
		$this->db->select('*');
		$this->db->from('cmf_fahuodan');
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
		$this->db->from('cmf_fahuodan');
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
			$query = $this->db->get_where('cmf_fahuodan', array('billid' => $id));
			return $query->row_array();
		} else {
			$query = $this->db->get('cmf_fahuodan');
			return $query->result_array();
		}
	}

	//获取分页
	public function get_systemlang($limit, $start) {
        $this->db->limit($limit, $start);
        $query = $this->db->get('cmf_fahuodan');
        $rows = $query->result();
        return $rows;
    }

	/**
	* 获取总数
	*/
	public function get_count() {
        return $this->db->count_all_results('cmf_fahuodan');
    }

	/**
	 * 插入cmf_fahuodan
	 */
	public function insert() {
		//prepare post data
            $CmfFahuodanData = array(
                'customerid'    => $this->input->post('customerid'),
				'dingdanbillid' => $this->input->post('dingdanbillid'),
				'fahuodan'      => $this->input->post('fahuodan'),
				'fahuoren'      => $this->input->post('fahuoren'),
				'fahuodate'     => $this->input->post('fahuodate'),
				'shouhuoren'    => $this->input->post('shouhuoren'),
				'tel'           => $this->input->post('tel'),
				'address'       => $this->input->post('address'),
				'mailcode'      => $this->input->post('mailcode'),
				'fahuotype'     => $this->input->post('fahuotype'),
				'state'         => $this->input->post('state'),
				'package'       => $this->input->post('package'),
				'weight'        => $this->input->post('weight'),
				'yunfei'        => $this->input->post('yunfei'),
				'jiesuantype'   => $this->input->post('jiesuantype'),
				'beizhu'        => $this->input->post('beizhu'),
				'totalnum'      => $this->input->post('totalnum'),
				'totalmoney'    => $this->input->post('totalmoney'),
				'outtype'       => $this->input->post('outtype')
            );

		$insert = $this->db->insert('cmf_fahuodan', $CmfFahuodanData);
		if($insert) {
			return $this->db->insert_id();
		} else {
			return false;
		}
	}

	/**
	 * 更新cmf_fahuodan
	 */
	public function update($id) {
		//prepare cms page data
            $CmfFahuodanData = array(
                'customerid'    => $this->input->post('customerid'),
				'dingdanbillid' => $this->input->post('dingdanbillid'),
				'fahuodan'      => $this->input->post('fahuodan'),
				'fahuoren'      => $this->input->post('fahuoren'),
				'fahuodate'     => $this->input->post('fahuodate'),
				'shouhuoren'    => $this->input->post('shouhuoren'),
				'tel'           => $this->input->post('tel'),
				'address'       => $this->input->post('address'),
				'mailcode'      => $this->input->post('mailcode'),
				'fahuotype'     => $this->input->post('fahuotype'),
				'state'         => $this->input->post('state'),
				'package'       => $this->input->post('package'),
				'weight'        => $this->input->post('weight'),
				'yunfei'        => $this->input->post('yunfei'),
				'jiesuantype'   => $this->input->post('jiesuantype'),
				'beizhu'        => $this->input->post('beizhu'),
				'totalnum'      => $this->input->post('totalnum'),
				'totalmoney'    => $this->input->post('totalmoney'),
				'outtype'       => $this->input->post('outtype')
            );

		if(!empty($CmfFahuodanData) && !empty($id)) {
			$update = $this->db->update('cmf_fahuodan' ,$CmfFahuodanData, array('billid' => $id));
			return $update?true:false;
		} else {
			return false;
		}
	}

	/**
	 * 删除cmf_fahuodan
	 */
	
	public function delete($id) {
		$delete = $this->db->delete('cmf_fahuodan' , array('billid' => $id));
		return $delete?true:false;
	}
}
?>