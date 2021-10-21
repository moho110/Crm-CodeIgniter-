<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class CmfUserModel extends CI_Model {
	public function __construct() {
		parent::__construct();
	}

	/**
	 * 获取搜索选项
	 */
	function getSearch($searchvalue,$keyword) {
		$this->db->select('*');
		$this->db->from('cmf_user');
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
			$query = $this->db->get_where('cmf_user', array('id' => $id));
			return $query->row_array();
		} else {
			$query = $this->db->get('cmf_user');
			return $query->result_array();
		}
	}

	//获取分页
	public function get_systemlang($limit, $start) {
        $this->db->limit($limit, $start);
        $query = $this->db->get('cmf_user');
        $rows = $query->result();
        return $rows;
    }

	/**
	* 获取总数
	*/
	public function get_count() {
        return $this->db->count_all_results('cmf_user');
    }

	/**
	 * 插入cmf_user
	 */
	public function insert() {
		//prepare post data
            $CmfUserData = array(
                'user_type'            => $this->input->post('user_type'),
				'sex'                  => $this->input->post('sex'),
				'birthday'             => $this->input->post('birthday'),
				'last_login_time'      => $this->input->post('last_login_time'),
				'score'                => $this->input->post('score'),
				'coin'                 => $this->input->post('coin')
				'balance'              => $this->input->post('balance'),
				'create_time'          => $this->input->post('create_time'),
				'user_status'          => $this->input->post('user_status'),
				'user_login'           => $this->input->post('user_login'),
				'user_pass'            => $this->input->post('user_pass'),
				'user_nickname'        => $this->input->post('user_nickname')
				'user_email'           => $this->input->post('user_email'),
				'user_url'             => $this->input->post('user_url'),
				'avatar'               => $this->input->post('avatar'),
				'signature'            => $this->input->post('signature'),
				'last_login_ip'        => $this->input->post('last_login_ip'),
				'user_activation_key'  => $this->input->post('user_activation_key')
				'mobile'               => $this->input->post('mobile'),
				'more'                 => $this->input->post('more')
            );

		$insert = $this->db->insert('cmf_user', $CmfUserData);
		if($insert) {
			return $this->db->insert_id();
		} else {
			return false;
		}
	}

	/**
	 * 更新cmf_user
	 */
	public function update($id) {
		//prepare cms page data
            $CmfUserData = array(
                'user_type'            => $this->input->post('user_type'),
				'sex'                  => $this->input->post('sex'),
				'birthday'             => $this->input->post('birthday'),
				'last_login_time'      => $this->input->post('last_login_time'),
				'score'                => $this->input->post('score'),
				'coin'                 => $this->input->post('coin')
				'balance'              => $this->input->post('balance'),
				'create_time'          => $this->input->post('create_time'),
				'user_status'          => $this->input->post('user_status'),
				'user_login'           => $this->input->post('user_login'),
				'user_pass'            => $this->input->post('user_pass'),
				'user_nickname'        => $this->input->post('user_nickname')
				'user_email'           => $this->input->post('user_email'),
				'user_url'             => $this->input->post('user_url'),
				'avatar'               => $this->input->post('avatar'),
				'signature'            => $this->input->post('signature'),
				'last_login_ip'        => $this->input->post('last_login_ip'),
				'user_activation_key'  => $this->input->post('user_activation_key')
				'mobile'               => $this->input->post('mobile'),
				'more'                 => $this->input->post('more')
            );

		if(!empty($CmfUserData) && !empty($id)) {
			$update = $this->db->update('cmf_user' ,$CmfUserData, array('id' => $id));
			return $update?true:false;
		} else {
			return false;
		}
	}

	/**
	 * 删除cmf_user
	 */
	
	public function delete($id) {
		$delete = $this->db->delete('cmf_user' , array('id' => $id));
		return $delete?true:false;
	}
}
?>