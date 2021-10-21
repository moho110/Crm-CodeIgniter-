<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class CmfEduZhongcengmingxiModel extends CI_Model {
	public function __construct() {
		parent::__construct();
	}

	/*
	 * 获取搜索选项并分页
	 */
	function getSearchPage($limit,$start,$searchvalue,$keyword) {
		$this->db->select('*');
		$this->db->from('cmf_edu_zhongcengmingxi');
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
		$this->db->from('cmf_edu_zhongcengmingxi');
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
			$query = $this->db->get_where('cmf_edu_zhongcengmingxi', array('ID' => $id));
			return $query->row_array();
		} else {
			$query = $this->db->get('cmf_edu_zhongcengmingxi');
			return $query->result_array();
		}
	}

	//获取分页
	public function get_systemlang($limit, $start) {
        $this->db->limit($limit, $start);
        $query = $this->db->get('cmf_edu_zhongcengmingxi');
        $rows = $query->result();
        return $rows;
    }

	/**
	* 获取总数
	*/
	public function get_count() {
        return $this->db->count_all_results('cmf_edu_zhongcengmingxi');
    }

	/**
	 * 插入cmf_edu_zhongcengmingxi
	 */
	public function insert() {
		//prepare post data
            $CmfEduZhongcengmingxiData = array(
                'testName'           => $this->input->post('testName'),
				'testManBy'          => $this->input->post('testManBy'),
				'uit'                => $this->input->post('uit'),
				'staff'              => $this->input->post('staff'),
				'pindeEvl'           => $this->input->post('pindeEvl'),
				'pindeMemo'          => $this->input->post('pindeMemo'),
				'abillityPingjia'    => $this->input->post('abillityPingjia'),
				'abillityMemo'       => $this->input->post('abillityMemo'),
				'studyPingjia'       => $this->input->post('studyPingjia'),
				'jixiaoPingjia'      => $this->input->post('jixiaoPingjia'),
				'studyMemo'          => $this->input->post('studyMemo'),
				'jixiaoMemo'         => $this->input->post('jixiaoMemo'),
				'lianzhengPingjia'   => $this->input->post('lianzhengPingjia'),
				'lianzhengMemo'      => $this->input->post('lianzhengMemo'),
				'PingjiaMan'         => $this->input->post('PingjiaMan'),
				'pingjiaTime'        => $this->input->post('pingjiaTime')
            );

		$insert = $this->db->insert('cmf_edu_zhongcengmingxi', $CmfEduZhongcengmingxiData);
		if($insert) {
			return $this->db->insert_id();
		} else {
			return false;
		}
	}

	/**
	 * 更新cmf_edu_zhongcengmingxi
	 */
	public function update($id) {
		//prepare cms page data
            $CmfEduZhongcengmingxiData = array(
                'testName'           => $this->input->post('testName'),
				'testManBy'          => $this->input->post('testManBy'),
				'uit'                => $this->input->post('uit'),
				'staff'              => $this->input->post('staff'),
				'pindeEvl'           => $this->input->post('pindeEvl'),
				'pindeMemo'          => $this->input->post('pindeMemo'),
				'abillityPingjia'    => $this->input->post('abillityPingjia'),
				'abillityMemo'       => $this->input->post('abillityMemo'),
				'studyPingjia'       => $this->input->post('studyPingjia'),
				'jixiaoPingjia'      => $this->input->post('jixiaoPingjia'),
				'studyMemo'          => $this->input->post('studyMemo'),
				'jixiaoMemo'         => $this->input->post('jixiaoMemo'),
				'lianzhengPingjia'   => $this->input->post('lianzhengPingjia'),
				'lianzhengMemo'      => $this->input->post('lianzhengMemo'),
				'PingjiaMan'         => $this->input->post('PingjiaMan'),
				'pingjiaTime'        => $this->input->post('pingjiaTime')
            );

		if(!empty($CmfEduZhongcengmingxiData) && !empty($id)) {
			$update = $this->db->update('cmf_edu_zhongcengmingxi' ,$CmfEduZhongcengmingxiData, array('ID' => $id));
			return $update?true:false;
		} else {
			return false;
		}
	}

	/**
	 * 删除cmf_edu_zhongcengmingxi
	 */
	
	public function delete($id) {
		$delete = $this->db->delete('cmf_edu_zhongcengmingxi' , array('ID' => $id));
		return $delete?true:false;
	}
}
?>