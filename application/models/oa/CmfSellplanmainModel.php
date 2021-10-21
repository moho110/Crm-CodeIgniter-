<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class CmfSellplanmainModel extends CI_Model {
	public function __construct() {
		parent::__construct();
	}

	/*
	 * 获取搜索选项并分页
	 */
	function getSearchPage($limit,$start,$searchvalue,$keyword) {
		$this->db->select('*');
		$this->db->from('cmf_sellplanmain');
		$this->db->like($searchvalue,$keyword,'both');
		$this->db->where("$searchvalue LIKE '%$keyword%'");
		$this->db->limit($limit,$start);
		$query = $this->db->get();
		$rows = $query->result();
		return $rows;
	}

	/*
	 * 获取搜索选项并分页
	 */
	function getSearchPage($limit,$start,$searchvalue,$keyword) {
		$this->db->select('*');
		$this->db->from('cmf_sellplanmain');
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
		$this->db->from('cmf_sellbilltype');
		$this->db->like($searchvalue,$keyword,'both');
		$this->db->where("$searchvalue LIKE '%$keyword%'");
		$query = $this->db->get();
		$rows = $query->result();
		return $rows;
	}

	//应开票汇总
    function getYinkaipiaoSum($limit, $start) {
    	$this->db->select('cs.billid,cs.zhuti,cs.supplyid,cs.chanceid,cs.sellplanno,cs.totalmoney,
				cs.paytype,cs.huikuanjine,cs.fahuojine,cs.kaipiaojine,cs.plandate,
				cs.qianyueren,cs.user_flag,cs.fahuostate,cs.linkman,cs.mobile,cs.createtime,
				cc.id,cc.supplyid,cc.supplyname,ck.id,ck.name,csb.id,csb.name');
		$this->db->from('cmf_sellplanmain as cs');
		$this->db->join('cmf_customer as cc','cc.id=cs.billid','left');
		$this->db->join('cmf_kaipiaostate as ck','ck.id=cs.billid','left');
		$this->db->join('cmf_sellbilltype as csb','csb.id=cs.billid','left');
		$this->db->limit($limit, $start);
		$query = $this->db->get();
		$rows = $query->result();
		return $rows;
	}

	//应开票汇总明细
	function getYinkaipiaoSumDetails($id = "") {
		if(!empty($id)) {
			$this->db->select('cs.billid,cs.zhuti,cs.supplyid,cs.chanceid,cs.sellplanno,cs.totalmoney,
				cs.paytype,cs.huikuanjine,cs.fahuojine,cs.kaipiaojine,cs.plandate,
				cs.qianyueren,cs.user_flag,cs.fahuostate,cs.linkman,cs.mobile,cs.createtime,
				cc.id,cc.supplyid,cc.supplyname,ck.id,ck.name,csb.id,csb.name');
		$this->db->from('cmf_sellplanmain as cs');
		$this->db->join('cmf_customer as cc','cc.id=cs.billid','left');
		$this->db->join('cmf_kaipiaostate as ck','ck.id=cs.billid','left');
		$this->db->join('cmf_sellbilltype as csb','csb.id=cs.billid','left');
			$query = $this->db->get_where('cmf_sellplanmain', array('cs.billid' => $id));
			return $query->row_array();
		} else {
			$query = $this->db->get('cmf_sellplanmain');
			return $query->result_array();
		}
	}

	//月度利润走势图
    function getYueduliruGraph($limit, $start) {
    	$this->db->select('cs.billid,cs.zhuti,cs.supplyid,cs.chanceid,cs.sellplanno,cs.totalmoney,
				cs.paytype,cs.huikuanjine,cs.fahuojine,cs.kaipiaojine,cs.plandate,
				cs.qianyueren,cs.user_flag,cs.fahuostate,cs.linkman,cs.mobile,cs.createtime,
				csy.ROWID,csy.supplyname,ccc.chanceId,ccc.chanceTheme,csd.id,csd.prodname,
				csd.prodguige,csd.prodxinghao,csd.proddanwei,csd.price,csd.zhekou,csd.num');
		$this->db->from('cmf_sellplanmain as cs');
		$this->db->join('cmf_sellplanmain_detail as csd','csd.id=cs.billid','left');
		$this->db->join('cmf_supply as csy','csy.ROWID=cs.billid','left');
		$this->db->join('cmf_crm_chance as ccc','ccc.chanceId=cs.billid','left');
		$this->db->limit($limit, $start);
		$query = $this->db->get();
		$rows = $query->result();
		return $rows;
	}

	//月度利润走势图明细
	function getYueduliruGraphDetails($id = "") {
		if(!empty($id)) {
			$this->db->select('cs.billid,cs.zhuti,cs.supplyid,cs.chanceid,cs.sellplanno,cs.totalmoney,
				cs.paytype,cs.huikuanjine,cs.fahuojine,cs.kaipiaojine,cs.plandate,
				cs.qianyueren,cs.user_flag,cs.fahuostate,cs.linkman,cs.mobile,cs.createtime,
				csy.ROWID,csy.supplyname,ccc.chanceId,ccc.chanceTheme,csd.id,csd.prodname,
				csd.prodguige,csd.prodxinghao,csd.proddanwei,csd.price,csd.zhekou,csd.num');
		$this->db->from('cmf_sellplanmain as cs');
		$this->db->join('cmf_sellplanmain_detail as csd','csd.id=cs.billid','left');
		$this->db->join('cmf_supply as csy','csy.ROWID=cs.billid','left');
		$this->db->join('cmf_crm_chance as ccc','ccc.chanceId=cs.billid','left');
			$query = $this->db->get_where('cmf_sellplanmain', array('cs.billid' => $id));
			return $query->row_array();
		} else {
			$query = $this->db->get('cmf_sellplanmain');
			return $query->result_array();
		}
	}

	//部门对比
    function getMustDepartment($limit, $start) {
    	$this->db->select('cs.billid,cs.zhuti,cs.supplyid,cs.sellplanno,cs.totalmoney,
				cs.paytype,cs.huikuanjine,cs.fahuojine,cs.kaipiaojine,
				cs.plandate,cs.zuiwanfahuodate,cs.qianyueren,cs.linkman,
				cd.DEPT_NAME,cd.DEPT_NO');
		$this->db->from('cmf_sellplanmain as cs');
		$this->db->join('cmf_department as cd','cd.DEPT_ID=cs.billid','left');
		$this->db->limit($limit, $start);
		$query = $this->db->get();
		$rows = $query->result();
		return $rows;
	}

	//部门对比明细
	function getMustDepartmentDetails($id = "") {
		if(!empty($id)) {
			$this->db->select('cs.billid,cs.zhuti,cs.supplyid,cs.sellplanno,cs.totalmoney,
				cs.paytype,cs.huikuanjine,cs.fahuojine,cs.kaipiaojine,
				cs.plandate,cs.zuiwanfahuodate,cs.qianyueren,cs.linkman,
				cd.DEPT_NAME,cd.DEPT_NO');
			$this->db->from('cmf_sellplanmain as cs');
			$this->db->join('cmf_department as cd','cd.DEPT_ID=cs.billid','left');
			$query = $this->db->get_where('cmf_sellplanmain', array('cs.billid' => $id));
			return $query->row_array();
		} else {
			$query = $this->db->get('cmf_sellplanmain');
			return $query->result_array();
		}
	}

	//客户区域对比
    function getMustCustomerareaDuibi($limit, $start) {
    	$this->db->select('cs.billid,cs.zhuti,cs.supplyid,cs.sellplanno,cs.totalmoney,
				cs.paytype,cs.huikuanjine,cs.fahuojine,cs.kaipiaojine,
				cs.plandate,cs.zuiwanfahuodate,cs.qianyueren,cs.linkman,
				cc.name,cc.leverno');
		$this->db->from('cmf_sellplanmain as cs');
		$this->db->join('cmf_customerarea as cc','cc.ROWID=cs.billid','left');
		$this->db->limit($limit, $start);
		$query = $this->db->get();
		$rows = $query->result();
		return $rows;
	}

	//客户区域对比明细
	function getMustCustomerareaDuibiDetails($id = "") {
		if(!empty($id)) {
			$this->db->select('cs.billid,cs.zhuti,cs.supplyid,cs.sellplanno,cs.totalmoney,
				cs.paytype,cs.huikuanjine,cs.fahuojine,cs.kaipiaojine,
				cs.plandate,cs.zuiwanfahuodate,cs.qianyueren,cs.linkman,
				cc.name,cc.leverno');
			$this->db->from('cmf_sellplanmain as cs');
			$this->db->join('cmf_customerarea as cc','cc.ROWID=cs.billid','left');
			$query = $this->db->get_where('cmf_sellplanmain', array('cs.billid' => $id));
			return $query->row_array();
		} else {
			$query = $this->db->get('cmf_sellplanmain');
			return $query->result_array();
		}
	}

	//客户排行
    function getMustSellplanmain($limit, $start) {
    	$this->db->select('cc.id,cc.supplyname,cc.phone,cc.fax,cc.email,
    		cspm.zhuti,cspm.huikuanjine,cspm.fahuojine,
    		cspm.sellplanno,cspm.paytype,cspm.kaipiaojine');
		$this->db->from('cmf_sellplanmain as cspm');
		$this->db->join('cmf_customer as cc','cspm.billid=cc.id','left');
		$this->db->limit($limit, $start);
		$query = $this->db->get();
		$rows = $query->result();
		return $rows;
	}

	//客户排行明细
	function getMustSellplanmainDetails($id = "") {
		if(!empty($id)) {
			$this->db->select('cc.id,cc.supplyname,cc.phone,cc.fax,cc.email,
    		cspm.zhuti,cspm.huikuanjine,cspm.fahuojine,
    		cspm.sellplanno,cspm.paytype,cspm.kaipiaojine');
			$this->db->from('cmf_sellplanmain as cspm');
			$this->db->join('cmf_customer as cc','cspm.billid=cc.id','left');
			$query = $this->db->get_where('cmf_sellplanmain', array('cc.id' => $id));
			return $query->row_array();
		} else {
			$query = $this->db->get('cmf_sellplanmain');
			return $query->result_array();
		}
	}

	/**
	 * 获取列
	 */
	function getRows($id = "") {
		if(!empty($id)) {
			$query = $this->db->get_where('cmf_sellplanmain', array('billid' => $id));
			return $query->row_array();
		} else {
			$query = $this->db->get('cmf_sellplanmain');
			return $query->result_array();
		}
	}

	//获取分页
	public function get_systemlang($limit, $start) {
        $this->db->limit($limit, $start);
        $query = $this->db->get('cmf_sellplanmain');
        $rows = $query->result();
        return $rows;
    }

	/**
	* 获取总数
	*/
	public function get_count() {
        return $this->db->count_all_results('cmf_sellplanmain');
    }

	/**
	 * 插入cmf_sellplanmain
	 */
	public function insert() {
		//prepare post data
            $CmfSellplanmainData = array(
                'zhuti'            => $this->input->post('zhuti'),
				'user_id'          => $this->input->post('user_id'),
				'supplyid'         => $this->input->post('supplyid'),
				'chanceid'         => $this->input->post('chanceid'),
				'sellplanno'       => $this->input->post('sellplanno'),
				'totalmoney'       => $this->input->post('totalmoney'),
				'paytype'          => $this->input->post('paytype'),
				'huikuanjine'      => $this->input->post('huikuanjine'),
				'fahuojine'        => $this->input->post('fahuojine'),
				'kaipiaojine'      => $this->input->post('kaipiaojine'),
				'plandate'         => $this->input->post('plandate'),
				'zuiwanfahuodate'  => $this->input->post('zuiwanfahuodate'),
				'qianyueren'       => $this->input->post('qianyueren'),
				'user_flag'        => $this->input->post('user_flag'),
				'beizhu'           => $this->input->post('beizhu'),
				'fileaddress'      => $this->input->post('fileaddress'),
				'gaiyao'           => $this->input->post('gaiyao'),
				'storeid'          => $this->input->post('storeid'),
				'linkman'          => $this->input->post('linkman'),
				'address'          => $this->input->post('address'),
				'mobile'           => $this->input->post('mobile'),
				'createtime'       => $this->input->post('createtime'),
				'billtype'         => $this->input->post('billtype'),
				'ifpay'            => $this->input->post('ifpay'),
				'beiyong'          => $this->input->post('beiyong'),
				'kaipiaostate'     => $this->input->post('kaipiaostate'),
				'fapiaoneirong'    => $this->input->post('fapiaoneirong'),
				'fapiaotype'       => $this->input->post('fapiaotype'),
				'fapiaono'         => $this->input->post('fapiaono'),
				'fahuotype'        => $this->input->post('fahuotype'),
				'fahuodan'         => $this->input->post('fahuodan'),
				'fahuoyunfei'      => $this->input->post('fahuoyunfei'),
				'yunfeitype'       => $this->input->post('yunfeitype'),
				'oddment'          => $this->input->post('oddment'),
				'integral'         => $this->input->post('integral')
            );

		$insert = $this->db->insert('cmf_sellplanmain', $CmfSellplanmainData);
		if($insert) {
			return $this->db->insert_id();
		} else {
			return false;
		}
	}

	/**
	 * 更新cmf_sellplanmain
	 */
	public function update($id) {
		//prepare cms page data
            $CmfSellplanmainData = array(
                'zhuti'            => $this->input->post('zhuti'),
				'user_id'          => $this->input->post('user_id'),
				'supplyid'         => $this->input->post('supplyid'),
				'chanceid'         => $this->input->post('chanceid'),
				'sellplanno'       => $this->input->post('sellplanno'),
				'totalmoney'       => $this->input->post('totalmoney'),
				'paytype'          => $this->input->post('paytype'),
				'huikuanjine'      => $this->input->post('huikuanjine'),
				'fahuojine'        => $this->input->post('fahuojine'),
				'kaipiaojine'      => $this->input->post('kaipiaojine'),
				'plandate'         => $this->input->post('plandate'),
				'zuiwanfahuodate'  => $this->input->post('zuiwanfahuodate'),
				'qianyueren'       => $this->input->post('qianyueren'),
				'user_flag'        => $this->input->post('user_flag'),
				'beizhu'           => $this->input->post('beizhu'),
				'fileaddress'      => $this->input->post('fileaddress'),
				'gaiyao'           => $this->input->post('gaiyao'),
				'storeid'          => $this->input->post('storeid'),
				'linkman'          => $this->input->post('linkman'),
				'address'          => $this->input->post('address'),
				'mobile'           => $this->input->post('mobile'),
				'createtime'       => $this->input->post('createtime'),
				'billtype'         => $this->input->post('billtype'),
				'ifpay'            => $this->input->post('ifpay'),
				'beiyong'          => $this->input->post('beiyong'),
				'kaipiaostate'     => $this->input->post('kaipiaostate'),
				'fapiaoneirong'    => $this->input->post('fapiaoneirong'),
				'fapiaotype'       => $this->input->post('fapiaotype'),
				'fapiaono'         => $this->input->post('fapiaono'),
				'fahuotype'        => $this->input->post('fahuotype'),
				'fahuodan'         => $this->input->post('fahuodan'),
				'fahuoyunfei'      => $this->input->post('fahuoyunfei'),
				'yunfeitype'       => $this->input->post('yunfeitype'),
				'oddment'          => $this->input->post('oddment'),
				'integral'         => $this->input->post('integral')
            );

		if(!empty($CmfSellplanmainData) && !empty($id)) {
			$update = $this->db->update('cmf_sellplanmain' ,$CmfSellplanmainData, array('billid' => $id));
			return $update?true:false;
		} else {
			return false;
		}
	}

	/**
	 * 删除cmf_sellplanmain
	 */
	
	public function delete($id) {
		$delete = $this->db->delete('cmf_sellplanmain' , array('billid' => $id));
		return $delete?true:false;
	}
}
?>