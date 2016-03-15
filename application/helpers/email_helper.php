<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

/**
 * @descripcion: Helper used to define the language interface
 * @author: Abner Tellez
 */
 
 	function send_standar_email($view,$subject,$email, &$data)
	{
		$CI =& get_instance();
		
		$CI->load->library('email');
		
		$config['mailtype'] = 'html';
		$config['charset'] = 'utf-8';
        $CI->email->initialize($config);
		$CI->load->config('project-config');				
		
		$CI->email->from($CI->config->item('cms_email_info'), $CI->config->item('cms_email_from'));
		$CI->email->to($email);
		$CI->email->subject($subject);
		$CI->email->message($CI->load->view($view, $data,TRUE));
		$CI->email->send();
		
	} 
 
 
/* End of file define_language_helper.php */
/* Location: ./application/helpers/gp_language_helper.php */
