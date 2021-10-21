<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class CmfSupplyModel extends CI_Model {
	public function __construct() {
		parent::__construct();
	}

    /*
     * 获取搜索选项并分页
     */
    function getSearchPage($limit,$start,$searchvalue,$keyword) {
        $this->db->select('*');
        $this->db->from('cmf_supply');
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
        $this->db->from('cmf_supply');
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
			$query = $this->db->get_where('cmf_supply', array('ROWID' => $id));
			return $query->row_array();
		} else {
			$query = $this->db->get('cmf_supply');
			return $query->result_array();
		}
	}

	//获取分页
	public function get_systemlang($limit, $start) {
        $this->db->limit($limit, $start);
        $query = $this->db->get('cmf_supply');
        $rows = $query->result();
        return $rows;
    }

	/**
	* 获取总数
	*/
	public function get_count() {
        return $this->db->count_all_results('cmf_supply');
    }

	/**
	 * 插入cmf_accessprepay
	 */
	public function insert() {
		//prepare post data
            $CmfSupplyData = array(
                'supplyid'             => $this->input->post('supplyid'),
                'supplyname'           => $this->input->post('supplyname'),
                'supplyshortname'      => $this->input->post('supplyshortname'),
                'enterstype'           => $this->input->post('enterstype'),
                'calling'              => $this->input->post('calling'),
                'linkman'              => $this->input->post('linkman'),
                'artificialperson'     => $this->input->post('artificialperson'),
                'chargesection'        => $this->input->post('chargesection'),
                'postalcode'           => $this->input->post('postalcode'),
                'phone'                => $this->input->post('phone'),
                'fax'                  => $this->input->post('fax'),
                'contactaddress'       => $this->input->post('contactaddress'),
                'email'                => $this->input->post('email'),
                'netword'              => $this->input->post('netword'),
                'netword'              => $this->input->post('bank'),
                'accountnumber'        => $this->input->post('accountnumber'),
                'startdate'            => $this->input->post('startdate'),
                'enddate'              => $this->input->post('enddate'),
                'style'                => $this->input->post('style'),
                'user_flag'            => $this->input->post('user_flag'),
                'user_id'              => $this->input->post('user_id'),
                'supplycn'             => $this->input->post('supplycn'),
                'sysuser'              => $this->input->post('sysuser'),
                'prodtype'             => $this->input->post('prodtype'),
                'amtagio'              => $this->input->post('amtagio'),
                'remark'               => $this->input->post('remark'),
                'recommand'            => $this->input->post('recommand'),
                'payaccount'           => $this->input->post('payaccount'),
                'paymoney'             => $this->input->post('paymoney'),
                'factpaymoney'         => $this->input->post('factpaymoney'),
                'nopaymoney'           => $this->input->post('nopaymoney'),
                'datascope'            => $this->input->post('datascope'),
                'yufukuan'             => $this->input->post('yufukuan')
            );

		$insert = $this->db->insert('cmf_supply', $CmfSupplyData);
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
            $CmfSupplyData = array(
                'supplyid'             => $this->input->post('supplyid'),
                'supplyname'           => $this->input->post('supplyname'),
                'supplyshortname'      => $this->input->post('supplyshortname'),
                'enterstype'           => $this->input->post('enterstype'),
                'calling'              => $this->input->post('calling'),
                'linkman'              => $this->input->post('linkman'),
                'artificialperson'     => $this->input->post('artificialperson'),
                'chargesection'  => $this->input->post('chargesection'),
                'postalcode'     => $this->input->post('postalcode'),
                'phone'          => $this->input->post('phone'),
                'fax'            => $this->input->post('fax'),
                'contactaddress' => $this->input->post('contactaddress'),
                'email'          => $this->input->post('email'),
                'netword'        => $this->input->post('netword'),
                'netword'        => $this->input->post('bank'),
                'accountnumber'  => $this->input->post('accountnumber'),
                'startdate'      => $this->input->post('startdate'),
                'enddate'        => $this->input->post('enddate'),
                'style'          => $this->input->post('style'),
                'user_flag'      => $this->input->post('user_flag'),
                'user_id'        => $this->input->post('user_id'),
                'supplycn'       => $this->input->post('supplycn'),
                'sysuser'        => $this->input->post('sysuser'),
                'prodtype'       => $this->input->post('prodtype'),
                'amtagio'        => $this->input->post('amtagio'),
                'remark'         => $this->input->post('remark'),
                'recommand'      => $this->input->post('recommand'),
                'payaccount'     => $this->input->post('payaccount'),
                'paymoney'       => $this->input->post('paymoney'),
                'factpaymoney'   => $this->input->post('factpaymoney'),
                'nopaymoney'     => $this->input->post('nopaymoney'),
                'datascope'      => $this->input->post('datascope'),
                'yufukuan'       => $this->input->post('yufukuan')
            );

		if(!empty($CmfSupplyData) && !empty($id)) {
			$update = $this->db->update('cmf_supply' ,$CmfSupplyData, array('ROWID' => $id));
			return $update?true:false;
		} else {
			return false;
		}
	}

	/**
	 * 删除cmf_accessprepay
	 */
	
	public function delete($id) {
		$delete = $this->db->delete('cmf_supply' , array('ROWID' => $id));
		return $delete?true:false;
	}
}
?>