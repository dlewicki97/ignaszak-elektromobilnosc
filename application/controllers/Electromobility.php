<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Electromobility extends CI_Controller {

	function __construct() {
		parent::__construct();
		if (!$this->db->table_exists('users')){
			$this->base_m->create_base();
		}
		$this->load->helper('data/electromobility');
	}

	public function index() {
		echo loadViewsFront('electromobility', loadElectromobilityData());
	}

	public function show($id) {
		echo loadViewsFront('single_electromobility', loadElectromobilityShowData($id));
	}
	
}