<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Index extends MY_HomeController
{
    function __construct()
    {
        parent::__construct();
        $this->load->library('vrmlstudio/vrml','vrml');
    }

    public function index() {

    	//$this->load->view(__HOME_TEMPLATE__ . "/frontend/index");
    	header("location:".site_url2("home/login/index"));
    }

	public function show()
	{
		//调用库
		echo "MD5调用：",$this->vrml->show("welcome to VrmlStudio");
	}

	public function add() {
		echo "相加结果为：",$this->vrml->add(10,20);
	}
}
?>