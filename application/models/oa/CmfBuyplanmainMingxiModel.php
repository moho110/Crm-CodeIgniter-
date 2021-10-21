<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class CmfBuyplanmainMingxiModel extends CI_Model {
	public function __construct() {
		parent::__construct();
	}

	/*
	 * 获取搜索选项并分页
	 */
	function getSearchPage($limit,$start,$searchvalue,$keyword) {
		$this->db->select('*');
		$this->db->from('cmf_buyplanmain_mingxi');
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
		$this->db->from('cmf_buyplanmain_mingxi');
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
			$query = $this->db->get_where('cmf_buyplanmain_mingxi', array('id' => $id));
			return $query->row_array();
		} else {
			$query = $this->db->get('cmf_buyplanmain_mingxi');
			return $query->result_array();
		}
	}

	//获取分页
	public function get_systemlang($limit, $start) {
        $this->db->limit($limit, $start);
        $query = $this->db->get('cmf_buyplanmain_mingxi');
        $rows = $query->result();
        return $rows;
    }

	/**
	* 获取总数
	*/
	public function get_count() {
        return $this->db->count_all_results('cmf_buyplanmain_mingxi');
    }

	/**
	 * 插入cmf_buyplanmain_mingxi
	 */
	public function insert() {
		//prepare post data
            $CmfBuyplanmainMingxiData = array(
                'oldproductid'       => $this->input->post('oldproductid'),
				'prodid'             => $this->input->post('prodid'),
				'lastprice'          => $this->input->post('lastprice'),
				'prodname'           => $this->input->post('prodname'),
				'num'                => $this->input->post('num'),
				'price'              => $this->input->post('price'),
				'jine'               => $this->input->post('jine'),
				'beizhu'             => $this->input->post('beizhu'),
				'mainrowid'          => $this->input->post('mainrowid')
            );

		$insert = $this->db->insert('cmf_buyplanmain_mingxi', $CmfBuyplanmainMingxiData);
		if($insert) {
			return $this->db->insert_id();
		} else {
			return false;
		}
	}

	/**
	 * 更新cmf_buyplanmain_mingxi
	 */
	public function update($id) {
		//prepare cms page data
            $CmfBuyplanmainMingxiData = array(
                'oldproductid'       => $this->input->post('oldproductid'),
				'prodid'             => $this->input->post('prodid'),
				'lastprice'          => $this->input->post('lastprice'),
				'prodname'           => $this->input->post('prodname'),
				'num'                => $this->input->post('num'),
				'price'              => $this->input->post('price'),
				'jine'               => $this->input->post('jine'),
				'beizhu'             => $this->input->post('beizhu'),
				'mainrowid'          => $this->input->post('mainrowid')
            );

		if(!empty($CmfBuyplanmainMingxiData) && !empty($id)) {
			$update = $this->db->update('cmf_buyplanmain_mingxi' ,$CmfBuyplanmainMingxiData, array('id' => $id));
			return $update?true:false;
		} else {
			return false;
		}
	}

	/**
	 * 删除cmf_buyplanmain_mingxi
	 */
	
	public function delete($id) {
		$delete = $this->db->delete('cmf_buyplanmain_mingxi' , array('id' => $id));
		return $delete?true:false;
	}
}
?>