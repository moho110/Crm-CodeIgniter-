<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class CmfCrmMytableModel extends CI_Model {
	public function __construct() {
		parent::__construct();
	}

	/*
	 * 获取搜索选项并分页
	 */
	function getSearchPage($limit,$start,$searchvalue,$keyword) {
		$this->db->select('*');
		$this->db->from('cmf_crm_mytable');
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
		$this->db->from('cmf_crm_mytable');
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
			$query = $this->db->get_where('cmf_crm_mytable', array('Id' => $id));
			return $query->row_array();
		} else {
			$query = $this->db->get('cmf_crm_mytable');
			return $query->result_array();
		}
	}

	//获取分页
	public function get_systemlang($limit, $start) {
        $this->db->limit($limit, $start);
        $query = $this->db->get('cmf_crm_mytable');
        $rows = $query->result();
        return $rows;
    }

	/**
	* 获取总数
	*/
	public function get_count() {
        return $this->db->count_all_results('cmf_crm_mytable');
    }

	/**
	 * 插入cmf_crm_mytable
	 */
	public function insert() {
		//prepare post data
            $CmfCrmMytableData = array(
                'moduleId'            => $this->input->post('moduleId'),
				'moduleName'          => $this->input->post('moduleName'),
				'modulePosition'      => $this->input->post('modulePosition'),
				'moduleAttr'          => $this->input->post('moduleAttr'),
				'displayLineNumber'   => $this->input->post('displayLineNumber'),
				'scrollDisplay'       => $this->input->post('scrollDisplay'),
				'creator'             => $this->input->post('creator'),
				'createTime'          => $this->input->post('createTime'),
				'memo'                => $this->input->post('memo')
            );

		$insert = $this->db->insert('cmf_crm_mytable', $CmfCrmMytableData);
		if($insert) {
			return $this->db->insert_id();
		} else {
			return false;
		}
	}

	/**
	 * 更新cmf_crm_mytable
	 */
	public function update($id) {
		//prepare cms page data
            $CmfCrmMytableData = array(
                'moduleId'            => $this->input->post('moduleId'),
				'moduleName'          => $this->input->post('moduleName'),
				'modulePosition'      => $this->input->post('modulePosition'),
				'moduleAttr'          => $this->input->post('moduleAttr'),
				'displayLineNumber'   => $this->input->post('displayLineNumber'),
				'scrollDisplay'       => $this->input->post('scrollDisplay'),
				'creator'             => $this->input->post('creator'),
				'createTime'          => $this->input->post('createTime'),
				'memo'                => $this->input->post('memo')
            );

		if(!empty($CmfCrmMytableData) && !empty($id)) {
			$update = $this->db->update('cmf_crm_mytable' ,$CmfCrmMytableData, array('Id' => $id));
			return $update?true:false;
		} else {
			return false;
		}
	}

	/**
	 * 删除cmf_crm_mytable
	 */
	
	public function delete($id) {
		$delete = $this->db->delete('cmf_crm_mytable' , array('Id' => $id));
		return $delete?true:false;
	}
}
?>