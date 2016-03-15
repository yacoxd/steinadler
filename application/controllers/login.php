<?php
if (!defined('BASEPATH'))
	exit('No direct script access allowed');

class Login extends CI_Controller {

	/*
	 *
	 * Admin Cotroller
	 * Author Abner Tellez
	 *
	 *
	 * */

	public function __construct() {

		parent::__construct();

		//Libraries

		$this -> load -> library('validation');
		$this -> load -> helper('recaptcha_helper');

		//Config
		$this -> load -> config('project-config', TRUE);

		//Model
		$this -> load -> model('user_model', 'users');

		//borrar
		$this -> users = new User_model;

	}

	public function index() {
		
		if($this->session->userdata('user_id')){
			redirect(base_url() .'admin/home');
		}

		$this -> form_validation -> set_rules('user', strtolower($this -> lang -> line('login_user_usuario')), 'trim|xss_clean|required');
		$this -> form_validation -> set_rules('pass', strtolower($this -> lang -> line('login_user_password')), 'trim|xss_clean|required');

		if ($this -> form_validation -> run() == FALSE) {
			$this -> load -> view('login/login');
		} else {
			extract($this -> input -> post());

			if ($this -> validation -> login($user, $pass)) {

		
						redirect(base_url() .'admin/home');
					
				

			} else {
				$error = $this -> validation -> get_error_message();

				$where_user = array(USER_USERNAME => $user, USER_STATUS => STATUS_INACTIVE);

				$user = $this -> users -> get_by($where_user);

				//Send again activate email
				if ($user) {

					$data_key = array(USER_KEY_PASSWORD => md5(rand() . microtime()), USER_DATE_PASSWORD_MODIFIED => unix_to_human(time(), TRUE), );

					$this -> users -> update($user[USER_ID], $data_key);

					$data = array('user_id' => $user[USER_ID], 'username' => $user[USER_USERNAME], 'email' => $user[USER_EMAIL], 'pwd_url' => base_url() . $this -> lang -> line('login_active_url') . '/' . $user[USER_USERNAME] . '/' . $data_key[USER_KEY_PASSWORD], );

					send_standar_email('email/activate_email', $this -> lang -> line('auth_subject_activate_account'), $user[USER_EMAIL], $data);

				}

				$this -> session -> set_flashdata('message_login', '<li>' . $error['msg_error'] . '</li>');
				redirect($_SERVER["HTTP_REFERER"], 'location', 301);
			}

		}

	}

	public function logout() {
		$this -> validation -> logout();
		redirect(base_url() . 'login');

	}

	public function forgot_password() {
		
		if($this->session->userdata('user_id')){
			redirect(base_url() .'admin/home');
		}

		$this -> form_validation -> set_rules('email', 'email', 'required|trim|xss_clean|valid_email');

		if ($this -> form_validation -> run() == FALSE) {
			$this -> load -> view('login/forgot_password');
		} else {
			extract($this -> input -> post());

			$user = $this -> users -> get_by(array(USER_EMAIL => $email));

			if ($user) {
				$data_key = array(USER_KEY_PASSWORD => md5(rand() . microtime()), USER_DATE_PASSWORD_MODIFIED => unix_to_human(time(), TRUE), );

				$this -> users -> update($user[USER_ID], $data_key);

				$data = array('user_id' => $user[USER_ID], 'username' => $user[USER_USERNAME], 'email' => $user[USER_EMAIL], 'pass_key' => $data_key[USER_KEY_PASSWORD], 'pwd_url' => base_url() . $this -> lang -> line('login_reset_password_url') . '/' . $user[USER_USERNAME] . '/' . $data_key[USER_KEY_PASSWORD], );

				send_standar_email('email/forgot_password_email', $this -> lang -> line('auth_subject_forgot_password'), $user[USER_EMAIL], $data);

				$this -> session -> set_flashdata('message_login', $this -> lang -> line('login_success_forgot_password'));
				redirect(base_url($this -> lang -> line('login_information_url')), 'location', 301);

			} else {
				$this -> session -> set_flashdata('message_login', $this -> lang -> line('login_error_forgot_password'));
				redirect(base_url($this -> lang -> line('login_information_url')), 'location', 301);
			}

		}

	}

	public function reset_password() {
		
		if($this->session->userdata('user_id')){
			redirect(base_url() .'admin/home');
		}

		$this -> form_validation -> set_rules('password', strtolower($this -> lang -> line('login_user_password')), 'trim|required|xss_clean|matches[password_confirm]|min_length[6]');
		$this -> form_validation -> set_rules('password_confirm', strtolower($this -> lang -> line('login_confirm_password')), 'trim|required|xss_clean');

		if ($this -> form_validation -> run() == FALSE) {

			$this -> load -> view('login/reset_password');

		} else {
			extract($this -> input -> post());
			$username = $this -> uri -> segment(3);
			$key = $this -> uri -> segment(4);
			$pwd = $this -> validation -> create_password($password);

			if ($this -> users -> reset_password($username, $pwd, $key)) {

				$user = $this -> users -> get_by(array(USER_USERNAME => $username));

				$data = array('email' => $user[USER_EMAIL], 'username' => $user[USER_USERNAME], );

				send_standar_email('email/reset_password_email', $this -> lang -> line('email_title_reset_password'), $user[USER_EMAIL], $data);

				$this -> session -> set_flashdata('message_login', $this -> lang -> line('login_success_reset_password'));
				redirect(base_url($this -> lang -> line('login_information_url')), 'location', 301);

			} else {
				$this -> session -> set_flashdata('message_login', $this -> lang -> line('login_error_reset_password'));
				redirect(base_url($this -> lang -> line('login_information_url')), 'location', 301);
			}

		}

	}

	public function view_message() {
		
		if($this->session->userdata('user_id')){
			redirect(base_url() .'admin/home');
		}

		if ($this -> session -> flashdata('message_login')) {
			$this -> load -> view('login/message');
		} else {
			redirect(base_url() . 'login');
		}
	}

}

/* End of file admin.php */
/* Location: ./application/controllers/plataforma_administrativa/admin.php */
