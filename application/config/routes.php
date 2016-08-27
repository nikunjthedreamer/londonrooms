<?php
defined('BASEPATH') OR exit('No direct script access allowed');

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
| There are three reserved routes:
|
|	$route['default_controller'] = 'welcome';
|
| This route indicates which controller class should be loaded if the
| URI contains no data. In the above example, the "welcome" class
| would be loaded.
|
|	$route['404_override'] = 'errors/page_missing';
|
| This route will tell the Router which controller/method to use if those
| provided in the URL cannot be matched to a valid route.
|
|	$route['translate_uri_dashes'] = FALSE;
|
| This is not exactly a route, but allows you to automatically route
| controller and method names that contain dashes. '-' isn't a valid
| class or method name character, so it requires translation.
| When you set this option to TRUE, it will replace ALL dashes in the
| controller and method URI segments.
|
| Examples:	my-controller/index	-> my_controller/index
|		my-controller/my-method	-> my_controller/my_method
*/
//$route['default_controller'] = 'dashboard';

$route['default_controller'] = 'User/index';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;

/*admin*/
$route['admin'] = 'User/index';
$route['admin/dashboard'] = 'admin_dashboard';
$route['admin/signup'] = 'User/signup';
$route['admin/userlist'] = 'User/userlist';
$route['admin/create_member'] = 'User/create_member';
$route['admin/login'] = 'User/index';
$route['admin/logout'] = 'User/logout';
$route['admin/login/validate_credentials'] = 'User/validate_credentials';
$route['admin/user/edit/(:any)'] = 'User/edit/$1';
$route['admin/user/user_delete/(:any)'] = 'User/user_delete/$1';
$route['admin/property'] = 'Property/index';
$route['admin/property/edit/(:any)'] = 'Property/edit/$1';
$route['admin/property/add'] = 'Property/add';
$route['admin/property/property_delete/(:any)'] = 'Property/property_delete/$1';
$route['admin/property/detail/(:any)'] = 'Property/detail/$1';
$route['admin/property/add_tenancy/(:any)'] = 'Property/add_tenancy/$1';
$route['admin/property/add_mortgage/(:any)'] = 'Property/add_mortgage/$1';
$route['admin/property/add_note/(:any)'] = 'Property/add_note/$1';
$route['admin/property/add_calendar/(:any)'] = 'Property/add_calendar/$1';
$route['admin/property/add_room/(:any)'] = 'Property/add_room/$1';
$route['admin/property/edit_room/(:any)/(:any)'] = 'Property/edit_room/$1/$2';
$route['admin/property/delete_room/(:any)/(:any)'] = 'Property/delete_room/$1/$2';
$route['admin/property/delete_tenancy/(:any)/(:any)'] = 'Property/delete_tenancy/$1/$2';
$route['admin/property/delete_mortgage/(:any)/(:any)'] = 'Property/delete_mortgage/$1/$2';
$route['admin/property/delete_note/(:any)/(:any)'] = 'Property/delete_note/$1/$2';
$route['admin/property/delete_calendar/(:any)/(:any)'] = 'Property/delete_calendar/$1/$2';
$route['admin/property/edit_tenancy/(:any)/(:any)'] = 'Property/edit_tenancy/$1/$2';
$route['admin/property/edit_mortgage/(:any)/(:any)'] = 'Property/edit_mortgage/$1/$2';
$route['admin/property/edit_note/(:any)/(:any)'] = 'Property/edit_note/$1/$2';
$route['admin/property/edit_calender/(:any)/(:any)'] = 'Property/edit_calender/$1/$2';
$route['admin/property/add_bill/(:any)'] = 'Property/add_bill/$1';
$route['admin/property/edit_bill/(:any)/(:any)'] = 'Property/edit_bill/$1/$2';
$route['admin/property/delete_bill/(:any)/(:any)'] = 'Property/delete_bill/$1/$2';
$route['admin/tenancy/tenancy_detail/(:any)/(:any)'] = 'tenancy/tenancy_detail/$1/$2';
$route['admin/account/edit_transaction/(:any)/(:any)'] = 'account/edit_transaction/$1/$2';
$route['admin/tenant'] = 'Tenant/index';
$route['admin/tenant/offer'] = 'Tenant/offer';
$route['admin/tenant/add'] = 'Tenant/add';
$route['admin/tenant/tenant_delete/(:any)'] = 'Tenant/tenant_delete/$1';
$route['admin/tenant/approve/(:any)'] = 'Tenant/approve/$1';
$route['admin/tenant/detail/(:any)'] = 'Tenant/detail/$1';
$route['admin/tenant/profile/(:any)'] = 'Tenant/profile/$1';
$route['admin/room'] = 'Room/index';
$route['admin/room/price/(:any)'] = 'Room/price/$1';
$route['admin/room/status/(:any)'] = 'Room/status/$1';
//------------property Management-------------------------//
$route['admin/management'] = 'Management/index';
$route['admin/management/timeline'] = 'Management/timeline';
$route['admin/management/add_issues'] = 'Management/add_issues';
$route['admin/management/pid_room/(:any)'] = 'Management/pid_room/$1';
$route['admin/management/get_pid_room/(:any)/(:any)'] = 'Management/get_pid_room/$1/$2';
$route['admin/management/edit_issues/(:any)'] = 'Management/edit_issues/$1';
$route['admin/management/view_issues/(:any)'] = 'Management/view_issues/$1';
$route['admin/management/add_timeline/(:any)'] = 'Management/add_timeline/$1';
$route['admin/management/view_timeline/(:any)'] = 'Management/view_timeline/$1';

$route['admin/room/add'] = 'Room/add';
$route['admin/comp_logo'] = 'Setting/logo';
//================================== Account=======================================================
$route['admin/account/edit_transaction/(:any)/(:any)'] = 'Account/edit_transaction/$1/$2';
$route['admin/account/add_transaction'] = 'Account/add_transaction';
$route['admin/account/add_out_transaction'] = 'Account/add_out_transaction';
$route['admin/transactions'] = 'Account/index';
//=========================== extend cintract ====================================================
$route['admin/room/extend_contract/(:any)/(:any)'] = 'Room/extend_contract/$1/$2';
