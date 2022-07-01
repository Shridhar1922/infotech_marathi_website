<?php
defined('BASEPATH') or exit('No direct script access allowed');

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
|	https://codeigniter.com/user_guide/general/routing.html
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

# Api Routes
require_once('api-routes.php');

# Admin Routes
require_once('admin-routes.php');

$route['default_controller'] = 'Cn_default';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;

# Auth
$route['logout'] = 'login/logout';
$route['chk-login'] = 'login/login_action';
$route['check-password-valid'] = 'login/check_password_valid';
$route['save-password'] = 'login/change_password';
$route['check-account-exits'] = 'login/check_account_exits';

$route['check-number'] = 'front/Cn_website/check_number';
$route['check-duplicate-number'] = 'front/Cn_website/check_duplicate_number';
$route['get-otp-verify'] = 'front/Cn_website/get_otp_verify';

$route['home/join/(:num)'] = 'Cn_default/link/$1';




# Home
$route['add-number'] = 'front/Cn_website/add_number';
$route['get-join-url'] = 'front/Cn_website/get_join_url';
$route['get-district-whatsapp-data'] = 'front/Cn_website/get_district_mobile_number_data';

$route['view-registered-users'] = 'front/Cn_view_registered_users/view_registered_users';



$route['referral-login'] = 'front/Cn_referral_login/referral_login';
$route['login-action'] = 'front/Cn_referral_login/login_action';

$route['referral-forgot'] = 'front/Cn_referral_forgot/referral_forgot';
$route['forgot-password-action'] = 'front/Cn_referral_forgot/ForgetPasswordAction';
$route['check-duplicate-email'] = 'front/Cn_referral_forgot/checkDuplicateemailForForgetPassword';

$route['check-user-register'] = 'front/Cn_referral_login/check_account_exits';
$route['referral-register'] = 'front/Cn_referral_register/referral_register';
$route['check-number-register'] = 'front/Cn_referral_register/check_number_register';
$route['get-city-id-mobile-no'] = 'front/Cn_referral_register/get_city_id_using_mobile_no';
$route['register-action'] = 'front/Cn_referral_register/register_action';
$route['about_us'] = 'front/Cn_about_us/about_us';
$route['how_to_join'] = 'front/Cn_how_to_join/how_to_join';
$route['why_infotech_marathi'] = 'front/Cn_why_scrollup/why_scrollup';
$route['contact_us'] = 'front/Cn_contact_us/contact_us';
$route['send-contact-us'] = 'front/Cn_contact_us/sendMailForContactUs';
$route['terms_and_conditions'] = 'front/Cn_terms_and_conditions/terms_and_conditions';
$route['privacy_policy'] = 'front/Cn_privacy_policy/privacy_policy';


$route['referral-dashboard'] = 'front/Cn_referral_dashboard/referral_dashboard';
$route['withdrawal-amount'] = 'front/Cn_referral_dashboard/withdrawal_amount';
$route['bank-details-action'] = 'front/Cn_referral_dashboard/bank_details_action';

$route['referral-list'] = 'front/Cn_referral_list/referral_list';
$route['get-data-table-referral-list-front'] = 'front/Cn_referral_list/get_data_table_referral_list';
$route['referral-logout'] = 'front/Cn_referral_dashboard/logout_action';