<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class CmfEduXingzhengTiaobanxianghuModel extends CI_Model {
	public function __construct() {
		parent::__construct();
	}

	/*
	 * 获取搜索选项并分页
	 */
	function getSearchPage($limit,$start,$searchvalue,$keyword) {
		$this->db->select('*');
		$this->db->from('cmf_edu_xingzheng_tiaobanxianghu');
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
		$this->db->from('cmf_edu_xingzheng_tiaobanxianghu');
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
			$query = $this->db->get_where('cmf_edu_xingzheng_tiaobanxianghu', array('ID' => $id));
			return $query->row_array();
		} else {
			$query = $this->db->get('cmf_edu_xingzheng_tiaobanxianghu');
			return $query->result_array();
		}
	}

	//获取分页
	public function get_systemlang($limit, $start) {
        $this->db->limit($limit, $start);
        $query = $this->db->get('cmf_edu_xingzheng_tiaobanxianghu');
        $rows = $query->result();
        return $rows;
    }

	/**
	* 获取总数
	*/
	public function get_count() {
        return $this->db->count_all_results('cmf_edu_xingzheng_tiaobanxianghu');
    }

	/**
	 * 插入cmf_edu_xingzheng_tiaobanxianghu
	 */
	public function insert() {
		//prepare post data
            $CmfEduXingzhengTiaobanxianghuData = array(
                'term'             => $this->input->post('term'),
				'oriDepartment'    => $this->input->post('oriDepartment'),
				'oriPerson'        => $this->input->post('oriPerson'),
				'oriStartTime'     => $this->input->post('oriStartTime'),
				'oriStart'         => $this->input->post('oriStart'),
				'newDepartment'    => $this->input->post('newDepartment'),
				'newCruit'         => $this->input->post('newCruit'),
				'newStartTime'     => $this->input->post('newStartTime'),
				'exStatus'         => $this->input->post('exStatus'),
				'workFlowID'       => $this->input->post('workFlowID'),
				'exMan'            => $this->input->post('exMan'),
				'exTime'           => $this->input->post('exTime'),
				'oriPersonName'    => $this->input->post('oriPersonName'),
				'newPersonName'    => $this->input->post('newPersonName')
            );

		$insert = $this->db->insert('cmf_edu_xingzheng_tiaobanxianghu', $CmfEduXingzhengTiaobanxianghuData);
		if($insert) {
			return $this->db->insert_id();
		} else {
			return false;
		}
	}

	/**
	 * 更新cmf_edu_xingzheng_tiaobanxianghu
	 */
	public function update($id) {
		//prepare cms page data
            $CmfEduXingzhengTiaobanxianghuData = array(
                'term'             => $this->input->post('term'),
				'oriDepartment'    => $this->input->post('oriDepartment'),
				'oriPerson'        => $this->input->post('oriPerson'),
				'oriStartTime'     => $this->input->post('oriStartTime'),
				'oriStart'         => $this->input->post('oriStart'),
				'newDepartment'    => $this->input->post('newDepartment'),
				'newCruit'         => $this->input->post('newCruit'),
				'newStartTime'     => $this->input->post('newStartTime'),
				'exStatus'         => $this->input->post('exStatus'),
				'workFlowID'       => $this->input->post('workFlowID'),
				'exMan'            => $this->input->post('exMan'),
				'exTime'           => $this->input->post('exTime'),
				'oriPersonName'    => $this->input->post('oriPersonName'),
				'newPersonName'    => $this->input->post('newPersonName')
            );

		if(!empty($CmfEduXingzhengTiaobanxianghuData) && !empty($id)) {
			$update = $this->db->update('cmf_edu_xingzheng_tiaobanxianghu' ,$CmfEduXingzhengTiaobanxianghuData, array('ID' => $id));
			return $update?true:false;
		} else {
			return false;
		}
	}

	/**
	 * 删除cmf_edu_xingzheng_tiaobanxianghu
	 */
	
	public function delete($id) {
		$delete = $this->db->delete('cmf_edu_xingzheng_tiaobanxianghu' , array('ID' => $id));
		return $delete?true:false;
	}
}
?>