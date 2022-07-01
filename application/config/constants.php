<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/*
|--------------------------------------------------------------------------
| Display Debug backtrace
|--------------------------------------------------------------------------
|
| If set to TRUE, a backtrace will be displayed along with php errors. If
| error_reporting is disabled, the backtrace will not display, regardless
| of this setting
|
*/
defined('SHOW_DEBUG_BACKTRACE') OR define('SHOW_DEBUG_BACKTRACE', TRUE);

/*
|--------------------------------------------------------------------------
| File and Directory Modes
|--------------------------------------------------------------------------
|
| These prefs are used when checking and setting modes when working
| with the file system.  The defaults are fine on servers with proper
| security, but you may wish (or even need) to change the values in
| certain environments (Apache running a separate process for each
| user, PHP under CGI with Apache suEXEC, etc.).  Octal values should
| always be used to set the mode correctly.
|
*/
defined('FILE_READ_MODE')  OR define('FILE_READ_MODE', 0644);
defined('FILE_WRITE_MODE') OR define('FILE_WRITE_MODE', 0666);
defined('DIR_READ_MODE')   OR define('DIR_READ_MODE', 0755);
defined('DIR_WRITE_MODE')  OR define('DIR_WRITE_MODE', 0755);

/*
|--------------------------------------------------------------------------
| File Stream Modes
|--------------------------------------------------------------------------
|
| These modes are used when working with fopen()/popen()
|
*/
defined('FOPEN_READ')                           OR define('FOPEN_READ', 'rb');
defined('FOPEN_READ_WRITE')                     OR define('FOPEN_READ_WRITE', 'r+b');
defined('FOPEN_WRITE_CREATE_DESTRUCTIVE')       OR define('FOPEN_WRITE_CREATE_DESTRUCTIVE', 'wb'); // truncates existing file data, use with care
defined('FOPEN_READ_WRITE_CREATE_DESTRUCTIVE')  OR define('FOPEN_READ_WRITE_CREATE_DESTRUCTIVE', 'w+b'); // truncates existing file data, use with care
defined('FOPEN_WRITE_CREATE')                   OR define('FOPEN_WRITE_CREATE', 'ab');
defined('FOPEN_READ_WRITE_CREATE')              OR define('FOPEN_READ_WRITE_CREATE', 'a+b');
defined('FOPEN_WRITE_CREATE_STRICT')            OR define('FOPEN_WRITE_CREATE_STRICT', 'xb');
defined('FOPEN_READ_WRITE_CREATE_STRICT')       OR define('FOPEN_READ_WRITE_CREATE_STRICT', 'x+b');

/*
|--------------------------------------------------------------------------
| Exit Status Codes
|--------------------------------------------------------------------------
|
| Used to indicate the conditions under which the script is exit()ing.
| While there is no universal standard for error codes, there are some
| broad conventions.  Three such conventions are mentioned below, for
| those who wish to make use of them.  The CodeIgniter defaults were
| chosen for the least overlap with these conventions, while still
| leaving room for others to be defined in future versions and user
| applications.
|
| The three main conventions used for determining exit status codes
| are as follows:
|
|    Standard C/C++ Library (stdlibc):
|       http://www.gnu.org/software/libc/manual/html_node/Exit-Status.html
|       (This link also contains other GNU-specific conventions)
|    BSD sysexits.h:
|       http://www.gsp.com/cgi-bin/man.cgi?section=3&topic=sysexits
|    Bash scripting:
|       http://tldp.org/LDP/abs/html/exitcodes.html
|
*/
defined('EXIT_SUCCESS')        OR define('EXIT_SUCCESS', 0); // no errors
defined('EXIT_ERROR')          OR define('EXIT_ERROR', 1); // generic error
defined('EXIT_CONFIG')         OR define('EXIT_CONFIG', 3); // configuration error
defined('EXIT_UNKNOWN_FILE')   OR define('EXIT_UNKNOWN_FILE', 4); // file not found
defined('EXIT_UNKNOWN_CLASS')  OR define('EXIT_UNKNOWN_CLASS', 5); // unknown class
defined('EXIT_UNKNOWN_METHOD') OR define('EXIT_UNKNOWN_METHOD', 6); // unknown class member
defined('EXIT_USER_INPUT')     OR define('EXIT_USER_INPUT', 7); // invalid user input
defined('EXIT_DATABASE')       OR define('EXIT_DATABASE', 8); // database error
defined('EXIT__AUTO_MIN')      OR define('EXIT__AUTO_MIN', 9); // lowest automatically-assigned error code
defined('EXIT__AUTO_MAX')      OR define('EXIT__AUTO_MAX', 125); // highest automatically-assigned error code

defined('SITE_TITLE')      OR define('SITE_TITLE', "SCROLLUP"); // Site title declear
defined('SITE_MAIL') OR define('SITE_MAIL', 'help@scrollup.in'); // highest automatically-assigned error code


