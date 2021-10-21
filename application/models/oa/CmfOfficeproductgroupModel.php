<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class CmfOfficeproductgroupModel extends CI_Model {
	public function __construct() {
		parent::__construct();
	}

	/*
	 * 获取搜索选项并分页
	 */
	function getSearchPage($limit,$start,$searchvalue,$keyword) {
		$this->db->select('*');
		$this->db->from('cmf_officeproductgroup');
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
		$this->db->from('cmf_officeproductgroup');
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
			$query = $this->db->get_where('cmf_officeproductgroup', array('ID' => $id));
			return $query->row_array();
		} else {
			$query = $this->db->get('cmf_officeproductgroup');
			return $query->result_array();
		}
	}

	//获取分页
	public function get_systemlang($limit, $start) {
        $this->db->limit($limit, $start);
        $query = $this->db->get('cmf_officeproductgroup');
        $rows = $query->result();
        return $rows;
    }

	/**
	* 获取总数
	*/
	public function get_count() {
        return $this->db->count_all_results('cmf_officeproductgroup');
    }

	/**
	 * 插入cmf_officeproductgroup
	 */
	public function insert() {
		//prepare post data
            $CmfOfficeproductgroupData = array(
                'Name'           => $this->input->post('Name'),
				'sort'           => $this->input->post('sort'),
				'preClassType'   => $this->input->post('preClassType')
            );

		$insert = $this->db->insert('cmf_officeproductgroup', $CmfOfficeproductgroupData);
		if($insert) {
			return $this->db->insert_id();
		} else {
			return false;
		}
	}

	/**
	 * 更新cmf_officeproductgroup
	 */
	public function update($id) {
		//prepare cms page data
            $CmfOfficeproductgroupData = array(
                'Name'           => $this->input->post('Name'),
				'sort'           => $this->input->post('sort'),
				'preClassType'   => $this->input->post('preClassType')
            );

		if(!empty($CmfOfficeproductgroupData) && !empty($id)) {
			$update = $this->db->update('cmf_officeproductgroup' ,$CmfOfficeproductgroupData, array('ID' => $id));
			return $update?true:false;
		} else {
			return false;
		}
	}

	/**
	 * 删除cmf_officeproductgroup
	 */
	
	public function delete($id) {
		$delete = $this->db->delete('cmf_officeproductgroup' , array('ID' => $id));
		return $delete?true:false;
	}
}
?>