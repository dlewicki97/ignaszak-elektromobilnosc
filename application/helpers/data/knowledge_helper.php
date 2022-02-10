<?php
defined('BASEPATH') OR exit('No direct script access allowed');

function loadKnowledgeData() {
    $CI = &get_instance();
    $data = loadDefaultDataFront();
    $data['knowledge'] = $CI->back_m->get_one('knowledge', 1);
    $data['why'] = $CI->back_m->get_all('why');
    $data['why_descriptions'] = $CI->back_m->get_one('why_descriptions', 1);
    $data['guides'] = $CI->back_m->get_all('guides');
    $data['guides_descriptions'] = $CI->back_m->get_one('guides_descriptions', 1);
	
    return $data;
}

