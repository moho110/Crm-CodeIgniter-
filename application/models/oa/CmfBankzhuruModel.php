<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class CmfBankzhuruModel extends CI_Model {
	public function __construct() {
		parent::__construct();
	}

	/*
	 * 获取搜索选项并分页
	 */
	function getSearchPage($limit,$start,$searchvalue,$keyword) {
		$this->db->select('*');
		$this->db->from('cmf_bankzhuru');
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
		$this->db->from('cmf_bankzhuru');
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
			$query = $this->db->get_where('cmf_bankzhuru', array('billid' => $id));
			return $query->row_array();
		} else {
			$query = $this->db->get('cmf_bankzhuru');
			return $query->result_array();
		}
	}

	//获取分页
	public function get_systemlang($limit, $start) {
        $this->db->limit($limit, $start);
        $query = $this->db->get('cmf_bankzhuru');
        $rows = $query->result();
        return $rows;
    }

	/**
	* 获取总数
	*/
	public function get_count() {
        return $this->db->count_all_results('cmf_bankzhuru');
    }

	/**
	 * 插入cmf_bankzhuru
	 */
	public function insert() {
		//prepare post data
            $CmfAccessprepayData = array(
                'accountid'                => $this->input->post('accountid'),
				'jine'                     => $this->input->post('jine'),
				'userid'                   => $this->input->post('userid'),
				'opertime'                 => $this->input->post('opertime'),
				'inouttype'                => $this->input->post('inouttype'),
				'memo'                     => $this->input->post('memo')
            );

		$insert = $this->db->insert('cmf_bankzhuru', $CmfBankzhuruData);
		if($insert) {
			return $this->db->insert_id();
		} else {
			return false;
		}
	}

	/**
	 * 更新cmf_bankzhuru
	 */
	public function update($id) {
		//prepare cms page data
            $CmfAccessbankData = array(
                'accountid'                => $this->input->post('accountid'),
				'jine'                     => $this->input->post('jine'),
				'userid'                   => $this->input->post('userid'),
				'opertime'                 => $this->input->post('opertime'),
				'inouttype'                => $this->input->post('inouttype'),
				'memo'                     => $this->input->post('memo')
            );

		if(!empty($CmfBankzhuruData) && !empty($id)) {
			$update = $this->db->update('cmf_bankzhuru' ,$CmfBankzhuruData, array('billid' => $id));
			return $update?true:false;
		} else {
			return false;
		}
	}

	/**
	 * 删除cmf_bankzhuru
	 */
	
	public function delete($id) {
		$delete = $this->db->delete('cmf_bankzhuru' , array('billid' => $id));
		return $delete?true:false;
	}
}
?>