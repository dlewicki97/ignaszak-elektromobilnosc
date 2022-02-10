<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Guides extends CI_Controller {

	function __construct() {
		parent::__construct();
		if (!$this->db->table_exists('users')){
			$this->base_m->create_base();
		}
		$this->load->helper('data/guides');
	}

	public function show($id) {
		echo loadViewsFront('guide', loadGuidesShowData($id));
	}

	
}