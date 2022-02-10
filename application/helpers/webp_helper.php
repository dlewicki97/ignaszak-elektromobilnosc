<?php
defined('BASEPATH') OR exit('No direct script access allowed');
// Initialise your autoloader (this example is using Composer)
require 'vendor/autoload.php';

use WebPConvert\WebPConvert as WebPConvert;


function convert__to__webp($image_source) {
	$info   = getimagesize(base_url().'uploads/'.$image_source);
	$mime   = $info['mime'];
	$types = array('image/jpg','image/jpeg','image/png','image/bmp','image/jfif');

	for ($i=0; $i < sizeof($types) ; $i++) { 
		if ($types[$i] == $mime) {
			$source = 'uploads/'.$image_source;
			echo $source;
			$destination = $source . '.webp';
			$options = [];
			WebPConvert::convert($source, $destination, $options);
		}
	}


}