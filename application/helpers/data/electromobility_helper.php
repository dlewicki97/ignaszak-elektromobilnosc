<?php
defined('BASEPATH') OR exit('No direct script access allowed');

function loadElectromobilityData() {
    $CI = &get_instance();
    $data = loadDefaultDataFront();
    
    $data['electromobility'] = $CI->back_m->get_all('electromobility');
    $data['electromobility_descriptions'] = $CI->back_m->get_one('electromobility_descriptions', 1);
	
    return $data;
}

function loadElectromobilityShowData($id) {
	$CI = &get_instance();
    $data = loadDefaultDataFront();

    $data['electromobility'] = $CI->back_m->get_one('electromobility', $id);
    $data['gallery'] = $CI->back_m->get_images('gallery', 'electromobility', $id);

    return $data;
}

