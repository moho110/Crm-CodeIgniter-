<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class CmfOfficeTaskModel extends CI_Model {
	public function __construct() {
		parent::__construct();
	}

	/*
	 * 获取搜索选项并分页
	 */
	function getSearchPage($limit,$start,$searchvalue,$keyword) {
		$this->db->select('*');
		$this->db->from('cmf_office_task');
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
		$this->db->from('cmf_office_task');
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
			$query = $this->db->get_where('cmf_office_task', array('TASK_ID' => $id));
			return $query->row_array();
		} else {
			$query = $this->db->get('cmf_office_task');
			return $query->result_array();
		}
	}

	//获取分页
	public function get_systemlang($limit, $start) {
        $this->db->limit($limit, $start);
        $query = $this->db->get('cmf_office_task');
        $rows = $query->result();
        return $rows;
    }

	/**
	* 获取总数
	*/
	public function get_count() {
        return $this->db->count_all_results('cmf_office_task');
    }

	/**
	 * 插入cmf_office_task
	 */
	public function insert() {
		//prepare post data
            $CmfOfficeTaskData = array(
                'TASK_TYPE'     => $this->input->post('TASK_TYPE'),
				'INTERVAL'      => $this->input->post('INTERVAL'),
				'EXEC_TIME'     => $this->input->post('EXEC_TIME'),
				'LAST_EXEC'     => $this->input->post('LAST_EXEC'),
				'TASK_URL'      => $this->input->post('TASK_URL'),
				'TASK_NAME'     => $this->input->post('TASK_NAME'),
				'TASK_DESC'     => $this->input->post('TASK_DESC'),
				'TASK_CODE'     => $this->input->post('TASK_CODE'),
				'USE_FLAG'      => $this->input->post('USE_FLAG'),
				'SYS_TASK'      => $this->input->post('SYS_TASK')
            );

		$insert = $this->db->insert('cmf_office_task', $CmfOfficeTaskData);
		if($insert) {
			return $this->db->insert_id();
		} else {
			return false;
		}
	}

	/**
	 * 更新cmf_office_task
	 */
	public function update($id) {
		//prepare cms page data
            $CmfOfficeTaskData = array(
                'TASK_TYPE'     => $this->input->post('TASK_TYPE'),
				'INTERVAL'      => $this->input->post('INTERVAL'),
				'EXEC_TIME'     => $this->input->post('EXEC_TIME'),
				'LAST_EXEC'     => $this->input->post('LAST_EXEC'),
				'TASK_URL'      => $this->input->post('TASK_URL'),
				'TASK_NAME'     => $this->input->post('TASK_NAME'),
				'TASK_DESC'     => $this->input->post('TASK_DESC'),
				'TASK_CODE'     => $this->input->post('TASK_CODE'),
				'USE_FLAG'      => $this->input->post('USE_FLAG'),
				'SYS_TASK'      => $this->input->post('SYS_TASK')
            );

		if(!empty($CmfOfficeTaskData) && !empty($id)) {
			$update = $this->db->update('cmf_office_task' ,$CmfOfficeTaskData, array('TASK_ID' => $id));
			return $update?true:false;
		} else {
			return false;
		}
	}

	/**
	 * 删除cmf_office_task
	 */
	
	public function delete($id) {
		$delete = $this->db->delete('cmf_office_task' , array('TASK_ID' => $id));
		return $delete?true:false;
	}
}
?>