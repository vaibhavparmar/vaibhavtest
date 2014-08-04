<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

$route['news/create'] = 'news/create';
$route['news/(:any)'] = 'news/view/$1';
$route['news'] = 'news';
$route['(:any)'] = 'pages/view/$1';
$route['default_controller'] = 'news';
/* End of file routes.php */
/* Location: ./application/config/routes.php */