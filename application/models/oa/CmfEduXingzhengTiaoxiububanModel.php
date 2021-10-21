<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class CmfEduXingzhengTiaoxiububanModel extends CI_Model {
	public function __construct() {
		parent::__construct();
	}

	/*
	 * 获取搜索选项并分页
	 */
	function getSearchPage($limit,$start,$searchvalue,$keyword) {
		$this->db->select('*');
		$this->db->from('cmf_edu_xingzheng_tiaoxiububan');
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
		$this->db->from('cmf_edu_xingzheng_tiaoxiububan');
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
			$query = $this->db->get_where('cmf_edu_xingzheng_tiaoxiububan', array('ID' => $id));
			return $query->row_array();
		} else {
			$query = $this->db->get('cmf_edu_xingzheng_tiaoxiububan');
			return $query->result_array();
		}
	}

	//获取分页
	public function get_systemlang($limit, $start) {
        $this->db->limit($limit, $start);
        $query = $this->db->get('cmf_edu_xingzheng_tiaoxiububan');
        $rows = $query->result();
        return $rows;
    }

	/**
	* 获取总数
	*/
	public function get_count() {
        return $this->db->count_all_results('cmf_edu_xingzheng_tiaoxiububan');
    }

	/**
	 * 插入cmf_edu_xingzheng_tiaoxiububan
	 */
	public function insert() {
		//prepare post data
            $CmfEduXingzhengTiaoxiububanData = array(
                'term'               => $this->input->post('term'),
				'department'         => $this->input->post('department'),
				'person'             => $this->input->post('person'),
				'tiaoxiuTime'        => $this->input->post('tiaoxiuTime'),
				'tiaoxiuStart'       => $this->input->post('tiaoxiuStart'),
				'bubanTime'          => $this->input->post('bubanTime'),
				'bubanStart'         => $this->input->post('bubanStart'),
				'tiaoxiuExStatus'    => $this->input->post('tiaoxiuExStatus'),
				'tiaoxiuWorkFlowID'  => $this->input->post('tiaoxiuWorkFlowID'),
				'tiaoxiuExMan'       => $this->input->post('tiaoxiuExMan'),
				'tiaoxiuExTime'      => $this->input->post('tiaoxiuExTime'),
				'bubanExStatus'      => $this->input->post('bubanExStatus'),
				'bubanWorkFlowID'    => $this->input->post('bubanWorkFlowID'),
				'bubanExMan'         => $this->input->post('bubanExMan'),
				'bubanExTime'        => $this->input->post('bubanExTime'),
				'personName'         => $this->input->post('personName')
            );

		$insert = $this->db->insert('cmf_edu_xingzheng_tiaoxiububan', $CmfEduXingzhengTiaoxiububanData);
		if($insert) {
			return $this->db->insert_id();
		} else {
			return false;
		}
	}

	/**
	 * 更新cmf_edu_xingzheng_tiaoxiububan
	 */
	public function update($id) {
		//prepare cms page data
            $CmfAccessbankData = array(
                'term'               => $this->input->post('term'),
				'department'         => $this->input->post('department'),
				'person'             => $this->input->post('person'),
				'tiaoxiuTime'        => $this->input->post('tiaoxiuTime'),
				'tiaoxiuStart'       => $this->input->post('tiaoxiuStart'),
				'bubanTime'          => $this->input->post('bubanTime'),
				'bubanStart'         => $this->input->post('bubanStart'),
				'tiaoxiuExStatus'    => $this->input->post('tiaoxiuExStatus'),
				'tiaoxiuWorkFlowID'  => $this->input->post('tiaoxiuWorkFlowID'),
				'tiaoxiuExMan'       => $this->input->post('tiaoxiuExMan'),
				'tiaoxiuExTime'      => $this->input->post('tiaoxiuExTime'),
				'bubanExStatus'      => $this->input->post('bubanExStatus'),
				'bubanWorkFlowID'    => $this->input->post('bubanWorkFlowID'),
				'bubanExMan'         => $this->input->post('bubanExMan'),
				'bubanExTime'        => $this->input->post('bubanExTime'),
				'personName'         => $this->input->post('personName')
            );

		if(!empty($CmfAccessbankData) && !empty($id)) {
			$update = $this->db->update('cmf_edu_xingzheng_tiaoxiububan' ,$CmfAccessbankData, array('ID' => $id));
			return $update?true:false;
		} else {
			return false;
		}
	}

	/**
	 * 删除cmf_edu_xingzheng_tiaoxiububan
	 */
	
	public function delete($id) {
		$delete = $this->db->delete('cmf_edu_xingzheng_tiaoxiububan' , array('ID' => $id));
		return $delete?true:false;
	}
}
?>