<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class CmfAccessbankValidation {
	
	$config = array(
		array(
			'field' => 'bankid',
			'label' => 'CmfAccessbank bankid',
			'rules' => 'required|min_length[1]|max_length[15]',
		),
		array(
			'field' => 'oldjine',
			'label' => 'CmfAccessbank oldjine',
			'rules' => 'required|min_length[1]|max_length[15]',
		),
		array(
			'field' => 'jine',
			'label' => 'CmfAccessbank jine',
			'rules' => 'required|min_length[1]|max_length[15]',
		),
		array(
			'field' => 'opertype',
			'label' => 'CmfAccessbank opertype',
			'rules' => 'required|min_length[1]|max_length[15]',
		),
		array(
			'field' => 'guanlianbillid',
			'label' => 'CmfAccessbank guanlianbillid',
			'rules' => 'required|min_length[1]|max_length[15]',
		),
		array(
			'field' => 'createman',
			'label' => 'CmfAccessbank createman',
			'rules' => 'required|min_length[1]|max_length[15]',
		),
		array(
			'field' => 'createtime',
			'label' => 'CmfAccessbank createtime',
			'rules' => 'required|min_length[1]|max_length[15]',
		)
	);
}
?>