<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class CmfStockinmainDetailColorModel extends CI_Model {
	public function __construct() {
		parent::__construct();
	}

	/*
	 * 获取搜索选项并分页
	 */
	function getSearchPage($limit,$start,$searchvalue,$keyword) {
		$this->db->select('*');
		$this->db->from('cmf_stockinmain_detail_color');
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
		$this->db->from('cmf_stockinmain_detail_color');
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
			$query = $this->db->get_where('cmf_stockinmain_detail_color', array('id' => $id));
			return $query->row_array();
		} else {
			$query = $this->db->get('cmf_stockinmain_detail_color');
			return $query->result_array();
		}
	}

	//获取分页
	public function get_systemlang($limit, $start) {
        $this->db->limit($limit, $start);
        $query = $this->db->get('cmf_stockinmain_detail_color');
        $rows = $query->result();
        return $rows;
    }

	/**
	* 获取总数
	*/
	public function get_count() {
        return $this->db->count_all_results('cmf_stockinmain_detail_color');
    }

	/**
	 * 插入cmf_stockinmain_detail_color
	 */
	public function insert() {
		//prepare post data
            $CmfStockinmainDetailColorData = array(
                'color'    => $this->input->post('color'),
				'num'      => $this->input->post('num')
            );

		$insert = $this->db->insert('cmf_stockinmain_detail_color', $CmfStockinmainDetailColorData);
		if($insert) {
			return $this->db->insert_id();
		} else {
			return false;
		}
	}

	/**
	 * 更新cmf_stockinmain_detail_color
	 */
	public function update($id) {
		//prepare cms page data
            $CmfStockinmainDetailColorData = array(
                'color'    => $this->input->post('color'),
				'num'      => $this->input->post('num')
            );

		if(!empty($CmfStockinmainDetailColorData) && !empty($id)) {
			$update = $this->db->update('cmf_stockinmain_detail_color' ,$CmfStockinmainDetailColorData, array('id' => $id));
			return $update?true:false;
		} else {
			return false;
		}
	}

	/**
	 * 删除cmf_stockinmain_detail_color
	 */
	
	public function delete($id) {
		$delete = $this->db->delete('cmf_stockinmain_detail_color' , array('id' => $id));
		return $delete?true:false;
	}
}
?>