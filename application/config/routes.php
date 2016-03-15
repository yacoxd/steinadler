<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/*
| -------------------------------------------------------------------------
| URI ROUTING
| -------------------------------------------------------------------------
| This file lets you re-map URI requests to specific controller functions.
|
| Typically there is a one-to-one relationship between a URL string
| and its corresponding controller class/method. The segments in a
| URL normally follow this pattern:
|
|	example.com/class/method/id/
|
| In some instances, however, you may want to remap this relationship
| so that a different class/function is called than the one
| corresponding to the URL.
|
| Please see the user guide for complete details:
|
|	http://codeigniter.com/user_guide/general/routing.html
|
| -------------------------------------------------------------------------
| RESERVED ROUTES
| -------------------------------------------------------------------------
|
| There area two reserved routes:
|
|	$route['default_controller'] = 'welcome';
|
| This route indicates which controller class should be loaded if the
| URI contains no data. In the above example, the "welcome" class
| would be loaded.
|
|	$route['404_override'] = 'errors/page_missing';
|
| This route will tell the Router what URI segments to use if those provided
| in the URL cannot be matched to a valid route.
|
*/

$route['default_controller'] = "frontend/home/index";
$route['construction'] = "frontend/home/product";
$route['industrial'] = "frontend/home/product";
$route['agribussines'] = "frontend/home/product";
$route['contact'] = 'frontend/home/contact';
$route['about-us'] = 'frontend/home/about_us';
$route['services'] = 'frontend/home/services';
$route['404_override'] = '';


$route['admin'] = 'login';

$route['admin/olvide-mi-contrasenia'] = 'login/forgot_password';
$route['admin/informacion'] = 'login/view_message';
$route['admin/reiniciar-contrasenia/(:any)'] = 'login/reset_password';

$route['admin/home'] = 'admin/home';      
$route['lang/(:any)'] = 'lang';

$route['admin/home-editar'] = 'admin/home/home_edit';
$route['admin/industrial'] = 'admin/products/products_edit';
$route['admin/industrial/editar-producto/(:num)'] = 'admin/products/product_individual';

$route['admin/construction'] = 'admin/products/products_edit';
$route['admin/construction/editar-producto/(:num)'] = 'admin/products/product_individual';

$route['admin/agribusiness'] = 'admin/products/products_edit';
$route['admin/agribusiness/editar-producto/(:num)'] = 'admin/products/product_individual';
$route['admin/locations'] = 'admin/locations/index';
$route['admin/locations/editar-location/(:num)'] = 'admin/locations/edit_location_ind';

$route['admin/services'] = 'admin/services/index';
$route['admin/services/editar-service/(:num)'] = 'admin/services/edit_service_ind';

$route['admin/about-us'] = 'admin/about_us/index';
$route['admin/about-us/agregar-new'] = 'admin/about_us/add_new';
$route['admin/about-us/editar-new/(:num)'] = 'admin/about_us/edit_new';
$route['admin/about-us/eliminar-new/(:num)'] = 'admin/about_us/delete_new';


/* End of file routes.php */
/* Location: ./application/config/routes.php */