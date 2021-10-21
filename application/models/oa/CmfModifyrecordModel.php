<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class CmfModifyrecordModel extends CI_Model {
	public function __construct() {
		parent::__construct();
	}

	/*
	 * 获取搜索选项并分页
	 */
	function getSearchPage($limit,$start,$searchvalue,$keyword) {
		$this->db->select('*');
		$this->db->from('cmf_modifyrecord');
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
		$this->db->from('cmf_modifyrecord');
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
			$query = $this->db->get_where('cmf_modifyrecord', array('id' => $id));
			return $query->row_array();
		} else {
			$query = $this->db->get('cmf_modifyrecord');
			return $query->result_array();
		}
	}

	//获取分页
	public function get_systemlang($limit, $start) {
        $this->db->limit($limit, $start);
        $query = $this->db->get('cmf_modifyrecord');
        $rows = $query->result();
        return $rows;
    }

	/**
	* 获取总数
	*/
	public function get_count() {
        return $this->db->count_all_results('cmf_modifyrecord');
    }

	/**
	 * 插入cmf_modifyrecord
	 */
	public function insert() {
		//prepare post data
            $CmfModifyrecordData = array(
                'tablename'     => $this->input->post('tablename'),
				'keyfield'      => $this->input->post('keyfield'),
				'keyvalue'      => $this->input->post('keyvalue'),
				'createman'     => $this->input->post('createman'),
				'modifycontent' => $this->input->post('modifycontent'),
				'createtime'    => $this->input->post('createtime')
            );

		$insert = $this->db->insert('cmf_modifyrecord', $CmfModifyrecordData);
		if($insert) {
			return $this->db->insert_id();
		} else {
			return false;
		}
	}

	/**
	 * 更新cmf_modifyrecord
	 */
	public function update($id) {
		//prepare cms page data
            $CmfAccessbankData = array(
                'tablename'     => $this->input->post('tablename'),
				'keyfield'      => $this->input->post('keyfield'),
				'keyvalue'      => $this->input->post('keyvalue'),
				'createman'     => $this->input->post('createman'),
				'modifycontent' => $this->input->post('modifycontent'),
				'createtime'    => $this->input->post('createtime')
            );

		if(!empty($CmfAccessbankData) && !empty($id)) {
			$update = $this->db->update('cmf_modifyrecord' ,$CmfAccessbankData, array('id' => $id));
			return $update?true:false;
		} else {
			return false;
		}
	}

	/**
	 * 删除cmf_modifyrecord
	 */
	
	public function delete($id) {
		$delete = $this->db->delete('cmf_modifyrecord' , array('id' => $id));
		return $delete?true:false;
	}
}
?>