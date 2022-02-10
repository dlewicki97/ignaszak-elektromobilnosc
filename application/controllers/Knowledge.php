<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Knowledge extends CI_Controller {

	function __construct() {
		parent::__construct();
		if (!$this->db->table_exists('users')){
			$this->base_m->create_base();
		}
		$this->load->helper('data/knowledge');
	}

	public function index() {
		echo loadViewsFront('knowledge', loadKnowledgeData());
	}
}