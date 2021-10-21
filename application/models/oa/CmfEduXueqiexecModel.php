<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class CmfEduXueqiexecModel extends CI_Model {
	public function __construct() {
		parent::__construct();
	}

	/*
	 * 获取搜索选项并分页
	 */
	function getSearchPage($limit,$start,$searchvalue,$keyword) {
		$this->db->select('*');
		$this->db->from('cmf_edu_xueqiexec');
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
		$this->db->from('cmf_edu_xueqiexec');
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
			$query = $this->db->get_where('cmf_edu_xueqiexec', array('flowId' => $id));
			return $query->row_array();
		} else {
			$query = $this->db->get('cmf_edu_xueqiexec');
			return $query->result_array();
		}
	}

	//获取分页
	public function get_systemlang($limit, $start) {
        $this->db->limit($limit, $start);
        $query = $this->db->get('cmf_edu_xueqiexec');
        $rows = $query->result();
        return $rows;
    }

	/**
	* 获取总数
	*/
	public function get_count() {
        return $this->db->count_all_results('cmf_edu_xueqiexec');
    }

	/**
	 * 插入cmf_edu_xueqiexec
	 */
	public function insert() {
		//prepare post data
            $CmfEduXueqiexecData = array(
                'termName'              => $this->input->post('termName'),
				'recentTerm'            => $this->input->post('recentTerm'),
				'isMorningHaveClass'    => $this->input->post('isMorningHaveClass'),
				'isEveningHaveClass'    => $this->input->post('isEveningHaveClass'),
				'studyYear'             => $this->input->post('studyYear'),
				'isSatClass'            => $this->input->post('isSatClass'),
				'isSunClass'            => $this->input->post('isSunClass'),
				'startTime'             => $this->input->post('startTime'),
				'endTime'               => $this->input->post('endTime'),
				'memo'                  => $this->input->post('memo')
            );

		$insert = $this->db->insert('cmf_edu_xueqiexec', $CmfEduXueqiexecData);
		if($insert) {
			return $this->db->insert_id();
		} else {
			return false;
		}
	}

	/**
	 * 更新cmf_edu_xueqiexec
	 */
	public function update($id) {
		//prepare cms page data
            $CmfEduXueqiexecData = array(
                'termName'              => $this->input->post('termName'),
				'recentTerm'            => $this->input->post('recentTerm'),
				'isMorningHaveClass'    => $this->input->post('isMorningHaveClass'),
				'isEveningHaveClass'    => $this->input->post('isEveningHaveClass'),
				'studyYear'             => $this->input->post('studyYear'),
				'isSatClass'            => $this->input->post('isSatClass'),
				'isSunClass'            => $this->input->post('isSunClass'),
				'startTime'             => $this->input->post('startTime'),
				'endTime'               => $this->input->post('endTime'),
				'memo'                  => $this->input->post('memo')
            );

		if(!empty($CmfEduXueqiexecData) && !empty($id)) {
			$update = $this->db->update('cmf_edu_xueqiexec' ,$CmfEduXueqiexecData, array('flowId' => $id));
			return $update?true:false;
		} else {
			return false;
		}
	}

	/**
	 * 删除cmf_edu_xueqiexec
	 */
	
	public function delete($id) {
		$delete = $this->db->delete('cmf_edu_xueqiexec' , array('flowId' => $id));
		return $delete?true:false;
	}
}
?>