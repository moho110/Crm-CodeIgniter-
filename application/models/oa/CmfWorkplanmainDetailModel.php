<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class CmfWorkplanmainDetailModel extends CI_Model {
	public function __construct() {
		parent::__construct();
	}

	/*
	 * 获取搜索选项并分页
	 */
	function getSearchPage($limit,$start,$searchvalue,$keyword) {
		$this->db->select('*');
		$this->db->from('cmf_workplanmain_detail');
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
		$this->db->from('cmf_workplanmain_detail');
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
			$query = $this->db->get_where('cmf_workplanmain_detail', array('id' => $id));
			return $query->row_array();
		} else {
			$query = $this->db->get('cmf_workplanmain_detail');
			return $query->result_array();
		}
	}

	//获取分页
	public function get_systemlang($limit, $start) {
        $this->db->limit($limit, $start);
        $query = $this->db->get('cmf_workplanmain_detail');
        $rows = $query->result();
        return $rows;
    }

	/**
	* 获取总数
	*/
	public function get_count() {
        return $this->db->count_all_results('cmf_workplanmain_detail');
    }

	/**
	 * 插入cmf_accessprepay
	 */
	public function insert() {
		//prepare post data
            $CmfWorkplanmainDetailData = array(
                'mainrowid'     => $this->input->post('mainrowid'),
                'createman'     => $this->input->post('createman'),
                'createtime'    => $this->input->post('createtime'),
                'begintime'     => $this->input->post('begintime'),
                'endtime'       => $this->input->post('endtime'),
                'content'       => $this->input->post('content'),
                'result'        => $this->input->post('result'),
                'nexttime'      => $this->input->post('nexttime'),
                'nextcontent'   => $this->input->post('nextcontent'),
                'fujian'        => $this->input->post('fujian')
            );

		$insert = $this->db->insert('cmf_workplanmain_detail', $CmfWorkplanmainDetailData);
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
            $CmfWorkplanmainDetailData = array(
                'mainrowid'     => $this->input->post('mainrowid'),
                'createman'     => $this->input->post('createman'),
                'createtime'    => $this->input->post('createtime'),
                'begintime'     => $this->input->post('begintime'),
                'endtime'       => $this->input->post('endtime'),
                'content'       => $this->input->post('content'),
                'result'        => $this->input->post('result'),
                'nexttime'      => $this->input->post('nexttime'),
                'nextcontent'   => $this->input->post('nextcontent'),
                'fujian'        => $this->input->post('fujian')
            );

		if(!empty($CmfWorkplanmainDetailData) && !empty($id)) {
			$update = $this->db->update('cmf_workplanmain_detail' ,$CmfWorkplanmainDetailData, array('id' => $id));
			return $update?true:false;
		} else {
			return false;
		}
	}

	/**
	 * 删除cmf_accessprepay
	 */
	
	public function delete($id) {
		$delete = $this->db->delete('cmf_workplanmain_detail' , array('id' => $id));
		return $delete?true:false;
	}
}
?>