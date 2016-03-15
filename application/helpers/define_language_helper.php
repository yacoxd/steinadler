<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

/**
 * @descripcion: Helper used to define the language interface
 * @author: Eduardo De Leon 
 */
	function set_language(){ 
			$CI =& get_instance();	//$CI = $this	
		if ($CI->session->userdata('lang_name')){			
			//Always load those
			$CI->lang->load('messages',			$CI->session->userdata('lang_name'));
			$CI->lang->load('form_validation',	$CI->session->userdata('lang_name'));
			$CI->lang->load('support', 			$CI->session->userdata('lang_name'));		
			
			//Current Section
			$CI->lang->load('categories',		$CI->session->userdata('lang_name'));
			$CI->lang->load('sections',			$CI->session->userdata('lang_name'));
			$CI->lang->load('pages',			$CI->session->userdata('lang_name'));
			$CI->lang->load('components',		$CI->session->userdata('lang_name'));			
			$CI->lang->load('frontend',			$CI->session->userdata('lang_name'));	
			$CI->lang->load('backend',			$CI->session->userdata('lang_name'));	
			$CI->lang->load('adminitrator',			$CI->session->userdata('lang_name'));	
				
			
			
		} else {
			$CI->load->model('language_model', 			'languages');		
			$languages = $CI->languages->get_all_languages();			
			$CI->session->set_userdata(array('lang_id'  => $languages[0]->la_id, 'lang_name'  => $languages[0]->la_name));				
			
			//Always load those
			$CI->lang->load('messages',			$CI->session->userdata('lang_name'));
			$CI->lang->load('form_validation',	$CI->session->userdata('lang_name'));
			$CI->lang->load('support', 			$CI->session->userdata('lang_name'));					
			
			//Current Section
			$CI->lang->load('categories',		$CI->session->userdata('lang_name'));
			$CI->lang->load('sections',			$CI->session->userdata('lang_name'));
			$CI->lang->load('pages',			$CI->session->userdata('lang_name'));
			$CI->lang->load('components',		$CI->session->userdata('lang_name'));			
			$CI->lang->load('frontend',			$CI->session->userdata('lang_name'));
			$CI->lang->load('backend',			$CI->session->userdata('lang_name'));	
			$CI->lang->load('adminitrator',			$CI->session->userdata('lang_name'));	
						
			
		}
	}


/* End of file define_language_helper.php */
/* Location: ./application/helpers/define_language_helper.php */