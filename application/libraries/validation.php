<?php
if (!defined('BASEPATH'))
	exit('No direct script access allowed');

require_once ('phpass-0.1/PasswordHash.php');
require_once ('./application/config/db_constants/user.php');
require_once ('./application/config/db_constants/login_attempt.php');

class Validation {

	private $error = array();

	function __construct() {

		$this -> ci = &get_instance();
		$this -> ci -> load -> config('project-config', TRUE);
		$this -> ci -> load -> library('session');

		$this -> ci -> load -> model('user_model', 'users');
		$this -> ci -> load -> model('login_attempt_model', 'login_attempt');

		$this -> ci -> load -> database();
	}

	function create_password($password) {

		$hasher = new PasswordHash($this -> ci -> config -> item('phpass_hash_strength'), FALSE);

		$hashed_password = $hasher -> HashPassword($password);

		return $hashed_password;
	}

	function check_password($password_base, $password) {

		$hasher = new PasswordHash($this -> ci -> config -> item('phpass_hash_strength'), FALSE);

		if ($hasher -> CheckPassword($password, $password_base)) {
			return TRUE;
		} else {
			return FALSE;
		}
	}

	function login($login, $password) {

		if ((strlen($login) > 0) AND (strlen($password) > 0)) {

			if ($user = $this -> ci -> users -> get_by(array(USER_USERNAME => $login))) {

				if ($this -> ci -> login_attempt -> exceed_login_attempts($user[USER_ID])) {
					$this -> ci -> login_attempt -> delete_by(array(LOGIN_ATTEMPT_USER => $user[USER_ID]));
					redirect(base_url() . $this -> ci -> lang -> line('login_forgot_password_url'));
				}

				if ($this -> check_password($user[USER_PASSWORD], $password)) {//
					// password ok
					if ($user[USER_STATUS] != STATUS_ACTIVE) {// fail - banned
						$this -> error = array('msg_error' => $this -> ci -> lang -> line('login_user_no_active'));
					} else {
						$this -> ci -> session -> set_userdata(
						array('user_id' => $user[USER_ID],
						 'username' => $user[USER_USERNAME],
						 'status' => $user[USER_STATUS], 
						 ));
						 
						 

						/*
						 *Agregar Log access
						 */

						return TRUE;
					}

				} else {// fail - wrong password
					$this -> increase_login_attempt($user[USER_ID]);
					$this -> error = array('msg_error' => $this -> ci -> lang -> line('login_user_no_match_password'));
					return FALSE;
				}

			} else {
				$this -> error = array('msg_error' => $this -> ci -> lang -> line('login_user_no_match_password'));
				return FALSE;
			}
		}
		return FALSE;
	}

	function is_logged_in($user_id) {
		if ($this -> ci -> session -> userdata('user_id') == $user_id && $this -> ci -> session -> userdata('user_id') ) {
			return TRUE;
		} else {
			return FALSE;
		}
	}

	function logout() {

		$this -> ci -> session -> sess_destroy();
	}

	function get_error_message() {
		return $this -> error;
	}

	private function increase_login_attempt($user_id) {

		$data = array(LOGIN_ATTEMPT_IP_ADDRESS => $_SERVER['REMOTE_ADDR'], LOGIN_ATTEMPT_TIME => unix_to_human(time(), TRUE), LOGIN_ATTEMPT_USER => $user_id);

		$this -> ci -> login_attempt -> insert($data);
	}

}

/* End of file gpvalidation.php */
/* Location: ./application/libraries/gpvalidation.php */
