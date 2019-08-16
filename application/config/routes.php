<?php
defined('BASEPATH') OR exit('No direct script access allowed');

$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;

$route['default_controller'] = 'home';

$route['posts/new'] = 'posts/new';
$route['posts/create'] = 'posts/create';
$route['posts/(:num)/edit'] = 'posts/edit/$1';
$route['posts/(:num)/update'] = 'posts/update/$1';
$route['posts/(:num)/delete'] = 'posts/delete/$1';
$route['posts/(:num)'] = 'posts/show/$1';
$route['posts'] = 'posts';