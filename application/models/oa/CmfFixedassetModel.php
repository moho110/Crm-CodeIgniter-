<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class CmfFixedassetModel extends CI_Model {
	public function __construct() {
		parent::__construct();
	}

	/*
	 * 获取搜索选项并分页
	 */
	function getSearchPage($limit,$start,$searchvalue,$keyword) {
		$this->db->select('*');
		$this->db->from('cmf_fixedasset');
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
		$this->db->from('cmf_fixedasset');
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
			$query = $this->db->get_where('cmf_fixedasset', array('ID' => $id));
			return $query->row_array();
		} else {
			$query = $this->db->get('cmf_fixedasset');
			return $query->result_array();
		}
	}

	//获取分页
	public function get_systemlang($limit, $start) {
        $this->db->limit($limit, $start);
        $query = $this->db->get('cmf_fixedasset');
        $rows = $query->result();
        return $rows;
    }

	/**
	* 获取总数
	*/
	public function get_count() {
        return $this->db->count_all_results('cmf_fixedasset');
    }

	/**
	 * 插入cmf_fixedasset
	 */
	public function insert() {
		//prepare post data
            $CmfFixedassetData = array(
                'setName'        => $this->input->post('setName'),
				'setNo'          => $this->input->post('setNo'),
				'setPichi'       => $this->input->post('setPichi'),
				'setType'        => $this->input->post('setType'),
				'purchaseID'     => $this->input->post('purchaseID'),
				'supply'         => $this->input->post('supply'),
				'department'     => $this->input->post('department'),
				'person'         => $this->input->post('person'),
				'size'           => $this->input->post('size'),
				'status'         => $this->input->post('status'),
				'quantity'       => $this->input->post('quantity'),
				'price'          => $this->input->post('price'),
				'count'          => $this->input->post('count'),
				'unit'           => $this->input->post('unit'),
				'place'          => $this->input->post('place'),
				'purchaseDate'   => $this->input->post('purchaseDate'),
				'billNum'        => $this->input->post('billNum'),
				'IDNumber'       => $this->input->post('IDNumber'),
				'memo'           => $this->input->post('memo'),
				'creator'        => $this->input->post('creator'),
				'createTime'     => $this->input->post('createTime'),
				'useDepartment'  => $this->input->post('useDepartment'),
				'useDirect'      => $this->input->post('useDirect'),
				'testDepartment' => $this->input->post('testDepartment'),
				'dutyMan'        => $this->input->post('dutyMan'),
				'qiyongDate'     => $this->input->post('qiyongDate')
            );

		$insert = $this->db->insert('cmf_fixedasset', $CmfFixedassetData);
		if($insert) {
			return $this->db->insert_id();
		} else {
			return false;
		}
	}

	/**
	 * 更新cmf_fixedasset
	 */
	public function update($id) {
		//prepare cms page data
            $CmfFixedassetData = array(
                'setName'        => $this->input->post('setName'),
				'setNo'          => $this->input->post('setNo'),
				'setPichi'       => $this->input->post('setPichi'),
				'setType'        => $this->input->post('setType'),
				'purchaseID'     => $this->input->post('purchaseID'),
				'supply'         => $this->input->post('supply'),
				'department'     => $this->input->post('department'),
				'person'         => $this->input->post('person'),
				'size'           => $this->input->post('size'),
				'status'         => $this->input->post('status'),
				'quantity'       => $this->input->post('quantity'),
				'price'          => $this->input->post('price'),
				'count'          => $this->input->post('count'),
				'unit'           => $this->input->post('unit'),
				'place'          => $this->input->post('place'),
				'purchaseDate'   => $this->input->post('purchaseDate'),
				'billNum'        => $this->input->post('billNum'),
				'IDNumber'       => $this->input->post('IDNumber'),
				'memo'           => $this->input->post('memo'),
				'creator'        => $this->input->post('creator'),
				'createTime'     => $this->input->post('createTime'),
				'useDepartment'  => $this->input->post('useDepartment'),
				'useDirect'      => $this->input->post('useDirect'),
				'testDepartment' => $this->input->post('testDepartment'),
				'dutyMan'        => $this->input->post('dutyMan'),
				'qiyongDate'     => $this->input->post('qiyongDate')
            );

		if(!empty($CmfFixedassetData) && !empty($id)) {
			$update = $this->db->update('cmf_fixedasset' ,$CmfFixedassetData, array('ID' => $id));
			return $update?true:false;
		} else {
			return false;
		}
	}

	/**
	 * 删除cmf_fixedasset
	 */
	
	public function delete($id) {
		$delete = $this->db->delete('cmf_fixedasset' , array('ID' => $id));
		return $delete?true:false;
	}
}
?>