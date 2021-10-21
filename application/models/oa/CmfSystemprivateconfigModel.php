<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class CmfSystemprivateconfigModel extends CI_Model {
	public function __construct() {
		parent::__construct();
	}

	/*
	 * 获取搜索选项并分页
	 */
	function getSearchPage($limit,$start,$searchvalue,$keyword) {
		$this->db->select('*');
		$this->db->from('cmf_systemprivateconfig');
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
		$this->db->from('cmf_systemprivateconfig');
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
			$query = $this->db->get_where('cmf_systemprivateconfig', array('ID' => $id));
			return $query->row_array();
		} else {
			$query = $this->db->get('cmf_systemprivateconfig');
			return $query->result_array();
		}
	}

	//获取分页
	public function get_systemlang($limit, $start) {
        $this->db->limit($limit, $start);
        $query = $this->db->get('cmf_systemprivateconfig');
        $rows = $query->result();
        return $rows;
    }

	/**
	* 获取总数
	*/
	public function get_count() {
        return $this->db->count_all_results('cmf_systemprivateconfig');
    }

	/**
	 * 插入cmf_accessprepay
	 */
	public function insert() {
		//prepare post data
            $CmfSystemprivateconfigData = array(
                'category'       => $this->input->post('category'),
                'table'          => $this->input->post('table'),
                'object'         => $this->input->post('object'),
                'views'          => $this->input->post('views'),
                'column'         => $this->input->post('column'),
                'other'          => $this->input->post('other'),
                'creator'        => $this->input->post('creator'),
                'createTime'     => $this->input->post('createTime')
            );

		$insert = $this->db->insert('cmf_systemprivateconfig', $CmfSystemprivateconfigData);
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
            $CmfSystemprivateconfigData = array(
                'bankid'         => $this->input->post('bankid'),
                'oldjine'        => $this->input->post('oldjine'),
                'jine'           => $this->input->post('jine'),
                'opertype'       => $this->input->post('opertype'),
                'guanlianbillid' => $this->input->post('guanlianbillid'),
                'createman'      => $this->input->post('createman'),
                'createtime'     => $this->input->post('createtime')
            );

		if(!empty($CmfSystemprivateconfigData) && !empty($id)) {
			$update = $this->db->update('cmf_systemprivateconfig' ,$CmfSystemprivateconfigData, array('ID' => $id));
			return $update?true:false;
		} else {
			return false;
		}
	}

	/**
	 * 删除cmf_accessprepay
	 */
	
	public function delete($id) {
		$delete = $this->db->delete('cmf_systemprivateconfig' , array('ID' => $id));
		return $delete?true:false;
	}
}
?>