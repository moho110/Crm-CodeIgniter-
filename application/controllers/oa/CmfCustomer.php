<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class CmfCustomer extends MY_AdminController {
	function __construct()
	{
		parent::__construct();
		$this->load->helper('form');
        $this->load->helper('url');
        $this->load->database();
        $this->load->library("pagination");
		$this->load->library('form_validation');
		$this->load->model('oa/CmfCustomerModel');
        $this->load->model('oa/CmfSupplylinkmanModel');
	}

	/**
	 * 首页
	 * @return [type] [description]
	 */
	public function index() {

		//获取session消息
        if($this->session->userdata('success_msg')){
            $data['success_msg'] = $this->session->userdata('success_msg');
            $this->session->unset_userdata('success_msg');
        }
        if($this->session->userdata('error_msg')){
            $data['error_msg'] = $this->session->userdata('error_msg');
            $this->session->unset_userdata('error_msg');
        }

        $data = array();
        $config = array();
        //分页
        $config['base_url'] = base_url() ."index.php/oa/CmfCustomer/index/";
        $total_row = $this->CmfCustomerModel->get_count();
        $config["total_rows"] = $total_row;
        $config['per_page'] = 10;
        $config['num_links'] = 2;
        $config['use_page_numbers'] = TRUE;
        $config['reuse_query_string'] = TRUE;
        $config['display_pages'] = TRUE;
        $config['first_link'] = '首页';
        $config['last_link'] = '末页';
        $config['next_link'] = '下一页';
        $config['prev_link'] = '上一页';
        $config['full_tag_open'] = '<div style="margin:20px 20%;">';
        $config['full_tag_close'] = '</div>';
        $config['first_tag_open'] = '<span class="pagination-first-tag">';
        $config['first_tag_close'] = '</span>';
        $config['last_tag_open'] = '<span class="pagination-last-tag">';
        $config['last_tag_close'] = '</span>';
        $config['next_tag_open'] = '<span class="pagination-next-tag">';
        $config['next_tag_close'] = '</span>';
        $config['prev_tag_open'] = '<span class="pagination-prev-tag">';
        $config['prev_tag_close'] = '</span>';
        $config['cur_tag_open'] = '<strong class="pagination-current-tag">';
        $config['cur_tag_close'] = '</strong>';
        $config['num_tag_open'] = '<span class="pagination-number">';
        $config['num_tag_close'] = '</span>';
        //初始化分页配置
        $this->pagination->initialize($config);
        if($this->uri->segment(4)){
            $page = ($this->uri->segment(4)) ;
        }
        else{
            $page = 0;
        }
        $data['CmfCustomer'] = $this->CmfCustomerModel->get_systemlang($config['per_page'],$config['per_page']*$page);
        $data['links'] = $this->pagination->create_links();
		$this->load->view(__ADMIN_TEMPLATE__. "/oa/cmf_customer/index",$data);
	}

	/**
	 * 添加内容
	 */
	public function add() {
		$data = array();
        
        //if add request is submitted
        if($this->input->post('postSubmit')){
            //form field validation rules
            $this->form_validation->set_rules('supplyid','CmfCustomer supplyid', 'trim|required|min_length[1]|max_length[20]|numeric');
            $this->form_validation->set_rules('supplyname', 'CmfCustomer supplyname', 'trim|required|min_length[1]|max_length[200]');
            $this->form_validation->set_rules('supplyshortname', 'CmfCustomer supplyshortname', 'trim|required|min_length[1]|max_length[200]');
            $this->form_validation->set_rules('enterstype', 'CmfCustomer enterstype', 'trim|required|min_length[1]|max_length[200]');
            $this->form_validation->set_rules('calling', 'CmfCustomer calling', 'trim|required|min_length[1]|max_length[200]');
            $this->form_validation->set_rules('state', 'CmfCustomer state', 'trim|required|min_length[1]|max_length[2]|numeric');
            $this->form_validation->set_rules('membercard', 'CmfCustomer membercard', 'trim|required|min_length[1]|max_length[200]');
            $this->form_validation->set_rules('chargesection', 'CmfCustomer chargesection', 'trim|required|min_length[1]|max_length[200]');
            $this->form_validation->set_rules('postalcode', 'CmfCustomer postalcode', 'trim|required|min_length[1]|max_length[6]|numeric');
            $this->form_validation->set_rules('phone', 'CmfCustomer phone', 'trim|required|min_length[1]|max_length[11]|numeric');
            $this->form_validation->set_rules('fax', 'CmfCustomer fax', 'trim|required|min_length[1]|max_length[11]|numeric');
            $this->form_validation->set_rules('contactaddress', 'CmfCustomer contactaddress', 'trim|required|min_length[10]|max_length[200]');
            $this->form_validation->set_rules('email', 'CmfCustomer email', 'trim|required|min_length[10]|max_length[200]');
            $this->form_validation->set_rules('netword', 'CmfCustomer netword', 'trim|required|min_length[1]|max_length[200]');
            $this->form_validation->set_rules('bank', 'CmfCustomer bank', 'trim|required|min_length[1]|max_length[200]');
            $this->form_validation->set_rules('accountnumber', 'CmfCustomer accountnumber', 'trim|required|min_length[1]|max_length[200]');
            $this->form_validation->set_rules('startdate', 'CmfCustomer startdate', 'required');
            $this->form_validation->set_rules('enddate', 'CmfCustomer enddate', 'required');
            $this->form_validation->set_rules('style', 'CmfCustomer style', 'trim|required|min_length[1]|max_length[20]');
            $this->form_validation->set_rules('user_flag', 'CmfCustomer user_flag', 'trim|required|min_length[1]|max_length[20]|numeric');
            $this->form_validation->set_rules('user_id', 'CmfCustomer user_id', 'trim|required|min_length[1]|max_length[20]|numeric');
            $this->form_validation->set_rules('supplycn', 'CmfCustomer supplycn', 'trim|required|min_length[1]|max_length[20]|numeric');
            $this->form_validation->set_rules('sysuser', 'CmfCustomer sysuser', 'trim|required|min_length[1]|max_length[200]');
            $this->form_validation->set_rules('explainStr', 'CmfCustomer explainStr', 'trim|required|min_length[1]|max_length[200]');
            $this->form_validation->set_rules('briefStr', 'CmfCustomer briefStr', 'trim|required|min_length[1]|max_length[200]');
            $this->form_validation->set_rules('prodprice', 'CmfCustomer prodprice', 'trim|required|min_length[1]|max_length[20]|numeric');
            $this->form_validation->set_rules('amtagio', 'CmfCustomer amtagio', 'trim|required|min_length[1]|max_length[20]');
            $this->form_validation->set_rules('remark', 'CmfCustomer remark', 'trim|required|min_length[1]|max_length[200]');
            $this->form_validation->set_rules('recommand', 'CmfCustomer recommand', 'trim|required|min_length[1]|max_length[200]');
            $this->form_validation->set_rules('getaccount', 'CmfCustomer getaccount', 'trim|required|min_length[1]|max_length[20]');
            $this->form_validation->set_rules('yuchuzhi', 'CmfCustomer yuchuzhi', 'trim|required|min_length[1]|max_length[20]');
            $this->form_validation->set_rules('factgetmoney', 'CmfCustomer factgetmoney', 'trim|required|min_length[1]|max_length[20]|numeric');
            $this->form_validation->set_rules('nogetmoney', 'CmfCustomer nogetmoney', 'trim|required|min_length[1]|max_length[20]|numeric');
            $this->form_validation->set_rules('origin', 'CmfCustomer origin', 'trim|required|min_length[1]|max_length[2]|numeric');
            $this->form_validation->set_rules('salemode', 'CmfCustomer salemode', 'trim|required|min_length[1]|max_length[2]|numeric');
            $this->form_validation->set_rules('property', 'CmfCustomer property', 'trim|required|min_length[1]|max_length[2]|numeric');
            $this->form_validation->set_rules('datascope', 'CmfCustomer datascope', 'trim|required|min_length[1]|max_length[20]|numeric');
            $this->form_validation->set_rules('createdate', 'CmfCustomer createdate', 'required');
            $this->form_validation->set_rules('integral', 'CmfCustomer integral', 'trim|required|min_length[1]|max_length[20]|numeric');
            $this->form_validation->set_rules('lasttracetime', 'CmfCustomer lasttracetime', 'required');
            //validate submitted form data
            if($this->form_validation->run() == true){
                //insert post data
                $insert = $this->CmfCustomerModel->insert();
                if($insert){
                    $this->session->set_userdata('success_msg', '客户已经添加成功');
                    redirect('/oa/CmfCustomer/index');
                }else{
                    $data['error_msg'] = 'Some problems occurred, please try again.';
                }
            }
        }
        $data['action'] = 'Add';
        $data['CmfSupplylinkman'] = $this->CmfSupplylinkmanModel->getRows();
        $this->load->view(__ADMIN_TEMPLATE__. "/oa/cmf_customer/add-edit",$data);
	}

	/**
	 * 查看详细内容
	 * @param  [type] $id [description]
	 * @return [type]     [description]
	 */
	public function view($id) {
		//获取session消息
        if($this->session->userdata('success_msg')){
            $data['success_msg'] = $this->session->userdata('success_msg');
            $this->session->unset_userdata('success_msg');
        }
        if($this->session->userdata('error_msg')){
            $data['error_msg'] = $this->session->userdata('error_msg');
            $this->session->unset_userdata('error_msg');
        }

		$data = array();

		if(!empty($id)) {
		$data['CmfCustomer'] = $this->CmfCustomerModel->getRows($id);
		$this->load->view(__ADMIN_TEMPLATE__. "/oa/cmf_customer/details",$data);	
		} else {
			redirect('/oa/CmfCustomer/index');
		}
	}

	/**
	 * 编辑内容
	 * @return [type] [description]
	 */
	public function edit($id) {
		$data = array();
        
        //get post data
        $CmfCustomer = $this->CmfCustomerModel->getRows($id);
        
        //if update request is submitted
        if($this->input->post('postSubmit')){
            //form field validation rules
            $this->form_validation->set_rules('supplyid','CmfCustomer supplyid', 'trim|required|min_length[1]|max_length[20]|numeric');
            $this->form_validation->set_rules('supplyname', 'CmfCustomer supplyname', 'trim|required|min_length[1]|max_length[200]');
            $this->form_validation->set_rules('supplyshortname', 'CmfCustomer supplyshortname', 'trim|required|min_length[1]|max_length[200]');
            $this->form_validation->set_rules('enterstype', 'CmfCustomer enterstype', 'trim|required|min_length[1]|max_length[200]');
            $this->form_validation->set_rules('calling', 'CmfCustomer calling', 'trim|required|min_length[1]|max_length[200]');
            $this->form_validation->set_rules('state', 'CmfCustomer state', 'trim|required|min_length[1]|max_length[2]|numeric');
            $this->form_validation->set_rules('membercard', 'CmfCustomer membercard', 'trim|required|min_length[1]|max_length[200]');
            $this->form_validation->set_rules('chargesection', 'CmfCustomer chargesection', 'trim|required|min_length[1]|max_length[200]');
            $this->form_validation->set_rules('postalcode', 'CmfCustomer postalcode', 'trim|required|min_length[1]|max_length[6]|numeric');
            $this->form_validation->set_rules('phone', 'CmfCustomer phone', 'trim|required|min_length[1]|max_length[11]|numeric');
            $this->form_validation->set_rules('fax', 'CmfCustomer fax', 'trim|required|min_length[1]|max_length[11]|numeric');
            $this->form_validation->set_rules('contactaddress', 'CmfCustomer contactaddress', 'trim|required|min_length[10]|max_length[200]');
            $this->form_validation->set_rules('email', 'CmfCustomer email', 'trim|required|min_length[10]|max_length[200]');
            $this->form_validation->set_rules('netword', 'CmfCustomer netword', 'trim|required|min_length[1]|max_length[200]');
            $this->form_validation->set_rules('bank', 'CmfCustomer bank', 'trim|required|min_length[1]|max_length[200]');
            $this->form_validation->set_rules('accountnumber', 'CmfCustomer accountnumber', 'trim|required|min_length[1]|max_length[200]');
            $this->form_validation->set_rules('startdate', 'CmfCustomer startdate', 'required');
            $this->form_validation->set_rules('enddate', 'CmfCustomer enddate', 'required');
            $this->form_validation->set_rules('style', 'CmfCustomer style', 'trim|required|min_length[1]|max_length[20]');
            $this->form_validation->set_rules('user_flag', 'CmfCustomer user_flag', 'trim|required|min_length[1]|max_length[20]|numeric');
            $this->form_validation->set_rules('user_id', 'CmfCustomer user_id', 'trim|required|min_length[1]|max_length[20]|numeric');
            $this->form_validation->set_rules('supplycn', 'CmfCustomer supplycn', 'trim|required|min_length[1]|max_length[20]|numeric');
            $this->form_validation->set_rules('sysuser', 'CmfCustomer sysuser', 'trim|required|min_length[1]|max_length[200]');
            $this->form_validation->set_rules('explainStr', 'CmfCustomer explainStr', 'trim|required|min_length[1]|max_length[200]');
            $this->form_validation->set_rules('briefStr', 'CmfCustomer briefStr', 'trim|required|min_length[1]|max_length[200]');
            $this->form_validation->set_rules('prodprice', 'CmfCustomer prodprice', 'trim|required|min_length[1]|max_length[20]|numeric');
            $this->form_validation->set_rules('amtagio', 'CmfCustomer amtagio', 'trim|required|min_length[1]|max_length[20]');
            $this->form_validation->set_rules('remark', 'CmfCustomer remark', 'trim|required|min_length[1]|max_length[200]');
            $this->form_validation->set_rules('recommand', 'CmfCustomer recommand', 'trim|required|min_length[1]|max_length[200]');
            $this->form_validation->set_rules('getaccount', 'CmfCustomer getaccount', 'trim|required|min_length[1]|max_length[20]');
            $this->form_validation->set_rules('yuchuzhi', 'CmfCustomer yuchuzhi', 'trim|required|min_length[1]|max_length[20]');
            $this->form_validation->set_rules('factgetmoney', 'CmfCustomer factgetmoney', 'trim|required|min_length[1]|max_length[20]|numeric');
            $this->form_validation->set_rules('nogetmoney', 'CmfCustomer nogetmoney', 'trim|required|min_length[1]|max_length[20]|numeric');
            $this->form_validation->set_rules('origin', 'CmfCustomer origin', 'trim|required|min_length[1]|max_length[2]|numeric');
            $this->form_validation->set_rules('salemode', 'CmfCustomer salemode', 'trim|required|min_length[1]|max_length[2]|numeric');
            $this->form_validation->set_rules('property', 'CmfCustomer property', 'trim|required|min_length[1]|max_length[2]|numeric');
            $this->form_validation->set_rules('datascope', 'CmfCustomer datascope', 'trim|required|min_length[1]|max_length[20]|numeric');
            $this->form_validation->set_rules('createdate', 'CmfCustomer createdate', 'required');
            $this->form_validation->set_rules('integral', 'CmfCustomer integral', 'trim|required|min_length[1]|max_length[20]|numeric');
            $this->form_validation->set_rules('lasttracetime', 'CmfCustomer lasttracetime', 'required');
            
            //validate submitted form data
            if($this->form_validation->run() == true){
                //update post data
                $update = $this->CmfCustomerModel->update($id);

                if($update){
                    $this->session->set_userdata('success_msg', '客户已经更新成功');
                    redirect('/oa/CmfCustomer/index');
                }else{
                    $data['error_msg'] = 'Some problems occurred, please try again.';
                }
            }
        }
        $data['action'] = 'Edit';
        $data['cmf_customer'] = $CmfCustomer;
        //load the edit page view
        $this->load->view(__ADMIN_TEMPLATE__. "/oa/cmf_customer/add-edit",$data);
	}

	/**
	 * 删除内容
	 * @param  [type] $id [description]
	 * @return [type]     [description]
	 */
	public function delete($id) {
		if($id) {
			$delete = $this->CmfCustomerModel->delete($id);

			if($delete) {
				$this->session->set_userdata('success_msg', '客户已经删除成功');
			} else {
				$this->session->set_userdata('error_msg', 'Some problems occurred, please try again.');
			}
		}
		redirect('/oa/CmfCustomer/index');
	}

    /**
     * 查找内容
     */
    public function find() {
        //获取session消息
        //if($this->session->userdata('success_msg')){
        //    $data['success_msg'] = $this->session->userdata('success_msg');
        //    $this->session->unset_userdata('success_msg');
        //}
        //if($this->session->userdata('error_msg')){
        //    $data['error_msg'] = $this->session->userdata('error_msg');
        //   $this->session->unset_userdata('error_msg');
        //}

        $data = array();
        $data['action'] = '结果';
        //if(!empty($id)) {
        //$data['CmfWorkplanmain'] = $this->CmfWorkplanmainModel->find($id);
        $this->load->view(__ADMIN_TEMPLATE__. "/oa/cmf_workreport/find-result",$data);    
        //} else {
        //    redirect('/oa/CmfWorkplanmain/index');
        //}
    }

    /**
     * 搜索内容
     */
    public function search() {
        $data = array();
        //获取session消息
        if($this->session->userdata('success_msg')){
            $data['success_msg'] = $this->session->userdata('success_msg');
            $this->session->unset_userdata('success_msg');
        }
        if($this->session->userdata('error_msg')){
            $data['error_msg'] = $this->session->userdata('error_msg');
            $this->session->unset_userdata('error_msg');
        }

        $searchvalue              = $this->input->post('searchvalue');
        $keyword                  = $this->input->post('keyword');
        $data['searchvalue']      = $searchvalue;

        if(!empty($searchvalue) and !empty($keyword)) {
            $data['CmfCustomer'] = $this->CmfCustomerModel->getSearch($searchvalue,$keyword);
            $this->load->view(__ADMIN_TEMPLATE__. "/oa/cmf_customer/search-result",$data);
        } else {
            redirect('/oa/CmfCustomer/index');
        }
    }
}
?>