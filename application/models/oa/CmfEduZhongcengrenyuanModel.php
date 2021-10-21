<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class CmfEduZhongcengrenyuanModel extends CI_Model {
	public function __construct() {
		parent::__construct();
	}

	/*
	 * 获取搜索选项并分页
	 */
	function getSearchPage($limit,$start,$searchvalue,$keyword) {
		$this->db->select('*');
		$this->db->from('cmf_edu_zhongcengrenyuan');
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
		$this->db->from('cmf_edu_zhongcengrenyuan');
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
			$query = $this->db->get_where('cmf_edu_zhongcengrenyuan', array('ID' => $id));
			return $query->row_array();
		} else {
			$query = $this->db->get('cmf_edu_zhongcengrenyuan');
			return $query->result_array();
		}
	}

	//获取分页
	public function get_systemlang($limit, $start) {
        $this->db->limit($limit, $start);
        $query = $this->db->get('cmf_edu_zhongcengrenyuan');
        $rows = $query->result();
        return $rows;
    }

	/**
	* 获取总数
	*/
	public function get_count() {
        return $this->db->count_all_results('cmf_edu_zhongcengrenyuan');
    }

	/**
	 * 插入cmf_edu_zhongcengrenyuan
	 */
	public function insert() {
		//prepare post data
            $CmfEduZhongcengrenyuanData = array(
                'testName'       => $this->input->post('testName'),
				'testManBy'      => $this->input->post('testManBy'),
				'uit'            => $this->input->post('uit'),
				'staff'          => $this->input->post('staff'),
				'pindeDesp'      => $this->input->post('pindeDesp'),
				'pindeSelf'      => $this->input->post('pindeSelf'),
				'abillityDesp'   => $this->input->post('abillityDesp'),
				'abillitySelf'   => $this->input->post('abillitySelf'),
				'studyDesp'      => $this->input->post('studyDesp'),
				'studySelf'      => $this->input->post('studySelf'),
				'jixiaoDesp'     => $this->input->post('jixiaoDesp'),
				'jixiaoSelf'     => $this->input->post('jixiaoSelf'),
				'lianzhengDesp'  => $this->input->post('lianzhengDesp'),
				'lianzhengSelf'  => $this->input->post('lianzhengSelf'),
				'attach'         => $this->input->post('attach')
            );

		$insert = $this->db->insert('cmf_edu_zhongcengrenyuan', $CmfEduZhongcengrenyuanData);
		if($insert) {
			return $this->db->insert_id();
		} else {
			return false;
		}
	}

	/**
	 * 更新cmf_edu_zhongcengrenyuan
	 */
	public function update($id) {
		//prepare cms page data
            $CmfEduZhongcengrenyuanData = array(
                'testName'       => $this->input->post('testName'),
				'testManBy'      => $this->input->post('testManBy'),
				'uit'            => $this->input->post('uit'),
				'staff'          => $this->input->post('staff'),
				'pindeDesp'      => $this->input->post('pindeDesp'),
				'pindeSelf'      => $this->input->post('pindeSelf'),
				'abillityDesp'   => $this->input->post('abillityDesp'),
				'abillitySelf'   => $this->input->post('abillitySelf'),
				'studyDesp'      => $this->input->post('studyDesp'),
				'studySelf'      => $this->input->post('studySelf'),
				'jixiaoDesp'     => $this->input->post('jixiaoDesp'),
				'jixiaoSelf'     => $this->input->post('jixiaoSelf'),
				'lianzhengDesp'  => $this->input->post('lianzhengDesp'),
				'lianzhengSelf'  => $this->input->post('lianzhengSelf'),
				'attach'         => $this->input->post('attach')
            );

		if(!empty($CmfEduZhongcengrenyuanData) && !empty($id)) {
			$update = $this->db->update('cmf_edu_zhongcengrenyuan' ,$CmfEduZhongcengrenyuanData, array('ID' => $id));
			return $update?true:false;
		} else {
			return false;
		}
	}

	/**
	 * 删除cmf_edu_zhongcengrenyuan
	 */
	
	public function delete($id) {
		$delete = $this->db->delete('cmf_edu_zhongcengrenyuan' , array('ID' => $id));
		return $delete?true:false;
	}
}
?>