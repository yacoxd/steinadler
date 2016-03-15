<?php
if (!defined('BASEPATH'))
	exit('No direct script access allowed');

/**
 * @descripcion: Helper used to define the language interface
 * @author: Abner Tellez
 */

function set_language($environment) {

	switch ($environment) {

		case 'frontend' :
			$lang_files = array(
				'frontend',
				'form_validation'
			);
			charge_language_files($lang_files, $environment);
			break;

		case 'admin' :
			$lang_files = array(
				'admin',
				'form_validation'
			);
			charge_language_files($lang_files, $environment);

			break;
	}

}

function charge_language_files($lang_files, $environment) {

	$CI = &get_instance();
	//$CI = $this

	if (!$CI->session->userdata('lang_name_' . $environment)) {
		//Load First language, model

		$CI->load->model('language_model', 'language');
		$languages = $CI->language->get_all();
		$CI->session->set_userdata(array(
			'lang_id_' . $environment => $languages[0]['lang_id'],
			'lang_name_' . $environment => $languages[0]['lang_sufix'],
			'lang_display_' . $environment => $languages[0]['lang_name'],
		));

	}

	foreach ($lang_files as $lang_file) {

		$CI->lang->load($lang_file, $CI->session->userdata('lang_name_' . $environment));

	}

}

/* End of file define_language_helper.php */
/* Location: ./application/helpers/gp_language_helper.php */
