<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class CmfFeiyongrecordModel extends CI_Model {
	public function __construct() {
		parent::__construct();
	}

	/*
	 * 获取搜索选项并分页
	 */
	function getSearchPage($limit,$start,$searchvalue,$keyword) {
		$this->db->select('*');
		$this->db->from('cmf_feiyongrecord');
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
		$this->db->from('cmf_feiyongrecord');
		$this->db->like($searchvalue,$keyword,'both');
		$this->db->where("$searchvalue LIKE '%$keyword%'");
		$query = $this->db->get();
		$rows = $query->result();
		return $rows;
	}

	/**
	 * 获取搜索选项
	 */
	function getSearch($searchvalue,$keyword) {
		$this->db->select('*');
		$this->db->from('cmf_feiyongrecord');
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
			$query = $this->db->get_where('cmf_feiyongrecord', array('billid' => $id));
			return $query->row_array();
		} else {
			$query = $this->db->get('cmf_feiyongrecord');
			return $query->result_array();
		}
	}

	//获取分页
	public function get_systemlang($limit, $start) {
        $this->db->limit($limit, $start);
        $query = $this->db->get('cmf_feiyongrecord');
        $rows = $query->result();
        return $rows;
    }

	/**
	* 获取总数
	*/
	public function get_count() {
        return $this->db->count_all_results('cmf_feiyongrecord');
    }

	/**
	 * 插入cmf_feiyong_record
	 */
	public function insert() {
		//prepare post data
            $CmfFeiyongrecordData = array(
                'typeid'          => $this->input->post('typeid'),
				'jine'            => $this->input->post('jine'),
				'kind'            => $this->input->post('kind'),
				'accountid'       => $this->input->post('accountid'),
				'chanshengdate'   => $this->input->post('chanshengdate'),
				'createman'       => $this->input->post('createman'),
				'createtime'      => $this->input->post('createtime'),
				'beizhu'          => $this->input->post('beizhu')
            );

		$insert = $this->db->insert('cmf_feiyongrecord', $CmfFeiyongrecordData);
		if($insert) {
			return $this->db->insert_id();
		} else {
			return false;
		}
	}

	/**
	 * 更新cmf_feiyong_record
	 */
	public function update($id) {
		//prepare cms page data
            $CmfFeiyongrecordData = array(
                'typeid'          => $this->input->post('typeid'),
				'jine'            => $this->input->post('jine'),
				'kind'            => $this->input->post('kind'),
				'accountid'       => $this->input->post('accountid'),
				'chanshengdate'   => $this->input->post('chanshengdate'),
				'createman'       => $this->input->post('createman'),
				'createtime'      => $this->input->post('createtime'),
				'beizhu'          => $this->input->post('beizhu')
            );

		if(!empty($CmfFeiyongrecordData) && !empty($id)) {
			$update = $this->db->update('cmf_feiyongrecord' ,$CmfFeiyongrecordData, array('billid' => $id));
			return $update?true:false;
		} else {
			return false;
		}
	}

	/**
	 * 删除cmf_feiyong_record
	 */
	
	public function delete($id) {
		$delete = $this->db->delete('cmf_feiyongrecord' , array('billid' => $id));
		return $delete?true:false;
	}
}
?>