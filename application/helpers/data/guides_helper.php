<?php
defined('BASEPATH') OR exit('No direct script access allowed');

function loadGuidesShowData($id) {
    $CI = &get_instance();
    $data = loadDefaultDataFront();
    $data['guide'] = $CI->back_m->get_one('guides', $id);
    $data['gallery'] = $CI->back_m->get_images('gallery', 'guides', $id);
	
    return $data;
}

