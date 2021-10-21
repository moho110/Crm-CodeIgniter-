<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class CmfUnitModel extends CI_Model {
	public function __construct() {
		parent::__construct();
	}

	/*
	 * 获取搜索选项并分页
	 */
	function getSearchPage($limit,$start,$searchvalue,$keyword) {
		$this->db->select('*');
		$this->db->from('cmf_unit');
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
		$this->db->from('cmf_unit');
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
			$query = $this->db->get_where('cmf_unit', array('id' => $id));
			return $query->row_array();
		} else {
			$query = $this->db->get('cmf_unit');
			return $query->result_array();
		}
	}

	//获取分页
	public function get_systemlang($limit, $start) {
        $this->db->limit($limit, $start);
        $query = $this->db->get('cmf_unit');
        $rows = $query->result();
        return $rows;
    }

	/**
	* 获取总数
	*/
	public function get_count() {
        return $this->db->count_all_results('cmf_unit');
    }

	/**
	 * 插入cmf_accessprepay
	 */
	public function insert() {
		//prepare post data
            $CmfUnitData = array(
                'UNIT_NAME'         => $this->input->post('UNIT_NAME'),
                'TEL_NO'            => $this->input->post('TEL_NO'),
                'FAX_NO'            => $this->input->post('FAX_NO'),
                'POST_NO'           => $this->input->post('POST_NO'),
                'ADDRESS'           => $this->input->post('ADDRESS'),
                'URL'               => $this->input->post('URL'),
                'EMAIL'             => $this->input->post('EMAIL'),
                'BANK_NAME'         => $this->input->post('BANK_NAME'),
                'BANK_NO'           => $this->input->post('BANK_NO'),
                'numzero'           => $this->input->post('numzero'),
                'buybillid'         => $this->input->post('buybillid'),
                'sellbillid'        => $this->input->post('sellbillid'),
                'stockoutbillid'    => $this->input->post('stockoutbillid'),
                'stockoutbillid'    => $this->input->post('stockoutbillid'),
                'stockchangebillid' => $this->input->post('stockchangebillid'),
                'zuzhuangbillid'    => $this->input->post('zuzhuangbillid'),
                'feiyongbillid'     => $this->input->post('feiyongbillid'),
                'prepaybillid'      => $this->input->post('prepaybillid'),
                'preshoubillid'     => $this->input->post('preshoubillid'),
                'dingjiagongshi'    => $this->input->post('dingjiagongshi')
            );

		$insert = $this->db->insert('cmf_unit', $CmfUnitData);
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
            $CmfUnitData = array(
                'UNIT_NAME'         => $this->input->post('UNIT_NAME'),
                'TEL_NO'            => $this->input->post('TEL_NO'),
                'FAX_NO'            => $this->input->post('FAX_NO'),
                'POST_NO'           => $this->input->post('POST_NO'),
                'ADDRESS'           => $this->input->post('ADDRESS'),
                'URL'               => $this->input->post('URL'),
                'EMAIL'             => $this->input->post('EMAIL'),
                'BANK_NAME'         => $this->input->post('BANK_NAME'),
                'BANK_NO'           => $this->input->post('BANK_NO'),
                'numzero'           => $this->input->post('numzero'),
                'buybillid'         => $this->input->post('buybillid'),
                'sellbillid'        => $this->input->post('sellbillid'),
                'stockoutbillid'    => $this->input->post('stockoutbillid'),
                'stockoutbillid'    => $this->input->post('stockoutbillid'),
                'stockchangebillid' => $this->input->post('stockchangebillid'),
                'zuzhuangbillid'    => $this->input->post('zuzhuangbillid'),
                'feiyongbillid'     => $this->input->post('feiyongbillid'),
                'prepaybillid'      => $this->input->post('prepaybillid'),
                'preshoubillid'     => $this->input->post('preshoubillid'),
                'dingjiagongshi'    => $this->input->post('dingjiagongshi')
            );

		if(!empty($CmfUnitData) && !empty($id)) {
			$update = $this->db->update('cmf_unit' ,$CmfUnitData, array('id' => $id));
			return $update?true:false;
		} else {
			return false;
		}
	}

	/**
	 * 删除cmf_accessprepay
	 */
	
	public function delete($id) {
		$delete = $this->db->delete('cmf_unit' , array('id' => $id));
		return $delete?true:false;
	}
}
?>