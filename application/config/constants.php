<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

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
define('FILE_READ_MODE', 0644);
define('FILE_WRITE_MODE', 0666);
define('DIR_READ_MODE', 0755);
define('DIR_WRITE_MODE', 0777);

/*
|--------------------------------------------------------------------------
| File Stream Modes
|--------------------------------------------------------------------------
|
| These modes are used when working with fopen()/popen()
|
*/

define('FOPEN_READ',							'rb');
define('FOPEN_READ_WRITE',						'r+b');
define('FOPEN_WRITE_CREATE_DESTRUCTIVE',		'wb'); // truncates existing file data, use with care
define('FOPEN_READ_WRITE_CREATE_DESTRUCTIVE',	'w+b'); // truncates existing file data, use with care
define('FOPEN_WRITE_CREATE',					'ab');
define('FOPEN_READ_WRITE_CREATE',				'a+b');
define('FOPEN_WRITE_CREATE_STRICT',				'xb');
define('FOPEN_READ_WRITE_CREATE_STRICT',		'x+b');

 /*
 |--------------------------------------------------------------------------
 | STATUS TABLE 
 |--------------------------------------------------------------------------
 |
 |
 */
 
 
define('STATUS_ACTIVE', 'A');
define('STATUS_INACTIVE', 'I');

/*
 |--------------------------------------------------------------------------
 | Gender
 |--------------------------------------------------------------------------
 |
 |
 */

define('GENDER_MALE', 'M');
define('GENDER_FEMALE', 'F');

/*
 |--------------------------------------------------------------------------
 | YES or NO
 |--------------------------------------------------------------------------
 |
 |
 */

define('CONS_YES', 'Y');
define('CONS_NO', 'N');

/*
 |--------------------------------------------------------------------------
 | Form Fields
 |--------------------------------------------------------------------------
 |
 |
 */

define('FORM_GP_INPUT', 'INPUT');
define('FORM_GP_TEXTAREA', 'TEXTAREA');
define('FORM_GP_DROPDOWN', 'dropdown');

/*
 |--------------------------------------------------------------------------
 | Upload Paths
 |--------------------------------------------------------------------------
 |
 |
 */
 
define('TYPE_FILE_ALL', 'gif|jpg|png|JPG|jpeg|oc|docx|pdf|mp3|mp4');
define('TYPE_FILE_SUPPORT', 'gif|jpg|png|JPG|jpeg|oc|docx|pdf');
define('TYPE_FILE_ONLY_IMAGES', '|gif|jpg|png|JPG|jpeg|');
define('TYPE_FILE_PNG', '|png|');
define('TYPE_FILE_SCAN', 'jpg|png|JPG|jpeg|pdf');
define('TYPE_DOCS_ONLY', 'doc|docx|pdf');
define('TYPE_SOUNDS_ONLY', '|mp3|');
define('TYPE_VIDEOS_ONLY', '|mp4|');
define('PATH_PRODUCTS_FILES', './uploads/products');



/* End of file constants.php */
/* Location: ./application/config/constants.php */