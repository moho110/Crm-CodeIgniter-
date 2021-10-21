<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class CmfAccesspreshouModel extends CI_Model {
	public function __construct() {
		parent::__construct();
	}

	/*
	 * 获取搜索选项并分页
	 */
	function getSearchPage($limit,$start,$searchvalue,$keyword) {
		$this->db->select('*');
		$this->db->from('cmf_accesspreshou');
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
		$this->db->from('cmf_accesspreshou');
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
			$query = $this->db->get_where('cmf_accesspreshou', array('id' => $id));
			return $query->row_array();
		} else {
			$query = $this->db->get('cmf_accesspreshou');
			return $query->result_array();
		}
	}

	//获取分页
	public function get_systemlang($limit, $start) {
        $this->db->limit($limit, $start);
        $query = $this->db->get('cmf_accesspreshou');
        $rows = $query->result();
        return $rows;
    }

	/**
	* 获取总数
	*/
	public function get_count() {
        return $this->db->count_all_results('cmf_accesspreshou');
    }

	/**
	 * 插入cmf_accesspreshou
	 */
	public function insert() {
		//prepare post data
            $CmfAccesspreshouData = array(
                'customerid'     => $this->input->post('customerid'),
				'linkman'        => $this->input->post('linkman'),
				'curchuzhi'      => $this->input->post('curchuzhi'),
				'accountid'      => $this->input->post('accountid'),
				'jine'           => $this->input->post('jine'),
				'opertype'       => $this->input->post('opertype'),
				'guanlianbillid' => $this->input->post('guanlianbillid'),
				'createman'      => $this->input->post('createman'),
				'createtime'     => $this->input->post('createtime'),
				'beizhu'         => $this->input->post('beizhu'),
				'billdeptid'     => $this->input->post('billdeptid')
            );

		$insert = $this->db->insert('cmf_accesspreshou', $CmfAccesspreshouData);
		if($insert) {
			return $this->db->insert_id();
		} else {
			return false;
		}
	}

	/**
	 * 更新cmf_accesspreshou
	 */
	public function update($id) {
		//prepare cms page data
            $CmfAccesspreshouData = array(
                'customerid'     => $this->input->post('customerid'),
				'linkman'        => $this->input->post('linkman'),
				'curchuzhi'      => $this->input->post('curchuzhi'),
				'accountid'      => $this->input->post('accountid'),
				'jine'           => $this->input->post('jine'),
				'opertype'       => $this->input->post('opertype'),
				'guanlianbillid' => $this->input->post('guanlianbillid'),
				'createman'      => $this->input->post('createman'),
				'createtime'     => $this->input->post('createtime'),
				'beizhu'         => $this->input->post('beizhu'),
				'billdeptid'     => $this->input->post('billdeptid')
            );

		if(!empty($CmfAccesspreshouData) && !empty($id)) {
			$update = $this->db->update('cmf_accesspreshou' ,$CmfAccesspreshouData, array('id' => $id));
			return $update?true:false;
		} else {
			return false;
		}
	}

	/**
	 * 删除cmf_accesspreshou
	 */
	
	public function delete($id) {
		$delete = $this->db->delete('cmf_accesspreshou' , array('id' => $id));
		return $delete?true:false;
	}
}
?>