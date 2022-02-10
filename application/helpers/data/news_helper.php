<?php
defined('BASEPATH') OR exit('No direct script access allowed');

function loadNewsData() {
    $CI = &get_instance();
    $data = loadDefaultDataFront();
    $data['news'] = $CI->back_m->get_all('news');
    $data['news_descriptions'] = $CI->back_m->get_one('news_descriptions', 1);
	
    return $data;
}

function loadNewsShowData($id) {
	$CI = &get_instance();
    $data = loadDefaultDataFront();
    $data['info'] = $CI->back_m->get_one('news', $id);
    $data['gallery'] = $CI->back_m->get_images('gallery', 'news', $id);

    return $data;
}

