<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class CmfHrmsFileLuyongModel extends CI_Model {
	public function __construct() {
		parent::__construct();
	}

	/*
	 * 获取搜索选项并分页
	 */
	function getSearchPage($limit,$start,$searchvalue,$keyword) {
		$this->db->select('*');
		$this->db->from('cmf_hrms_file_luyong');
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
		$this->db->from('cmf_hrms_file_luyong');
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
			$query = $this->db->get_where('cmf_hrms_file_luyong', array('Id' => $id));
			return $query->row_array();
		} else {
			$query = $this->db->get('cmf_hrms_file_luyong');
			return $query->result_array();
		}
	}

	//获取分页
	public function get_systemlang($limit, $start) {
        $this->db->limit($limit, $start);
        $query = $this->db->get('cmf_hrms_file_luyong');
        $rows = $query->result();
        return $rows;
    }

	/**
	* 获取总数
	*/
	public function get_count() {
        return $this->db->count_all_results('cmf_hrms_file_luyong');
    }

	/**
	 * 插入cmf_hrms_file_luyong
	 */
	public function insert() {
		//prepare post data
            $CmfHrmsFileLuyongData = array(
                'Name'           => $this->input->post('Name'),
				'sex'            => $this->input->post('sex'),
				'birthday'       => $this->input->post('birthday'),
				'national'       => $this->input->post('national'),
				'political'      => $this->input->post('political'),
				'IDNo'           => $this->input->post('IDNo'),
				'jiguan'         => $this->input->post('jiguan'),
				'college'        => $this->input->post('college'),
				'studyExp'       => $this->input->post('studyExp'),
				'staffName'      => $this->input->post('staffName'),
				'professional'   => $this->input->post('professional'),
				'email'          => $this->input->post('email'),
				'creator'        => $this->input->post('creator'),
				'createTime'     => $this->input->post('createTime')
            );

		$insert = $this->db->insert('cmf_hrms_file_luyong', $CmfHrmsFileLuyongData);
		if($insert) {
			return $this->db->insert_id();
		} else {
			return false;
		}
	}

	/**
	 * 更新cmf_hrms_file_luyong
	 */
	public function update($id) {
		//prepare cms page data
            $CmfHrmsFileLuyongData = array(
                'Name'           => $this->input->post('Name'),
				'sex'            => $this->input->post('sex'),
				'birthday'       => $this->input->post('birthday'),
				'national'       => $this->input->post('national'),
				'political'      => $this->input->post('political'),
				'IDNo'           => $this->input->post('IDNo'),
				'jiguan'         => $this->input->post('jiguan'),
				'college'        => $this->input->post('college'),
				'studyExp'       => $this->input->post('studyExp'),
				'staffName'      => $this->input->post('staffName'),
				'professional'   => $this->input->post('professional'),
				'email'          => $this->input->post('email'),
				'creator'        => $this->input->post('creator'),
				'createTime'     => $this->input->post('createTime')
            );

		if(!empty($CmfHrmsFileLuyongData) && !empty($id)) {
			$update = $this->db->update('cmf_hrms_file_luyong' ,$CmfHrmsFileLuyongData, array('Id' => $id));
			return $update?true:false;
		} else {
			return false;
		}
	}

	/**
	 * 删除cmf_hrms_file_luyong
	 */
	
	public function delete($id) {
		$delete = $this->db->delete('cmf_hrms_file_luyong' , array('Id' => $id));
		return $delete?true:false;
	}
}
?>