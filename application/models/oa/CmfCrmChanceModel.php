<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class CmfCrmChanceModel extends CI_Model {
	public function __construct() {
		parent::__construct();
	}

	/*
	 * 获取搜索选项并分页
	 */
	function getSearchPage($limit,$start,$searchvalue,$keyword) {
		$this->db->select('*');
		$this->db->from('cmf_crm_chance');
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
		$this->db->from('cmf_crm_chance');
		$this->db->like($searchvalue,$keyword,'both');
		$this->db->where("$searchvalue LIKE '%$keyword%'");
		$query = $this->db->get();
		$rows = $query->result();
		return $rows;
	}

	//销售对比
    function getXiaoShou($limit, $start) {
    	$this->db->select('ccj.Id,ccj.stage,ccc.clientName,ccc.linkMan,ccc.preCount,ccc.preSignTime');
		$this->db->from('cmf_crm_chance as ccc');
		$this->db->join('cmf_crm_jieduan as ccj','ccj.Id=ccc.chanceId','left');
		$this->db->limit($limit, $start);
		$query = $this->db->get();
		$rows = $query->result();
		return $rows;
	}

	//销售对比明细
	function getXiaoShouDetails($id = "") {
		if(!empty($id)) {
			$this->db->select('ccj.Id,ccj.stage,ccc.clientName,ccc.linkMan,ccc.preCount,ccc.preSignTime');
			$this->db->from('cmf_crm_chance as ccc');
		$this->db->join('cmf_crm_jieduan as ccj','ccj.Id=ccc.chanceId','left');
			$query = $this->db->get_where('cmf_crm_chance', array('ccc.chanceId' => $id));
			return $query->row_array();
		} else {
			$query = $this->db->get('cmf_crm_chance');
			return $query->result_array();
		}
	}

	/**
	 * 获取列
	 */
	function getRows($id = "") {
		if(!empty($id)) {
			$query = $this->db->get_where('cmf_crm_chance', array('chanceId' => $id));
			return $query->row_array();
		} else {
			$query = $this->db->get('cmf_crm_chance');
			return $query->result_array();
		}
	}

	//获取分页
	public function get_systemlang($limit, $start) {
        $this->db->limit($limit, $start);
        $query = $this->db->get('cmf_crm_chance');
        $rows = $query->result();
        return $rows;
    }

	/**
	* 获取总数
	*/
	public function get_count() {
        return $this->db->count_all_results('cmf_crm_chance');
    }

	/**
	 * 插入cmf_crm_chance
	 */
	public function insert() {
		//prepare post data
            $CmfCrmChanceData = array(
                'chanceTheme'     => $this->input->post('chanceTheme'),
				'clientName'      => $this->input->post('clientName'),
				'linkMan'         => $this->input->post('linkMan'),
				'findTime'        => $this->input->post('findTime'),
				'clientNeed'      => $this->input->post('clientNeed'),
				'preSignTime'     => $this->input->post('preSignTime'),
				'preCount'        => $this->input->post('preCount'),
				'enable'          => $this->input->post('enable'),
				'recentStatus'    => $this->input->post('recentStatus'),
				'status'          => $this->input->post('status'),
				'creator'         => $this->input->post('creator'),
				'createTime'      => $this->input->post('createTime'),
				'bak'             => $this->input->post('bak'),
				'lastContactTime' => $this->input->post('lastContactTime'),
				'attach'          => $this->input->post('attach')
            );

		$insert = $this->db->insert('cmf_crm_chance', $CmfCrmChanceData);
		if($insert) {
			return $this->db->insert_id();
		} else {
			return false;
		}
	}

	/**
	 * 更新cmf_crm_chance
	 */
	public function update($id) {
		//prepare cms page data
            $CmfCrmChanceData = array(
                'chanceTheme'     => $this->input->post('chanceTheme'),
				'clientName'      => $this->input->post('clientName'),
				'linkMan'         => $this->input->post('linkMan'),
				'findTime'        => $this->input->post('findTime'),
				'clientNeed'      => $this->input->post('clientNeed'),
				'preSignTime'     => $this->input->post('preSignTime'),
				'preCount'        => $this->input->post('preCount'),
				'enable'          => $this->input->post('enable'),
				'recentStatus'    => $this->input->post('recentStatus'),
				'status'          => $this->input->post('status'),
				'creator'         => $this->input->post('creator'),
				'createTime'      => $this->input->post('createTime'),
				'bak'             => $this->input->post('bak'),
				'lastContactTime' => $this->input->post('lastContactTime'),
				'attach'          => $this->input->post('attach')
            );

		if(!empty($CmfCrmChanceData) && !empty($id)) {
			$update = $this->db->update('cmf_crm_chance' ,$CmfCrmChanceData, array('chanceId' => $id));
			return $update?true:false;
		} else {
			return false;
		}
	}

	/**
	 * 删除cmf_crm_chance
	 */
	
	public function delete($id) {
		$delete = $this->db->delete('cmf_crm_chance' , array('chanceId' => $id));
		return $delete?true:false;
	}
}
?>