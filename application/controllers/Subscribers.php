<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Subscribers extends CI_Controller {

	function __construct() {
		parent::__construct();
		if (!$this->db->table_exists('users')){
			$this->base_m->create_base();
		}
		$this->load->helper('data/home');
	}

	public function add() {
		$this->form_validation->set_rules('email', 'Email', 'required|valid_email');

		$saved = false;
		foreach($this->back_m->get_all('subscribers') as $subscriber) {
			if($subscriber->email == $_POST['email']) $saved = true;
		}

		if ($this->form_validation->run() && !$saved) {
			$this->back_m->insert('subscribers', ['email' => $_POST['email']]);
			$this->session->set_flashdata('success', 'Pomyślnie zapisano do newslettera!');
		} else {
			$email = $_POST['email'];
			$this->session->set_flashdata('danger', $saved ? "$email jest już zapisany!" : 'Nieprawidłowy adres E-mail!');
		}

		redirect('');
	}
}