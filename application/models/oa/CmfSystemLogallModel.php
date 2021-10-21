<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class CmfSystemLogallModel extends CI_Model {
	public function __construct() {
		parent::__construct();
	}

	/*
	 * 获取搜索选项并分页
	 */
	function getSearchPage($limit,$start,$searchvalue,$keyword) {
		$this->db->select('*');
		$this->db->from('cmf_system_logall');
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
		$this->db->from('cmf_system_logall');
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
			$query = $this->db->get_where('cmf_system_logall', array('ID' => $id));
			return $query->row_array();
		} else {
			$query = $this->db->get('cmf_system_logall');
			return $query->result_array();
		}
	}

	//获取分页
	public function get_systemlang($limit, $start) {
        $this->db->limit($limit, $start);
        $query = $this->db->get('cmf_system_logall');
        $rows = $query->result();
        return $rows;
    }

	/**
	* 获取总数
	*/
	public function get_count() {
        return $this->db->count_all_results('cmf_system_logall');
    }

	/**
	 * 插入cmf_accessprepay
	 */
	public function insert() {
		//prepare post data
            $CmfSystemLogallData = array(
                'currentTime'                  => $this->input->post('currentTime'),
                'executeTime'                  => $this->input->post('executeTime'),
                'SQL'                          => $this->input->post('SQL'),
                'Slow_launch_threads'          => $this->input->post('Slow_launch_threads'),
                'Threads_cached'               => $this->input->post('Threads_cached'),
                'Threads_connected'            => $this->input->post('Threads_connected'),
                'Threads_created'              => $this->input->post('Threads_created'),
                'Threads_running'              => $this->input->post('Threads_running'),
                'Qcache_free_blocks'           => $this->input->post('Qcache_free_blocks'),
                'Qcache_free_memory'           => $this->input->post('Qcache_free_memory'),
                'Qcache_hits'                  => $this->input->post('Qcache_hits'),
                'Qcache_inserts'               => $this->input->post('Qcache_inserts'),
                'Qcache_lowmem_prunes'         => $this->input->post('Qcache_lowmem_prunes'),
                'Qcache_not_cached'            => $this->input->post('Qcache_not_cached')
                'Qcache_queries_in_cache'      => $this->input->post('Qcache_queries_in_cache'),
                'Qcache_total_blocks'          => $this->input->post('Qcache_total_blocks')

            );

		$insert = $this->db->insert('cmf_system_logall', $CmfSystemLogallData);
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
            $CmfSystemLogallData = array(
                'currentTime'                  => $this->input->post('currentTime'),
                'executeTime'                  => $this->input->post('executeTime'),
                'SQL'                          => $this->input->post('SQL'),
                'Slow_launch_threads'          => $this->input->post('Slow_launch_threads'),
                'Threads_cached'               => $this->input->post('Threads_cached'),
                'Threads_connected'            => $this->input->post('Threads_connected'),
                'Threads_created'              => $this->input->post('Threads_created'),
                'Threads_running'              => $this->input->post('Threads_running'),
                'Qcache_free_blocks'           => $this->input->post('Qcache_free_blocks'),
                'Qcache_free_memory'           => $this->input->post('Qcache_free_memory'),
                'Qcache_hits'                  => $this->input->post('Qcache_hits'),
                'Qcache_inserts'               => $this->input->post('Qcache_inserts'),
                'Qcache_lowmem_prunes'         => $this->input->post('Qcache_lowmem_prunes'),
                'Qcache_not_cached'            => $this->input->post('Qcache_not_cached')
                'Qcache_queries_in_cache'      => $this->input->post('Qcache_queries_in_cache'),
                'Qcache_total_blocks'          => $this->input->post('Qcache_total_blocks')
            );

		if(!empty($CmfSystemLogallData) && !empty($id)) {
			$update = $this->db->update('cmf_system_logall' ,$CmfSystemLogallData, array('ID' => $id));
			return $update?true:false;
		} else {
			return false;
		}
	}

	/**
	 * 删除cmf_accessprepay
	 */
	
	public function delete($id) {
		$delete = $this->db->delete('cmf_system_logall' , array('ID' => $id));
		return $delete?true:false;
	}
}
?>