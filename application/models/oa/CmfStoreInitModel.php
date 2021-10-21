<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class CmfStoreInitModel extends CI_Model {
	public function __construct() {
		parent::__construct();
	}

	/*
	 * 获取搜索选项并分页
	 */
	function getSearchPage($limit,$start,$searchvalue,$keyword) {
		$this->db->select('*');
		$this->db->from('cmf_store_init');
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
		$this->db->from('cmf_store_init');
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
			$query = $this->db->get_where('cmf_store_init', array('id' => $id));
			return $query->row_array();
		} else {
			$query = $this->db->get('cmf_store_init');
			return $query->result_array();
		}
	}

	//获取分页
	public function get_systemlang($limit, $start) {
        $this->db->limit($limit, $start);
        $query = $this->db->get('cmf_store_init');
        $rows = $query->result();
        return $rows;
    }

	/**
	* 获取总数
	*/
	public function get_count() {
        return $this->db->count_all_results('cmf_store_init');
    }

	/**
	 * 插入cmf_accessprepay
	 */
	public function insert() {
		//prepare post data
            $CmfStoreInitData = array(
                'prodid'       => $this->input->post('prodid'),
                'storeid'      => $this->input->post('storeid'),
                'price'        => $this->input->post('price'),
                'num'          => $this->input->post('num'),
                'jine'         => $this->input->post('jine'),
                'memo'         => $this->input->post('memo'),
                'flag'         => $this->input->post('flag'),
                'prodname'     => $this->input->post('prodname'),
                'guige'        => $this->input->post('guige'),
                'xinghao'      => $this->input->post('xinghao'),
                'danwei'       => $this->input->post('danwei'),
                'typename'     => $this->input->post('typename')
            );

		$insert = $this->db->insert('cmf_store_init', $CmfStoreInitData);
		if($insert) {
			return $this->db->insert_id();
		} else {
			return false;
		}
	}

	/**
	 * 更新cmf_accessprepay
	 */
	public function update($id) {
		//prepare cms page data
            $CmfStoreInitData = array(
                'prodid'       => $this->input->post('prodid'),
                'storeid'      => $this->input->post('storeid'),
                'price'        => $this->input->post('price'),
                'num'          => $this->input->post('num'),
                'jine'         => $this->input->post('jine'),
                'memo'         => $this->input->post('memo'),
                'flag'         => $this->input->post('flag'),
                'prodname'     => $this->input->post('prodname'),
                'guige'        => $this->input->post('guige'),
                'xinghao'      => $this->input->post('xinghao'),
                'danwei'       => $this->input->post('danwei'),
                'typename'     => $this->input->post('typename')
            );

		if(!empty($CmfStoreInitData) && !empty($id)) {
			$update = $this->db->update('cmf_store_init' ,$CmfStoreInitData, array('id' => $id));
			return $update?true:false;
		} else {
			return false;
		}
	}

	/**
	 * 删除cmf_accessprepay
	 */
	
	public function delete($id) {
		$delete = $this->db->delete('cmf_store_init' , array('id' => $id));
		return $delete?true:false;
	}
}
?>