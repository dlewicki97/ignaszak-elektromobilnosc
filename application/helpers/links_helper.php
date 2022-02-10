<?php
defined('BASEPATH') OR exit('No direct script access allowed');

function base() {
	return base_url();
}

function file_url() {
	return base(). 'uploads/';
}

function assets() {
	return base(). 'assets/front/';
}