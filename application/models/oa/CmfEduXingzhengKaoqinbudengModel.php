<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class CmfEduXingzhengKaoqinbudengModel extends CI_Model {
	public function __construct() {
		parent::__construct();
	}

	/*
	 * 获取搜索选项并分页
	 */
	function getSearchPage($limit,$start,$searchvalue,$keyword) {
		$this->db->select('*');
		$this->db->from('cmf_edu_xingzheng_kaoqinbudeng');
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
		$this->db->from('cmf_edu_xingzheng_kaoqinbudeng');
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
			$query = $this->db->get_where('cmf_edu_xingzheng_kaoqinbudeng', array('Id' => $id));
			return $query->row_array();
		} else {
			$query = $this->db->get('cmf_edu_xingzheng_kaoqinbudeng');
			return $query->result_array();
		}
	}

	//获取分页
	public function get_systemlang($limit, $start) {
        $this->db->limit($limit, $start);
        $query = $this->db->get('cmf_edu_xingzheng_kaoqinbudeng');
        $rows = $query->result();
        return $rows;
    }

	/**
	* 获取总数
	*/
	public function get_count() {
        return $this->db->count_all_results('cmf_edu_xingzheng_kaoqinbudeng');
    }

	/**
	 * 插入cmf_edu_xingzheng_kaoqinbudeng
	 */
	public function insert() {
		//prepare post data
            $CmfEduXingzhengKaoqinbudengData = array(
                'term'           => $this->input->post('term'),
				'department'     => $this->input->post('department'),
				'person'         => $this->input->post('person'),
				'time'           => $this->input->post('time'),
				'day'            => $this->input->post('day'),
				'class'          => $this->input->post('class'),
				'budengProject'  => $this->input->post('budengProject'),
				'budengStatus'   => $this->input->post('budengStatus'),
				'workFlowID'     => $this->input->post('workFlowID'),
				'exMan'          => $this->input->post('exMan'),
				'exTime'         => $this->input->post('exTime'),
				'personName'     => $this->input->post('personName')
            );

		$insert = $this->db->insert('cmf_edu_xingzheng_kaoqinbudeng', $CmfEduXingzhengKaoqinbudengData);
		if($insert) {
			return $this->db->insert_id();
		} else {
			return false;
		}
	}

	/**
	 * 更新cmf_edu_xingzheng_kaoqinbudeng
	 */
	public function update($id) {
		//prepare cms page data
            $CmfEduXingzhengKaoqinbudengData = array(
                'term'           => $this->input->post('term'),
				'department'     => $this->input->post('department'),
				'person'         => $this->input->post('person'),
				'time'           => $this->input->post('time'),
				'day'            => $this->input->post('day'),
				'class'          => $this->input->post('class'),
				'budengProject'  => $this->input->post('budengProject'),
				'budengStatus'   => $this->input->post('budengStatus'),
				'workFlowID'     => $this->input->post('workFlowID'),
				'exMan'          => $this->input->post('exMan'),
				'exTime'         => $this->input->post('exTime'),
				'personName'     => $this->input->post('personName')
            );

		if(!empty($CmfEduXingzhengKaoqinbudengData) && !empty($id)) {
			$update = $this->db->update('cmf_edu_xingzheng_kaoqinbudeng' ,$CmfEduXingzhengKaoqinbudengData, array('Id' => $id));
			return $update?true:false;
		} else {
			return false;
		}
	}

	/**
	 * 删除cmf_edu_xingzheng_kaoqinbudeng
	 */
	
	public function delete($id) {
		$delete = $this->db->delete('cmf_edu_xingzheng_kaoqinbudeng' , array('Id' => $id));
		return $delete?true:false;
	}
}
?>