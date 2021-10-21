<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class CmfSellcontractJiaofuModel extends CI_Model {
	public function __construct() {
		parent::__construct();
	}

	/*
	 * 获取搜索选项并分页
	 */
	function getSearchPage($limit,$start,$searchvalue,$keyword) {
		$this->db->select('*');
		$this->db->from('cmf_sellcontract_jiaofu');
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
		$this->db->from('cmf_sellcontract_jiaofu');
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
			$query = $this->db->get_where('cmf_sellcontract_jiaofu', array('id' => $id));
			return $query->row_array();
		} else {
			$query = $this->db->get('cmf_sellcontract_jiaofu');
			return $query->result_array();
		}
	}

	//获取分页
	public function get_systemlang($limit, $start) {
        $this->db->limit($limit, $start);
        $query = $this->db->get('cmf_sellcontract_jiaofu');
        $rows = $query->result();
        return $rows;
    }

	/**
	* 获取总数
	*/
	public function get_count() {
        return $this->db->count_all_results('cmf_sellcontract_jiaofu');
    }

	/**
	 * 插入cmf_sellcontract_jiaofu
	 */
	public function insert() {
		//prepare post data
            $CmfSellcontractJiaofuData = array(
                'customerid'  => $this->input->post('customerid'),
				'hetongid'    => $this->input->post('hetongid'),
				'productid'   => $this->input->post('productid'),
				'planid'      => $this->input->post('planid'),
				'num'         => $this->input->post('num'),
				'price'       => $this->input->post('price'),
				'jieshouren'  => $this->input->post('jieshouren'),
				'jiaofudate'  => $this->input->post('jiaofudate'),
				'beizhu'      => $this->input->post('beizhu'),
				'createman'   => $this->input->post('createman'),
				'createtime'  => $this->input->post('createtime'),
				'beiyong1'    => $this->input->post('beiyong1'),
				'beiyong2'    => $this->input->post('beiyong2'),
				'beiyong3'    => $this->input->post('beiyong3'),
				'jine'        => $this->input->post('jine')
            );

		$insert = $this->db->insert('cmf_sellcontract_jiaofu', $CmfSellcontractJiaofuData);
		if($insert) {
			return $this->db->insert_id();
		} else {
			return false;
		}
	}

	/**
	 * 更新cmf_sellcontract_jiaofu
	 */
	public function update($id) {
		//prepare cms page data
            $CmfSellcontractJiaofuData = array(
                'customerid'  => $this->input->post('customerid'),
				'hetongid'    => $this->input->post('hetongid'),
				'productid'   => $this->input->post('productid'),
				'planid'      => $this->input->post('planid'),
				'num'         => $this->input->post('num'),
				'price'       => $this->input->post('price'),
				'jieshouren'  => $this->input->post('jieshouren'),
				'jiaofudate'  => $this->input->post('jiaofudate'),
				'beizhu'      => $this->input->post('beizhu'),
				'createman'   => $this->input->post('createman'),
				'createtime'  => $this->input->post('createtime'),
				'beiyong1'    => $this->input->post('beiyong1'),
				'beiyong2'    => $this->input->post('beiyong2'),
				'beiyong3'    => $this->input->post('beiyong3'),
				'jine'        => $this->input->post('jine')
            );

		if(!empty($CmfSellcontractJiaofuData) && !empty($id)) {
			$update = $this->db->update('cmf_sellcontract_jiaofu' ,$CmfSellcontractJiaofuData, array('id' => $id));
			return $update?true:false;
		} else {
			return false;
		}
	}

	/**
	 * 删除cmf_sellcontract_jiaofu
	 */
	
	public function delete($id) {
		$delete = $this->db->delete('cmf_sellcontract_jiaofu' , array('id' => $id));
		return $delete?true:false;
	}
}
?>