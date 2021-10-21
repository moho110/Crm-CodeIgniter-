<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Vrml {
	function _construct(){
		//init VrmlClass
		parent::__construct();
	}

	public function show($str) {
		return md5($str);
	}

	public function add($a,$b) {
		return $a + $b;
	}

}


?>