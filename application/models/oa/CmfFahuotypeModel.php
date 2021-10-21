<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class CmfFahuotypeModel extends CI_Model {
	public function __construct() {
		parent::__construct();
	}

	/*
	 * 获取搜索选项并分页
	 */
	function getSearchPage($limit,$start,$searchvalue,$keyword) {
		$this->db->select('*');
		$this->db->from('cmf_fahuotype');
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
		$this->db->from('cmf_fahuotype');
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
			$query = $this->db->get_where('cmf_fahuotype', array('id' => $id));
			return $query->row_array();
		} else {
			$query = $this->db->get('cmf_fahuotype');
			return $query->result_array();
		}
	}

	//获取分页
	public function get_systemlang($limit, $start) {
        $this->db->limit($limit, $start);
        $query = $this->db->get('cmf_fahuotype');
        $rows = $query->result();
        return $rows;
    }

	/**
	* 获取总数
	*/
	public function get_count() {
        return $this->db->count_all_results('cmf_fahuotype');
    }

	/**
	 * 插入cmf_fahuotype
	 */
	public function insert() {
		//prepare post data
            $CmfFahuotypeData = array(
                'name'        => $this->input->post('name'),
				'kuaididan'   => $this->input->post('kuaididan'),
				'design'      => $this->input->post('design'),
				'linkman'     => $this->input->post('linkman'),
				'tel'         => $this->input->post('tel'),
				'shunxu'      => $this->input->post('shunxu')
            );

		$insert = $this->db->insert('cmf_fahuotype', $CmfFahuotypeData);
		if($insert) {
			return $this->db->insert_id();
		} else {
			return false;
		}
	}

	/**
	 * 更新cmf_fahuotype
	 */
	public function update($id) {
		//prepare cms page data
            $CmfFahuotypeData = array(
                'name'        => $this->input->post('name'),
				'kuaididan'   => $this->input->post('kuaididan'),
				'design'      => $this->input->post('design'),
				'linkman'     => $this->input->post('linkman'),
				'tel'         => $this->input->post('tel'),
				'shunxu'      => $this->input->post('shunxu')
            );

		if(!empty($CmfFahuotypeData) && !empty($id)) {
			$update = $this->db->update('cmf_fahuotype' ,$CmfFahuotypeData, array('id' => $id));
			return $update?true:false;
		} else {
			return false;
		}
	}

	/**
	 * 删除cmf_fahuotype
	 */
	
	public function delete($id) {
		$delete = $this->db->delete('cmf_fahuotype' , array('id' => $id));
		return $delete?true:false;
	}
}
?>