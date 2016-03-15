<?php
if (!defined('BASEPATH'))
    exit('No direct script access allowed');
/**
 * @desc 	Model used to handle data on table "st_user"
 *
 * @author	Abner Tellez
 */
class User_model extends MY_Model {

    /**
     * Constructor
     */

    public $_table = USER_TABLE;
    public $primary_key = USER_ID;

    public function __construct() {

        parent::__construct();

        //Load Libraries
        $this->load->library('Validation', 'validation');

    }

    /**
     * Method used to generate key
     *
     * @param  user_id
     *
     */

    public function generate_key_password_by_id($user_id) {

        $data = array(
            USER_KEY_PASSWORD => md5(rand() . microtime()),
            USER_DATE_PASSWORD_MODIFIED => date('Y-m-d G:i:s'),
        );

        return parent::update($user_id, $data);

    }

    /**
     * Method used to change password
     *
     * @param   new_password
     *  @param  username
     *  @param  key
     */

    function reset_password($username, $new_password, $key) {

        $this->db->set(USER_PASSWORD, $new_password);
        $this->db->set(USER_KEY_PASSWORD, NULL);
        $this->db->set(USER_DATE_PASSWORD_MODIFIED, NULL);
        $this->db->where(USER_USERNAME, $username);
        $this->db->where(USER_KEY_PASSWORD, $key);
        $this->db->where('UNIX_TIMESTAMP(' . USER_DATE_PASSWORD_MODIFIED . ') >=', time() - $this->config->item('auth_expire_period'));
        $this->db->update($this->_table);
		
		
		if ($this->db->affected_rows() > 0) {
            return TRUE;
        } else {
            return FALSE;
        }

    }
   

    public function get_dropdown($dummy = FALSE){

        $this->db->select( USER_ID . ',' . USER_USERNAME )->from( USER_TABLE );
        
        $users = $this->db->get();
        $catalog = array();
        
        if(!$dummy){
            $catalog['none" selected="selected" disabled="disabled"'] = $this->lang->line('pa_select'); // Adds dummy   
        }else{
            $catalog['none" selected="selected" disabled="disabled"'] = $dummy; // Adds dummy
        }
        
        foreach ($users->result_array() as $user) {
            $catalog[$user[USER_ID]] = $user[USER_USERNAME];
        }
        
        return $catalog;

    }

    public function get_data_user_by_role($id_role){

        $results = $this->db->select( USER_ID . ',' . USER_USERNAME . ',' . USER_FIRST_NAME . ',' . USER_LAST_NAME)
                 ->from( USER_TABLE )
                 ->join( EMPLOYEE_TABLE, EMPLOYEE_USER . ' = ' . USER_ID , 'left' )
                 ->where( EMPLOYEE_ROLE , $id_role )->get();

         $catalog = array();

        foreach ($results->result_array() as $result) {
                    $catalog[ $result[USER_ID] ] = $result[USER_FIRST_NAME] . ' ' . $result[USER_LAST_NAME];
                }         

        return $catalog;

    }
    
    public function get_dropdown_by_role($id_role, $dummy = FALSE){
        
        $result = $this->db->select( USER_ID . ',' . USER_USERNAME )
                 ->from( USER_TABLE )
                 ->join( EMPLOYEE_TABLE, EMPLOYEE_USER . ' = ' . USER_ID  )
                 ->where( EMPLOYEE_ROLE , $id_role)->get();
                 
        $catalog = array();
        
        if(!$dummy){
            $catalog['none" selected="selected" disabled="disabled"'] = $this->lang->line('pa_select'); // Adds dummy   
        }else{
            $catalog['none" selected="selected" disabled="disabled"'] = $dummy; // Adds dummy
        }
        
        foreach ($result->result_array() as $user) {
            $catalog[$user[USER_ID]] = $user[USER_USERNAME];
        }
        
        return $catalog;
        
    }
	
	public function activate_user($username, $key) {

        $this->db->set(USER_STATUS, STATUS_ACTIVE);
		$this->db->set(USER_DATE_MODIFIED, unix_to_human(time(),TRUE));
        $this->db->set(USER_KEY_PASSWORD, NULL);
        $this->db->set(USER_DATE_PASSWORD_MODIFIED, NULL);
        $this->db->where(USER_USERNAME, $username);
        $this->db->where(USER_KEY_PASSWORD, $key);
        $this->db->where('UNIX_TIMESTAMP(' . USER_DATE_PASSWORD_MODIFIED . ') >=', time() - $this->config->item('auth_expire_period'));
        $this->db->update($this->_table);
		
		
		if ($this->db->affected_rows() > 0) {
            return TRUE;
        } else {
            return FALSE;
        }

    }

}

/* End of file User_model.php */
/* Location: ./application/models/backend/User_model.php */
