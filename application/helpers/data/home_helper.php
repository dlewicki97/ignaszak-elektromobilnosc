<?php
defined('BASEPATH') OR exit('No direct script access allowed');

function loadHomeData() {
    $CI = &get_instance();
    $data = loadDefaultDataFront();
    $data['slider'] = $CI->back_m->get_all('slider');
    $data['news'] = $CI->back_m->get_all_where('news', 'main', 0);
    $data['news_button'] = $CI->back_m->get_one('news_button', 1);
    $data['main_info'] = $CI->back_m->get_where('news', 'main', 1);
    $data['news_descriptions'] = $CI->back_m->get_one('news_descriptions', 1);
    $data['knowledge'] = $CI->back_m->get_one('knowledge', 1);
    $data['why'] = $CI->back_m->get_all('why');
    $data['why_descriptions'] = $CI->back_m->get_one('why_descriptions', 1);
    $data['guides'] = $CI->back_m->get_all('guides');
    $data['guides_descriptions'] = $CI->back_m->get_one('guides_descriptions', 1);
	
    return $data;
}

