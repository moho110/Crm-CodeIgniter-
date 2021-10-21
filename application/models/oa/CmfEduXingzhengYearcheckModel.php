<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class CmfEduXingzhengYearcheckModel extends CI_Model {
	public function __construct() {
		parent::__construct();
	}

	/*
	 * 获取搜索选项并分页
	 */
	function getSearchPage($limit,$start,$searchvalue,$keyword) {
		$this->db->select('*');
		$this->db->from('cmf_edu_xingzheng_yearcheck');
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
		$this->db->from('cmf_edu_xingzheng_yearcheck');
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
			$query = $this->db->get_where('cmf_edu_xingzheng_yearcheck', array('ID' => $id));
			return $query->row_array();
		} else {
			$query = $this->db->get('cmf_edu_xingzheng_yearcheck');
			return $query->result_array();
		}
	}

	//获取分页
	public function get_systemlang($limit, $start) {
        $this->db->limit($limit, $start);
        $query = $this->db->get('cmf_edu_xingzheng_yearcheck');
        $rows = $query->result();
        return $rows;
    }

	/**
	* 获取总数
	*/
	public function get_count() {
        return $this->db->count_all_results('cmf_edu_xingzheng_yearcheck');
    }

	/**
	 * 插入cmf_edu_xingzheng_yearcheck
	 */
	public function insert() {
		//prepare post data
            $CmfEduXingzhengYearcheckData = array(
                'term'                    => $this->input->post('term'),
				'userName'                => $this->input->post('userName'),
				'name'                    => $this->input->post('name'),
				'classRoom'               => $this->input->post('classRoom'),
				'kezhang'                 => $this->input->post('kezhang'),
				'pindetaiduAbillityScore' => $this->input->post('pindetaiduAbillityScore'),
				'chuqinScore'             => $this->input->post('chuqinScore'),
				'workquantityScore'       => $this->input->post('workquantityScore'),
				'workjilvScore'           => $this->input->post('workjilvScore'),
				'workSpecScore'           => $this->input->post('workSpecScore'),
				'workxiaoguoScore'        => $this->input->post('workxiaoguoScore'),
				'banzhurenScore'          => $this->input->post('banzhurenScore'),
				'tempWorkScore'           => $this->input->post('tempWorkScore'),
				'thesisScore'             => $this->input->post('thesisScore'),
				'teachingScore'           => $this->input->post('teachingScore'),
				'sumScore'                => $this->input->post('sumScore'),
				'exTime'                  => $this->input->post('exTime'),
				'pindeAbillityScore'      => $this->input->post('pindeAbillityScore'),
				'chuqinbiaoxianScore'     => $this->input->post('chuqinbiaoxianScore'),
				'workExScore'             => $this->input->post('workExScore'),
				'workJilvExScore'         => $this->input->post('workJilvExScore'),
				'workSpecExScore'         => $this->input->post('workSpecExScore'),
				'workxiaoguoExScore'      => $this->input->post('workxiaoguoExScore'),
				'banzhurenWorkExScore'    => $this->input->post('banzhurenWorkExScore'),
				'tempWorkExScore'         => $this->input->post('tempWorkExScore'),
				'thesisExScore'           => $this->input->post('thesisExScore'),
				'techingExScore'          => $this->input->post('techingExScore'),
				'sumExScore'              => $this->input->post('sumExScore'),
				'keshiScoreMan'           => $this->input->post('keshiScoreMan'),
				'classRoomScoreTime'      => $this->input->post('classRoomScoreTime'),
				'workflow'                => $this->input->post('workflow')
            );

		$insert = $this->db->insert('cmf_edu_xingzheng_yearcheck', $CmfEduXingzhengYearcheckData);
		if($insert) {
			return $this->db->insert_id();
		} else {
			return false;
		}
	}

	/**
	 * 更新cmf_edu_xingzheng_yearcheck
	 */
	public function update($id) {
		//prepare cms page data
            $CmfEduXingzhengYearcheckData = array(
                'term'                    => $this->input->post('term'),
				'userName'                => $this->input->post('userName'),
				'name'                    => $this->input->post('name'),
				'classRoom'               => $this->input->post('classRoom'),
				'kezhang'                 => $this->input->post('kezhang'),
				'pindetaiduAbillityScore' => $this->input->post('pindetaiduAbillityScore'),
				'chuqinScore'             => $this->input->post('chuqinScore'),
				'workquantityScore'       => $this->input->post('workquantityScore'),
				'workjilvScore'           => $this->input->post('workjilvScore'),
				'workSpecScore'           => $this->input->post('workSpecScore'),
				'workxiaoguoScore'        => $this->input->post('workxiaoguoScore'),
				'banzhurenScore'          => $this->input->post('banzhurenScore'),
				'tempWorkScore'           => $this->input->post('tempWorkScore'),
				'thesisScore'             => $this->input->post('thesisScore'),
				'teachingScore'           => $this->input->post('teachingScore'),
				'sumScore'                => $this->input->post('sumScore'),
				'exTime'                  => $this->input->post('exTime'),
				'pindeAbillityScore'      => $this->input->post('pindeAbillityScore'),
				'chuqinbiaoxianScore'     => $this->input->post('chuqinbiaoxianScore'),
				'workExScore'             => $this->input->post('workExScore'),
				'workJilvExScore'         => $this->input->post('workJilvExScore'),
				'workSpecExScore'         => $this->input->post('workSpecExScore'),
				'workxiaoguoExScore'      => $this->input->post('workxiaoguoExScore'),
				'banzhurenWorkExScore'    => $this->input->post('banzhurenWorkExScore'),
				'tempWorkExScore'         => $this->input->post('tempWorkExScore'),
				'thesisExScore'           => $this->input->post('thesisExScore'),
				'techingExScore'          => $this->input->post('techingExScore'),
				'sumExScore'              => $this->input->post('sumExScore'),
				'keshiScoreMan'           => $this->input->post('keshiScoreMan'),
				'classRoomScoreTime'      => $this->input->post('classRoomScoreTime'),
				'workflow'                => $this->input->post('workflow')
            );

		if(!empty($CmfEduXingzhengYearcheckData) && !empty($id)) {
			$update = $this->db->update('cmf_edu_xingzheng_yearcheck' ,$CmfEduXingzhengYearcheckData, array('ID' => $id));
			return $update?true:false;
		} else {
			return false;
		}
	}

	/**
	 * 删除cmf_edu_xingzheng_yearcheck
	 */
	
	public function delete($id) {
		$delete = $this->db->delete('cmf_edu_xingzheng_yearcheck' , array('ID' => $id));
		return $delete?true:false;
	}
}
?>