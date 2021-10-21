<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class CmfEduXingzhengKaoqinmingxiModel extends CI_Model {
	public function __construct() {
		parent::__construct();
	}

	/*
	 * 获取搜索选项并分页
	 */
	function getSearchPage($limit,$start,$searchvalue,$keyword) {
		$this->db->select('*');
		$this->db->from('cmf_edu_xingzheng_kaoqinmingxi');
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
		$this->db->from('cmf_edu_xingzheng_kaoqinmingxi');
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
			$query = $this->db->get_where('cmf_edu_xingzheng_kaoqinmingxi', array('Id' => $id));
			return $query->row_array();
		} else {
			$query = $this->db->get('cmf_edu_xingzheng_kaoqinmingxi');
			return $query->result_array();
		}
	}

	//获取分页
	public function get_systemlang($limit, $start) {
        $this->db->limit($limit, $start);
        $query = $this->db->get('cmf_edu_xingzheng_kaoqinmingxi');
        $rows = $query->result();
        return $rows;
    }

	/**
	* 获取总数
	*/
	public function get_count() {
        return $this->db->count_all_results('cmf_edu_xingzheng_kaoqinmingxi');
    }

	/**
	 * 插入cmf_edu_xingzheng_kaoqinmingxi
	 */
	public function insert() {
		//prepare post data
            $CmfEduXingzhengKaoqinmingxiData = array(
                'term'                => $this->input->post('term'),
				'department'          => $this->input->post('department'),
				'person'              => $this->input->post('person'),
				'date'                => $this->input->post('date'),
				'week'                => $this->input->post('week'),
				'day'                 => $this->input->post('day'),
				'class'               => $this->input->post('class'),
				'startRealityCard'    => $this->input->post('startRealityCard'),
				'startKaoqinStatus'   => $this->input->post('startKaoqinStatus'),
				'endRealityCard'      => $this->input->post('endRealityCard'),
				'endKaoqinStatus'     => $this->input->post('endKaoqinStatus'),
				'startCardBGN'        => $this->input->post('startCardBGN'),
				'startCardEND'        => $this->input->post('startCardEND'),
				'endCartBGN'          => $this->input->post('endCartBGN'),
				'endCardEND'          => $this->input->post('endCardEND'),
				'startDelayTime'      => $this->input->post('startDelayTime'),
				'delayMinutesNum'     => $this->input->post('delayMinutesNum'),
				'delayQuitTime'       => $this->input->post('delayQuitTime'),
				'earlyQuitMinutesNum' => $this->input->post('earlyQuitMinutesNum'),
				'createTime'          => $this->input->post('createTime'),
				'personName'          => $this->input->post('personName')
            );

		$insert = $this->db->insert('cmf_edu_xingzheng_kaoqinmingxi', $CmfEduXingzhengKaoqinmingxiData);
		if($insert) {
			return $this->db->insert_id();
		} else {
			return false;
		}
	}

	/**
	 * 更新cmf_edu_xingzheng_kaoqinmingxi
	 */
	public function update($id) {
		//prepare cms page data
            $CmfEduXingzhengKaoqinmingxiData = array(
                'term'                => $this->input->post('term'),
				'department'          => $this->input->post('department'),
				'person'              => $this->input->post('person'),
				'date'                => $this->input->post('date'),
				'week'                => $this->input->post('week'),
				'day'                 => $this->input->post('day'),
				'class'               => $this->input->post('class'),
				'startRealityCard'    => $this->input->post('startRealityCard'),
				'startKaoqinStatus'   => $this->input->post('startKaoqinStatus'),
				'endRealityCard'      => $this->input->post('endRealityCard'),
				'endKaoqinStatus'     => $this->input->post('endKaoqinStatus'),
				'startCardBGN'        => $this->input->post('startCardBGN'),
				'startCardEND'        => $this->input->post('startCardEND'),
				'endCartBGN'          => $this->input->post('endCartBGN'),
				'endCardEND'          => $this->input->post('endCardEND'),
				'startDelayTime'      => $this->input->post('startDelayTime'),
				'delayMinutesNum'     => $this->input->post('delayMinutesNum'),
				'delayQuitTime'       => $this->input->post('delayQuitTime'),
				'earlyQuitMinutesNum' => $this->input->post('earlyQuitMinutesNum'),
				'createTime'          => $this->input->post('createTime'),
				'personName'          => $this->input->post('personName')
            );

		if(!empty($CmfEduXingzhengKaoqinmingxiData) && !empty($id)) {
			$update = $this->db->update('cmf_edu_xingzheng_kaoqinmingxi' ,$CmfEduXingzhengKaoqinmingxiData, array('Id' => $id));
			return $update?true:false;
		} else {
			return false;
		}
	}

	/**
	 * 删除cmf_edu_xingzheng_kaoqinmingxi
	 */
	
	public function delete($id) {
		$delete = $this->db->delete('cmf_edu_xingzheng_kaoqinmingxi' , array('Id' => $id));
		return $delete?true:false;
	}
}
?>