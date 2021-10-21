<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class CmfEduXingzhengWorkCheckRegisterModel extends CI_Model {
	public function __construct() {
		parent::__construct();
	}

	/*
	 * 获取搜索选项并分页
	 */
	function getSearchPage($limit,$start,$searchvalue,$keyword) {
		$this->db->select('*');
		$this->db->from('cmf_edu_xingzheng_work_check_register');
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
		$this->db->from('cmf_edu_xingzheng_work_check_register');
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
			$query = $this->db->get_where('cmf_edu_xingzheng_work_check_register', array('ID' => $id));
			return $query->row_array();
		} else {
			$query = $this->db->get('cmf_edu_xingzheng_work_check_register');
			return $query->result_array();
		}
	}

	//获取分页
	public function get_systemlang($limit, $start) {
        $this->db->limit($limit, $start);
        $query = $this->db->get('cmf_edu_xingzheng_work_check_register');
        $rows = $query->result();
        return $rows;
    }

	/**
	* 获取总数
	*/
	public function get_count() {
        return $this->db->count_all_results('cmf_edu_xingzheng_work_check_register');
    }

	/**
	 * 插入cmf_edu_xingzheng_work_check_register
	 */
	public function insert() {
		//prepare post data
            $CmfEduXingzhengWorkCheckRegisterData = array(
                'schoolName'             => $this->input->post('schoolName'),
				'studyYear'              => $this->input->post('studyYear'),
				'name'                   => $this->input->post('name'),
				'userName'               => $this->input->post('userName'),
				'classRoom'              => $this->input->post('classRoom'),
				'staff'                  => $this->input->post('staff'),
				'fillDate'               => $this->input->post('fillDate'),
				'dutyAndYearObj'         => $this->input->post('dutyAndYearObj'),
				'personSummary'          => $this->input->post('personSummary'),
				'personSySign'           => $this->input->post('personSySign'),
				'personSySignDate'       => $this->input->post('personSySignDate'),
				'recentYearPunishThings' => $this->input->post('recentYearPunishThings'),
				'classRoomIdeal'         => $this->input->post('classRoomIdeal'),
				'rankandLevel'           => $this->input->post('rankandLevel'),
				'classRoomSign'          => $this->input->post('classRoomSign'),
				'classRoomDate'          => $this->input->post('classRoomDate'),
				'schoolOpinion'          => $this->input->post('schoolOpinion'),
				'ExLeaderGroupSign'      => $this->input->post('ExLeaderGroupSign'),
				'ExLeaderGroupSignDate'  => $this->input->post('ExLeaderGroupSignDate'),
				'personOpinion'          => $this->input->post('personOpinion'),
				'personSign'             => $this->input->post('personSign'),
				'personOpinionDate'      => $this->input->post('personOpinionDate'),
				'workFlow'               => $this->input->post('workFlow')
            );

		$insert = $this->db->insert('cmf_edu_xingzheng_work_check_register', $CmfEduXingzhengWorkCheckRegisterData);
		if($insert) {
			return $this->db->insert_id();
		} else {
			return false;
		}
	}

	/**
	 * 更新cmf_edu_xingzheng_work_check_register
	 */
	public function update($id) {
		//prepare cms page data
            $CmfEduXingzhengWorkCheckRegisterData = array(
                'schoolName'             => $this->input->post('schoolName'),
				'studyYear'              => $this->input->post('studyYear'),
				'name'                   => $this->input->post('name'),
				'userName'               => $this->input->post('userName'),
				'classRoom'              => $this->input->post('classRoom'),
				'staff'                  => $this->input->post('staff'),
				'fillDate'               => $this->input->post('fillDate'),
				'dutyAndYearObj'         => $this->input->post('dutyAndYearObj'),
				'personSummary'          => $this->input->post('personSummary'),
				'personSySign'           => $this->input->post('personSySign'),
				'personSySignDate'       => $this->input->post('personSySignDate'),
				'recentYearPunishThings' => $this->input->post('recentYearPunishThings'),
				'classRoomIdeal'         => $this->input->post('classRoomIdeal'),
				'rankandLevel'           => $this->input->post('rankandLevel'),
				'classRoomSign'          => $this->input->post('classRoomSign'),
				'classRoomDate'          => $this->input->post('classRoomDate'),
				'schoolOpinion'          => $this->input->post('schoolOpinion'),
				'ExLeaderGroupSign'      => $this->input->post('ExLeaderGroupSign'),
				'ExLeaderGroupSignDate'  => $this->input->post('ExLeaderGroupSignDate'),
				'personOpinion'          => $this->input->post('personOpinion'),
				'personSign'             => $this->input->post('personSign'),
				'personOpinionDate'      => $this->input->post('personOpinionDate'),
				'workFlow'               => $this->input->post('workFlow')
            );

		if(!empty($CmfEduXingzhengWorkCheckRegisterData) && !empty($id)) {
			$update = $this->db->update('cmf_edu_xingzheng_work_check_register' ,$CmfEduXingzhengWorkCheckRegisterData, array('ID' => $id));
			return $update?true:false;
		} else {
			return false;
		}
	}

	/**
	 * 删除cmf_edu_xingzheng_work_check_register
	 */
	
	public function delete($id) {
		$delete = $this->db->delete('cmf_edu_xingzheng_work_check_register' , array('ID' => $id));
		return $delete?true:false;
	}
}
?>