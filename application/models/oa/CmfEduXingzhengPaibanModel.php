<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class CmfEduXingzhengPaibanModel extends CI_Model {
	public function __construct() {
		parent::__construct();
	}

	/*
	 * 获取搜索选项并分页
	 */
	function getSearchPage($limit,$start,$searchvalue,$keyword) {
		$this->db->select('*');
		$this->db->from('cmf_edu_xingzheng_paiban');
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
		$this->db->from('cmf_edu_xingzheng_paiban');
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
			$query = $this->db->get_where('cmf_edu_xingzheng_paiban', array('Id' => $id));
			return $query->row_array();
		} else {
			$query = $this->db->get('cmf_edu_xingzheng_paiban');
			return $query->result_array();
		}
	}

	//获取分页
	public function get_systemlang($limit, $start) {
        $this->db->limit($limit, $start);
        $query = $this->db->get('cmf_edu_xingzheng_paiban');
        $rows = $query->result();
        return $rows;
    }

	/**
	* 获取总数
	*/
	public function get_count() {
        return $this->db->count_all_results('cmf_edu_xingzheng_paiban');
    }

	/**
	 * 插入cmf_edu_xingzheng_paiban
	 */
	public function insert() {
		//prepare post data
            $CmfEduXingzhengPaibanData = array(
                'termName'       => $this->input->post('termName'),
				'week'           => $this->input->post('week'),
				'day'            => $this->input->post('day'),
				'kaoqinDate'     => $this->input->post('kaoqinDate'),
				'className'      => $this->input->post('className'),
				'paipanPerson'   => $this->input->post('paipanPerson'),
				'memo'           => $this->input->post('memo'),
				'creator'        => $this->input->post('creator'),
				'createTime'     => $this->input->post('createTime')
            );

		$insert = $this->db->insert('cmf_edu_xingzheng_paiban', $CmfEduXingzhengPaibanData);
		if($insert) {
			return $this->db->insert_id();
		} else {
			return false;
		}
	}

	/**
	 * 更新cmf_edu_xingzheng_paiban
	 */
	public function update($id) {
		//prepare cms page data
            $CmfEduXingzhengPaibanData = array(
                'termName'       => $this->input->post('termName'),
				'week'           => $this->input->post('week'),
				'day'            => $this->input->post('day'),
				'kaoqinDate'     => $this->input->post('kaoqinDate'),
				'className'      => $this->input->post('className'),
				'paipanPerson'   => $this->input->post('paipanPerson'),
				'memo'           => $this->input->post('memo'),
				'creator'        => $this->input->post('creator'),
				'createTime'     => $this->input->post('createTime')
            );

		if(!empty($CmfEduXingzhengPaibanData) && !empty($id)) {
			$update = $this->db->update('cmf_edu_xingzheng_paiban' ,$CmfEduXingzhengPaibanData, array('Id' => $id));
			return $update?true:false;
		} else {
			return false;
		}
	}

	/**
	 * 删除cmf_edu_xingzheng_paiban
	 */
	
	public function delete($id) {
		$delete = $this->db->delete('cmf_edu_xingzheng_paiban' , array('Id' => $id));
		return $delete?true:false;
	}
}
?>