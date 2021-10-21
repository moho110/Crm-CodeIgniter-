<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class CmfHrmsZprencaikuModel extends CI_Model {
	public function __construct() {
		parent::__construct();
	}

	/*
	 * 获取搜索选项并分页
	 */
	function getSearchPage($limit,$start,$searchvalue,$keyword) {
		$this->db->select('*');
		$this->db->from('cmf_hrms_zprencaiku');
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
		$this->db->from('cmf_hrms_zprencaiku');
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
			$query = $this->db->get_where('cmf_hrms_zprencaiku', array('ID' => $id));
			return $query->row_array();
		} else {
			$query = $this->db->get('cmf_hrms_zprencaiku');
			return $query->result_array();
		}
	}

	//获取分页
	public function get_systemlang($limit, $start) {
        $this->db->limit($limit, $start);
        $query = $this->db->get('cmf_hrms_zprencaiku');
        $rows = $query->result();
        return $rows;
    }

	/**
	* 获取总数
	*/
	public function get_count() {
        return $this->db->count_all_results('cmf_hrms_zprencaiku');
    }

	/**
	 * 插入cmf_hrms_zprencaiku
	 */
	public function insert() {
		//prepare post data
            $CmfHrmsZprencaikuData = array(
                'Name'                => $this->input->post('Name'),
				'sex'                 => $this->input->post('sex'),
				'contact'             => $this->input->post('contact'),
				'IDNo'                => $this->input->post('IDNo'),
				'national'            => $this->input->post('national'),
				'birthday'            => $this->input->post('birthday'),
				'political'           => $this->input->post('political'),
				'jiguan'              => $this->input->post('jiguan'),
				'hukouInPos'          => $this->input->post('hukouInPos'),
				'studyExp'            => $this->input->post('studyExp'),
				'staffName'           => $this->input->post('staffName'),
				'college'             => $this->input->post('college'),
				'professional'        => $this->input->post('professional'),
				'secPro'              => $this->input->post('secPro'),
				'email'               => $this->input->post('email'),
				'familyTelephone'     => $this->input->post('familyTelephone'),
				'familyAddr'          => $this->input->post('familyAddr'),
				'postalCode'          => $this->input->post('postalCode'),
				'edution'             => $this->input->post('edution'),
				'workExp'             => $this->input->post('workExp'),
				'selfEval'            => $this->input->post('selfEval'),
				'englishAbillity'     => $this->input->post('englishAbillity'),
				'traingExp'           => $this->input->post('traingExp'),
				'photo'               => $this->input->post('photo'),
				'attach'              => $this->input->post('attach'),
				'projectExp'          => $this->input->post('projectExp'),
				'resumeLetter'        => $this->input->post('resumeLetter'),
				'proObject'           => $this->input->post('proObject'),
				'luyongStatus'        => $this->input->post('luyongStatus'),
				'creator'             => $this->input->post('creator'),
				'createTime'          => $this->input->post('createTime')
            );

		$insert = $this->db->insert('cmf_hrms_zprencaiku', $CmfHrmsZprencaikuData);
		if($insert) {
			return $this->db->insert_id();
		} else {
			return false;
		}
	}

	/**
	 * 更新cmf_hrms_zprencaiku
	 */
	public function update($id) {
		//prepare cms page data
            $CmfHrmsZprencaikuData = array(
                'Name'                => $this->input->post('Name'),
				'sex'                 => $this->input->post('sex'),
				'contact'             => $this->input->post('contact'),
				'IDNo'                => $this->input->post('IDNo'),
				'national'            => $this->input->post('national'),
				'birthday'            => $this->input->post('birthday'),
				'political'           => $this->input->post('political'),
				'jiguan'              => $this->input->post('jiguan'),
				'hukouInPos'          => $this->input->post('hukouInPos'),
				'studyExp'            => $this->input->post('studyExp'),
				'staffName'           => $this->input->post('staffName'),
				'college'             => $this->input->post('college'),
				'professional'        => $this->input->post('professional'),
				'secPro'              => $this->input->post('secPro'),
				'email'               => $this->input->post('email'),
				'familyTelephone'     => $this->input->post('familyTelephone'),
				'familyAddr'          => $this->input->post('familyAddr'),
				'postalCode'          => $this->input->post('postalCode'),
				'edution'             => $this->input->post('edution'),
				'workExp'             => $this->input->post('workExp'),
				'selfEval'            => $this->input->post('selfEval'),
				'englishAbillity'     => $this->input->post('englishAbillity'),
				'traingExp'           => $this->input->post('traingExp'),
				'photo'               => $this->input->post('photo'),
				'attach'              => $this->input->post('attach'),
				'projectExp'          => $this->input->post('projectExp'),
				'resumeLetter'        => $this->input->post('resumeLetter'),
				'proObject'           => $this->input->post('proObject'),
				'luyongStatus'        => $this->input->post('luyongStatus'),
				'creator'             => $this->input->post('creator'),
				'createTime'          => $this->input->post('createTime')
            );

		if(!empty($CmfHrmsZprencaikuData) && !empty($id)) {
			$update = $this->db->update('cmf_hrms_zprencaiku' ,$CmfHrmsZprencaikuData, array('ID' => $id));
			return $update?true:false;
		} else {
			return false;
		}
	}

	/**
	 * 删除cmf_hrms_zprencaiku
	 */
	
	public function delete($id) {
		$delete = $this->db->delete('cmf_hrms_zprencaiku' , array('ID' => $id));
		return $delete?true:false;
	}
}
?>