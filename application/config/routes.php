<?php
defined('BASEPATH') OR exit('No direct script access allowed');

$route['default_controller'] = 'home';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;

$route['baza-wiedzy'] = 'knowledge';
$route['poradniki/(.*)/(.+)'] = 'guides/show/$1';
$route['aktualnosci'] = 'news';
$route['aktualnosci/(.*)/(.+)'] = 'news/show/$1';
$route['modele'] = 'models';
$route['modele/(.*)/(.+)'] = 'models/show/$1';
$route['elektromobilnosc-w-polsce'] = 'electromobility';
$route['elektromobilnosc-w-polsce/(.*)/(.+)'] = 'electromobility/show/$1';
//SCIAGA
// $route['odziez/(.*)/(.+)'] = 'home/odziez/$1/$2';
// $route['obuwie/(.*)/(.+)'] = 'home/obuwie/$1/$2';
// $route['akcesoria/(.*)/(.+)'] = 'home/akcesoria/$1/$2';
// $route['kolekcje/(.*)/(.+)'] = 'home/kolekcje/$1/$2';
// $route['gazetka/(.*)/(.+)'] = 'home/gazetka/$1/$2';
// $route['produkt/(.*)/(.+)'] = 'home/produkt/$1/$2';
// $route['o_nas'] = 'home/o_nas';
// $route['wydarzenia'] = 'home/wydarzenia';
// $route['wpis'] = 'home/wpis';
// $route['aktualnosci'] = 'p/aktualnosci';
// $route['uzywane_podglad/(.*)/(.+)'] = 'p/uzywane_podglad/$1/$2';
// $route['promocje'] = 'p/promocje';
// $route['promocja/(.*)/(.+)'] = 'p/promocja/$1/$2';
// $route['uslugi'] = 'p/uslugi';
// $route['usluga/(.*)/(.+)'] = 'p/usluga/$1/$2';
// $route['o-nas/(.*)/(.+)'] = 'p/o_nas/$1/$2';
// $route['kontakt/(.*)/(.+)'] = 'p/kontakt/$1/$2';
// $route['media'] = 'p/media';
// $route['nowe/(.*)/(.+)'] = 'p/nowe/$1/$2';
// $route['nowe'] = 'p/nowe';
// $route['akcesoria/(.*)'] = 'p/akcesoria/$1';
