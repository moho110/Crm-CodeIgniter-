<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class CmfSellplanmain extends MY_AdminController {
	function __construct()
	{
		parent::__construct();
		$this->load->helper('form');
        $this->load->helper('url');
        $this->load->database();
        $this->load->library("pagination");
		$this->load->library('form_validation');
		$this->load->model('oa/CmfSellplanmainModel');
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
        $config['base_url'] = base_url() ."index.php/oa/CmfSellplanmain/index/";
        $total_row = $this->CmfSellplanmainModel->get_count();
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
        $data['CmfSellplanmain'] = $this->CmfSellplanmainModel->get_systemlang($config['per_page'],$config['per_page']*$page);
        $data['links'] = $this->pagination->create_links();
		$this->load->view(__ADMIN_TEMPLATE__. "/oa/cmf_sellplanmain/index",$data);
	}

	/**
	 * 添加内容
	 */
	public function add() {
		$data = array();
        
        //if add request is submitted
        if($this->input->post('postSubmit')){
            //form field validation rules
            $this->form_validation->set_rules('zhuti', 'CmfSellplanmain zhuti', 'trim|required|min_length[1]|max_length[20]');
            $this->form_validation->set_rules('user_id', 'CmfSellplanmain user_id', 'trim|required|min_length[1]|max_length[20]|numeric');
            $this->form_validation->set_rules('supplyid', 'CmfSellplanmain supplyid', 'trim|required|min_length[1]|max_length[20]|numeric');
            $this->form_validation->set_rules('chanceid', 'CmfSellplanmain chanceid', 'trim|required|min_length[1]|max_length[20]|numeric');
            $this->form_validation->set_rules('sellplanno', 'CmfSellplanmain sellplanno', 'trim|required|min_length[1]|max_length[20]|numeric');
            $this->form_validation->set_rules('totalmoney', 'CmfSellplanmain totalmoney', 'trim|required|min_length[1]|max_length[20]|numeric');
            $this->form_validation->set_rules('paytype', 'CmfSellplanmain paytype', 'trim|required|min_length[1]|max_length[20]|numeric');
            $this->form_validation->set_rules('huikuanjine', 'CmfSellplanmain huikuanjine', 'trim|required|min_length[1]|max_length[20]|numeric');
            $this->form_validation->set_rules('fahuojine', 'CmfSellplanmain fahuojine', 'trim|required|min_length[1]|max_length[20]|numeric');
            $this->form_validation->set_rules('kaipiaojine', 'CmfSellplanmain kaipiaojine', 'trim|required|min_length[1]|max_length[20]|numeric');
            $this->form_validation->set_rules('plandate', 'CmfSellplanmain plandate', 'required');
            $this->form_validation->set_rules('zuiwanfahuodate', 'CmfSellplanmain zuiwanfahuodate', 'required');
            $this->form_validation->set_rules('qianyueren', 'CmfSellplanmain qianyueren', 'trim|required|min_length[1]|max_length[20]');
            $this->form_validation->set_rules('user_flag', 'CmfSellplanmain user_flag', 'trim|required|min_length[1]|max_length[20]|numeric');
            $this->form_validation->set_rules('beizhu', 'CmfSellplanmain beizhu', 'trim|required|min_length[1]|max_length[200]');
            $this->form_validation->set_rules('fileaddress', 'CmfSellplanmain fileaddress', 'trim|required|min_length[1]|max_length[200]');
            $this->form_validation->set_rules('gaiyao', 'CmfSellplanmain gaiyao', 'trim|required|min_length[1]|max_length[200]');
            $this->form_validation->set_rules('storeid', 'CmfSellplanmain storeid', 'trim|required|min_length[1]|max_length[20]|numeric');
            $this->form_validation->set_rules('linkman', 'CmfSellplanmain linkman', 'trim|required|min_length[1]|max_length[20]');
            $this->form_validation->set_rules('address', 'CmfSellplanmain address', 'trim|required|min_length[1]|max_length[200]');
            $this->form_validation->set_rules('mobile', 'CmfSellplanmain mobile', 'trim|required|min_length[1]|max_length[20]|numeric');
            $this->form_validation->set_rules('createtime', 'CmfSellplanmain createtime', 'required');
            $this->form_validation->set_rules('billtype', 'CmfSellplanmain billtype', 'trim|required|min_length[1]|max_length[20]|numeric');
            $this->form_validation->set_rules('ifpay', 'CmfSellplanmain ifpay', 'trim|required|min_length[1]|max_length[20]|numeric');
            $this->form_validation->set_rules('beiyong', 'CmfSellplanmain beiyong', 'trim|required|min_length[1]|max_length[200]');
            $this->form_validation->set_rules('kaipiaostate', 'CmfSellplanmain kaipiaostate', 'required');
            $this->form_validation->set_rules('fapiaoneirong', 'CmfSellplanmain fapiaoneirong', 'trim|required|min_length[1]|max_length[200]');
            $this->form_validation->set_rules('fapiaotype', 'CmfSellplanmain fapiaotype', 'trim|required|min_length[1]|max_length[20]|numeric');
            $this->form_validation->set_rules('fapiaono', 'CmfSellplanmain fapiaono', 'trim|required|min_length[1]|max_length[20]|numeric');
            $this->form_validation->set_rules('fahuotype', 'CmfSellplanmain fahuotype', 'trim|required|min_length[1]|max_length[20]|numeric');
            $this->form_validation->set_rules('fahuodan', 'CmfSellplanmain fahuodan', 'trim|required|min_length[1]|max_length[20]|numeric');
            $this->form_validation->set_rules('fahuoyunfei', 'CmfSellplanmain fahuoyunfei', 'required');
            $this->form_validation->set_rules('yunfeitype', 'CmfSellplanmain yunfeitype', 'trim|required|min_length[1]|max_length[20]|numeric');
            $this->form_validation->set_rules('oddment', 'CmfSellplanmain oddment', 'trim|required|min_length[1]|max_length[200]');
            $this->form_validation->set_rules('integral', 'CmfSellplanmain integral', 'trim|required|min_length[1]|max_length[200]');
            //validate submitted form data
            if($this->form_validation->run() == true){
                //insert post data
                $insert = $this->CmfSellplanmainModel->insert();
                if($insert){
                    $this->session->set_userdata('success_msg', '采购计划已经添加成功');
                    redirect('/oa/CmfSellplanmain/index');
                }else{
                    $data['error_msg'] = 'Some problems occurred, please try again.';
                }
            }
        }
        $data['action'] = 'Add';
        $this->load->view(__ADMIN_TEMPLATE__. "/oa/cmf_sellplanmain/add-edit",$data);
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
		$data['CmfSellplanmain'] = $this->CmfSellplanmainModel->getRows($id);
		$this->load->view(__ADMIN_TEMPLATE__. "/oa/cmf_sellplanmain/details",$data);	
		} else {
			redirect('/oa/CmfSellplanmain/index');
		}
	}

	/**
	 * 编辑内容
	 * @return [type] [description]
	 */
	public function edit($id) {
		$data = array();
        
        //get post data
        $CmfSellplanmain = $this->CmfSellplanmainModel->getRows($id);
        
        //if update request is submitted
        if($this->input->post('postSubmit')){
            //form field validation rules
            $this->form_validation->set_rules('zhuti', 'CmfSellplanmain zhuti', 'trim|required|min_length[1]|max_length[20]');
            $this->form_validation->set_rules('user_id', 'CmfSellplanmain user_id', 'trim|required|min_length[1]|max_length[20]|numeric');
            $this->form_validation->set_rules('supplyid', 'CmfSellplanmain supplyid', 'trim|required|min_length[1]|max_length[20]|numeric');
            $this->form_validation->set_rules('chanceid', 'CmfSellplanmain chanceid', 'trim|required|min_length[1]|max_length[20]|numeric');
            $this->form_validation->set_rules('sellplanno', 'CmfSellplanmain sellplanno', 'trim|required|min_length[1]|max_length[20]|numeric');
            $this->form_validation->set_rules('totalmoney', 'CmfSellplanmain totalmoney', 'trim|required|min_length[1]|max_length[20]|numeric');
            $this->form_validation->set_rules('paytype', 'CmfSellplanmain paytype', 'trim|required|min_length[1]|max_length[20]|numeric');
            $this->form_validation->set_rules('huikuanjine', 'CmfSellplanmain huikuanjine', 'trim|required|min_length[1]|max_length[20]|numeric');
            $this->form_validation->set_rules('fahuojine', 'CmfSellplanmain fahuojine', 'trim|required|min_length[1]|max_length[20]|numeric');
            $this->form_validation->set_rules('kaipiaojine', 'CmfSellplanmain kaipiaojine', 'trim|required|min_length[1]|max_length[20]|numeric');
            $this->form_validation->set_rules('plandate', 'CmfSellplanmain plandate', 'required');
            $this->form_validation->set_rules('zuiwanfahuodate', 'CmfSellplanmain zuiwanfahuodate', 'required');
            $this->form_validation->set_rules('qianyueren', 'CmfSellplanmain qianyueren', 'trim|required|min_length[1]|max_length[20]');
            $this->form_validation->set_rules('user_flag', 'CmfSellplanmain user_flag', 'trim|required|min_length[1]|max_length[20]|numeric');
            $this->form_validation->set_rules('beizhu', 'CmfSellplanmain beizhu', 'trim|required|min_length[1]|max_length[200]');
            $this->form_validation->set_rules('fileaddress', 'CmfSellplanmain fileaddress', 'trim|required|min_length[1]|max_length[200]');
            $this->form_validation->set_rules('gaiyao', 'CmfSellplanmain gaiyao', 'trim|required|min_length[1]|max_length[200]');
            $this->form_validation->set_rules('storeid', 'CmfSellplanmain storeid', 'trim|required|min_length[1]|max_length[20]|numeric');
            $this->form_validation->set_rules('linkman', 'CmfSellplanmain linkman', 'trim|required|min_length[1]|max_length[20]');
            $this->form_validation->set_rules('address', 'CmfSellplanmain address', 'trim|required|min_length[1]|max_length[200]');
            $this->form_validation->set_rules('mobile', 'CmfSellplanmain mobile', 'trim|required|min_length[1]|max_length[20]|numeric');
            $this->form_validation->set_rules('createtime', 'CmfSellplanmain createtime', 'required');
            $this->form_validation->set_rules('billtype', 'CmfSellplanmain billtype', 'trim|required|min_length[1]|max_length[20]|numeric');
            $this->form_validation->set_rules('ifpay', 'CmfSellplanmain ifpay', 'trim|required|min_length[1]|max_length[20]|numeric');
            $this->form_validation->set_rules('beiyong', 'CmfSellplanmain beiyong', 'trim|required|min_length[1]|max_length[200]');
            $this->form_validation->set_rules('kaipiaostate', 'CmfSellplanmain kaipiaostate', 'required');
            $this->form_validation->set_rules('fapiaoneirong', 'CmfSellplanmain fapiaoneirong', 'trim|required|min_length[1]|max_length[200]');
            $this->form_validation->set_rules('fapiaotype', 'CmfSellplanmain fapiaotype', 'trim|required|min_length[1]|max_length[20]|numeric');
            $this->form_validation->set_rules('fapiaono', 'CmfSellplanmain fapiaono', 'trim|required|min_length[1]|max_length[20]|numeric');
            $this->form_validation->set_rules('fahuotype', 'CmfSellplanmain fahuotype', 'trim|required|min_length[1]|max_length[20]|numeric');
            $this->form_validation->set_rules('fahuodan', 'CmfSellplanmain fahuodan', 'trim|required|min_length[1]|max_length[20]|numeric');
            $this->form_validation->set_rules('fahuoyunfei', 'CmfSellplanmain fahuoyunfei', 'required');
            $this->form_validation->set_rules('yunfeitype', 'CmfSellplanmain yunfeitype', 'trim|required|min_length[1]|max_length[20]|numeric');
            $this->form_validation->set_rules('oddment', 'CmfSellplanmain oddment', 'trim|required|min_length[1]|max_length[200]');
            $this->form_validation->set_rules('integral', 'CmfSellplanmain integral', 'trim|required|min_length[1]|max_length[200]');
            
            //validate submitted form data
            if($this->form_validation->run() == true){
                //update post data
                $update = $this->CmfSellplanmainModel->update($id);

                if($update){
                    $this->session->set_userdata('success_msg', '采购计划已经更新成功');
                    redirect('/oa/CmfSellplanmain/index');
                }else{
                    $data['error_msg'] = 'Some problems occurred, please try again.';
                }
            }
        }
        $data['action'] = 'Edit';
        $data['cmf_sellplanmain'] = $CmfSellplanmain;
        
        //load the edit page view
        $this->load->view(__ADMIN_TEMPLATE__. "/oa/cmf_sellplanmain/add-edit",$data);
	}

	/**
	 * 删除内容
	 * @param  [type] $id [description]
	 * @return [type]     [description]
	 */
	public function delete($id) {
		if($id) {
			$delete = $this->CmfSellplanmainModel->delete($id);

			if($delete) {
				$this->session->set_userdata('success_msg', '采购计划已经删除成功');
			} else {
				$this->session->set_userdata('error_msg', 'Some problems occurred, please try again.');
			}
		}
		redirect('/oa/CmfSellplanmain/index');
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
        $config = array();

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

        //分页
        $config['base_url'] = base_url() ."index.php/oa/CmfSellplanmain/search/";
        $total_row = $this->CmfSellplanmainModel->get_count();
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

        if(!empty($searchvalue) and !empty($keyword)) {
            $data['CmfSellplanmain'] = $this->CmfSellplanmainModel->getSearchPage($config['per_page'],$config['per_page']*$page,$searchvalue,$keyword);
            $data['links'] = $this->pagination->create_links();
            $this->load->view(__ADMIN_TEMPLATE__. "/oa/cmf_sellplanmain/search-result",$data);
        } else {
            redirect('/oa/CmfSellplanmain/index');
        }
    }
}
?>