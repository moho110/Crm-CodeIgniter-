<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class CmfEmailModel extends CI_Model {
	public function __construct() {
		parent::__construct();
	}

	/*
	 * 获取搜索选项并分页
	 */
	function getSearchPage($limit,$start,$searchvalue,$keyword) {
		$this->db->select('*');
		$this->db->from('cmf_email');
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
		$this->db->from('cmf_email');
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
			$query = $this->db->get_where('cmf_email', array('EMAIL_ID' => $id));
			return $query->row_array();
		} else {
			$query = $this->db->get('cmf_email');
			return $query->result_array();
		}
	}

	//获取分页
	public function get_systemlang($limit, $start) {
        $this->db->limit($limit, $start);
        $query = $this->db->get('cmf_email');
        $rows = $query->result();
        return $rows;
    }

	/**
	* 获取总数
	*/
	public function get_count() {
        return $this->db->count_all_results('cmf_email');
    }

	/**
	 * 插入cmf_email
	 */
	public function insert() {
		//prepare post data
            $CmfEmailData = array(
                'FROM_ID'            => $this->input->post('FROM_ID'),
				'customers'          => $this->input->post('customers'),
				'supplys'            => $this->input->post('supplys'),
				'others'             => $this->input->post('others'),
				'SUBJECT'            => $this->input->post('SUBJECT'),
				'CONTENT'            => $this->input->post('CONTENT'),
				'SEND_TIME'          => $this->input->post('SEND_TIME'),
				'ATTACHMENT_ID'      => $this->input->post('ATTACHMENT_ID'),
				'ATTACHMENT_NAME'    => $this->input->post('ATTACHMENT_NAME'),
				'SEND_FLAG'          => $this->input->post('SEND_FLAG')
            );

		$insert = $this->db->insert('cmf_email', $CmfEmailData);
		if($insert) {
			return $this->db->insert_id();
		} else {
			return false;
		}
	}

	/**
	 * 更新cmf_email
	 */
	public function update($id) {
		//prepare cms page data
            $CmfEmailData = array(
                'FROM_ID'            => $this->input->post('FROM_ID'),
				'customers'          => $this->input->post('customers'),
				'supplys'            => $this->input->post('supplys'),
				'others'             => $this->input->post('others'),
				'SUBJECT'            => $this->input->post('SUBJECT'),
				'CONTENT'            => $this->input->post('CONTENT'),
				'SEND_TIME'          => $this->input->post('SEND_TIME'),
				'ATTACHMENT_ID'      => $this->input->post('ATTACHMENT_ID'),
				'ATTACHMENT_NAME'    => $this->input->post('ATTACHMENT_NAME'),
				'SEND_FLAG'          => $this->input->post('SEND_FLAG')
            );

		if(!empty($CmfEmailData) && !empty($id)) {
			$update = $this->db->update('cmf_email' ,$CmfEmailData, array('EMAIL_ID' => $id));
			return $update?true:false;
		} else {
			return false;
		}
	}

	/**
	 * 删除cmf_email
	 */
	
	public function delete($id) {
		$delete = $this->db->delete('cmf_email' , array('EMAIL_ID' => $id));
		return $delete?true:false;
	}
}
?>