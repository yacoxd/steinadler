<?php
if (!defined('BASEPATH'))
	exit('No direct script access allowed');

class Lang extends CI_Controller {

	/*
	 *
	 * Generator Cotroller
	 * Author Abner Tellez
	 *
	 *
	 * */

	public function __construct() {

		parent::__construct();

		//Models
		$this->load->model('language_model', 'language');
		$this->language = new Language_model;

	}

	public function index() {

		$section_change = $this->uri->segment(2);
		$lang_id = $this->uri->segment(3);

		$language_change = $this->language->get($lang_id);

		switch ($section_change) {
			case 'admin' :
				$this->session->set_userdata(array(
					'lang_id_' . $section_change => $language_change['lang_id'],
					'lang_name_' . $section_change => $language_change['lang_sufix'],
					'lang_display_' . $section_change => $language_change['lang_name']
				));
				redirect($_SERVER["HTTP_REFERER"], 'refresh', 301);
				break;

			case 'frontend' :
				$this->session->set_userdata(array(
					'lang_id_' . $section_change => $language_change['lang_id'],
					'lang_name_' . $section_change => $language_change['lang_sufix'],
					'lang_display_' . $section_change => $language_change['lang_name']
				));
				redirect($_SERVER["HTTP_REFERER"], 'refresh', 301);
				break;

			default :
				break;
		}

	}

}

/* End of file generator.php */
/* Location: ./application/controllers/ */
