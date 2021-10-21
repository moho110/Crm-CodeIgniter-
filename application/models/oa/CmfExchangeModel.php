<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class CmfExchangeModel extends CI_Model {
	public function __construct() {
		parent::__construct();
	}

	/*
	 * 获取搜索选项并分页
	 */
	function getSearchPage($limit,$start,$searchvalue,$keyword) {
		$this->db->select('*');
		$this->db->from('cmf_exchange');
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
		$this->db->from('cmf_exchange');
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
			$query = $this->db->get_where('cmf_exchange', array('ROWID' => $id));
			return $query->row_array();
		} else {
			$query = $this->db->get('cmf_exchange');
			return $query->result_array();
		}
	}

	//获取分页
	public function get_systemlang($limit, $start) {
        $this->db->limit($limit, $start);
        $query = $this->db->get('cmf_exchange');
        $rows = $query->result();
        return $rows;
    }

	/**
	* 获取总数
	*/
	public function get_count() {
        return $this->db->count_all_results('cmf_exchange');
    }

	/**
	 * 插入cmf_exchange
	 */
	public function insert() {
		//prepare post data
            $CmfExchangeData = array(
                'customid'     => $this->input->post('customid'),
				'prodid'       => $this->input->post('prodid'),
				'xinghao'      => $this->input->post('xinghao'),
				'guige'        => $this->input->post('guige'),
				'integral'     => $this->input->post('integral'),
				'createtime'   => $this->input->post('createtime'),
				'createman'    => $this->input->post('createman'),
				'prodname'     => $this->input->post('prodname'),
				'exchangenum'  => $this->input->post('exchangenum'),
				'stockid'      => $this->input->post('stockid'),
				'beizhu'       => $this->input->post('beizhu')
            );

		$insert = $this->db->insert('cmf_exchange', $CmfExchangeData);
		if($insert) {
			return $this->db->insert_id();
		} else {
			return false;
		}
	}

	/**
	 * 更新cmf_exchange
	 */
	public function update($id) {
		//prepare cms page data
            $CmfExchangeData = array(
                'customid'     => $this->input->post('customid'),
				'prodid'       => $this->input->post('prodid'),
				'xinghao'      => $this->input->post('xinghao'),
				'guige'        => $this->input->post('guige'),
				'integral'     => $this->input->post('integral'),
				'createtime'   => $this->input->post('createtime'),
				'createman'    => $this->input->post('createman'),
				'prodname'     => $this->input->post('prodname'),
				'exchangenum'  => $this->input->post('exchangenum'),
				'stockid'      => $this->input->post('stockid'),
				'beizhu'       => $this->input->post('beizhu')
            );

		if(!empty($CmfExchangeData) && !empty($id)) {
			$update = $this->db->update('cmf_exchange' ,$CmfExchangeData, array('ROWID' => $id));
			return $update?true:false;
		} else {
			return false;
		}
	}

	/**
	 * 删除cmf_exchange
	 */
	
	public function delete($id) {
		$delete = $this->db->delete('cmf_exchange' , array('ROWID' => $id));
		return $delete?true:false;
	}
}
?>