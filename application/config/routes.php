<?php
defined('BASEPATH') OR exit('No direct script access allowed');


$route['default_controller'] = 'pages/view';

$route['projects'] = 'projects/index';

$route['clients'] = 'clients/index';

$route['tasks'] = 'tasks/index';

$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;
