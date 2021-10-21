<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class CmfStorecheckDetailModel extends CI_Model {
	public function __construct() {
		parent::__construct();
	}

	/*
	 * 获取搜索选项并分页
	 */
	function getSearchPage($limit,$start,$searchvalue,$keyword) {
		$this->db->select('*');
		$this->db->from('cmf_storecheck_detail');
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
		$this->db->from('cmf_storecheck_detail');
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
			$query = $this->db->get_where('cmf_storecheck_detail', array('id' => $id));
			return $query->row_array();
		} else {
			$query = $this->db->get('cmf_storecheck_detail');
			return $query->result_array();
		}
	}

	//获取分页
	public function get_systemlang($limit, $start) {
        $this->db->limit($limit, $start);
        $query = $this->db->get('cmf_storecheck_detail');
        $rows = $query->result();
        return $rows;
    }

	/**
	* 获取总数
	*/
	public function get_count() {
        return $this->db->count_all_results('cmf_storecheck_detail');
    }

	/**
	 * 插入cmf_storecheck_detail
	 */
	public function insert() {
		//prepare post data
            $CmfStorecheckDetailData = array(
                'prodid'       => $this->input->post('prodid'),
				'prodname'     => $this->input->post('prodname'),
				'prodguige'    => $this->input->post('prodguige'),
				'prodxinghao'  => $this->input->post('prodxinghao'),
				'proddanwei'   => $this->input->post('proddanwei'),
				'price'        => $this->input->post('price'),
				'zhekou'       => $this->input->post('zhekou'),
				'num'          => $this->input->post('num'),
				'beizhu'       => $this->input->post('beizhu'),
				'mainrowid'    => $this->input->post('mainrowid'),
				'jine'         => $this->input->post('jine'),
				'oldprodid'    => $this->input->post('oldprodid'),
				'opertype'     => $this->input->post('opertype')
            );

		$insert = $this->db->insert('cmf_storecheck_detail', $CmfStorecheckDetailData);
		if($insert) {
			return $this->db->insert_id();
		} else {
			return false;
		}
	}

	/**
	 * 更新cmf_storecheck_detail
	 */
	public function update($id) {
		//prepare cms page data
            $CmfStorecheckDetailData = array(
                'prodid'       => $this->input->post('prodid'),
				'prodname'     => $this->input->post('prodname'),
				'prodguige'    => $this->input->post('prodguige'),
				'prodxinghao'  => $this->input->post('prodxinghao'),
				'proddanwei'   => $this->input->post('proddanwei'),
				'price'        => $this->input->post('price'),
				'zhekou'       => $this->input->post('zhekou'),
				'num'          => $this->input->post('num'),
				'beizhu'       => $this->input->post('beizhu'),
				'mainrowid'    => $this->input->post('mainrowid'),
				'jine'         => $this->input->post('jine'),
				'oldprodid'    => $this->input->post('oldprodid'),
				'opertype'     => $this->input->post('opertype')
            );

		if(!empty($CmfStorecheckDetailData) && !empty($id)) {
			$update = $this->db->update('cmf_storecheck_detail' ,$CmfStorecheckDetailData, array('id' => $id));
			return $update?true:false;
		} else {
			return false;
		}
	}

	/**
	 * 删除cmf_storecheck_detail
	 */
	
	public function delete($id) {
		$delete = $this->db->delete('cmf_storecheck_detail' , array('id' => $id));
		return $delete?true:false;
	}
}
?>