<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class CmfHrmsSocialrelationModel extends CI_Model {
	public function __construct() {
		parent::__construct();
	}

	/*
	 * 获取搜索选项并分页
	 */
	function getSearchPage($limit,$start,$searchvalue,$keyword) {
		$this->db->select('*');
		$this->db->from('cmf_hrms_socialrelation');
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
		$this->db->from('cmf_hrms_socialrelation');
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
			$query = $this->db->get_where('cmf_hrms_socialrelation', array('ID' => $id));
			return $query->row_array();
		} else {
			$query = $this->db->get('cmf_hrms_socialrelation');
			return $query->result_array();
		}
	}

	//获取分页
	public function get_systemlang($limit, $start) {
        $this->db->limit($limit, $start);
        $query = $this->db->get('cmf_hrms_socialrelation');
        $rows = $query->result();
        return $rows;
    }

	/**
	* 获取总数
	*/
	public function get_count() {
        return $this->db->count_all_results('cmf_hrms_socialrelation');
    }

	/**
	 * 插入cmf_hrms_socialrelation
	 */
	public function insert() {
		//prepare post data
            $CmfHrmsSocialrelationData = array(
                'relation'      => $this->input->post('relation'),
				'name'          => $this->input->post('name'),
				'political'     => $this->input->post('political'),
				'company'       => $this->input->post('company'),
				'staff'         => $this->input->post('staff'),
				'creator'       => $this->input->post('creator'),
				'createTime'    => $this->input->post('createTime'),
				'workId'        => $this->input->post('workId'),
				'named'         => $this->input->post('named'),
				'inDepartment'  => $this->input->post('inDepartment'),
				'workAddress'   => $this->input->post('workAddress'),
				'telephone'     => $this->input->post('telephone')
            );

		$insert = $this->db->insert('cmf_hrms_socialrelation', $CmfHrmsSocialrelationData);
		if($insert) {
			return $this->db->insert_id();
		} else {
			return false;
		}
	}

	/**
	 * 更新cmf_hrms_socialrelation
	 */
	public function update($id) {
		//prepare cms page data
            $CmfHrmsSocialrelationData = array(
                'relation'      => $this->input->post('relation'),
				'name'          => $this->input->post('name'),
				'political'     => $this->input->post('political'),
				'company'       => $this->input->post('company'),
				'staff'         => $this->input->post('staff'),
				'creator'       => $this->input->post('creator'),
				'createTime'    => $this->input->post('createTime'),
				'workId'        => $this->input->post('workId'),
				'named'         => $this->input->post('named'),
				'inDepartment'  => $this->input->post('inDepartment'),
				'workAddress'   => $this->input->post('workAddress'),
				'telephone'     => $this->input->post('telephone')
            );

		if(!empty($CmfHrmsSocialrelationData) && !empty($id)) {
			$update = $this->db->update('cmf_hrms_socialrelation' ,$CmfHrmsSocialrelationData, array('ID' => $id));
			return $update?true:false;
		} else {
			return false;
		}
	}

	/**
	 * 删除cmf_hrms_socialrelation
	 */
	
	public function delete($id) {
		$delete = $this->db->delete('cmf_hrms_socialrelation' , array('ID' => $id));
		return $delete?true:false;
	}
}
?>