<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class CmfSystemconfigModel extends CI_Model {
	public function __construct() {
		parent::__construct();
	}

	/*
	 * 获取搜索选项并分页
	 */
	function getSearchPage($limit,$start,$searchvalue,$keyword) {
		$this->db->select('*');
		$this->db->from('cmf_systemconfig');
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
		$this->db->from('cmf_systemconfig');
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
			$query = $this->db->get_where('cmf_systemconfig', array('MODULE' => $id));
			return $query->row_array();
		} else {
			$query = $this->db->get('cmf_systemconfig');
			return $query->result_array();
		}
	}

	//获取分页
	public function get_systemlang($limit, $start) {
        $this->db->limit($limit, $start);
        $query = $this->db->get('cmf_systemconfig');
        $rows = $query->result();
        return $rows;
    }

	/**
	* 获取总数
	*/
	public function get_count() {
        return $this->db->count_all_results('cmf_systemconfig');
    }

	/**
	 * 插入cmf_accessprepay
	 */
	public function insert() {
		//prepare post data
            $CmfSystemconfigData = array(
                'CONTENT'    => $this->input->post('CONTENT'),
                'UNIT'       => $this->input->post('UNIT'),
                'STATUS'     => $this->input->post('STATUS'),
                'MEMO'       => $this->input->post('MEMO'),
                'SHORTCODE'  => $this->input->post('SHORTCODE'),
                'TRANSCODE'  => $this->input->post('TRANSCODE')
            );

		$insert = $this->db->insert('cmf_systemconfig', $CmfSystemconfigData);
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
            $CmfSystemconfigData = array(
                'CONTENT'    => $this->input->post('CONTENT'),
                'UNIT'       => $this->input->post('UNIT'),
                'STATUS'     => $this->input->post('STATUS'),
                'MEMO'       => $this->input->post('MEMO'),
                'SHORTCODE'  => $this->input->post('SHORTCODE'),
                'TRANSCODE'  => $this->input->post('TRANSCODE')
            );

		if(!empty($CmfSystemconfigata) && !empty($id)) {
			$update = $this->db->update('cmf_systemconfig' ,$CmfSystemconfigData, array('MODULE' => $id));
			return $update?true:false;
		} else {
			return false;
		}
	}

	/**
	 * 删除cmf_accessprepay
	 */
	
	public function delete($id) {
		$delete = $this->db->delete('cmf_systemconfig' , array('MODULE' => $id));
		return $delete?true:false;
	}
}
?>