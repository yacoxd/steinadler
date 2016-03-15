<?php if (!defined('BASEPATH')) exit('No direct script access allowed');
/**
 * @desc 	Model used to handle data on table "gp_language"
 * 
 * @author	Abner Tellez
 */
 
 
class Language_model extends MY_Model {

/**
 * Constructor
 */
 
 	public $_table = 'st_language';
	public $primary_key = 'lang_id';
	
	
	public function __construct() {

		parent::__construct();		
		
	}
	
	public function get_language_ids(){
		
		$this->db->select('lang_id');
		$query = $this->db->get('st_language');
		
		if($query){
			return $query->result();
		}else{
			return FALSE;
		}
	}
	
}



/* End of file language_model.php */
/* Location: ./application/models/cms/language_model.php */
