<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

/*
|--------------------------------------------------------------------------
| Security settings
|
| The library uses PasswordHash library for operating with hashed passwords.
| 'phpass_hash_portable' = Can passwords be dumped and exported to another server. If set to FALSE then you won't be able to use this database on another server.
| 'phpass_hash_strength' = Password hash strength.
|--------------------------------------------------------------------------
*/

$config['phpass_hash_portable'] = FALSE;
$config['phpass_hash_strength'] = 8;

$config['auth_expire_period'] = '216000';


$config['cms_email_info'] = 'atellezsazo@gmail.com';
$config['cms_email_from'] = 'Steinadler';

/*
|--------------------------------------------------------------------------
| reCAPTCHA
|
| You can get reCAPTCHA keys by registering at http://recaptcha.net
|--------------------------------------------------------------------------
*/

$config['recaptcha_public_key'] = '6LcO8ugSAAAAAKAB5ZDYOLVnzxT4vXPPPfsUg0qw';
$config['recaptcha_private_key'] = '6LcO8ugSAAAAALjPhOcsBHu1DoU-DRCD1u-KbXyp';

/* End of file config.php */
/* Location: ./application/config/gp-config.php */
