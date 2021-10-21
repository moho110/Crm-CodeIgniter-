<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class CmfCallchuliModel extends CI_Model {
	public function __construct() {
		parent::__construct();
	}

	/*
	 * 获取搜索选项并分页
	 */
	function getSearchPage($limit,$start,$searchvalue,$keyword) {
		$this->db->select('*');
		$this->db->from('cmf_callchuli');
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
		$this->db->from('cmf_callchuli');
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
			$query = $this->db->get_where('cmf_callchuli', array('id' => $id));
			return $query->row_array();
		} else {
			$query = $this->db->get('cmf_callchuli');
			return $query->result_array();
		}
	}

	//获取分页
	public function get_systemlang($limit, $start) {
        $this->db->limit($limit, $start);
        $query = $this->db->get('cmf_callchuli');
        $rows = $query->result();
        return $rows;
    }

	/**
	* 获取总数
	*/
	public function get_count() {
        return $this->db->count_all_results('cmf_callchuli');
    }

	/**
	 * 插入cmf_callchuli
	 */
	public function insert() {
		//prepare post data
            $CmfCallchuliData = array(
                'tel'               => $this->input->post('tel'),
				'customer'          => $this->input->post('customer'),
				'linkman'           => $this->input->post('linkman'),
				'content'           => $this->input->post('content'),
				'createman'         => $this->input->post('createman'),
				'createtime'        => $this->input->post('createtime'),
				'ifchuli'           => $this->input->post('ifchuli'),
				'chulitime'         => $this->input->post('chulitime'),
				'calltype'          => $this->input->post('calltype'),
				'callertype'        => $this->input->post('callertype'),
				'customerid'        => $this->input->post('customerid'),
				'chulicontent'      => $this->input->post('chulicontent'),
				'linkmanid'         => $this->input->post('linkmanid')
            );

		$insert = $this->db->insert('cmf_callchuli', $CmfCallchuliData);
		if($insert) {
			return $this->db->insert_id();
		} else {
			return false;
		}
	}

	/**
	 * 更新cmf_callchuli
	 */
	public function update($id) {
		//prepare cms page data
            $CmfCallchuliData = array(
                'tel'               => $this->input->post('tel'),
				'customer'          => $this->input->post('customer'),
				'linkman'           => $this->input->post('linkman'),
				'content'           => $this->input->post('content'),
				'createman'         => $this->input->post('createman'),
				'createtime'        => $this->input->post('createtime'),
				'ifchuli'           => $this->input->post('ifchuli'),
				'chulitime'         => $this->input->post('chulitime'),
				'calltype'          => $this->input->post('calltype'),
				'callertype'        => $this->input->post('callertype'),
				'customerid'        => $this->input->post('customerid'),
				'chulicontent'      => $this->input->post('chulicontent'),
				'linkmanid'         => $this->input->post('linkmanid')
            );

		if(!empty($CmfCallchuliData) && !empty($id)) {
			$update = $this->db->update('cmf_callchuli' ,$CmfCallchuliData, array('id' => $id));
			return $update?true:false;
		} else {
			return false;
		}
	}

	/**
	 * 删除cmf_callchuli
	 */
	
	public function delete($id) {
		$delete = $this->db->delete('cmf_callchuli' , array('id' => $id));
		return $delete?true:false;
	}
}
?>