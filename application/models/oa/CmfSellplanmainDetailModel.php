<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class CmfSellplanmainDetailModel extends CI_Model {
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

	/**
	 * 获取搜索选项
	 */
	function getSearch($searchvalue,$keyword) {
		$this->db->select('*');
		$this->db->from('cmf_sellplanmain');
		$this->db->like($searchvalue,$keyword,'both');
		$this->db->where("$searchvalue LIKE '%$keyword%'");
		$query = $this->db->get();
		$rows = $query->result();
		return $rows;
	}

	//毛利汇总
    function getMustMaoliSum($limit, $start) {
    	$this->db->select('cspd.id,cspd.prodname,cspd.prodguige,cspd.prodxinghao,cspd.proddanwei,cspd.price,
				cspd.zhekou,cspd.num,cspd.plandate,cspd.opertype,cc.supplyname,cc.startdate,
				cc.enddate,csp.billid,csp.zhuti,csp.sellplanno,csp.totalmoney,csp.paytype,
				csp.huikuanjine,csp.fahuojine,csp.kaipiaojine,csp.qianyueren,csp.user_flag');
		$this->db->from('cmf_sellplanmain_detail as cspd');
		$this->db->join('cmf_customer as cc','cc.id=cspd.id','left');
		$this->db->join('cmf_sellplanmain as csp','csp.billid=cspd.id','left');
		$this->db->limit($limit, $start);
		$query = $this->db->get();
		$rows = $query->result();
		return $rows;
	}

	//毛利汇总明细
	function getMustMaoliSumDetails($id = "") {
		if(!empty($id)) {
			$this->db->select('cspd.id,cspd.prodname,cspd.prodguige,cspd.prodxinghao,cspd.proddanwei,cspd.price,
				cspd.zhekou,cspd.num,cspd.plandate,cspd.opertype,cc.supplyname,cc.startdate,
				cc.enddate,csp.billid,csp.zhuti,csp.sellplanno,csp.totalmoney,csp.paytype,
				csp.huikuanjine,csp.fahuojine,csp.kaipiaojine,csp.qianyueren,csp.user_flag');
			$this->db->from('cmf_sellplanmain_detail as cspd');
		$this->db->join('cmf_customer as cc','cc.id=cspd.id','left');
		$this->db->join('cmf_sellplanmain as csp','csp.billid=cspd.id','left');
			$query = $this->db->get_where('cmf_sellplanmain_detail', array('cspd.id' => $id));
			return $query->row_array();
		} else {
			$query = $this->db->get('cmf_sellplanmain_detail');
			return $query->result_array();
		}
	}

	//产品退货汇总
    function getMustTuihuoSum($limit, $start) {
    	$this->db->select('csd.id,csd.prodid,csd.prodname,
    				csd.prodguige,csd.prodxinghao,csd.proddanwei,
    				csd.price,csd.zhekou,csd.num,csd.jine,csd.chukunum,
					cc.supplyid,cc.supplyname,cc.phone,cc.fax,cc.email,cc.startdate,
					cc.enddate');
		$this->db->from('cmf_sellplanmain_detail as csd');
		$this->db->join('cmf_customer as cc','csd.id=cc.id','left');
		$this->db->limit($limit, $start);
		$query = $this->db->get();
		$rows = $query->result();
		return $rows;
	}

	//产品退货汇总明细
	function getMustTuihuoSumDetails($id = "") {
		if(!empty($id)) {
			$this->db->select('csd.id,csd.prodid,csd.prodname,csd.prodguige,csd.prodxinghao,
					csd.proddanwei,csd.price,csd.zhekou,csd.num,csd.jine,csd.chukunum,
					cc.supplyid,cc.supplyname,cc.phone,cc.fax,cc.email,cc.startdate,
					cc.enddate');
			$this->db->from('cmf_sellplanmain_detail as csd');
			$this->db->join('cmf_customer as cc','csd.id=cc.id','left');
			$query = $this->db->get_where('cmf_sellplanmain_detail', array('csd.id' => $id));
			return $query->row_array();
		} else {
			$query = $this->db->get('cmf_sellplanmain_detail');
			return $query->result_array();
		}
	}

	//产品销售汇总
    function getMustSellplanmainSum($limit, $start) {
    	$this->db->select('csd.id,csd.prodid,csd.prodname,csd.prodguige,csd.prodxinghao,
					csd.proddanwei,csd.price,csd.zhekou,csd.num,csd.chukunum,
					csd.lirun,cs.zhuti,cs.supplyid,cs.sellplanno,cs.totalmoney,
					cs.paytype,cs.huikuanjine');
		$this->db->from('cmf_sellplanmain_detail as csd');
		$this->db->join('cmf_sellplanmain as cs','csd.id=cs.billid','left');
		$this->db->limit($limit, $start);
		$query = $this->db->get();
		$rows = $query->result();
		return $rows;
	}

	//产品销售汇总明细
	function getMustSellplanmainSumDetails($id = "") {
		if(!empty($id)) {
			$this->db->select('csd.id,csd.prodid,csd.prodname,csd.prodguige,csd.prodxinghao,
					csd.proddanwei,csd.price,csd.zhekou,csd.num,csd.chukunum,
					csd.lirun,cs.zhuti,cs.supplyid,cs.sellplanno,cs.totalmoney,
					cs.paytype,cs.huikuanjine');
			$this->db->from('cmf_sellplanmain_detail as csd');
			$this->db->join('cmf_sellplanmain as cs','csd.id=cs.billid','left');
			$query = $this->db->get_where('cmf_sellplanmain_detail', array('csd.id' => $id));
			return $query->row_array();
		} else {
			$query = $this->db->get('cmf_sellplanmain_detail');
			return $query->result_array();
		}
	}

	/**
	 * 获取列
	 */
	function getRows($id = "") {
		if(!empty($id)) {
			$query = $this->db->get_where('cmf_sellplanmain_detail', array('id' => $id));
			return $query->row_array();
		} else {
			$query = $this->db->get('cmf_sellplanmain_detail');
			return $query->result_array();
		}
	}

	//获取分页
	public function get_systemlang($limit, $start) {
        $this->db->limit($limit, $start);
        $query = $this->db->get('cmf_sellplanmain_detail');
        $rows = $query->result();
        return $rows;
    }

	/**
	* 获取总数
	*/
	public function get_count() {
        return $this->db->count_all_results('cmf_sellplanmain_detail');
    }

	/**
	 * 插入cmf_sellplanmain_detail
	 */
	public function insert() {
		//prepare post data
            $CmfSellplanmainDetailData = array(
                'prodid'        => $this->input->post('prodid'),
				'prodname'      => $this->input->post('prodname'),
				'prodguige'     => $this->input->post('prodguige'),
				'prodxinghao'   => $this->input->post('prodxinghao'),
				'proddanwei'    => $this->input->post('proddanwei'),
				'price'         => $this->input->post('price'),
				'zhekou'        => $this->input->post('zhekou'),
				'num'           => $this->input->post('num'),
				'beizhu'        => $this->input->post('beizhu'),
				'mainrowid'     => $this->input->post('mainrowid'),
				'jine'          => $this->input->post('jine'),
				'chukunum'      => $this->input->post('chukunum'),
				'plandate'      => $this->input->post('plandate'),
				'qici'          => $this->input->post('qici'),
				'yaoqiu'        => $this->input->post('yaoqiu'),
				'iftixing'      => $this->input->post('iftixing'),
				'createtime'    => $this->input->post('createtime'),
				'lirun'         => $this->input->post('lirun'),
				'oldprodid'     => $this->input->post('oldprodid'),
				'opertype'      => $this->input->post('opertype')
            );

		$insert = $this->db->insert('cmf_sellplanmain_detail', $CmfSellplanmainDetailData);
		if($insert) {
			return $this->db->insert_id();
		} else {
			return false;
		}
	}

	/**
	 * 更新cmf_sellplanmain_detail
	 */
	public function update($id) {
		//prepare cms page data
            $CmfSellplanmainDetailData = array(
                'prodid'        => $this->input->post('prodid'),
				'prodname'      => $this->input->post('prodname'),
				'prodguige'     => $this->input->post('prodguige'),
				'prodxinghao'   => $this->input->post('prodxinghao'),
				'proddanwei'    => $this->input->post('proddanwei'),
				'price'         => $this->input->post('price'),
				'zhekou'        => $this->input->post('zhekou'),
				'num'           => $this->input->post('num'),
				'beizhu'        => $this->input->post('beizhu'),
				'mainrowid'     => $this->input->post('mainrowid'),
				'jine'          => $this->input->post('jine'),
				'chukunum'      => $this->input->post('chukunum'),
				'plandate'      => $this->input->post('plandate'),
				'qici'          => $this->input->post('qici'),
				'yaoqiu'        => $this->input->post('yaoqiu'),
				'iftixing'      => $this->input->post('iftixing'),
				'createtime'    => $this->input->post('createtime'),
				'lirun'         => $this->input->post('lirun'),
				'oldprodid'     => $this->input->post('oldprodid'),
				'opertype'      => $this->input->post('opertype')
            );

		if(!empty($CmfSellplanmainDetailData) && !empty($id)) {
			$update = $this->db->update('cmf_sellplanmain_detail' ,$CmfSellplanmainDetailData, array('id' => $id));
			return $update?true:false;
		} else {
			return false;
		}
	}

	/**
	 * 删除cmf_sellplanmain_detail
	 */
	
	public function delete($id) {
		$delete = $this->db->delete('cmf_sellplanmain_detail' , array('id' => $id));
		return $delete?true:false;
	}
}
?>