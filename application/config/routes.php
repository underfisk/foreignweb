<?php
defined('BASEPATH') OR exit('No direct script access allowed');

$route['default_controller'] = 'Main';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;
$route['home'] = 'Main/home';
$route['register'] = 'Main/register';
$route['login'] = 'Main/login';
$route['gallery'] = 'Main/gallery';
$route['confirm/(:any)'] = 'Main/validate_hash/$1';
$route['account'] = 'Main/ucp';
$route['activity'] = 'Main/account_log';
$route['change_details'] = 'Main/change_details';