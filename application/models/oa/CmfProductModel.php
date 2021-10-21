<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class CmfProductModel extends CI_Model {
	public function __construct() {
		parent::__construct();
	}

	/*
	 * 获取搜索选项并分页
	 */
	function getSearchPage($limit,$start,$searchvalue,$keyword) {
		$this->db->select('*');
		$this->db->from('cmf_product');
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
		$this->db->from('cmf_product');
		$this->db->like($searchvalue,$keyword,'both');
		$this->db->where("$searchvalue LIKE '%$keyword%'");
		$query = $this->db->get();
		$rows = $query->result();
		return $rows;
	}

	//库存报警
    function getKucunbaojing($limit, $start) {
    	$this->db->select('cp.productid,cp.productname,
			cs.id,cs.num,cpt.ROWID,cpt.name,cpt.Code');
		$this->db->from('cmf_product as cp');
		$this->db->join('cmf_store as cs','cs.id=cp.productid','left');
		$this->db->join('cmf_producttype as cpt','cpt.ROWID=cp.productid','left');
		$this->db->limit($limit, $start);
		$query = $this->db->get();
		$rows = $query->result();
		return $rows;
	}

	//库存报警明细
	function getKucunbaojingDetails($id = "") {
		if(!empty($id)) {
			$this->db->select('cp.productid,cp.productname,
				cs.id,cs.num,cpt.ROWID,cpt.name,cpt.Code');
			$this->db->from('cmf_product as cp');
			$this->db->join('cmf_store as cs','cs.id=cp.productid','left');
			$this->db->join('cmf_producttype as cpt','cpt.ROWID=cp.productid','left');
			$query = $this->db->get_where('cmf_product', array('cp.productid' => $id));
			return $query->row_array();
		} else {
			$query = $this->db->get('cmf_product');
			return $query->result_array();
		}
	}

	//产品流动表
    function getMustProduct($limit, $start) {
    	$this->db->select('stockin.billid,stockin.indate,stockin.instoreshenhe,stockin.intype,
					stockindetail.prodname,stockindetail.prodguige,stockindetail.price,
					stockout.billid,stockout.outdate,stockoutdetail.lirun,storecheck.billid,
					storecheck.state,storecheckdetail.id,storecheckdetail.oldprodid,storecheckdetail.opertype,
					stockchange.billid,stockchange.outstoreshenhe,stockchange.instoreshenhe,stockchangedetail.id,
					stockchangedetail.jine,cpzz.billid,cpzz.totalmoney,cpzzdetail.id,cpzzdetail.price,cpzzdetail.jine,
					product.productid,product.sellprice,product.ifkucun,product.productname');
			$this->db->from('cmf_product as product');
			$this->db->join('cmf_stockinmain as stockin','stockin.billid=product.productid','left');
			$this->db->join('cmf_stockinmain_detail as stockindetail','stockindetail.id=product.productid','left');
			$this->db->join('cmf_stockoutmain as stockout','stockout.billid=product.productid','left');
			$this->db->join('cmf_stockoutmain_detail as stockoutdetail','stockoutdetail.id=product.productid','left');
			$this->db->join('cmf_storecheck as storecheck','storecheck.billid=product.productid','left');
			$this->db->join('cmf_storecheck_detail as storecheckdetail','storecheckdetail.id=product.productid','left');
			$this->db->join('cmf_stockchangemain as stockchange','stockchange.billid=product.productid','left');
			$this->db->join('cmf_stockchangemain_detail as stockchangedetail','stockchangedetail.id=product.productid','left');
			$this->db->join('cmf_productzuzhuang as cpzz','cpzz.billid=product.productid','left');
			$this->db->join('cmf_productzuzhuang_detail as cpzzdetail','cpzzdetail.id=product.productid','left');
			$this->db->limit($limit, $start);
			$query = $this->db->get();
			$rows = $query->result();
			return $rows;
	}

	//产品流动表明细
	function getMustProductDetails($id = "") {
		if(!empty($id)) {
			$this->db->select('stockin.billid,stockin.indate,stockin.instoreshenhe,stockin.intype,
					stockindetail.prodname,stockindetail.prodguige,stockindetail.price,
					stockout.billid,stockout.outdate,stockoutdetail.lirun,storecheck.billid,
					storecheck.state,storecheckdetail.id,storecheckdetail.oldprodid,storecheckdetail.opertype,
					stockchange.billid,stockchange.outstoreshenhe,stockchange.instoreshenhe,stockchangedetail.id,
					stockchangedetail.jine,cpzz.billid,cpzz.totalmoney,cpzzdetail.id,cpzzdetail.price,cpzzdetail.jine,
					product.productid,product.sellprice,product.ifkucun,product.productname');
			$this->db->from('cmf_product as product');
			$this->db->join('cmf_stockinmain as stockin','stockin.billid=product.productid','left');
			$this->db->join('cmf_stockinmain_detail as stockindetail','stockindetail.id=product.productid','left');
			$this->db->join('cmf_stockoutmain as stockout','stockout.billid=product.productid','left');
			$this->db->join('cmf_stockoutmain_detail as stockoutdetail','stockoutdetail.id=product.productid','left');
			$this->db->join('cmf_storecheck as storecheck','storecheck.billid=product.productid','left');
			$this->db->join('cmf_storecheck_detail as storecheckdetail','storecheckdetail.id=product.productid','left');
			$this->db->join('cmf_stockchangemain as stockchange','stockchange.billid=product.productid','left');
			$this->db->join('cmf_stockchangemain_detail as stockchangedetail','stockchangedetail.id=product.productid','left');
			$this->db->join('cmf_productzuzhuang as cpzz','cpzz.billid=product.productid','left');
			$this->db->join('cmf_productzuzhuang_detail as cpzzdetail','cpzzdetail.id=product.productid','left');
			$query = $this->db->get_where('cmf_product', array('product.productid' => $id));
			return $query->row_array();
		} else {
			$query = $this->db->get('cmf_product');
			return $query->result_array();
		}
	}

	/**
	 * 获取列
	 */
	function getRows($id = "") {
		if(!empty($id)) {
			$query = $this->db->get_where('cmf_product', array('productid' => $id));
			return $query->row_array();
		} else {
			$query = $this->db->get('cmf_product');
			return $query->result_array();
		}
	}

	//获取分页
	public function get_systemlang($limit, $start) {
        $this->db->limit($limit, $start);
        $query = $this->db->get('cmf_product');
        $rows = $query->result();
        return $rows;
    }

	/**
	* 获取总数
	*/
	public function get_count() {
        return $this->db->count_all_results('cmf_product');
    }

	/**
	 * 插入cmf_product
	 */
	public function insert() {
		//prepare post data
            $CmfProductData = array(
                'productname'     => $this->input->post('productname'),
				'measureid'       => $this->input->post('measureid'),
				'mode'            => $this->input->post('mode'),
				'standard'        => $this->input->post('standard'),
				'producttype'     => $this->input->post('producttype'),
				'storemin'        => $this->input->post('storemin'),
				'storemax'        => $this->input->post('storemax'),
				'user_flag'       => $this->input->post('user_flag'),
				'sellprice'       => $this->input->post('sellprice'),
				'productcn'       => $this->input->post('productcn'),
				'sellprice2'      => $this->input->post('sellprice2'),
				'sellprice3'      => $this->input->post('sellprice3'),
				'fileaddress'     => $this->input->post('fileaddress'),
				'oldproductid'    => $this->input->post('oldproductid'),
				'ifkucun'         => $this->input->post('ifkucun'),
				'relatefiles'     => $this->input->post('relatefiles'),
				'supplyid'        => $this->input->post('supplyid'),
				'hascolor'        => $this->input->post('hascolor'),
				'sellprice4'      => $this->input->post('sellprice4')
            );

		$insert = $this->db->insert('cmf_product', $CmfProductData);
		if($insert) {
			return $this->db->insert_id();
		} else {
			return false;
		}
	}

	/**
	 * 更新cmf_product
	 */
	public function update($id) {
		//prepare cms page data
            $CmfProductData = array(
                'productname'     => $this->input->post('productname'),
				'measureid'       => $this->input->post('measureid'),
				'mode'            => $this->input->post('mode'),
				'standard'        => $this->input->post('standard'),
				'producttype'     => $this->input->post('producttype'),
				'storemin'        => $this->input->post('storemin'),
				'storemax'        => $this->input->post('storemax'),
				'user_flag'       => $this->input->post('user_flag'),
				'sellprice'       => $this->input->post('sellprice'),
				'productcn'       => $this->input->post('productcn'),
				'sellprice2'      => $this->input->post('sellprice2'),
				'sellprice3'      => $this->input->post('sellprice3'),
				'fileaddress'     => $this->input->post('fileaddress'),
				'oldproductid'    => $this->input->post('oldproductid'),
				'ifkucun'         => $this->input->post('ifkucun'),
				'relatefiles'     => $this->input->post('relatefiles'),
				'supplyid'        => $this->input->post('supplyid'),
				'hascolor'        => $this->input->post('hascolor'),
				'sellprice4'      => $this->input->post('sellprice4')
            );

		if(!empty($CmfProductData) && !empty($id)) {
			$update = $this->db->update('cmf_product' ,$CmfProductData, array('productid' => $id));
			return $update?true:false;
		} else {
			return false;
		}
	}

	/**
	 * 删除cmf_product
	 */
	
	public function delete($id) {
		$delete = $this->db->delete('cmf_product' , array('productid' => $id));
		return $delete?true:false;
	}
}
?>