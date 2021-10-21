<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class CmfEduXingzhengJiabanbuxiuModel extends CI_Model {
	public function __construct() {
		parent::__construct();
	}

	/*
	 * 获取搜索选项并分页
	 */
	function getSearchPage($limit,$start,$searchvalue,$keyword) {
		$this->db->select('*');
		$this->db->from('cmf_edu_xingzheng_jiabanbuxiu');
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
		$this->db->from('cmf_edu_xingzheng_jiabanbuxiu');
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
			$query = $this->db->get_where('cmf_edu_xingzheng_jiabanbuxiu', array('Id' => $id));
			return $query->row_array();
		} else {
			$query = $this->db->get('cmf_edu_xingzheng_jiabanbuxiu');
			return $query->result_array();
		}
	}

	//获取分页
	public function get_systemlang($limit, $start) {
        $this->db->limit($limit, $start);
        $query = $this->db->get('cmf_edu_xingzheng_jiabanbuxiu');
        $rows = $query->result();
        return $rows;
    }

	/**
	* 获取总数
	*/
	public function get_count() {
        return $this->db->count_all_results('cmf_edu_xingzheng_jiabanbuxiu');
    }

	/**
	 * 插入cmf_edu_xingzheng_jiabanbuxiu
	 */
	public function insert() {
		//prepare post data
            $CmfEduXingzhengJiabanbuxiuData = array(
                'term'              => $this->input->post('term'),
				'department'        => $this->input->post('department'),
				'person'            => $this->input->post('person'),
				'delayWorkTime'     => $this->input->post('delayWorkTime'),
				'delayWorkNum'      => $this->input->post('delayWorkNum'),
				'buxiuTime'         => $this->input->post('buxiuTime'),
				'buxiuClass'        => $this->input->post('buxiuClass'),
				'delayWorkStatus'   => $this->input->post('delayWorkStatus'),
				'delayWorkID'       => $this->input->post('delayWorkID'),
				'delayWorkMan'      => $this->input->post('delayWorkMan'),
				'delayWorkExTime'   => $this->input->post('delayWorkExTime'),
				'buxiuStatus'       => $this->input->post('buxiuStatus'),
				'buxiuFlowId'       => $this->input->post('buxiuFlowId'),
				'buxiuExMan'        => $this->input->post('buxiuExMan'),
				'buxiuExTime'       => $this->input->post('buxiuExTime'),
				'personName'        => $this->input->post('personName')
            );

		$insert = $this->db->insert('cmf_edu_xingzheng_jiabanbuxiu', $CmfEduXingzhengJiabanbuxiuData);
		if($insert) {
			return $this->db->insert_id();
		} else {
			return false;
		}
	}

	/**
	 * 更新cmf_edu_xingzheng_jiabanbuxiu
	 */
	public function update($id) {
		//prepare cms page data
            $CmfEduXingzhengJiabanbuxiuData = array(
                'term'              => $this->input->post('term'),
				'department'        => $this->input->post('department'),
				'person'            => $this->input->post('person'),
				'delayWorkTime'     => $this->input->post('delayWorkTime'),
				'delayWorkNum'      => $this->input->post('delayWorkNum'),
				'buxiuTime'         => $this->input->post('buxiuTime'),
				'buxiuClass'        => $this->input->post('buxiuClass'),
				'delayWorkStatus'   => $this->input->post('delayWorkStatus'),
				'delayWorkID'       => $this->input->post('delayWorkID'),
				'delayWorkMan'      => $this->input->post('delayWorkMan'),
				'delayWorkExTime'   => $this->input->post('delayWorkExTime'),
				'buxiuStatus'       => $this->input->post('buxiuStatus'),
				'buxiuFlowId'       => $this->input->post('buxiuFlowId'),
				'buxiuExMan'        => $this->input->post('buxiuExMan'),
				'buxiuExTime'       => $this->input->post('buxiuExTime'),
				'personName'        => $this->input->post('personName')
            );

		if(!empty($CmfEduXingzhengJiabanbuxiuData) && !empty($id)) {
			$update = $this->db->update('cmf_edu_xingzheng_jiabanbuxiu' ,$CmfEduXingzhengJiabanbuxiuData, array('Id' => $id));
			return $update?true:false;
		} else {
			return false;
		}
	}

	/**
	 * 删除cmf_edu_xingzheng_jiabanbuxiu
	 */
	
	public function delete($id) {
		$delete = $this->db->delete('cmf_edu_xingzheng_jiabanbuxiu' , array('Id' => $id));
		return $delete?true:false;
	}
}
?>