//smtp details for email sending
defined('SMTP_SERVER_NAME') or define('SMTP_SERVER_NAME', 'scrollup.in');
defined('SMTP_USERNAME') or define('SMTP_USERNAME', 'help@scrollup.in');
defined('SMTP_PASSWORD') or define('SMTP_PASSWORD', 'syJ??no&n&##');
defined('SMTP_PORT') or define('SMTP_PORT', '587');

# Admin Tables
defined('SCROLLUP_USERADMIN')      or define('SCROLLUP_USERADMIN', "scrollup_useradmin");
defined('SCROLLUP_SYSTEM_LOG')      or define('SCROLLUP_SYSTEM_LOG', "scrollup_system_log");
defined('SCROLLUP_LOGIN_LOGS')      or define('SCROLLUP_LOGIN_LOGS', "scrollup_login_logs");
defined('SCROLLUP_MASTER_CITY')      or define('SCROLLUP_MASTER_CITY', "scrollup_master_city");
defined('SCROLLUP_MASTER_CONFIGURATION')      or define('SCROLLUP_MASTER_CONFIGURATION', "scrollup_master_configuration");
defined('SCROLLUP_CMS')      or define('SCROLLUP_CMS', "scrollup_cms");
defined('SCROLLUP_REFERRAL_LIST')      or define('SCROLLUP_REFERRAL_LIST', "scrollup_referral_list");
defined('SCROLLUP_ANIMATED_HOME')      or define('SCROLLUP_ANIMATED_HOME', "scrollup_animated_home");
defined('SCROLLUP_REFERRAL_PAGE')      or define('SCROLLUP_REFERRAL_PAGE', "scrollup_referral_page");
defined('SCROLLUP_VISUAL_SETTINGS')      or define('SCROLLUP_VISUAL_SETTINGS', "scrollup_static_visual_settings");
defined('SCROLLUP_BANNER')      or define('SCROLLUP_BANNER', "scrollup_banner");

#Website Tables
// defined('SCROLLUP_USER_BANK_DETAILS')      or define('SCROLLUP_USER_BANK_DETAILS', "scrollup_user_bank_details");
defined('SCROLLUP_USER_PAYMENT_DETAILS')      or define('SCROLLUP_USER_PAYMENT_DETAILS', "scrollup_user_payment_details");

defined('SCROLLUP_REGISTERED_USERS') or define('SCROLLUP_REGISTERED_USERS', 'scrollup_registered_users');

defined('SCROLLUP_GENERAL_SETTINGS') or define('SCROLLUP_GENERAL_SETTINGS', 'scrollup_general_settings');

