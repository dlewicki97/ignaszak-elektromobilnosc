<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class News extends CI_Controller {

	function __construct() {
		parent::__construct();
		if (!$this->db->table_exists('users')){
			$this->base_m->create_base();
		}
		$this->load->helper('data/news');
	}

	public function index() {
		echo loadViewsFront('news', loadNewsData());
	}

	public function show($id) {
		echo loadViewsFront('single_news', loadNewsShowData($id));
	}

	

}