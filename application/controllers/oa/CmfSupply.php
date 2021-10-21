<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class CmfSupply extends MY_AdminController {
	function __construct()
	{
		parent::__construct();
		$this->load->helper('form');
        $this->load->helper('url');
        $this->load->database();
        $this->load->library("pagination");
		$this->load->library('form_validation');
		$this->load->model('oa/CmfSupplyModel');
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
        $config['base_url'] = base_url() ."index.php/oa/CmfSupply/index/";
        $total_row = $this->CmfSupplyModel->get_count();
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
        $data['CmfSupply'] = $this->CmfSupplyModel->get_systemlang($config['per_page'],$config['per_page']*$page);
        $data['links'] = $this->pagination->create_links();
		$this->load->view(__ADMIN_TEMPLATE__. "/oa/cmf_supply/index",$data);
	}

	/**
	 * 添加内容
	 */
	public function add() {
		$data = array();
        
        //if add request is submitted
        if($this->input->post('postSubmit')){
            //form field validation rules
            $this->form_validation->set_rules('supplyid', 'CmfSupply supplyid', 'trim|required|min_length[1]|max_length[20]|numeric');
            $this->form_validation->set_rules('supplyname', 'CmfSupply supplyname', 'trim|required|min_length[1]|max_length[120]');
            $this->form_validation->set_rules('supplyshortname', 'CmfSupply supplyshortname', 'trim|required|min_length[1]|max_length[120]');
            $this->form_validation->set_rules('enterstype', 'CmfSupply enterstype', 'trim|required|min_length[1]|max_length[120]');
            $this->form_validation->set_rules('calling', 'CmfSupply calling', 'trim|required|min_length[1]|max_length[20]');
            $this->form_validation->set_rules('linkman', 'CmfSupply linkman', 'trim|required|min_length[1]|max_length[20]');
            $this->form_validation->set_rules('artificialperson', 'CmfSupply artificialperson', 'trim|required|min_length[1]|max_length[20]');
            $this->form_validation->set_rules('chargesection', 'CmfSupply chargesection', 'trim|required|min_length[1]|max_length[20]');
            $this->form_validation->set_rules('postalcode', 'CmfSupply postalcode', 'trim|required|min_length[1]|max_length[20]|numeric');
            $this->form_validation->set_rules('phone', 'CmfSupply phone', 'trim|required|min_length[1]|max_length[20]|numeric');
            $this->form_validation->set_rules('fax', 'CmfSupply fax', 'trim|required|min_length[1]|max_length[20]|numeric');
            $this->form_validation->set_rules('contactaddress', 'CmfSupply contactaddress', 'required');
            $this->form_validation->set_rules('email', 'CmfSupply email', 'trim|required|min_length[1]|max_length[20]');
            $this->form_validation->set_rules('netword', 'CmfSupply netword', 'trim|required|min_length[1]|max_length[20]');
            $this->form_validation->set_rules('bank', 'CmfSupply bank', 'trim|required|min_length[1]|max_length[20]');
            $this->form_validation->set_rules('accountnumber', 'CmfSupply accountnumber', 'trim|required|min_length[1]|max_length[20]|numeric');
            $this->form_validation->set_rules('startdate', 'CmfSupply startdate', 'required');
            $this->form_validation->set_rules('enddate', 'CmfSupply enddate', 'required');
            $this->form_validation->set_rules('style', 'CmfSupply style', 'required');
            $this->form_validation->set_rules('user_flag', 'CmfSupply user_flag', 'trim|required|min_length[1]|max_length[20]|numeric');
            $this->form_validation->set_rules('user_id', 'CmfSupply user_id', 'trim|required|min_length[1]|max_length[20]|numeric');
            $this->form_validation->set_rules('supplycn', 'CmfSupply supplycn', 'trim|required|min_length[1]|max_length[20]');
            $this->form_validation->set_rules('sysuser', 'CmfSupply sysuser', 'trim|required|min_length[1]|max_length[20]');
            $this->form_validation->set_rules('prodtype', 'CmfSupply prodtype', 'trim|required|min_length[1]|max_length[20]|numeric');
            $this->form_validation->set_rules('amtagio', 'CmfSupply amtagio', 'trim|required|min_length[1]|max_length[20]');
            $this->form_validation->set_rules('remark', 'CmfSupply remark', 'trim|required|min_length[1]|max_length[200]');
            $this->form_validation->set_rules('recommand', 'CmfSupply recommand', 'trim|required|min_length[1]|max_length[20]');
            $this->form_validation->set_rules('payaccount', 'CmfSupply payaccount', 'trim|required|min_length[1]|max_length[20]|numeric');
            $this->form_validation->set_rules('paymoney', 'CmfSupply paymoney', 'trim|required|min_length[1]|max_length[20]|numeric');
            $this->form_validation->set_rules('factpaymoney', 'CmfSupply factpaymoney', 'trim|required|min_length[1]|max_length[20]|numeric');
            $this->form_validation->set_rules('nopaymoney', 'CmfSupply nopaymoney', 'trim|required|min_length[1]|max_length[20]|numeric');
            $this->form_validation->set_rules('datascope', 'CmfSupply datascope', 'trim|required|min_length[1]|max_length[20]');
            $this->form_validation->set_rules('yufukuan', 'CmfSupply yufukuan', 'trim|required|min_length[1]|max_length[20]|numeric');
            //validate submitted form data
            if($this->form_validation->run() == true){
                //insert post data
                $insert = $this->CmfSupplyModel->insert();
                if($insert){
                    $this->session->set_userdata('success_msg', '供应商已经添加成功');
                    redirect('/oa/CmfSupply/index');
                }else{
                    $data['error_msg'] = 'Some problems occurred, please try again.';
                }
            }
        }
        $data['action'] = 'Add';
        $this->load->view(__ADMIN_TEMPLATE__. "/oa/cmf_supply/add-edit",$data);
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
		$data['CmfSupply'] = $this->CmfSupplyModel->getRows($id);
		$this->load->view(__ADMIN_TEMPLATE__. "/oa/cmf_supply/details",$data);	
		} else {
			redirect('/oa/CmfSupply/index');
		}
	}

	/**
	 * 编辑内容
	 * @return [type] [description]
	 */
	public function edit($id) {
		$data = array();
        
        //get post data
        $CmfSupply = $this->CmfSupplyModel->getRows($id);
        
        //if update request is submitted
        if($this->input->post('postSubmit')){
            //form field validation rules
            $this->form_validation->set_rules('supplyid', 'CmfSupply supplyid', 'trim|required|min_length[1]|max_length[20]|numeric');
            $this->form_validation->set_rules('supplyname', 'CmfSupply supplyname', 'trim|required|min_length[1]|max_length[20]');
            $this->form_validation->set_rules('supplyshortname', 'CmfSupply supplyshortname', 'trim|required|min_length[1]|max_length[20]');
            $this->form_validation->set_rules('enterstype', 'CmfSupply enterstype', 'trim|required|min_length[1]|max_length[20]|numeric');
            $this->form_validation->set_rules('calling', 'CmfSupply calling', 'trim|required|min_length[1]|max_length[20]');
            $this->form_validation->set_rules('linkman', 'CmfSupply linkman', 'trim|required|min_length[1]|max_length[20]');
            $this->form_validation->set_rules('artificialperson', 'CmfSupply artificialperson', 'trim|required|min_length[1]|max_length[20]');
            $this->form_validation->set_rules('chargesection', 'CmfSupply chargesection', 'trim|required|min_length[1]|max_length[20]');
            $this->form_validation->set_rules('postalcode', 'CmfSupply postalcode', 'trim|required|min_length[1]|max_length[20]|numeric');
            $this->form_validation->set_rules('phone', 'CmfSupply phone', 'trim|required|min_length[1]|max_length[20]|numeric');
            $this->form_validation->set_rules('fax', 'CmfSupply fax', 'trim|required|min_length[1]|max_length[20]|numeric');
            $this->form_validation->set_rules('contactaddress', 'CmfSupply contactaddress', 'required');
            $this->form_validation->set_rules('email', 'CmfSupply email', 'trim|required|min_length[1]|max_length[20]');
            $this->form_validation->set_rules('netword', 'CmfSupply netword', 'trim|required|min_length[1]|max_length[20]');
            $this->form_validation->set_rules('bank', 'CmfSupply bank', 'trim|required|min_length[1]|max_length[20]');
            $this->form_validation->set_rules('accountnumber', 'CmfSupply accountnumber', 'trim|required|min_length[1]|max_length[20]|numeric');
            $this->form_validation->set_rules('startdate', 'CmfSupply startdate', 'required');
            $this->form_validation->set_rules('enddate', 'CmfSupply enddate', 'required');
            $this->form_validation->set_rules('style', 'CmfSupply style', 'required');
            $this->form_validation->set_rules('user_flag', 'CmfSupply user_flag', 'trim|required|min_length[1]|max_length[20]|numeric');
            $this->form_validation->set_rules('user_id', 'CmfSupply user_id', 'trim|required|min_length[1]|max_length[20]|numeric');
            $this->form_validation->set_rules('supplycn', 'CmfSupply supplycn', 'trim|required|min_length[1]|max_length[20]');
            $this->form_validation->set_rules('sysuser', 'CmfSupply sysuser', 'trim|required|min_length[1]|max_length[20]');
            $this->form_validation->set_rules('prodtype', 'CmfSupply prodtype', 'trim|required|min_length[1]|max_length[20]|numeric');
            $this->form_validation->set_rules('amtagio', 'CmfSupply amtagio', 'trim|required|min_length[1]|max_length[20]');
            $this->form_validation->set_rules('remark', 'CmfSupply remark', 'trim|required|min_length[1]|max_length[200]');
            $this->form_validation->set_rules('recommand', 'CmfSupply recommand', 'trim|required|min_length[1]|max_length[20]');
            $this->form_validation->set_rules('payaccount', 'CmfSupply payaccount', 'trim|required|min_length[1]|max_length[20]|numeric');
            $this->form_validation->set_rules('paymoney', 'CmfSupply paymoney', 'trim|required|min_length[1]|max_length[20]|numeric');
            $this->form_validation->set_rules('factpaymoney', 'CmfSupply factpaymoney', 'trim|required|min_length[1]|max_length[20]|numeric');
            $this->form_validation->set_rules('nopaymoney', 'CmfSupply nopaymoney', 'trim|required|min_length[1]|max_length[20]|numeric');
            $this->form_validation->set_rules('datascope', 'CmfSupply datascope', 'trim|required|min_length[1]|max_length[20]');
            $this->form_validation->set_rules('yufukuan', 'CmfSupply yufukuan', 'trim|required|min_length[1]|max_length[20]|numeric');
            
            //validate submitted form data
            if($this->form_validation->run() == true){
                //update post data
                $update = $this->CmfSupplyModel->update($id);

                if($update){
                    $this->session->set_userdata('success_msg', '供应商已经更新成功');
                    redirect('/oa/CmfSupply/index');
                }else{
                    $data['error_msg'] = 'Some problems occurred, please try again.';
                }
            }
        }
        $data['action'] = 'Edit';
        $data['cmf_supply'] = $CmfSupply;
        
        //load the edit page view
        $this->load->view(__ADMIN_TEMPLATE__. "/oa/cmf_supply/add-edit",$data);
	}

	/**
	 * 删除内容
	 * @param  [type] $id [description]
	 * @return [type]     [description]
	 */
	public function delete($id) {
		if($id) {
			$delete = $this->CmfSupplyModel->delete($id);

			if($delete) {
				$this->session->set_userdata('success_msg', '供应商已经删除成功');
			} else {
				$this->session->set_userdata('error_msg', 'Some problems occurred, please try again.');
			}
		}
		redirect('/oa/CmfSupply/index');
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
            $data['CmfSupply'] = $this->CmfSupplyModel->getSearch($searchvalue,$keyword);
            $this->load->view(__ADMIN_TEMPLATE__. "/oa/cmf_supply/search-result",$data);
        } else {
            redirect('/oa/CmfSupply/index');
        }
    }
}
?>