<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Vrml extends MY_Controller {

	function __construct()
	{
		parent::__construct();
		$this->load->helper('url');
	}

	public function index() 
	{
		$title = '虚拟现实工作室';
		$test = '欢迎您到虚拟现实工作室';
		$this->assign('test',$test);
		$this->assign('title',$title);
		$this->display('test.tpl');
	}
}

?>