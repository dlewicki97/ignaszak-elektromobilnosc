<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Models extends CI_Controller {

	function __construct() {
		parent::__construct();
		if (!$this->db->table_exists('users')){
			$this->base_m->create_base();
		}
		$this->load->helper('data/models');
	}

	public function index() {
		echo loadViewsFront('models', loadModelData());
	}

	public function show($id) {
		echo loadViewsFront('single_model', loadModelShowData($id));
	}
}