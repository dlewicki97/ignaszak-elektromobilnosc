<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Settings extends CI_Controller {
	
	public function get() {
		$data = $this->back_m->get_one('settings', 1);

		$this->output->set_content_type('application/json');
		$this->output->set_status_header(200);
		$this->output->set_output(json_encode($data));
	}
}