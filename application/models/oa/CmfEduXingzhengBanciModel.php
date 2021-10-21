<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class CmfEduXingzhengBanciModel extends CI_Model {
	public function __construct() {
		parent::__construct();
	}

	/*
	 * 获取搜索选项并分页
	 */
	function getSearchPage($limit,$start,$searchvalue,$keyword) {
		$this->db->select('*');
		$this->db->from('cmf_edu_xingzheng_banci');
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
		$this->db->from('cmf_edu_xingzheng_banci');
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
			$query = $this->db->get_where('cmf_edu_xingzheng_banci', array('Id' => $id));
			return $query->row_array();
		} else {
			$query = $this->db->get('cmf_edu_xingzheng_banci');
			return $query->result_array();
		}
	}

	//获取分页
	public function get_systemlang($limit, $start) {
        $this->db->limit($limit, $start);
        $query = $this->db->get('cmf_edu_xingzheng_banci');
        $rows = $query->result();
        return $rows;
    }

	/**
	* 获取总数
	*/
	public function get_count() {
        return $this->db->count_all_results('cmf_edu_xingzheng_banci');
    }

	/**
	 * 插入cmf_edu_xingzheng_banci
	 */
	public function insert() {
		//prepare post data
            $CmfEduXingzhengBanciData = array(
                'className'            => $this->input->post('className'),
				'dutyTime'             => $this->input->post('dutyTime'),
				'isStartTimeEnable'    => $this->input->post('isStartTimeEnable'),
				'isEndTimeEnable'      => $this->input->post('isEndTimeEnable'),
				'startCardTime'        => $this->input->post('startCardTime'),
				'endCardTime'          => $this->input->post('endCardTime'),
				'startDelayCardTime'   => $this->input->post('startDelayCardTime'),
				'endDelayCardTime'     => $this->input->post('endDelayCardTime'),
				'laterTime'            => $this->input->post('laterTime'),
				'earlyTime'            => $this->input->post('earlyTime'),
				'classManageOne'       => $this->input->post('classManageOne'),
				'classManageTwo'       => $this->input->post('classManageTwo'),
				'creator'              => $this->input->post('creator'),
				'className'            => $this->input->post('className'),
				'createTime'           => $this->input->post('createTime')
            );

		$insert = $this->db->insert('cmf_edu_xingzheng_banci', $CmfEduXingzhengBanciData);
		if($insert) {
			return $this->db->insert_id();
		} else {
			return false;
		}
	}

	/**
	 * 更新cmf_edu_xingzheng_banci
	 */
	public function update($id) {
		//prepare cms page data
            $CmfEduXingzhengBanciData = array(
                'className'            => $this->input->post('className'),
				'dutyTime'             => $this->input->post('dutyTime'),
				'isStartTimeEnable'    => $this->input->post('isStartTimeEnable'),
				'isEndTimeEnable'      => $this->input->post('isEndTimeEnable'),
				'startCardTime'        => $this->input->post('startCardTime'),
				'endCardTime'          => $this->input->post('endCardTime'),
				'startDelayCardTime'   => $this->input->post('startDelayCardTime'),
				'endDelayCardTime'     => $this->input->post('endDelayCardTime'),
				'laterTime'            => $this->input->post('laterTime'),
				'earlyTime'            => $this->input->post('earlyTime'),
				'classManageOne'       => $this->input->post('classManageOne'),
				'classManageTwo'       => $this->input->post('classManageTwo'),
				'creator'              => $this->input->post('creator'),
				'className'            => $this->input->post('className'),
				'createTime'           => $this->input->post('createTime')
            );

		if(!empty($CmfEduXingzhengBanciData) && !empty($id)) {
			$update = $this->db->update('cmf_edu_xingzheng_banci' ,$CmfEduXingzhengBanciData, array('Id' => $id));
			return $update?true:false;
		} else {
			return false;
		}
	}

	/**
	 * 删除cmf_edu_xingzheng_banci
	 */
	
	public function delete($id) {
		$delete = $this->db->delete('cmf_edu_xingzheng_banci' , array('Id' => $id));
		return $delete?true:false;
	}
}
?>