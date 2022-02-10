<?php
defined('BASEPATH') OR exit('No direct script access allowed');

function loadDefaultData() {
    $CI = &get_instance();
	$data['mails'] = $CI->back_m->get_all('mails');
	$data['user'] = $CI->back_m->get_one('users', $_SESSION['id']);
	$data['media'] = $CI->back_m->get_all('media');
	$data['settings'] = $CI->back_m->get_one('settings', 1);
	$data['contact'] = $CI->back_m->get_one('contact_settings', 1);
	$data['api_gallery'] = apiGalleryRows();
	
    return $data;
}

function loadDefaultDataFront() {
    $CI = &get_instance();
	$data['settings'] = $CI->back_m->get_one('settings', 1);
	$data['header_button'] = $CI->back_m->get_one('header_button', 1);
	$data['contact_settings'] = $CI->back_m->get_one('contact_settings', 1);
	$data['subpages'] = $CI->back_m->get_all('subpages');
	$data['current_subpage'] = $CI->back_m->get_subpage($CI->uri->segment(1) == null ? '' : $CI->uri->segment(1));
	$data['newsletter_descriptions'] = $CI->back_m->get_one('newsletter_descriptions', 1);
	$data['models'] = $CI->back_m->get_all('models');
	
    return $data;
}
