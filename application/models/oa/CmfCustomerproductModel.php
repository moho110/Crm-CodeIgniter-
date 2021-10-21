<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class CmfCustomerproductModel extends CI_Model {
	public function __construct() {
		parent::__construct();
	}

	/*
	 * 获取搜索选项并分页
	 */
	function getSearchPage($limit,$start,$searchvalue,$keyword) {
		$this->db->select('*');
		$this->db->from('cmf_customerproduct');
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
		$this->db->from('cmf_customerproduct');
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
			$query = $this->db->get_where('cmf_customerproduct', array('ROWID' => $id));
			return $query->row_array();
		} else {
			$query = $this->db->get('cmf_customerproduct');
			return $query->result_array();
		}
	}

	//获取分页
	public function get_systemlang($limit, $start) {
        $this->db->limit($limit, $start);
        $query = $this->db->get('cmf_customerproduct');
        $rows = $query->result();
        return $rows;
    }

	/**
	* 获取总数
	*/
	public function get_count() {
        return $this->db->count_all_results('cmf_customerproduct');
    }

	/**
	 * 插入cmf_customerproduct
	 */
	public function insert() {
		//prepare post data
            $CmfAccessprepayData = array(
                'theme'              => $this->input->post('theme'),
				'priceMan'           => $this->input->post('priceMan'),
				'clients'            => $this->input->post('clients'),
				'reiceiver'          => $this->input->post('reiceiver'),
				'priceTime'          => $this->input->post('priceTime'),
				'count'              => $this->input->post('count'),
				'saleChance'         => $this->input->post('saleChance'),
				'jiaofuIntro'        => $this->input->post('jiaofuIntro'),
				'toPayIntro'         => $this->input->post('toPayIntro'),
				'packageExpIntro'    => $this->input->post('packageExpIntro'),
				'memo'               => $this->input->post('memo'),
				'attach'             => $this->input->post('attach'),
				'isExamine'          => $this->input->post('isExamine'),
				'creator'            => $this->input->post('creator'),
				'createTime'         => $this->input->post('createTime'),
				'examineMan'         => $this->input->post('examineMan'),
				'examineTime'        => $this->input->post('examineTime'),
				'unitid'             => $this->input->post('unitid')
            );

		$insert = $this->db->insert('cmf_customerproduct', $CmfAccessprepayData);
		if($insert) {
			return $this->db->insert_id();
		} else {
			return false;
		}
	}

	/**
	 * 更新cmf_customerproduct
	 */
	public function update($id) {
		//prepare cms page data
            $CmfAccessbankData = array(
                'theme'              => $this->input->post('theme'),
				'priceMan'           => $this->input->post('priceMan'),
				'clients'            => $this->input->post('clients'),
				'reiceiver'          => $this->input->post('reiceiver'),
				'priceTime'          => $this->input->post('priceTime'),
				'count'              => $this->input->post('count'),
				'saleChance'         => $this->input->post('saleChance'),
				'jiaofuIntro'        => $this->input->post('jiaofuIntro'),
				'toPayIntro'         => $this->input->post('toPayIntro'),
				'packageExpIntro'    => $this->input->post('packageExpIntro'),
				'memo'               => $this->input->post('memo'),
				'attach'             => $this->input->post('attach'),
				'isExamine'          => $this->input->post('isExamine'),
				'creator'            => $this->input->post('creator'),
				'createTime'         => $this->input->post('createTime'),
				'examineMan'         => $this->input->post('examineMan'),
				'examineTime'        => $this->input->post('examineTime'),
				'unitid'             => $this->input->post('unitid')
            );

		if(!empty($CmfAccessbankData) && !empty($id)) {
			$update = $this->db->update('cmf_customerproduct' ,$CmfAccessbankData, array('ROWID' => $id));
			return $update?true:false;
		} else {
			return false;
		}
	}

	/**
	 * 删除cmf_customerproduct
	 */
	
	public function delete($id) {
		$delete = $this->db->delete('cmf_customerproduct' , array('ROWID' => $id));
		return $delete?true:false;
	}
}
?>