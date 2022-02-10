<?php
defined('BASEPATH') OR exit('No direct script access allowed');

function loadModelShowData($id) {
    $CI = &get_instance();
    $data = loadDefaultDataFront();
    $data['model'] = $CI->back_m->get_one('models', $id);
    $data['gallery'] = $CI->back_m->get_images('gallery', 'models', $id);
	
    return $data;
}

function loadModelData() {
    $CI = &get_instance();
    $data = loadDefaultDataFront();
    $data['models'] = $CI->back_m->get_all('models');
    $data['models_descriptions'] = $CI->back_m->get_one('models_descriptions', 1);
	
    return $data;
}

