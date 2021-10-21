<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class CmfSmsSendlistModel extends CI_Model {
	public function __construct() {
		parent::__construct();
	}

	/*
	 * 获取搜索选项并分页
	 */
	function getSearchPage($limit,$start,$searchvalue,$keyword) {
		$this->db->select('*');
		$this->db->from('cmf_sms_sendlist');
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
		$this->db->from('cmf_sms_sendlist');
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
			$query = $this->db->get_where('cmf_sms_sendlist', array('id' => $id));
			return $query->row_array();
		} else {
			$query = $this->db->get('cmf_sms_sendlist');
			return $query->result_array();
		}
	}

	//获取分页
	public function get_systemlang($limit, $start) {
        $this->db->limit($limit, $start);
        $query = $this->db->get('cmf_sms_sendlist');
        $rows = $query->result();
        return $rows;
    }

	/**
	* 获取总数
	*/
	public function get_count() {
        return $this->db->count_all_results('cmf_sms_sendlist');
    }

	/**
	 * 插入cmf_sms_sendlist
	 */
	public function insert() {
		//prepare post data
            $CmfSmsSendlistData = array(
                'msg'          => $this->input->post('msg'),
				'nowtime'      => $this->input->post('nowtime'),
				'attime'       => $this->input->post('attime'),
				'destcount'    => $this->input->post('destcount'),
				'result'       => $this->input->post('result'),
				'errmsg'       => $this->input->post('errmsg'),
				'trytimes'     => $this->input->post('trytimes'),
				'userid'       => $this->input->post('userid'),
				'batchid'      => $this->input->post('batchid'),
				'destid'       => $this->input->post('destid'),
				'leftcount'    => $this->input->post('leftcount')
            );

		$insert = $this->db->insert('cmf_sms_sendlist', $CmfSmsSendlistData);
		if($insert) {
			return $this->db->insert_id();
		} else {
			return false;
		}
	}

	/**
	 * 更新cmf_sms_sendlist
	 */
	public function update($id) {
		//prepare cms page data
            $CmfAccessbankData = array(
                'msg'          => $this->input->post('msg'),
				'nowtime'      => $this->input->post('nowtime'),
				'attime'       => $this->input->post('attime'),
				'destcount'    => $this->input->post('destcount'),
				'result'       => $this->input->post('result'),
				'errmsg'       => $this->input->post('errmsg'),
				'trytimes'     => $this->input->post('trytimes'),
				'userid'       => $this->input->post('userid'),
				'batchid'      => $this->input->post('batchid'),
				'destid'       => $this->input->post('destid'),
				'leftcount'    => $this->input->post('leftcount')
            );

		if(!empty($CmfAccessbankData) && !empty($id)) {
			$update = $this->db->update('cmf_sms_sendlist' ,$CmfAccessbankData, array('id' => $id));
			return $update?true:false;
		} else {
			return false;
		}
	}

	/**
	 * 删除cmf_sms_sendlist
	 */
	
	public function delete($id) {
		$delete = $this->db->delete('cmf_sms_sendlist' , array('id' => $id));
		return $delete?true:false;
	}
}
?>