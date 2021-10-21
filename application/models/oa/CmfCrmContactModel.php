<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class CmfCrmContactModel extends CI_Model {
	public function __construct() {
		parent::__construct();
	}

	/*
	 * 获取搜索选项并分页
	 */
	function getSearchPage($limit,$start,$searchvalue,$keyword) {
		$this->db->select('*');
		$this->db->from('cmf_crm_contact');
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
		$this->db->from('cmf_crm_contact');
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
			$query = $this->db->get_where('cmf_crm_contact', array('id' => $id));
			return $query->row_array();
		} else {
			$query = $this->db->get('cmf_crm_contact');
			return $query->result_array();
		}
	}

	//获取分页
	public function get_systemlang($limit, $start) {
        $this->db->limit($limit, $start);
        $query = $this->db->get('cmf_crm_contact');
        $rows = $query->result();
        return $rows;
    }

	/**
	* 获取总数
	*/
	public function get_count() {
        return $this->db->count_all_results('cmf_crm_contact');
    }

	/**
	 * 插入cmf_crm_contact
	 */
	public function insert() {
		//prepare post data
            $CmfCrmContactModelData = array(
                'customerid'          => $this->input->post('customerid'),
				'linkmanid'           => $this->input->post('linkmanid'),
				'user_id'             => $this->input->post('user_id'),
				'createman'           => $this->input->post('createman'),
				'contact'             => $this->input->post('contact'),
				'chance'              => $this->input->post('chance'),
				'stage'               => $this->input->post('stage'),
				'describes'           => $this->input->post('describes'),
				'createtime'          => $this->input->post('createtime'),
				'contacttime'         => $this->input->post('contacttime'),
				'nextcontacttime'     => $this->input->post('nextcontacttime'),
				'nextissue'           => $this->input->post('nextissue'),
				'alreadycontact'      => $this->input->post('alreadycontact'),
				'public'              => $this->input->post('public'),
				'priority'            => $this->input->post('priority')
            );

		$insert = $this->db->insert('cmf_crm_contact', $CmfCrmContactModelData);
		if($insert) {
			return $this->db->insert_id();
		} else {
			return false;
		}
	}

	/**
	 * 更新cmf_crm_contact
	 */
	public function update($id) {
		//prepare cms page data
            $CmfCrmContactModelData = array(
                'customerid'          => $this->input->post('customerid'),
				'linkmanid'           => $this->input->post('linkmanid'),
				'user_id'             => $this->input->post('user_id'),
				'createman'           => $this->input->post('createman'),
				'contact'             => $this->input->post('contact'),
				'chance'              => $this->input->post('chance'),
				'stage'               => $this->input->post('stage'),
				'describes'           => $this->input->post('describes'),
				'createtime'          => $this->input->post('createtime'),
				'contacttime'         => $this->input->post('contacttime'),
				'nextcontacttime'     => $this->input->post('nextcontacttime'),
				'nextissue'           => $this->input->post('nextissue'),
				'alreadycontact'      => $this->input->post('alreadycontact'),
				'public'              => $this->input->post('public'),
				'priority'            => $this->input->post('priority')
            );

		if(!empty($CmfCrmContactModelData) && !empty($id)) {
			$update = $this->db->update('cmf_crm_contact' ,$CmfCrmContactModelData, array('id' => $id));
			return $update?true:false;
		} else {
			return false;
		}
	}

	/**
	 * 删除cmf_crm_contact
	 */
	
	public function delete($id) {
		$delete = $this->db->delete('cmf_crm_contact' , array('id' => $id));
		return $delete?true:false;
	}
}
?>