<?php
defined('BASEPATH') OR exit('No direct script access allowed');

$route['default_controller'] = 'Main_control/index';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;
$route['signup'] = 'Main_control/signup';
$route['login'] = 'Main_control/login';
$route['admin'] = 'Main_control/admin';
$route['regular'] = 'Main_control/regular';
$route['Main_control/(:any)'] = 'Main_control/$1';