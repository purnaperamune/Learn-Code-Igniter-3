<?php
defined('BASEPATH') OR exit('No direct script access allowed');

$route['default_controller'] = 'welcome';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;


/**  Instead of this: http://localhost:8080/learnCI3/index.php/PageController/aboutus, 
 * we can use the below routes to make it more clean.
*/
$route['home'] = 'PageController/index';
$route['abouts'] = 'PageController/aboutus';


$route['blog/(:any)'] = 'PageController/blog/$1';

// Employee Routes
$route['employee'] = 'Frontend/EmployeeController/index';
$route['employee/add'] = 'Frontend/EmployeeController/create';
$route['employee/store'] = 'Frontend/EmployeeController/store';
$route['employee/edit/(:any)'] = 'Frontend/EmployeeController/edit/$1';
$route['employee/update/(:any)'] = 'Frontend/EmployeeController/update/$1';
$route['employee/delete/(:any)'] = 'Frontend/EmployeeController/delete/$1';
$route['employee/confirmdelete/(:any)']['DELETE'] = 'Frontend/EmployeeController/delete/$1';