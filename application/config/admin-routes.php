<?php
defined('BASEPATH') or exit('No direct script access allowed');

$route['shubham'] = 'Login/fn_login';
$route['city-excel-data'] = 'Cn_default/city_bulk_upload';
$route['website-live-counter'] = 'Cn_default/website_live_counter';

#Cms
$route['shubham/dashboard'] = 'admin/Cn_dashboard/fun_dashboard';
$route['change-sort'] = 'admin/Cn_dashboard/change_sorting';
$route['get-cms-data-by-page'] = 'admin/Cn_cms/get_cms_data_by_page';


$route['shubham/district-list/(:num)'] = 'admin/Cn_district_list/fun_list/$1';
$route['get-data-table-user-list'] = 'admin/Cn_district_list/get_data_table_user_list';


$route['get-data-table-referral-user'] = 'admin/referral_user/Cn_referral_user/get_data_table_referral_user';

$route['get-data-table-referral-list'] = 'admin/referral/Cn_referral/get_data_table_referral_list';


// home page
$route['shubham/home'] = 'admin/Cn_home';
$route['shubham/action-home'] = 'admin/Cn_home/action_home';


// home page
$route['shubham/edit-referral-page'] = 'admin/referral_page/Cn_referral_page';
$route['referral-page'] = 'admin/referral_page/Cn_referral_page/referral_action';

# city Master
$route['shubham/city'] = 'admin/master/Cn_city/index';
$route['shubham/district_action'] = 'admin/master/Cn_city/district_action';
$route['master/get-city-data-table'] = 'admin/master/Cn_city/get_data_table_city';
$route['master/delete-city'] = 'admin/master/Cn_city/delete_city';
$route['master/edit-city/(:num)'] = 'admin/master/Cn_city/edit_city/$1';

$route['master/configuration'] = 'admin/master/Cn_configuration/action_configuration';
$route['shubham/configuration'] = 'admin/master/Cn_configuration/configuration/';

$route['soft-delete'] = 'admin/cn_common/softDelete';
$route['active-block'] = 'admin/cn_common/changeStatus';

# Cms
$route['shubham/cms'] = 'admin/Cn_cms/cms';
$route['cms-action'] = 'admin/Cn_cms/cms_action';

// Registered user 
$route['shubham/registered-user'] = 'admin/registered_user/Cn_registered_user/cn_registered_user_list';
$route['get-register-data-table'] = 'admin/registered_user/Cn_registered_user/get_data_table_register_user';
$route['delete-register-user'] = 'admin/registered_user/Cn_registered_user/delete_register_user';
$route['check-city-id'] = 'admin/registered_user/Cn_registered_user/check_city_id';
$route['download-csv-file-of-user'] = 'admin/registered_user/Cn_registered_user/download_excel_of_register_user';

// Referral dashboard img
$route['shubham/referral-dash-img'] = 'admin/referral_dash_img/Cn_referral_dash_img/referral_dash_img_list';
$route['banner-action'] = 'admin/referral_dash_img/Cn_referral_dash_img/banner_action';
$route['get-banner-data-table'] = 'admin/referral_dash_img/Cn_referral_dash_img/get_data_table_banner';
$route['delete-banner'] = 'admin/referral_dash_img/Cn_referral_dash_img/delete_banner';

// Referral user 
$route['shubham/referral'] = 'admin/referral/Cn_referral/cn_referral_list';
$route['referral-delete'] = 'admin/referral/Cn_referral/delete_referral';
$route['get-data-table-referral'] = 'admin/referral/Cn_vw_view_referral/get_data_table_referral';
$route['shubham/view-referral/(:num)'] = 'admin/referral/Cn_vw_view_referral/cn_view_referral/$1';

// Referral user 
$route['shubham/referral-user'] = 'admin/referral_user/Cn_referral_user/referral_user';

// Payment Transfer 
$route['shubham/pending-payment-transfer'] = 'admin/payment_transfer/Cn_payment_transfer/cn_payment_transfer_list';
$route['get-data-table-pending-payment'] = 'admin/payment_transfer/Cn_payment_transfer/get_data_table_pending_payment';
$route['get-data-table-completed-payment'] = 'admin/payment_transfer/Cn_completed_payment/get_data_table_completed_payment';
$route['shubham/Completed-payment-transfer'] = 'admin/payment_transfer/Cn_completed_payment/cn_completed_payment_transfer';
$route['shubham/pending-model'] = 'admin/payment_transfer/Cn_payment_transfer/getDataForModel';
$route['shubham/completed-model'] = 'admin/payment_transfer/Cn_completed_payment/getDataForCompletedModel';
$route['pending-payment-action'] = 'admin/payment_transfer/Cn_payment_transfer/pending_payment_action';

//settings
$route['shubham/general-settings'] = 'admin/Cn_settings/cn_general_settings';
$route['contact-setting-action'] = 'admin/Cn_settings/contact_setting';
$route['social-media-action'] = 'admin/Cn_settings/social_media_setting';
$route['header-footer-action'] = 'admin/Cn_settings/header_footer_setting';

$route['shubham/email-settings'] = 'admin/Cn_settings/cn_email_settings';

$route['shubham/visual-settings'] = 'admin/Cn_settings/cn_visual_settings';
$route['save-visual-setting'] = 'admin/Cn_settings/action_visual_setting';

$route['shubham/social-login-settings'] = 'admin/Cn_settings/cn_social_login_settings';

$route['shubham/system-logs'] = 'admin/Cn_forgot/adminarea';

$route['shubham/forgot-password'] = 'admin/Cn_forgot/forgot_password';
$route['send-mail-for-forget-password'] = 'admin/Cn_forgot/sendMailForForgetPassword';

$route['shubham/otp'] = 'admin/Cn_forgot/otp';
$route['verify-email-otp'] = 'admin/Cn_forgot/verify_otp';

$route['shubham/reset-password'] = 'admin/Cn_forgot/reset_password';
$route['set-new-password'] = 'admin/Cn_forgot/set_new_password';
// $route['admin/dashboard'] = 'admin/Cn_forgot/dashboard';
$route['shubham/change-password'] = 'admin/Cn_forgot/change_password';
$route['check_email_for_forget'] = 'admin/Cn_forgot/checkDuplicateemailForForgetPassword';
$route['change-password-setting'] = 'admin/Cn_settings/updateAdminPassword';

$route['shubham/report'] = 'admin/Cn_report/index';
$route['bar-chart'] = 'admin/Cn_report/bar_chart';
