<?php
class Test extends MY_AdminController {

	function __construct() {
		parent::__construct();
	}

	public function index() {
		$this->load->view(__ADMIN_TEMPLATE__. "/main/test/index");
	}

	public function show() {
		$this->load->view(__ADMIN_TEMPLATE__ . "/main/test/show");
	}
}
?>