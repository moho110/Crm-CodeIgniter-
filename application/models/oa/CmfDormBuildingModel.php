<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class CmfDormBuildingModel extends CI_Model {
	public function __construct() {
		parent::__construct();
	}

	/*
	 * 获取搜索选项并分页
	 */
	function getSearchPage($limit,$start,$searchvalue,$keyword) {
		$this->db->select('*');
		$this->db->from('cmf_dorm_building');
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
		$this->db->from('cmf_dorm_building');
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
			$query = $this->db->get_where('cmf_dorm_building', array('Id' => $id));
			return $query->row_array();
		} else {
			$query = $this->db->get('cmf_dorm_building');
			return $query->result_array();
		}
	}

	//获取分页
	public function get_systemlang($limit, $start) {
        $this->db->limit($limit, $start);
        $query = $this->db->get('cmf_dorm_building');
        $rows = $query->result();
        return $rows;
    }

	/**
	* 获取总数
	*/
	public function get_count() {
        return $this->db->count_all_results('cmf_dorm_building');
    }

	/**
	 * 插入cmf_dorm_building
	 */
	public function insert() {
		//prepare post data
            $CmfDormBuildingData = array(
                'buildingName'        => $this->input->post('buildingName'),
				'buildingSum'         => $this->input->post('buildingSum'),
				'floorNumber'         => $this->input->post('floorNumber'),
				'masterTeacherOne'    => $this->input->post('masterTeacherOne'),
				'manageBoundaryOne'   => $this->input->post('manageBoundaryOne'),
				'masterTeacherTwo'    => $this->input->post('masterTeacherTwo'),
				'manageBoundaryTwo'   => $this->input->post('manageBoundaryTwo'),
				'masterTeacherThree'  => $this->input->post('masterTeacherThree'),
				'manageBoundaryThree' => $this->input->post('manageBoundaryThree'),
				'masterTeacherFour'   => $this->input->post('masterTeacherFour'),
				'manageBoundaryFour'  => $this->input->post('manageBoundaryFour'),
				'stuSex'              => $this->input->post('stuSex'),
				'memo'                => $this->input->post('memo')
            );

		$insert = $this->db->insert('cmf_dorm_building', $CmfDormBuildingData);
		if($insert) {
			return $this->db->insert_id();
		} else {
			return false;
		}
	}

	/**
	 * 更新cmf_dorm_building
	 */
	public function update($id) {
		//prepare cms page data
            $CmfDormBuildingData = array(
                'buildingName'        => $this->input->post('buildingName'),
				'buildingSum'         => $this->input->post('buildingSum'),
				'floorNumber'         => $this->input->post('floorNumber'),
				'masterTeacherOne'    => $this->input->post('masterTeacherOne'),
				'manageBoundaryOne'   => $this->input->post('manageBoundaryOne'),
				'masterTeacherTwo'    => $this->input->post('masterTeacherTwo'),
				'manageBoundaryTwo'   => $this->input->post('manageBoundaryTwo'),
				'masterTeacherThree'  => $this->input->post('masterTeacherThree'),
				'manageBoundaryThree' => $this->input->post('manageBoundaryThree'),
				'masterTeacherFour'   => $this->input->post('masterTeacherFour'),
				'manageBoundaryFour'  => $this->input->post('manageBoundaryFour'),
				'stuSex'              => $this->input->post('stuSex'),
				'memo'                => $this->input->post('memo')
            );

		if(!empty($CmfDormBuildingData) && !empty($id)) {
			$update = $this->db->update('cmf_dorm_building' ,$CmfDormBuildingData, array('Id' => $id));
			return $update?true:false;
		} else {
			return false;
		}
	}

	/**
	 * 删除cmf_dorm_building
	 */
	
	public function delete($id) {
		$delete = $this->db->delete('cmf_dorm_building' , array('Id' => $id));
		return $delete?true:false;
	}
}
?>