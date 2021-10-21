<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class CmfWuBuildinginformationModel extends CI_Model {
	public function __construct() {
		parent::__construct();
	}

	/*
	 * 获取搜索选项并分页
	 */
	function getSearchPage($limit,$start,$searchvalue,$keyword) {
		$this->db->select('*');
		$this->db->from('cmf_wu_buildinginformation');
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
		$this->db->from('cmf_wu_buildinginformation');
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
			$query = $this->db->get_where('cmf_wu_buildinginformation', array('id' => $id));
			return $query->row_array();
		} else {
			$query = $this->db->get('cmf_wu_buildinginformation');
			return $query->result_array();
		}
	}

	//获取分页
	public function get_systemlang($limit, $start) {
        $this->db->limit($limit, $start);
        $query = $this->db->get('cmf_wu_buildinginformation');
        $rows = $query->result();
        return $rows;
    }

	/**
	* 获取总数
	*/
	public function get_count() {
        return $this->db->count_all_results('cmf_wu_buildinginformation');
    }

	/**
	 * 插入cmf_accessprepay
	 */
	public function insert() {
		//prepare post data
            $CmfWuBuildinginformationData = array(
                'buildingNo'     => $this->input->post('buildingNo'),
                'buildingName'   => $this->input->post('buildingName'),
                'buildingLocate' => $this->input->post('buildingLocate'),
                'unit'           => $this->input->post('unit'),
                'buildingStruct' => $this->input->post('buildingStruct'),
                'type'           => $this->input->post('type'),
                'sum'            => $this->input->post('sum'),
                'startDate'      => $this->input->post('startDate'),
                'finishDate'     => $this->input->post('finishDate'),
                'jiaofuDate'     => $this->input->post('jiaofuDate'),
                'useIn'          => $this->input->post('useIn'),
                'area'           => $this->input->post('area'),
                'saledNum'       => $this->input->post('saledNum'),
                'rentNum'        => $this->input->post('rentNum'),
                'builder'        => $this->input->post('builder'),
                'creator'        => $this->input->post('creator'),
                'createTime'     => $this->input->post('createTime'),
                'memo'           => $this->input->post('memo'),
                'optManage'      => $this->input->post('optManage'),
                'areaName'       => $this->input->post('areaName')
            );

		$insert = $this->db->insert('cmf_wu_buildinginformation', $CmfWuBuildinginformationData);
		if($insert) {
			return $this->db->insert_id();
		} else {
			return false;
		}
	}

	/**
	 * 更新cmf_accessprepay
	 */
	public function update($id) {
		//prepare cms page data
            $CmfWuBuildinginformationData = array(
                'buildingNo'     => $this->input->post('buildingNo'),
                'buildingName'   => $this->input->post('buildingName'),
                'buildingLocate' => $this->input->post('buildingLocate'),
                'unit'           => $this->input->post('unit'),
                'buildingStruct' => $this->input->post('buildingStruct'),
                'type'           => $this->input->post('type'),
                'sum'            => $this->input->post('sum'),
                'startDate'      => $this->input->post('startDate'),
                'finishDate'     => $this->input->post('finishDate'),
                'jiaofuDate'     => $this->input->post('jiaofuDate'),
                'useIn'          => $this->input->post('useIn'),
                'area'           => $this->input->post('area'),
                'saledNum'       => $this->input->post('saledNum'),
                'rentNum'        => $this->input->post('rentNum'),
                'builder'        => $this->input->post('builder'),
                'creator'        => $this->input->post('creator'),
                'createTime'     => $this->input->post('createTime'),
                'memo'           => $this->input->post('memo'),
                'optManage'      => $this->input->post('optManage'),
                'areaName'       => $this->input->post('areaName')
            );

		if(!empty($CmfWuBuildinginformationData) && !empty($id)) {
			$update = $this->db->update('cmf_wu_buildinginformation' ,$CmfWuBuildinginformationData, array('id' => $id));
			return $update?true:false;
		} else {
			return false;
		}
	}

	/**
	 * 删除cmf_accessprepay
	 */
	
	public function delete($id) {
		$delete = $this->db->delete('cmf_accessprepay' , array('id' => $id));
		return $delete?true:false;
	}
}
?>