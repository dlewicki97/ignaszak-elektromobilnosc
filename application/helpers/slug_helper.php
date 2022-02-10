<?php
defined('BASEPATH') OR exit('No direct script access allowed');

    function slug($str) {
	    $str = mb_strtolower($str,'utf-8');
	    $search = array('ą', 'ć', 'ś', 'ó', 'ż', 'ź', 'ę', 'ł', 'ń',' ', '?', '!', '(', ')', '.', ',', '/');
	    $replace = array('a', 'c', 's', 'o', 'z', 'z', 'e', 'l', 'n','-','','','','','','','','');
	    $str = str_ireplace($search, $replace, strtolower(trim($str)));
	    $str = preg_replace('/[^\w\d\-\ ]/', '', $str);
	    return $str;
    }

    function slug_photo($str) {
	    $str = mb_strtolower($str,'utf-8');
	    $search = array('ą', 'ć', 'ś', 'ó', 'ż', 'ź', 'ę', 'ł', 'ń',' ', '?', '!', '(', ')', ',', '/');
	    $replace = array('a', 'c', 's', 'o', 'z', 'z', 'e', 'l', 'n','-','','','','','','','');
	    $str = str_ireplace($search, $replace, strtolower(trim($str)));
	    return $str;
    }

    function create_link($page, $title, $id) {
	    $title = mb_strtolower($title,'utf-8');
	    $search = array('ą', 'ć', 'ś', 'ó', 'ż', 'ź', 'ę', 'ł', 'ń',' ', '?', '!', '(', ')', ',', '/');
	    $replace = array('a', 'c', 's', 'o', 'z', 'z', 'e', 'l', 'n','-','','','','','','','');
	    $title = str_ireplace($search, $replace, strtolower(trim($title)));
	    $title = base_url() . $page . '/' . $title . '/' . $id;
	    return $title;
    }