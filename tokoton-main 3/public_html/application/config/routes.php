<?php  if (!defined('BASEPATH')) exit('No direct script access allowed');
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
| 	www.your-site.com/class/method/id/
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
| There are two reserved routes:
|
|	$route['default_controller'] = 'welcome';
|
| This route indicates which controller class should be loaded if the
| URI contains no data. In the above example, the "welcome" class
| would be loaded.
|
|	$route['scaffolding_trigger'] = 'scaffolding';
|
| This route lets you set a "secret" word that will trigger the
| scaffolding feature for added security. Note: Scaffolding must be
| enabled in the controller in which you intend to use it.   The reserved 
| routes must come before any wildcard or regular expression routes.
|
*/

$route['default_controller'] = "top";
$route['scaffolding_trigger'] = "";



/* ------------------------------------------------------------------ */
/* admin
--------------------------------------------------------------------- */

// account
$route['admin/account/search/([0-9]+)'] = 'admin/account/index/$1/';
$route['admin/account/search/([^\.]*)/([0-9]+).html'] = 'admin/account/index/$2/$1';
$route['admin/account/search/([^\.]+)'] = 'admin/account/index/$1/';


// detail
$route['admin/detail/([0-9]+)'] = 'admin/detail/index/$1/';

// area
$route['admin/area/([0-9]+)'] = 'admin/area/index/$1/';

// region
$route['admin/region/([0-9]+)/([0-9]+)'] = 'admin/region/index/$1/$2';

// mail_temp
$route['admin/mail_temp/([0-9]+)'] = 'admin/mail_temp/index/$1/';

// coupon_detail
$route['admin/coupon_detail/([0-9]+)'] = 'admin/coupon_detail/index/$1/';

// campaign_detail
$route['admin/campaign_detail/([0-9]+)'] = 'admin/campaign_detail/index/$1/';

// service_detail
$route['admin/service_detail/([0-9]+)'] = 'admin/service_detail/index/$1/';

// discount_detail
$route['admin/discount_detail/([0-9]+)'] = 'admin/discount_detail/index/$1/';

// plan_detail
$route['admin/plan_detail/([0-9]+)'] = 'admin/plan_detail/index/$1/';

/* ------------------------------------------------------------------ */
/* client
--------------------------------------------------------------------- */
// information
$route['client/information/([0-9]+)'] = 'client/information/index/$1/';
$route['client/top/([a-z]+)'] = 'client/top/index/$1/';

/* ------------------------------------------------------------------ */
/* user
--------------------------------------------------------------------- */
// shop_detail
$route['shop_detail/([0-9]+)'] = 'user/shop_detail/index/$1/';
$route['shop_detail/([0-9]+)/([a-zA-Z0-9_]+)'] = 'user/shop_detail/index/$1/$2/';
// estimate_form
$route['estimate_form/([0-9]+)'] = 'user/estimate_form/index/$1/';
$route['estimate_form/confirm'] = 'user/estimate_form/confirm/';
$route['estimate_form/estimate_fin'] = 'user/estimate_form/estimate_fin/';
$route['estimate_form/estimate_check/([0-9]+)'] = 'user/estimate_form/estimate_check/$1/';

// shop_coupon
$route['shop_coupon/([0-9]+)'] = 'user/shop_coupon/index/$1/';
$route['shop_coupon/([0-9]+)/([a-zA-Z0-9_]+)'] = 'user/shop_coupon/index/$1/$2';

// shop_campaign
$route['shop_campaign/([0-9]+)'] = 'user/shop_campaign/index/$1/';
$route['shop_campaign/([0-9]+)/([a-zA-Z0-9_]+)'] = 'user/shop_campaign/index/$1/$2';

// search
$route['search/(.+)'] = 'user/search/index/$1/';

// search_top
$route['search_top'] = 'user/search_top/index';

// link_shop
$route['link_shop/([0-9]+)/([a-zA-Z0-9_]+)'] = 'user/link_shop/index/$1/$2';
$route['link_shop/([0-9]+)/([a-zA-Z0-9_]+)/([0-9]+)'] = 'user/link_shop/index/$1/$2/$3';

?>