# City-wise register user data table
defined('SCROLLUP_REGISTERED_USERS_AHMEDNAGAR') or define('SCROLLUP_REGISTERED_USERS_AHMEDNAGAR', 'scrollup_registered_users_ahmednagar');
defined('SCROLLUP_REGISTERED_USERS_AKOLA') or define('SCROLLUP_REGISTERED_USERS_AKOLA', 'scrollup_registered_users_akola');
defined('SCROLLUP_REGISTERED_USERS_AMRAVATI') or define('SCROLLUP_REGISTERED_USERS_AMRAVATI', 'scrollup_registered_users_amravati');
defined('SCROLLUP_REGISTERED_USERS_AURANGABAD') or define('SCROLLUP_REGISTERED_USERS_AURANGABAD', 'scrollup_registered_users_aurangabad');
defined('SCROLLUP_REGISTERED_USERS_BEED') or define('SCROLLUP_REGISTERED_USERS_BEED', 'scrollup_registered_users_beed');
defined('SCROLLUP_REGISTERED_USERS_BHANDARA') or define('SCROLLUP_REGISTERED_USERS_BHANDARA', 'scrollup_registered_users_bhandara');
defined('SCROLLUP_REGISTERED_USERS_BULDHANA') or define('SCROLLUP_REGISTERED_USERS_BULDHANA', 'scrollup_registered_users_buldhana');
defined('SCROLLUP_REGISTERED_USERS_CHANDRAPUR') or define('SCROLLUP_REGISTERED_USERS_CHANDRAPUR', 'scrollup_registered_users_chandrapur');
defined('SCROLLUP_REGISTERED_USERS_DHULE') or define('SCROLLUP_REGISTERED_USERS_DHULE', 'scrollup_registered_users_dhule');
defined('SCROLLUP_REGISTERED_USERS_GADCHIROLI') or define('SCROLLUP_REGISTERED_USERS_GADCHIROLI', 'scrollup_registered_users_gadchiroli');
defined('SCROLLUP_REGISTERED_USERS_GONDIA') or define('SCROLLUP_REGISTERED_USERS_GONDIA', 'scrollup_registered_users_gondia');
defined('SCROLLUP_REGISTERED_USERS_HINGOLI') or define('SCROLLUP_REGISTERED_USERS_HINGOLI', 'scrollup_registered_users_hingoli');
defined('SCROLLUP_REGISTERED_USERS_JALGAON') or define('SCROLLUP_REGISTERED_USERS_JALGAON', 'scrollup_registered_users_jalgaon');
defined('SCROLLUP_REGISTERED_USERS_JALNA') or define('SCROLLUP_REGISTERED_USERS_JALNA', 'scrollup_registered_users_jalna');
defined('SCROLLUP_REGISTERED_USERS_KOLHAPUR') or define('SCROLLUP_REGISTERED_USERS_KOLHAPUR', 'scrollup_registered_users_kolhapur');
defined('SCROLLUP_REGISTERED_USERS_LATUR') or define('SCROLLUP_REGISTERED_USERS_LATUR', 'scrollup_registered_users_latur');
defined('SCROLLUP_REGISTERED_USERS_MUMBAI_CITY') or define('SCROLLUP_REGISTERED_USERS_MUMBAI_CITY', 'scrollup_registered_users_mumbai_city');
defined('SCROLLUP_REGISTERED_USERS_MUMBAI_SUBURBAN') or define('SCROLLUP_REGISTERED_USERS_MUMBAI_SUBURBAN', 'scrollup_registered_users_mumbai_suburban');
defined('SCROLLUP_REGISTERED_USERS_NAGPUR') or define('SCROLLUP_REGISTERED_USERS_NAGPUR', 'scrollup_registered_users_nagpur');
defined('SCROLLUP_REGISTERED_USERS_NANDED') or define('SCROLLUP_REGISTERED_USERS_NANDED', 'scrollup_registered_users_nanded');
defined('SCROLLUP_REGISTERED_USERS_NANDURBAR') or define('SCROLLUP_REGISTERED_USERS_NANDURBAR', 'scrollup_registered_users_nandurbar');
defined('SCROLLUP_REGISTERED_USERS_NASHIK') or define('SCROLLUP_REGISTERED_USERS_NASHIK', 'scrollup_registered_users_nashik');
defined('SCROLLUP_REGISTERED_USERS_OSMANABAD') or define('SCROLLUP_REGISTERED_USERS_OSMANABAD', 'scrollup_registered_users_osmanabad');
defined('SCROLLUP_REGISTERED_USERS_PALGHAR') or define('SCROLLUP_REGISTERED_USERS_PALGHAR', 'scrollup_registered_users_palghar');
defined('SCROLLUP_REGISTERED_USERS_PARBHANI') or define('SCROLLUP_REGISTERED_USERS_PARBHANI', 'scrollup_registered_users_parbhani');
defined('SCROLLUP_REGISTERED_USERS_PUNE') or define('SCROLLUP_REGISTERED_USERS_PUNE', 'scrollup_registered_users_pune');
defined('SCROLLUP_REGISTERED_USERS_RAIGAD') or define('SCROLLUP_REGISTERED_USERS_RAIGAD', 'scrollup_registered_users_raigad');
defined('SCROLLUP_REGISTERED_USERS_RATNAGIRI') or define('SCROLLUP_REGISTERED_USERS_RATNAGIRI', 'scrollup_registered_users_ratnagiri');
defined('SCROLLUP_REGISTERED_USERS_SANGLI') or define('SCROLLUP_REGISTERED_USERS_SANGLI', 'scrollup_registered_users_sangli');
defined('SCROLLUP_REGISTERED_USERS_SATARA') or define('SCROLLUP_REGISTERED_USERS_SATARA', 'scrollup_registered_users_satara');
defined('SCROLLUP_REGISTERED_USERS_SINDHUDURG') or define('SCROLLUP_REGISTERED_USERS_SINDHUDURG', 'scrollup_registered_users_sindhudurg');
defined('SCROLLUP_REGISTERED_USERS_SOLAPUR') or define('SCROLLUP_REGISTERED_USERS_SOLAPUR', 'scrollup_registered_users_solapur');
defined('SCROLLUP_REGISTERED_USERS_THANE') or define('SCROLLUP_REGISTERED_USERS_THANE', 'scrollup_registered_users_thane');
defined('SCROLLUP_REGISTERED_USERS_WARDHA') or define('SCROLLUP_REGISTERED_USERS_WARDHA', 'scrollup_registered_users_wardha');
defined('SCROLLUP_REGISTERED_USERS_WASHIM') or define('SCROLLUP_REGISTERED_USERS_WASHIM', 'scrollup_registered_users_washim');
defined('SCROLLUP_REGISTERED_USERS_YAVATMAL') or define('SCROLLUP_REGISTERED_USERS_YAVATMAL', 'scrollup_registered_users_yavatmal');
defined('SCROLLUP_REGISTERED_USERS_OTHER') or define('SCROLLUP_REGISTERED_USERS_OTHER', 'scrollup_registered_users_other');