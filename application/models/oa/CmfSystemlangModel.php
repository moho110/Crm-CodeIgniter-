<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class CmfSystemlangModel extends CI_Model {
	public function __construct() {
		parent::__construct();
	}

	/*
	 * 获取搜索选项并分页
	 */
	function getSearchPage($limit,$start = 1,$searchvalue,$keyword) {
		$this->db->select('*');
		$this->db->from('cmf_systemlang');
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
		$this->db->from('cmf_systemlang');
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
			$query = $this->db->get_where('cmf_systemlang', array('systemlangid' => $id));
			return $query->row_array();
		} else {
			$query = $this->db->get('cmf_systemlang');
			return $query->result_array();
		}
	}

	//获取分页
	public function get_systemlang($limit, $start = 1) {
        $this->db->limit($limit, $start);
        $query = $this->db->get('cmf_systemlang');
        $rows = $query->result();
        return $rows;
    }

	/**
	* 获取总数
	*/
	public function get_count() {
        return $this->db->count_all_results('cmf_systemlang');
    }

	/**
	 * 插入cmf_accessprepay
	 */
	public function insert() {
		//prepare post data
            $CmfSystemlangData = array(
                'fieldname'  => $this->input->post('fieldname'),
                'tablename'  => $this->input->post('tablename'),
                'chinese'    => $this->input->post('chinese'),
                'english'    => $this->input->post('english'),
                'remark'     => $this->input->post('remark')
            );

		$insert = $this->db->insert('cmf_systemlang', $CmfSystemlangData);
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
            $CmfSystemlangData = array(
                'fieldname'  => $this->input->post('fieldname'),
                'tablename'  => $this->input->post('tablename'),
                'chinese'    => $this->input->post('chinese'),
                'english'    => $this->input->post('english'),
                'remark'     => $this->input->post('remark')
            );

		if(!empty($CmfSystemlangData) && !empty($id)) {
			$update = $this->db->update('cmf_systemlang' ,$CmfSystemlangData, array('systemlangid' => $id));
			return $update?true:false;
		} else {
			return false;
		}
	}

	/**
	 * 删除cmf_accessprepay
	 */
	
	public function delete($id) {
		$delete = $this->db->delete('cmf_systemlang' , array('systemlangid' => $id));
		return $delete?true:false;
	}
}
?>