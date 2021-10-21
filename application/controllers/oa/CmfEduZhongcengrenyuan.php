<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class CmfEduZhongcengrenyuan extends MY_AdminController {
	function __construct()
	{
		parent::__construct();
		$this->load->helper('form');
        $this->load->helper('url');
        $this->load->database();
        $this->load->library("pagination");
		$this->load->library('form_validation');
		$this->load->model('oa/CmfEduZhongcengrenyuanModel');
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
        $config['base_url'] = base_url() ."index.php/oa/CmfEduZhongcengrenyuan/index/";
        $total_row = $this->CmfEduZhongcengrenyuanModel->get_count();
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
        $data['CmfEduZhongcengrenyuan'] = $this->CmfEduZhongcengrenyuanModel->get_systemlang($config['per_page'],$config['per_page']*$page);
        $data['links'] = $this->pagination->create_links();
		$this->load->view(__ADMIN_TEMPLATE__. "/oa/cmf_edu_zhongcengrenyuan/index",$data);
	}

	/**
	 * 添加内容
	 */
	public function add() {
		$data = array();
        
        //if add request is submitted
        if($this->input->post('postSubmit')){
            //form field validation rules
            $this->form_validation->set_rules('testName', 'CmfEduZhongcengrenyuan testName', 'trim|required|min_length[1]|max_length[15]');
            $this->form_validation->set_rules('testManBy', 'CmfEduZhongcengrenyuan testManBy', 'trim|required|min_length[1]|max_length[15]');
            $this->form_validation->set_rules('uit', 'CmfEduZhongcengrenyuan uit', 'trim|required|min_length[1]|max_length[15]');
            $this->form_validation->set_rules('staff', 'CmfEduZhongcengrenyuan staff', 'trim|required|min_length[1]|max_length[15]');
            $this->form_validation->set_rules('pindeDesp', 'CmfEduZhongcengrenyuan pindeDesp', 'trim|required|min_length[1]|max_length[150]');
            $this->form_validation->set_rules('pindeSelf', 'CmfEduZhongcengrenyuan pindeSelf', 'trim|required|min_length[1]|max_length[15]');
            $this->form_validation->set_rules('abillityDesp', 'CmfEduZhongcengrenyuan abillityDesp', 'trim|required|min_length[1]|max_length[150]');
            $this->form_validation->set_rules('abillitySelf', 'CmfEduZhongcengrenyuan abillitySelf', 'trim|required|min_length[1]|max_length[15]');
            $this->form_validation->set_rules('studyDesp', 'CmfEduZhongcengrenyuan studyDesp', 'trim|required|min_length[1]|max_length[150]');
            $this->form_validation->set_rules('studySelf', 'CmfEduZhongcengrenyuan studySelf', 'trim|required|min_length[1]|max_length[15]');
            $this->form_validation->set_rules('jixiaoDesp', 'CmfEduZhongcengrenyuan jixiaoDesp', 'trim|required|min_length[1]|max_length[150]');
            $this->form_validation->set_rules('jixiaoSelf', 'CmfEduZhongcengrenyuan jixiaoSelf', 'trim|required|min_length[1]|max_length[15]');
            $this->form_validation->set_rules('lianzhengDesp', 'CmfEduZhongcengrenyuan lianzhengDesp', 'trim|required|min_length[1]|max_length[150]');
            $this->form_validation->set_rules('lianzhengSelf', 'CmfEduZhongcengrenyuan lianzhengSelf', 'trim|required|min_length[1]|max_length[15]');
            $this->form_validation->set_rules('attach', 'CmfEduZhongcengrenyuan attach', 'trim|required|min_length[1]|max_length[15]');
            //validate submitted form data
            if($this->form_validation->run() == true){
                //insert post data
                $insert = $this->CmfEduZhongcengrenyuanModel->insert();
                if($insert){
                    $this->session->set_userdata('success_msg', '中层人员已经添加成功');
                    redirect('/oa/CmfEduZhongcengrenyuan/index');
                }else{
                    $data['error_msg'] = 'Some problems occurred, please try again.';
                }
            }
        }
        $data['action'] = 'Add';
        $this->load->view(__ADMIN_TEMPLATE__. "/oa/cmf_edu_zhongcengrenyuan/add-edit",$data);
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
		$data['CmfEduZhongcengrenyuan'] = $this->CmfEduZhongcengrenyuanModel->getRows($id);
		$this->load->view(__ADMIN_TEMPLATE__. "/oa/cmf_edu_zhongcengrenyuan/details",$data);	
		} else {
			redirect('/oa/CmfEduZhongcengrenyuan/index');
		}
	}

	/**
	 * 编辑内容
	 * @return [type] [description]
	 */
	public function edit($id) {
		$data = array();
        
        //get post data
        $CmfEduZhongcengrenyuan = $this->CmfEduZhongcengrenyuanModel->getRows($id);
        
        //if update request is submitted
        if($this->input->post('postSubmit')){
            //form field validation rules
            $this->form_validation->set_rules('testName', 'CmfEduZhongcengrenyuan testName', 'trim|required|min_length[1]|max_length[15]');
            $this->form_validation->set_rules('testManBy', 'CmfEduZhongcengrenyuan testManBy', 'trim|required|min_length[1]|max_length[15]');
            $this->form_validation->set_rules('uit', 'CmfEduZhongcengrenyuan uit', 'trim|required|min_length[1]|max_length[15]');
            $this->form_validation->set_rules('staff', 'CmfEduZhongcengrenyuan staff', 'trim|required|min_length[1]|max_length[15]');
            $this->form_validation->set_rules('pindeDesp', 'CmfEduZhongcengrenyuan pindeDesp', 'trim|required|min_length[1]|max_length[150]');
            $this->form_validation->set_rules('pindeSelf', 'CmfEduZhongcengrenyuan pindeSelf', 'trim|required|min_length[1]|max_length[15]');
            $this->form_validation->set_rules('abillityDesp', 'CmfEduZhongcengrenyuan abillityDesp', 'trim|required|min_length[1]|max_length[150]');
            $this->form_validation->set_rules('abillitySelf', 'CmfEduZhongcengrenyuan abillitySelf', 'trim|required|min_length[1]|max_length[15]');
            $this->form_validation->set_rules('studyDesp', 'CmfEduZhongcengrenyuan studyDesp', 'trim|required|min_length[1]|max_length[150]');
            $this->form_validation->set_rules('studySelf', 'CmfEduZhongcengrenyuan studySelf', 'trim|required|min_length[1]|max_length[15]');
            $this->form_validation->set_rules('jixiaoDesp', 'CmfEduZhongcengrenyuan jixiaoDesp', 'trim|required|min_length[1]|max_length[150]');
            $this->form_validation->set_rules('jixiaoSelf', 'CmfEduZhongcengrenyuan jixiaoSelf', 'trim|required|min_length[1]|max_length[15]');
            $this->form_validation->set_rules('lianzhengDesp', 'CmfEduZhongcengrenyuan lianzhengDesp', 'trim|required|min_length[1]|max_length[150]');
            $this->form_validation->set_rules('lianzhengSelf', 'CmfEduZhongcengrenyuan lianzhengSelf', 'trim|required|min_length[1]|max_length[15]');
            $this->form_validation->set_rules('attach', 'CmfEduZhongcengrenyuan attach', 'trim|required|min_length[1]|max_length[15]');
            
            //validate submitted form data
            if($this->form_validation->run() == true){
                //update post data
                $update = $this->CmfEduZhongcengrenyuanModel->update($id);

                if($update){
                    $this->session->set_userdata('success_msg', '中层人员已经更新成功');
                    redirect('/oa/CmfEduZhongcengrenyuan/index');
                }else{
                    $data['error_msg'] = 'Some problems occurred, please try again.';
                }
            }
        }
        $data['action'] = 'Edit';
        $data['cmf_edu_zhongcengrenyuan'] = $CmfEduZhongcengrenyuan;
        
        //load the edit page view
        $this->load->view(__ADMIN_TEMPLATE__. "/oa/cmf_edu_zhongcengrenyuan/add-edit",$data);
	}

	/**
	 * 删除内容
	 * @param  [type] $id [description]
	 * @return [type]     [description]
	 */
	public function delete($id) {
		if($id) {
			$delete = $this->CmfEduZhongcengrenyuanModel->delete($id);

			if($delete) {
				$this->session->set_userdata('success_msg', '中层人员已经删除成功');
			} else {
				$this->session->set_userdata('error_msg', 'Some problems occurred, please try again.');
			}
		}
		redirect('/oa/CmfEduZhongcengrenyuan/index');
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
            $data['CmfEduZhongcengrenyuan'] = $this->CmfEduZhongcengrenyuanModel->getSearch($searchvalue,$keyword);
            $this->load->view(__ADMIN_TEMPLATE__. "/oa/cmf_edu_zhongcengrenyuan/search-result",$data);
        } else {
            redirect('/oa/CmfEduZhongcengrenyuan/index');
        }
    }
}
?>