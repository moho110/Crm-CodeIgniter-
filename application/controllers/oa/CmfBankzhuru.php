<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class CmfBankzhuru extends MY_AdminController {
	function __construct()
	{
		parent::__construct();
		$this->load->helper('form');
        $this->load->helper('url');
        $this->load->database();
        $this->load->library("pagination");
		$this->load->library('form_validation');
		$this->load->model('oa/CmfBankzhuruModel');
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
        $config['base_url'] = base_url() ."index.php/oa/CmfBankzhuru/index";
        $total_row = $this->CmfBankzhuruModel->get_count();
        $config["total_rows"] = $total_row;
        $config['per_page'] = 10;
        $config['num_links'] = 3;
        $config['use_page_numbers'] = TRUE;
        $config['reuse_query_string'] = TRUE;
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
        $data['CmfBankzhuru'] = $this->CmfBankzhuruModel->get_systemlang($config['per_page'],$config['per_page']*$page);
        $data['links'] = $this->pagination->create_links();
		$this->load->view(__ADMIN_TEMPLATE__. "/oa/cmf_bankzhuru/index",$data);
	}

	/**
	 * 添加内容
	 */
	public function add() {
		$data = array();
        
        //if add request is submitted
        if($this->input->post('postSubmit')){
            //form field validation rules
            $this->form_validation->set_rules('accountid', 'CmfBankzhuru accountid', 'trim|required|min_length[1]|max_length[12]');
            $this->form_validation->set_rules('jine', 'CmfBankzhuru jine', 'trim|required|min_length[1]|max_length[12]');
            $this->form_validation->set_rules('userid', 'CmfBankzhuru userid', 'trim|required|min_length[1]|max_length[12]');
            $this->form_validation->set_rules('opertime', 'CmfBankzhuru opertime', 'required');
            $this->form_validation->set_rules('inouttype', 'CmfBankzhuru inouttype', 'trim|required|min_length[1]|max_length[12]');
            $this->form_validation->set_rules('memo', 'CmfBankzhuru memo', 'trim|required|min_length[50]|max_length[500]');

            //validate submitted form data
            if($this->form_validation->run() == true){
                //insert post data
                $insert = $this->CmfBankzhuruModel->insert();
                if($insert){
                    $this->session->set_userdata('success_msg', '银行注入信息添加成功');
                    redirect('/oa/CmfBankzhuru/index');
                }else{
                    $data['error_msg'] = 'Some problems occurred, please try again.';
                }
            }
        }
        $data['action'] = 'Add';
        $this->load->view(__ADMIN_TEMPLATE__. "/oa/cmf_bankzhuru/add-edit",$data);
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
		$data['CmfBankzhuru'] = $this->CmfBankzhuruModel->getRows($id);
		$this->load->view(__ADMIN_TEMPLATE__. "/oa/cmf_bankzhuru/details",$data);	
		} else {
			redirect('/oa/CmfBankzhuru/index');
		}
	}

	/**
	 * 编辑内容
	 * @return [type] [description]
	 */
	public function edit($id) {
		$data = array();
        
        //get post data
        $CmfBankzhuru = $this->CmfBankzhuruModel->getRows($id);
        
        //if update request is submitted
        if($this->input->post('postSubmit')){
            //form field validation rules
            $this->form_validation->set_rules('accountid', 'CmfBankzhuru accountid', 'trim|required|min_length[1]|max_length[12]');
            $this->form_validation->set_rules('jine', 'CmfBankzhuru jine', 'trim|required|min_length[1]|max_length[12]');
            $this->form_validation->set_rules('userid', 'CmfBankzhuru userid', 'trim|required|min_length[1]|max_length[12]');
            $this->form_validation->set_rules('opertime', 'CmfBankzhuru opertime', 'required');
            $this->form_validation->set_rules('inouttype', 'CmfBankzhuru inouttype', 'trim|required|min_length[1]|max_length[12]');
            $this->form_validation->set_rules('memo', 'CmfBankzhuru memo', 'trim|required|min_length[50]|max_length[500]');
            
            //validate submitted form data
            if($this->form_validation->run() == true){
                //update post data
                $update = $this->CmfBankzhuruModel->update($id);

                if($update){
                    $this->session->set_userdata('success_msg', '银行注入信息修改成功');
                    redirect('/oa/CmfBankzhuru/index');
                }else{
                    $data['error_msg'] = 'Some problems occurred, please try again.';
                }
            }
        }
        $data['action'] = 'Edit';
        $data['cmf_bankzhuru'] =$CmfBankzhuru;
        
        //load the edit page view
        $this->load->view(__ADMIN_TEMPLATE__. "/oa/cmf_bankzhuru/add-edit",$data);
	}

	/**
	 * 删除内容
	 * @param  [type] $id [description]
	 * @return [type]     [description]
	 */
	public function delete($id) {
		if($id) {
			$delete = $this->CmfBankzhuruModel->delete($id);

			if($delete) {
				$this->session->set_userdata('success_msg', '银行注入信息删除成功');
			} else {
				$this->session->set_userdata('error_msg', 'Some problems occurred, please try again.');
			}
		}
		redirect('/oa/CmfBankzhuru/index');
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
        $this->load->view(__ADMIN_TEMPLATE__. "/oa/cmf_bankzhuru/find-result",$data);    
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
            $data['CmfBankzhuru'] = $this->CmfBankzhuruModel->getSearch($searchvalue,$keyword);
            $this->load->view(__ADMIN_TEMPLATE__. "/oa/cmf_bankzhuru/search-result",$data);
        } else {
            redirect('/oa/CmfBankzhuru/index');
        }
    }
}
?>