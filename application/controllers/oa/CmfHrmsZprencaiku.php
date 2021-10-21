<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class CmfHrmsZprencaiku extends MY_AdminController {
	function __construct()
	{
		parent::__construct();
		$this->load->helper('form');
        $this->load->helper('url');
        $this->load->database();
        $this->load->library("pagination");
		$this->load->library('form_validation');
		$this->load->model('oa/CmfHrmsZprencaikuModel');
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
        $config['base_url'] = base_url() ."index.php/oa/CmfHrmsZprencaiku/index/";
        $total_row = $this->CmfHrmsZprencaikuModel->get_count();
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
        $data['CmfHrmsZprencaiku'] = $this->CmfHrmsZprencaikuModel->get_systemlang($config['per_page'],$config['per_page']*$page);
        $data['links'] = $this->pagination->create_links();
		$this->load->view(__ADMIN_TEMPLATE__. "/oa/cmf_hrms_zprencaiku/index",$data);
	}

	/**
	 * 添加内容
	 */
	public function add() {
		$data = array();
        
        //if add request is submitted
        if($this->input->post('postSubmit')){
            //form field validation rules
            $this->form_validation->set_rules('Name', 'CmfHrmsZprencaiku Name', 'trim|required|min_length[1]|max_length[20]');
            $this->form_validation->set_rules('sex', 'CmfHrmsZprencaiku sex', 'trim|required|min_length[1]|max_length[20]|numeric');
            $this->form_validation->set_rules('contact', 'CmfHrmsZprencaiku contact', 'trim|required|min_length[1]|max_length[20]');
            $this->form_validation->set_rules('IDNo', 'CmfHrmsZprencaiku IDNo', 'trim|required|min_length[1]|max_length[20]|numeric');
            $this->form_validation->set_rules('national', 'CmfHrmsZprencaiku national', 'trim|required|min_length[1]|max_length[20]');
            $this->form_validation->set_rules('birthday', 'CmfHrmsZprencaiku birthday', 'trim|required|min_length[1]|max_length[20]');
            $this->form_validation->set_rules('political', 'CmfHrmsZprencaiku political', 'trim|required|min_length[1]|max_length[20]');
            $this->form_validation->set_rules('jiguan', 'CmfHrmsZprencaiku jiguan', 'trim|required|min_length[1]|max_length[20]');
            $this->form_validation->set_rules('hukouInPos', 'CmfHrmsZprencaiku hukouInPos', 'trim|required|min_length[1]|max_length[20]|numeric');
            $this->form_validation->set_rules('studyExp', 'CmfHrmsZprencaiku studyExp', 'trim|required|min_length[1]|max_length[200]');
            $this->form_validation->set_rules('staffName', 'CmfHrmsZprencaiku staffName', 'trim|required|min_length[1]|max_length[20]');
            $this->form_validation->set_rules('college', 'CmfHrmsZprencaiku college', 'trim|required|min_length[1]|max_length[20]');
            $this->form_validation->set_rules('professional', 'CmfHrmsZprencaiku professional', 'trim|required|min_length[1]|max_length[20]');
            $this->form_validation->set_rules('secPro', 'CmfHrmsZprencaiku secPro', 'trim|required|min_length[1]|max_length[20]');
            $this->form_validation->set_rules('email', 'CmfHrmsZprencaiku email', 'trim|required|min_length[1]|max_length[20]');
            $this->form_validation->set_rules('familyTelephone', 'CmfHrmsZprencaiku familyTelephone', 'trim|required|min_length[1]|max_length[20]|numeric');
            $this->form_validation->set_rules('familyAddr', 'CmfHrmsZprencaiku familyAddr', 'trim|required|min_length[1]|max_length[200]');
            $this->form_validation->set_rules('postalCode', 'CmfHrmsZprencaiku postalCode', 'trim|required|min_length[1]|max_length[20]|numeric');
            $this->form_validation->set_rules('edution', 'CmfHrmsZprencaiku edution', 'trim|required|min_length[1]|max_length[200]');
            $this->form_validation->set_rules('workExp', 'CmfHrmsZprencaiku workExp', 'trim|required|min_length[1]|max_length[200]');
            $this->form_validation->set_rules('selfEval', 'CmfHrmsZprencaiku selfEval', 'trim|required|min_length[1]|max_length[200]');
            $this->form_validation->set_rules('englishAbillity', 'CmfHrmsZprencaiku englishAbillity', 'trim|required|min_length[1]|max_length[20]');
            $this->form_validation->set_rules('traingExp', 'CmfHrmsZprencaiku traingExp', 'trim|required|min_length[1]|max_length[200]');
            $this->form_validation->set_rules('photo', 'CmfHrmsZprencaiku photo', 'trim|required|min_length[1]|max_length[200]');
            $this->form_validation->set_rules('attach', 'CmfHrmsZprencaiku attach', 'trim|required|min_length[1]|max_length[20]');
            $this->form_validation->set_rules('projectExp', 'CmfHrmsZprencaiku projectExp', 'trim|required|min_length[1]|max_length[200]');
            $this->form_validation->set_rules('resumeLetter', 'CmfHrmsZprencaiku resumeLetter', 'trim|required|min_length[1]|max_length[200]');
            $this->form_validation->set_rules('proObject', 'CmfHrmsZprencaiku proObject', 'trim|required|min_length[1]|max_length[200]');
            $this->form_validation->set_rules('luyongStatus', 'CmfHrmsZprencaiku luyongStatus', 'trim|required|min_length[1]|max_length[20]|numeric');
            $this->form_validation->set_rules('creator', 'CmfHrmsZprencaiku creator', 'trim|required|min_length[1]|max_length[20]');
            $this->form_validation->set_rules('createTime', 'CmfHrmsZprencaiku createTime', 'required');
            //validate submitted form data
            if($this->form_validation->run() == true){
                //insert post data
                $insert = $this->CmfHrmsZprencaikuModel->insert();
                if($insert){
                    $this->session->set_userdata('success_msg', '人力招聘人才库已经添加成功');
                    redirect('/oa/CmfHrmsZprencaiku/index');
                }else{
                    $data['error_msg'] = 'Some problems occurred, please try again.';
                }
            }
        }
        $data['action'] = 'Add';
        $this->load->view(__ADMIN_TEMPLATE__. "/oa/cmf_hrms_zprencaiku/add-edit",$data);
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
		$data['CmfHrmsZprencaiku'] = $this->CmfHrmsZprencaikuModel->getRows($id);
		$this->load->view(__ADMIN_TEMPLATE__. "/oa/cmf_hrms_zprencaiku/details",$data);	
		} else {
			redirect('/oa/CmfHrmsZprencaiku/index');
		}
	}

	/**
	 * 编辑内容
	 * @return [type] [description]
	 */
	public function edit($id) {
		$data = array();
        
        //get post data
        $CmfHrmsZprencaiku = $this->CmfHrmsZprencaikuModel->getRows($id);
        
        //if update request is submitted
        if($this->input->post('postSubmit')){
            //form field validation rules
            $this->form_validation->set_rules('Name', 'CmfHrmsZprencaiku Name', 'trim|required|min_length[1]|max_length[20]');
            $this->form_validation->set_rules('sex', 'CmfHrmsZprencaiku sex', 'trim|required|min_length[1]|max_length[20]|numeric');
            $this->form_validation->set_rules('contact', 'CmfHrmsZprencaiku contact', 'trim|required|min_length[1]|max_length[20]');
            $this->form_validation->set_rules('IDNo', 'CmfHrmsZprencaiku IDNo', 'trim|required|min_length[1]|max_length[20]|numeric');
            $this->form_validation->set_rules('national', 'CmfHrmsZprencaiku national', 'trim|required|min_length[1]|max_length[20]');
            $this->form_validation->set_rules('birthday', 'CmfHrmsZprencaiku birthday', 'trim|required|min_length[1]|max_length[20]');
            $this->form_validation->set_rules('political', 'CmfHrmsZprencaiku political', 'trim|required|min_length[1]|max_length[20]');
            $this->form_validation->set_rules('jiguan', 'CmfHrmsZprencaiku jiguan', 'trim|required|min_length[1]|max_length[20]');
            $this->form_validation->set_rules('hukouInPos', 'CmfHrmsZprencaiku hukouInPos', 'trim|required|min_length[1]|max_length[20]|numeric');
            $this->form_validation->set_rules('studyExp', 'CmfHrmsZprencaiku studyExp', 'trim|required|min_length[1]|max_length[200]');
            $this->form_validation->set_rules('staffName', 'CmfHrmsZprencaiku staffName', 'trim|required|min_length[1]|max_length[20]');
            $this->form_validation->set_rules('college', 'CmfHrmsZprencaiku college', 'trim|required|min_length[1]|max_length[20]');
            $this->form_validation->set_rules('professional', 'CmfHrmsZprencaiku professional', 'trim|required|min_length[1]|max_length[20]');
            $this->form_validation->set_rules('secPro', 'CmfHrmsZprencaiku secPro', 'trim|required|min_length[1]|max_length[20]');
            $this->form_validation->set_rules('email', 'CmfHrmsZprencaiku email', 'trim|required|min_length[1]|max_length[20]');
            $this->form_validation->set_rules('familyTelephone', 'CmfHrmsZprencaiku familyTelephone', 'trim|required|min_length[1]|max_length[20]|numeric');
            $this->form_validation->set_rules('familyAddr', 'CmfHrmsZprencaiku familyAddr', 'trim|required|min_length[1]|max_length[200]');
            $this->form_validation->set_rules('postalCode', 'CmfHrmsZprencaiku postalCode', 'trim|required|min_length[1]|max_length[20]|numeric');
            $this->form_validation->set_rules('edution', 'CmfHrmsZprencaiku edution', 'trim|required|min_length[1]|max_length[200]');
            $this->form_validation->set_rules('workExp', 'CmfHrmsZprencaiku workExp', 'trim|required|min_length[1]|max_length[200]');
            $this->form_validation->set_rules('selfEval', 'CmfHrmsZprencaiku selfEval', 'trim|required|min_length[1]|max_length[200]');
            $this->form_validation->set_rules('englishAbillity', 'CmfHrmsZprencaiku englishAbillity', 'trim|required|min_length[1]|max_length[20]');
            $this->form_validation->set_rules('traingExp', 'CmfHrmsZprencaiku traingExp', 'trim|required|min_length[1]|max_length[200]');
            $this->form_validation->set_rules('photo', 'CmfHrmsZprencaiku photo', 'trim|required|min_length[1]|max_length[200]');
            $this->form_validation->set_rules('attach', 'CmfHrmsZprencaiku attach', 'trim|required|min_length[1]|max_length[20]');
            $this->form_validation->set_rules('projectExp', 'CmfHrmsZprencaiku projectExp', 'trim|required|min_length[1]|max_length[200]');
            $this->form_validation->set_rules('resumeLetter', 'CmfHrmsZprencaiku resumeLetter', 'trim|required|min_length[1]|max_length[200]');
            $this->form_validation->set_rules('proObject', 'CmfHrmsZprencaiku proObject', 'trim|required|min_length[1]|max_length[200]');
            $this->form_validation->set_rules('luyongStatus', 'CmfHrmsZprencaiku luyongStatus', 'trim|required|min_length[1]|max_length[20]|numeric');
            $this->form_validation->set_rules('creator', 'CmfHrmsZprencaiku creator', 'trim|required|min_length[1]|max_length[20]');
            $this->form_validation->set_rules('createTime', 'CmfHrmsZprencaiku createTime', 'required');
            
            //validate submitted form data
            if($this->form_validation->run() == true){
                //update post data
                $update = $this->CmfHrmsZprencaikuModel->update($id);

                if($update){
                    $this->session->set_userdata('success_msg', '人力招聘人才库已经更新成功');
                    redirect('/oa/CmfHrmsZprencaiku/index');
                }else{
                    $data['error_msg'] = 'Some problems occurred, please try again.';
                }
            }
        }
        $data['action'] = 'Edit';
        $data['cmf_hrms_zprencaiku'] = $CmfHrmsZprencaiku;
        
        //load the edit page view
        $this->load->view(__ADMIN_TEMPLATE__. "/oa/cmf_hrms_zprencaiku/add-edit",$data);
	}

	/**
	 * 删除内容
	 * @param  [type] $id [description]
	 * @return [type]     [description]
	 */
	public function delete($id) {
		if($id) {
			$delete = $this->CmfHrmsZprencaikuModel->delete($id);

			if($delete) {
				$this->session->set_userdata('success_msg', '人力招聘人才库已经删除成功');
			} else {
				$this->session->set_userdata('error_msg', 'Some problems occurred, please try again.');
			}
		}
		redirect('/oa/CmfHrmsZprencaiku/index');
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
            $data['CmfHrmsZprencaiku'] = $this->CmfHrmsZprencaikuModel->getSearch($searchvalue,$keyword);
            $this->load->view(__ADMIN_TEMPLATE__. "/oa/cmf_hrms_zprencaiku/search-result",$data);
        } else {
            redirect('/oa/CmfHrmsZprencaiku/index');
        }
    }
}
?>