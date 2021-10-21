<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class CmfHrmsFile extends MY_AdminController {
	function __construct()
	{
		parent::__construct();
		$this->load->helper('form');
        $this->load->helper('url');
        $this->load->database();
        $this->load->library("pagination");
		$this->load->library('form_validation');
		$this->load->model('oa/CmfHrmsFileModel');
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
        $config['base_url'] = base_url() ."index.php/oa/CmfHrmsFile/index/";
        $total_row = $this->CmfHrmsFileModel->get_count();
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
        $data['CmfHrmsFile'] = $this->CmfHrmsFileModel->get_systemlang($config['per_page'],$config['per_page']*$page);
        $data['links'] = $this->pagination->create_links();
		$this->load->view(__ADMIN_TEMPLATE__. "/oa/cmf_hrms_file/index",$data);
	}

	/**
	 * 添加内容
	 */
	public function add() {
		$data = array();
        
        //if add request is submitted
        if($this->input->post('postSubmit')){
            //form field validation rules
            $this->form_validation->set_rules('workId', 'CmfHrmsFile workId', 'trim|required|min_length[1]|max_length[20]|numeric');
            $this->form_validation->set_rules('name', 'CmfHrmsFile name', 'trim|required|min_length[1]|max_length[20]');
            $this->form_validation->set_rules('inDepartment', 'CmfHrmsFile inDepartment', 'trim|required|min_length[1]|max_length[20]');
            $this->form_validation->set_rules('sex', 'CmfHrmsFile sex', 'trim|required|min_length[1]|max_length[20]|numeric');
            $this->form_validation->set_rules('marriage', 'CmfHrmsFile marriage', 'trim|required|min_length[1]|max_length[20]|numeric');
            $this->form_validation->set_rules('birthday', 'CmfHrmsFile birthday', 'trim|required|min_length[1]|max_length[20]|numeric');
            $this->form_validation->set_rules('national', 'CmfHrmsFile national', 'trim|required|min_length[1]|max_length[20]');
            $this->form_validation->set_rules('political', 'CmfHrmsFile political', 'trim|required|min_length[1]|max_length[20]');
            $this->form_validation->set_rules('IDNo', 'CmfHrmsFile IDNo', 'trim|required|min_length[1]|max_length[20]|numeric');
            $this->form_validation->set_rules('hukou', 'CmfHrmsFile hukou', 'trim|required|min_length[1]|max_length[20]');
            $this->form_validation->set_rules('jiguan', 'CmfHrmsFile jiguan', 'trim|required|min_length[1]|max_length[20]');
            $this->form_validation->set_rules('insuranceNo', 'CmfHrmsFile insuranceNo', 'trim|required|min_length[1]|max_length[20]|numeric');
            $this->form_validation->set_rules('address', 'CmfHrmsFile address', 'trim|required|min_length[1]|max_length[20]');
            $this->form_validation->set_rules('postalCode', 'CmfHrmsFile postalCode', 'trim|required|min_length[1]|max_length[20]|numeric');
            $this->form_validation->set_rules('email', 'CmfHrmsFile email', 'trim|required|min_length[1]|max_length[20]');
            $this->form_validation->set_rules('telephone', 'CmfHrmsFile telephone', 'trim|required|min_length[1]|max_length[20]|numeric');
            $this->form_validation->set_rules('studyExp', 'CmfHrmsFile studyExp', 'trim|required|min_length[1]|max_length[20]');
            $this->form_validation->set_rules('professional', 'CmfHrmsFile professional', 'trim|required|min_length[1]|max_length[20]');
            $this->form_validation->set_rules('college', 'CmfHrmsFile college', 'trim|required|min_length[1]|max_length[20]');
            $this->form_validation->set_rules('staff', 'CmfHrmsFile staff', 'trim|required|min_length[1]|max_length[20]');
            $this->form_validation->set_rules('staffName', 'CmfHrmsFile staffName', 'trim|required|min_length[1]|max_length[20]');
            $this->form_validation->set_rules('politicalLevel', 'CmfHrmsFile politicalLevel', 'trim|required|min_length[1]|max_length[20]');
            $this->form_validation->set_rules('computerLevel', 'CmfHrmsFile computerLevel', 'trim|required|min_length[1]|max_length[20]');
            $this->form_validation->set_rules('foreign', 'CmfHrmsFile foreign', 'trim|required|min_length[1]|max_length[20]');
            $this->form_validation->set_rules('foreignLevel', 'CmfHrmsFile bankid', 'trim|required|min_length[1]|max_length[20]');
            $this->form_validation->set_rules('whenWork', 'CmfHrmsFile whenWork', 'trim|required|min_length[1]|max_length[20]');
            $this->form_validation->set_rules('workTime', 'CmfHrmsFile workTime', 'required');
            $this->form_validation->set_rules('workStatus', 'CmfHrmsFile workStatus', 'trim|required|min_length[1]|max_length[20]|numeric');
            $this->form_validation->set_rules('special', 'CmfHrmsFile special', 'trim|required|min_length[1]|max_length[20]');
            $this->form_validation->set_rules('memo', 'CmfHrmsFile memo', 'trim|required|min_length[1]|max_length[200]');
            $this->form_validation->set_rules('attach', 'CmfHrmsFile attach', 'trim|required|min_length[1]|max_length[200]');
            $this->form_validation->set_rules('photo', 'CmfHrmsFile photo', 'trim|required|min_length[1]|max_length[200]');
            $this->form_validation->set_rules('entryUnitDate', 'CmfHrmsFile entryUnitDate', 'required');
            $this->form_validation->set_rules('unitWorkTime', 'CmfHrmsFile unitWorkTime', 'required');
            $this->form_validation->set_rules('quitDate', 'CmfHrmsFile quitDate', 'required');
            $this->form_validation->set_rules('nowContractDate', 'CmfHrmsFile nowContractDate', 'required');
            $this->form_validation->set_rules('nowContractEndDate', 'CmfHrmsFile nowContractEndDate', 'required');
            $this->form_validation->set_rules('tuixiuDate', 'CmfHrmsFile tuixiuDate', 'required');
            $this->form_validation->set_rules('tuixiuAge', 'CmfHrmsFile tuixiuAge', 'trim|required|min_length[1]|max_length[2]|numeric');
            $this->form_validation->set_rules('workInFormal', 'CmfHrmsFile workInFormal', 'trim|required|min_length[1]|max_length[20]');
            $this->form_validation->set_rules('firstContractDate', 'CmfHrmsFile firstContractDate', 'required');
            $this->form_validation->set_rules('techLevel', 'CmfHrmsFile techLevel', 'trim|required|min_length[1]|max_length[20]');
            $this->form_validation->set_rules('techExDate', 'CmfHrmsFile techExDate', 'required');
            $this->form_validation->set_rules('staffType', 'CmfHrmsFile staffType', 'trim|required|min_length[1]|max_length[20]|numeric');
            $this->form_validation->set_rules('staffbyName', 'CmfHrmsFile staffbyName', 'trim|required|min_length[1]|max_length[20]');
            $this->form_validation->set_rules('staffTechScore', 'CmfHrmsFile staffTechScore', 'trim|required|min_length[1]|max_length[20]|numeric');
            $this->form_validation->set_rules('bank', 'CmfHrmsFile bank', 'trim|required|min_length[1]|max_length[20]');
            $this->form_validation->set_rules('bankNo', 'CmfHrmsFile bankNo', 'trim|required|min_length[1]|max_length[20]');
            $this->form_validation->set_rules('salaryLevel', 'CmfHrmsFile salaryLevel', 'trim|required|min_length[1]|max_length[20]');
            $this->form_validation->set_rules('staffyinliBirthday', 'CmfHrmsFile staffyinliBirthday', 'trim|required|min_length[1]|max_length[20]');
            $this->form_validation->set_rules('personDesp', 'CmfHrmsFile personDesp', 'trim|required|min_length[1]|max_length[200]');
            $this->form_validation->set_rules('passport', 'CmfHrmsFile passport', 'trim|required|min_length[1]|max_length[20]');
            $this->form_validation->set_rules('bloody', 'CmfHrmsFile bloody', 'trim|required|min_length[1]|max_length[20]');
            $this->form_validation->set_rules('height', 'CmfHrmsFile height', 'trim|required|min_length[1]|max_length[20]');
            $this->form_validation->set_rules('weight', 'CmfHrmsFile weight', 'trim|required|min_length[1]|max_length[20]');
            $this->form_validation->set_rules('eyesight', 'CmfHrmsFile eyesight', 'trim|required|min_length[1]|max_length[20]');
            $this->form_validation->set_rules('health', 'CmfHrmsFile health', 'trim|required|min_length[1]|max_length[20]');
            $this->form_validation->set_rules('drivers', 'CmfHrmsFile drivers', 'trim|required|min_length[1]|max_length[20]');
            $this->form_validation->set_rules('workExp', 'CmfHrmsFile workExp', 'trim|required|min_length[1]|max_length[200]');
            $this->form_validation->set_rules('workExpAttach', 'CmfHrmsFile workExpAttach', 'trim|required|min_length[1]|max_length[200]');
            $this->form_validation->set_rules('socialRelation', 'CmfHrmsFile socialRelation', 'trim|required|min_length[1]|max_length[20]');
            $this->form_validation->set_rules('socialRelationAttach', 'CmfHrmsFile socialRelationAttach', 'trim|required|min_length[1]|max_length[20]');
            $this->form_validation->set_rules('recoverStaffDate', 'CmfHrmsFile recoverStaffDate', 'required');
            //validate submitted form data
            if($this->form_validation->run() == true){
                //insert post data
                $insert = $this->CmfHrmsFileModel->insert();
                if($insert){
                    $this->session->set_userdata('success_msg', '人力档案已经添加成功');
                    redirect('/oa/CmfHrmsFile/index');
                }else{
                    $data['error_msg'] = 'Some problems occurred, please try again.';
                }
            }
        }
        $data['action'] = 'Add';
        $this->load->view(__ADMIN_TEMPLATE__. "/oa/cmf_hrms_file/add-edit",$data);
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
		$data['CmfHrmsFile'] = $this->CmfHrmsFileModel->getRows($id);
		$this->load->view(__ADMIN_TEMPLATE__. "/oa/cmf_hrms_file/details",$data);	
		} else {
			redirect('/oa/CmfHrmsFile/index');
		}
	}

	/**
	 * 编辑内容
	 * @return [type] [description]
	 */
	public function edit($id) {
		$data = array();
        
        //get post data
        $CmfHrmsFile = $this->CmfHrmsFileModel->getRows($id);
        
        //if update request is submitted
        if($this->input->post('postSubmit')){
            //form field validation rules
            $this->form_validation->set_rules('workId', 'CmfHrmsFile workId', 'trim|required|min_length[1]|max_length[20]|numeric');
            $this->form_validation->set_rules('name', 'CmfHrmsFile name', 'trim|required|min_length[1]|max_length[20]');
            $this->form_validation->set_rules('inDepartment', 'CmfHrmsFile inDepartment', 'trim|required|min_length[1]|max_length[20]');
            $this->form_validation->set_rules('sex', 'CmfHrmsFile sex', 'trim|required|min_length[1]|max_length[20]|numeric');
            $this->form_validation->set_rules('marriage', 'CmfHrmsFile marriage', 'trim|required|min_length[1]|max_length[20]|numeric');
            $this->form_validation->set_rules('birthday', 'CmfHrmsFile birthday', 'trim|required|min_length[1]|max_length[20]|numeric');
            $this->form_validation->set_rules('national', 'CmfHrmsFile national', 'trim|required|min_length[1]|max_length[20]');
            $this->form_validation->set_rules('political', 'CmfHrmsFile political', 'trim|required|min_length[1]|max_length[20]');
            $this->form_validation->set_rules('IDNo', 'CmfHrmsFile IDNo', 'trim|required|min_length[1]|max_length[20]|numeric');
            $this->form_validation->set_rules('hukou', 'CmfHrmsFile hukou', 'trim|required|min_length[1]|max_length[20]');
            $this->form_validation->set_rules('jiguan', 'CmfHrmsFile jiguan', 'trim|required|min_length[1]|max_length[20]');
            $this->form_validation->set_rules('insuranceNo', 'CmfHrmsFile insuranceNo', 'trim|required|min_length[1]|max_length[20]|numeric');
            $this->form_validation->set_rules('address', 'CmfHrmsFile address', 'trim|required|min_length[1]|max_length[20]');
            $this->form_validation->set_rules('postalCode', 'CmfHrmsFile postalCode', 'trim|required|min_length[1]|max_length[20]|numeric');
            $this->form_validation->set_rules('email', 'CmfHrmsFile email', 'trim|required|min_length[1]|max_length[20]');
            $this->form_validation->set_rules('telephone', 'CmfHrmsFile telephone', 'trim|required|min_length[1]|max_length[20]|numeric');
            $this->form_validation->set_rules('studyExp', 'CmfHrmsFile studyExp', 'trim|required|min_length[1]|max_length[20]');
            $this->form_validation->set_rules('professional', 'CmfHrmsFile professional', 'trim|required|min_length[1]|max_length[20]');
            $this->form_validation->set_rules('college', 'CmfHrmsFile college', 'trim|required|min_length[1]|max_length[20]');
            $this->form_validation->set_rules('staff', 'CmfHrmsFile staff', 'trim|required|min_length[1]|max_length[20]');
            $this->form_validation->set_rules('staffName', 'CmfHrmsFile staffName', 'trim|required|min_length[1]|max_length[20]');
            $this->form_validation->set_rules('politicalLevel', 'CmfHrmsFile politicalLevel', 'trim|required|min_length[1]|max_length[20]');
            $this->form_validation->set_rules('computerLevel', 'CmfHrmsFile computerLevel', 'trim|required|min_length[1]|max_length[20]');
            $this->form_validation->set_rules('foreign', 'CmfHrmsFile foreign', 'trim|required|min_length[1]|max_length[20]');
            $this->form_validation->set_rules('foreignLevel', 'CmfHrmsFile bankid', 'trim|required|min_length[1]|max_length[20]');
            $this->form_validation->set_rules('whenWork', 'CmfHrmsFile whenWork', 'trim|required|min_length[1]|max_length[20]');
            $this->form_validation->set_rules('workTime', 'CmfHrmsFile workTime', 'required');
            $this->form_validation->set_rules('workStatus', 'CmfHrmsFile workStatus', 'trim|required|min_length[1]|max_length[20]|numeric');
            $this->form_validation->set_rules('special', 'CmfHrmsFile special', 'trim|required|min_length[1]|max_length[20]');
            $this->form_validation->set_rules('memo', 'CmfHrmsFile memo', 'trim|required|min_length[1]|max_length[200]');
            $this->form_validation->set_rules('attach', 'CmfHrmsFile attach', 'trim|required|min_length[1]|max_length[200]');
            $this->form_validation->set_rules('photo', 'CmfHrmsFile photo', 'trim|required|min_length[1]|max_length[200]');
            $this->form_validation->set_rules('entryUnitDate', 'CmfHrmsFile entryUnitDate', 'required');
            $this->form_validation->set_rules('unitWorkTime', 'CmfHrmsFile unitWorkTime', 'required');
            $this->form_validation->set_rules('quitDate', 'CmfHrmsFile quitDate', 'required');
            $this->form_validation->set_rules('nowContractDate', 'CmfHrmsFile nowContractDate', 'required');
            $this->form_validation->set_rules('nowContractEndDate', 'CmfHrmsFile nowContractEndDate', 'required');
            $this->form_validation->set_rules('tuixiuDate', 'CmfHrmsFile tuixiuDate', 'required');
            $this->form_validation->set_rules('tuixiuAge', 'CmfHrmsFile tuixiuAge', 'trim|required|min_length[1]|max_length[2]|numeric');
            $this->form_validation->set_rules('workInFormal', 'CmfHrmsFile workInFormal', 'trim|required|min_length[1]|max_length[20]');
            $this->form_validation->set_rules('firstContractDate', 'CmfHrmsFile firstContractDate', 'required');
            $this->form_validation->set_rules('techLevel', 'CmfHrmsFile techLevel', 'trim|required|min_length[1]|max_length[20]');
            $this->form_validation->set_rules('techExDate', 'CmfHrmsFile techExDate', 'required');
            $this->form_validation->set_rules('staffType', 'CmfHrmsFile staffType', 'trim|required|min_length[1]|max_length[20]|numeric');
            $this->form_validation->set_rules('staffbyName', 'CmfHrmsFile staffbyName', 'trim|required|min_length[1]|max_length[20]');
            $this->form_validation->set_rules('staffTechScore', 'CmfHrmsFile staffTechScore', 'trim|required|min_length[1]|max_length[20]|numeric');
            $this->form_validation->set_rules('bank', 'CmfHrmsFile bank', 'trim|required|min_length[1]|max_length[20]');
            $this->form_validation->set_rules('bankNo', 'CmfHrmsFile bankNo', 'trim|required|min_length[1]|max_length[20]');
            $this->form_validation->set_rules('salaryLevel', 'CmfHrmsFile salaryLevel', 'trim|required|min_length[1]|max_length[20]');
            $this->form_validation->set_rules('staffyinliBirthday', 'CmfHrmsFile staffyinliBirthday', 'trim|required|min_length[1]|max_length[20]');
            $this->form_validation->set_rules('personDesp', 'CmfHrmsFile personDesp', 'trim|required|min_length[1]|max_length[200]');
            $this->form_validation->set_rules('passport', 'CmfHrmsFile passport', 'trim|required|min_length[1]|max_length[20]');
            $this->form_validation->set_rules('bloody', 'CmfHrmsFile bloody', 'trim|required|min_length[1]|max_length[20]');
            $this->form_validation->set_rules('height', 'CmfHrmsFile height', 'trim|required|min_length[1]|max_length[20]');
            $this->form_validation->set_rules('weight', 'CmfHrmsFile weight', 'trim|required|min_length[1]|max_length[20]');
            $this->form_validation->set_rules('eyesight', 'CmfHrmsFile eyesight', 'trim|required|min_length[1]|max_length[20]');
            $this->form_validation->set_rules('health', 'CmfHrmsFile health', 'trim|required|min_length[1]|max_length[20]');
            $this->form_validation->set_rules('drivers', 'CmfHrmsFile drivers', 'trim|required|min_length[1]|max_length[20]');
            $this->form_validation->set_rules('workExp', 'CmfHrmsFile workExp', 'trim|required|min_length[1]|max_length[200]');
            $this->form_validation->set_rules('workExpAttach', 'CmfHrmsFile workExpAttach', 'trim|required|min_length[1]|max_length[200]');
            $this->form_validation->set_rules('socialRelation', 'CmfHrmsFile socialRelation', 'trim|required|min_length[1]|max_length[20]');
            $this->form_validation->set_rules('socialRelationAttach', 'CmfHrmsFile socialRelationAttach', 'trim|required|min_length[1]|max_length[20]');
            $this->form_validation->set_rules('recoverStaffDate', 'CmfHrmsFile recoverStaffDate', 'required');
            
            //validate submitted form data
            if($this->form_validation->run() == true){
                //update post data
                $update = $this->CmfHrmsFileModel->update($id);

                if($update){
                    $this->session->set_userdata('success_msg', '人力档案已经更新成功');
                    redirect('/oa/CmfHrmsFile/index');
                }else{
                    $data['error_msg'] = 'Some problems occurred, please try again.';
                }
            }
        }
        $data['action'] = 'Edit';
        $data['cmf_hrms_file'] = $CmfHrmsFile;
        
        //load the edit page view
        $this->load->view(__ADMIN_TEMPLATE__. "/oa/cmf_hrms_file/add-edit",$data);
	}

	/**
	 * 删除内容
	 * @param  [type] $id [description]
	 * @return [type]     [description]
	 */
	public function delete($id) {
		if($id) {
			$delete = $this->CmfHrmsFileModel->delete($id);

			if($delete) {
				$this->session->set_userdata('success_msg', '人力档案已经删除成功');
			} else {
				$this->session->set_userdata('error_msg', 'Some problems occurred, please try again.');
			}
		}
		redirect('/oa/CmfHrmsFile/index');
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
            $data['CmfHrmsFile'] = $this->CmfHrmsFileModel->getSearch($searchvalue,$keyword);
            $this->load->view(__ADMIN_TEMPLATE__. "/oa/cmf_hrms_file/search-result",$data);
        } else {
            redirect('/oa/CmfHrmsFile/index');
        }
    }
}
?>