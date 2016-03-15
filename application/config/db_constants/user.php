<?php

/*
 |--------------------------------------------------------------------------
 | TABLE USER
 |--------------------------------------------------------------------------
 |
 */

if (! defined('USER_TABLE')) {

    define('USER_TABLE', 'st_user');

    define('USER_ID', 'us_id');
    define('USER_FIRST_NAME', 'us_first_name');
    define('USER_LAST_NAME', 'us_last_name');
    define('USER_EMAIL', 'us_email');
    define('USER_USERNAME', 'us_username');
    define('USER_PASSWORD', 'us_password');
	define('USER_STATUS', 'us_status');
    define('USER_KEY_PASSWORD', 'us_key_password');
    define('USER_DATE_PASSWORD_MODIFIED', 'us_date_password_modified');
    define('USER_USER_CREATED', 'us_user_created');
    define('USER_DATE_CREATED', 'us_date_created');
    define('USER_USER_MODIFIED', 'us_user_modified');
	define('USER_DATE_MODIFIED', 'us_date_modified');
    
    
}

/* End of file user.php */
/* Location: ./application/config/db_constants/user.php */
