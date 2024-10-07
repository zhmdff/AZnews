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
|	https://codeigniter.com/userguide3/general/routing.html
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
$route['default_controller'] = 'UserController';
$route['home']              = 'UserController/index';
$route['category/(:any)']   = 'UserController/category/$1';
$route['about']             = 'UserController/about';
$route['contact']           = 'UserController/contact';
$route['latest_news']       = 'UserController/latest_news';
$route["all_news/(:any)"]   = "UserController/all_news/$1";
$route["all_news"]   = "UserController/all_news/0";
$route["single/(:any)"]     = "UserController/single/$1";
$route["add_comment_act"]   = "UserController/add_comment_act";
$route['user_add_pfp/(:any)']      = 'UserController/user_add_pfp/$1';



$route["user_register"]     = "UserController/user_register";
$route["user_register_act"] = "UserController/user_register_act";

$route["user_login"]            = "UserController/user_login";
$route["user_login_act"]        = "UserController/user_login_act";
$route["user_log_out"]          = "UserController/user_log_out";
$route["user_profile"]          = "UserController/user_profile";
$route["add_user_comment_act"]  = "UserController/add_user_comment_act";
$route["contact_act"]           = "UserController/contact_act";
$route["user_contact_act"]      = "UserController/user_contact_act";

/////////////////////////////////////////////
//////////////////ADMIN/////////////////////

$route['admin_dashboard']               = 'AdminController/dashboard';
$route['admin_about_view']                   = 'AdminController/admin_about_view';
$route['admin_about_edit']                   = 'AdminController/admin_about_edit';
$route['admin_about_edit_act']                   = 'AdminController/admin_about_edit_act';
$route['admin_contact']                 = 'AdminController/admin_contact';
$route['admin_contact_single/(:any)']   = 'AdminController/contact_single/$1';

$route['admin_login']       = 'AdminController/index';
$route['admin_login_act']   = 'AdminController/login_act';
$route['admin_log_out']     = 'AdminController/log_out';
$route['admin_add']         = 'AdminController/admin_add';
$route['admin_add_act']     = 'AdminController/admin_add_act';

$route['admin_profile']                                 = 'AdminController/admin_profile';
$route['admin_profile_edit/(:any)']                     = 'AdminController/admin_profile_edit/$1';
$route['admin_profile_edit_owner/(:any)']                     = 'AdminController/admin_profile_edit_owner/$1';
$route['change_admin_pfp/(:any)']                       = 'AdminController/change_admin_pfp/$1';
$route['change_admin_pfp_owner/(:any)']                       = 'AdminController/change_admin_pfp_owner/$1';
$route['admin_profile_edit_act/(:any)']                 = 'AdminController/admin_profile_edit_act/$1';
$route['admin_profile_edit_owner_act/(:any)']                 = 'AdminController/admin_profile_edit_owner_act/$1';
$route['admin_profile_social_media_edit_act/(:any)']    = 'AdminController/admin_profile_social_media_edit_act/$1';
$route['admin_list']                                    = 'AdminController/admin_list';
$route['admin_profile_owner/(:any)']                    = 'AdminController/admin_profile_owner/$1';
$route['admin_profile_delete_owner/(:any)']                    = 'AdminController/admin_profile_delete_owner/$1';
$route['admin_profile_delete/(:any)']                    = 'AdminController/admin_profile_delete/$1';

$route['contact_list']               = 'AdminController/contact_list';
$route['contact_edit/(:any)']        = 'AdminController/contact_edit/$1';
$route['contact_edit_act/(:any)']    = 'AdminController/contact_edit_act/$1';

$route['navbar_list']               = 'AdminController/navbar_list';
$route['navbar_add']                = 'AdminController/navbar_add';
$route['navbar_add_act']            = 'AdminController/navbar_add_act';
$route['navbar_edit/(:any)']        = 'AdminController/navbar_edit/$1';
$route['navbar_edit_act/(:any)']    = 'AdminController/navbar_edit_act/$1';
$route['navbar_delete/(:any)']      = 'AdminController/navbar_delete/$1';

$route['category_list']                     = 'AdminController/category_list';
$route['category_add']                      = 'AdminController/category_add';
$route['category_add_act']                  = 'AdminController/category_add_act';
$route['category_edit/(:any)']              = 'AdminController/category_edit/$1';
$route['category_edit_act/(:any)']          = 'AdminController/category_edit_act/$1';
$route['category_delete/(:any)']            = 'AdminController/category_delete/$1';
$route['category_news_delete/(:any)']       = 'AdminController/category_news_delete/$1';
$route['category_only_news_delete/(:any)']  = 'AdminController/category_only_news_delete/$1';


$route['admin_news_list']               = 'AdminController/news_list';
$route['admin_news_add']                = 'AdminController/news_add';
$route['admin_news_add_act']            = 'AdminController/news_add_act';
$route['admin_news_view/(:any)']        = 'AdminController/news_view/$1';
$route['admin_news_edit/(:any)']        = 'AdminController/news_edit/$1';
$route['admin_news_edit_act/(:any)']    = 'AdminController/news_edit_act/$1';
$route['admin_news_delete/(:any)']      = 'AdminController/news_delete/$1';

$route['nav_list']  = 'AdminController/nav_list';
$route['nav_add']   = 'AdminController/nav_add';

$route['ads_list']              = 'AdminController/ads_list';
$route['ads_add']               = 'AdminController/ads_add';
$route['ads_add_act']           = 'AdminController/ads_add_act';
$route['ads_view/(:any)']       = 'AdminController/ads_view/$1';
$route['ads_edit/(:any)']       = 'AdminController/ads_edit/$1';
$route['ads_edit_act/(:any)']   = 'AdminController/ads_edit_act/$1';
$route['ads_delete/(:any)']     = 'AdminController/ads_delete/$1';

$route['social_media_list']             = 'AdminController/social_media_list';
$route['social_media_edit/(:any)']      = 'AdminController/social_media_edit/$1';
$route['social_media_edit_act/(:any)']  = 'AdminController/social_media_edit_act/$1';
$route['social_media_add']              = 'AdminController/social_media_add';
$route['social_media_add_act']          = 'AdminController/social_media_add_act';
$route['social_media_delete/(:any)']    = 'AdminController/social_media_delete/$1';

$route['user_navbar']       = 'AdminController/user_navbar';

$route['admin_footer_view']                   = 'AdminController/admin_footer_view';
$route['admin_footer_edit']                   = 'AdminController/admin_footer_edit';
$route['admin_footer_edit_act']                   = 'AdminController/admin_footer_edit_act';


$route['404_override'] = '404_error';
$route['translate_uri_dashes'] = FALSE;
