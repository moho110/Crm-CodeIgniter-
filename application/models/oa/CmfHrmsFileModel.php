<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class CmfHrmsFileModel extends CI_Model {
	public function __construct() {
		parent::__construct();
	}

	/*
	 * 获取搜索选项并分页
	 */
	function getSearchPage($limit,$start,$searchvalue,$keyword) {
		$this->db->select('*');
		$this->db->from('cmf_hrms_file');
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
		$this->db->from('cmf_hrms_file');
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
			$query = $this->db->get_where('cmf_hrms_file', array('ID' => $id));
			return $query->row_array();
		} else {
			$query = $this->db->get('cmf_hrms_file');
			return $query->result_array();
		}
	}

	//获取分页
	public function get_systemlang($limit, $start) {
        $this->db->limit($limit, $start);
        $query = $this->db->get('cmf_hrms_file');
        $rows = $query->result();
        return $rows;
    }

	/**
	* 获取总数
	*/
	public function get_count() {
        return $this->db->count_all_results('cmf_hrms_file');
    }

	/**
	 * 插入cmf_hrms_file
	 */
	public function insert() {
		//prepare post data
            $CmfHrmsFileData = array(
                'workId'              => $this->input->post('workId'),
				'name'                => $this->input->post('name'),
				'inDepartment'        => $this->input->post('inDepartment'),
				'sex'                 => $this->input->post('sex'),
				'marriage'            => $this->input->post('marriage'),
				'birthday'            => $this->input->post('birthday'),
				'national'            => $this->input->post('national'),
				'political'           => $this->input->post('political'),
				'IDNo'                => $this->input->post('IDNo'),
				'hukou'               => $this->input->post('hukou'),
				'jiguan'              => $this->input->post('jiguan'),
				'insuranceNo'         => $this->input->post('insuranceNo'),
				'address'             => $this->input->post('address'),
				'postalCode'          => $this->input->post('postalCode'),
				'email'               => $this->input->post('email'),
				'telephone'           => $this->input->post('telephone'),
				'studyExp'            => $this->input->post('studyExp'),
				'professional'        => $this->input->post('professional'),
				'college'             => $this->input->post('college'),
				'staff'               => $this->input->post('staff'),
				'staffName'           => $this->input->post('staffName'),
				'politicalLevel'      => $this->input->post('politicalLevel'),
				'computerLevel'       => $this->input->post('computerLevel'),
				'foreign'             => $this->input->post('foreign'),
				'foreignLevel'        => $this->input->post('foreignLevel'),
				'whenWork'            => $this->input->post('whenWork'),
				'workTime'            => $this->input->post('workTime'),
				'workStatus'          => $this->input->post('workStatus'),
				'special'             => $this->input->post('special'),
				'memo'                => $this->input->post('memo'),
				'attach'              => $this->input->post('attach'),
				'photo'               => $this->input->post('photo'),
				'entryUnitDate'       => $this->input->post('entryUnitDate'),
				'unitWorkTime'        => $this->input->post('unitWorkTime'),
				'quitDate'            => $this->input->post('quitDate'),
				'nowContractDate'     => $this->input->post('nowContractDate'),
				'nowContractEndDate'  => $this->input->post('nowContractEndDate'),
				'tuixiuDate'          => $this->input->post('tuixiuDate'),
				'tuixiuAge'           => $this->input->post('tuixiuAge'),
				'workInFormal'        => $this->input->post('workInFormal'),
				'firstContractDate'   => $this->input->post('firstContractDate'),
				'techLevel'           => $this->input->post('techLevel'),
				'techExDate'          => $this->input->post('techExDate'),
				'staffType'           => $this->input->post('staffType'),
				'staffbyName'         => $this->input->post('staffbyName'),
				'staffTechScore'      => $this->input->post('staffTechScore'),
				'bank'                => $this->input->post('bank'),
				'bankNo'              => $this->input->post('bankNo'),
				'salaryLevel'         => $this->input->post('salaryLevel'),
				'staffyinliBirthday'  => $this->input->post('staffyinliBirthday'),
				'personDesp'          => $this->input->post('personDesp'),
				'passport'            => $this->input->post('passport'),
				'bloody'              => $this->input->post('bloody'),
				'height'              => $this->input->post('height'),
				'weight'              => $this->input->post('weight'),
				'eyesight'            => $this->input->post('eyesight'),
				'health'              => $this->input->post('health'),
				'drivers'             => $this->input->post('drivers'),
				'workExp'             => $this->input->post('workExp'),
				'workExpAttach'       => $this->input->post('workExpAttach'),
				'socialRelation'      => $this->input->post('socialRelation'),
				'socialRelationAttach'=> $this->input->post('socialRelationAttach'),
				'recoverStaffDate'    => $this->input->post('recoverStaffDate')
            );

		$insert = $this->db->insert('cmf_hrms_file', $CmfHrmsFileData);
		if($insert) {
			return $this->db->insert_id();
		} else {
			return false;
		}
	}

	/**
	 * 更新cmf_hrms_file
	 */
	public function update($id) {
		//prepare cms page data
            $CmfHrmsFileData = array(
                'workId'              => $this->input->post('workId'),
				'name'                => $this->input->post('name'),
				'inDepartment'        => $this->input->post('inDepartment'),
				'sex'                 => $this->input->post('sex'),
				'marriage'            => $this->input->post('marriage'),
				'birthday'            => $this->input->post('birthday'),
				'national'            => $this->input->post('national'),
				'political'           => $this->input->post('political'),
				'IDNo'                => $this->input->post('IDNo'),
				'hukou'               => $this->input->post('hukou'),
				'jiguan'              => $this->input->post('jiguan'),
				'insuranceNo'         => $this->input->post('insuranceNo'),
				'address'             => $this->input->post('address'),
				'postalCode'          => $this->input->post('postalCode'),
				'email'               => $this->input->post('email'),
				'telephone'           => $this->input->post('telephone'),
				'studyExp'            => $this->input->post('studyExp'),
				'professional'        => $this->input->post('professional'),
				'college'             => $this->input->post('college'),
				'staff'               => $this->input->post('staff'),
				'staffName'           => $this->input->post('staffName'),
				'politicalLevel'      => $this->input->post('politicalLevel'),
				'computerLevel'       => $this->input->post('computerLevel'),
				'foreign'             => $this->input->post('foreign'),
				'foreignLevel'        => $this->input->post('foreignLevel'),
				'whenWork'            => $this->input->post('whenWork'),
				'workTime'            => $this->input->post('workTime'),
				'workStatus'          => $this->input->post('workStatus'),
				'special'             => $this->input->post('special'),
				'memo'                => $this->input->post('memo'),
				'attach'              => $this->input->post('attach'),
				'photo'               => $this->input->post('photo'),
				'entryUnitDate'       => $this->input->post('entryUnitDate'),
				'unitWorkTime'        => $this->input->post('unitWorkTime'),
				'quitDate'            => $this->input->post('quitDate'),
				'nowContractDate'     => $this->input->post('nowContractDate'),
				'nowContractEndDate'  => $this->input->post('nowContractEndDate'),
				'tuixiuDate'          => $this->input->post('tuixiuDate'),
				'tuixiuAge'           => $this->input->post('tuixiuAge'),
				'workInFormal'        => $this->input->post('workInFormal'),
				'firstContractDate'   => $this->input->post('firstContractDate'),
				'techLevel'           => $this->input->post('techLevel'),
				'techExDate'          => $this->input->post('techExDate'),
				'staffType'           => $this->input->post('staffType'),
				'staffbyName'         => $this->input->post('staffbyName'),
				'staffTechScore'      => $this->input->post('staffTechScore'),
				'bank'                => $this->input->post('bank'),
				'bankNo'              => $this->input->post('bankNo'),
				'salaryLevel'         => $this->input->post('salaryLevel'),
				'staffyinliBirthday'  => $this->input->post('staffyinliBirthday'),
				'personDesp'          => $this->input->post('personDesp'),
				'passport'            => $this->input->post('passport'),
				'bloody'              => $this->input->post('bloody'),
				'height'              => $this->input->post('height'),
				'weight'              => $this->input->post('weight'),
				'eyesight'            => $this->input->post('eyesight'),
				'health'              => $this->input->post('health'),
				'drivers'             => $this->input->post('drivers'),
				'workExp'             => $this->input->post('workExp'),
				'workExpAttach'       => $this->input->post('workExpAttach'),
				'socialRelation'      => $this->input->post('socialRelation'),
				'socialRelationAttach'=> $this->input->post('socialRelationAttach'),
				'recoverStaffDate'    => $this->input->post('recoverStaffDate')
            );

		if(!empty($CmfHrmsFileData) && !empty($id)) {
			$update = $this->db->update('cmf_hrms_file' ,$CmfHrmsFileData, array('ID' => $id));
			return $update?true:false;
		} else {
			return false;
		}
	}

	/**
	 * 删除cmf_hrms_file
	 */
	
	public function delete($id) {
		$delete = $this->db->delete('cmf_hrms_file' , array('ID' => $id));
		return $delete?true:false;
	}
}
?>