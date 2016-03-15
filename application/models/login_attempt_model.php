<?php
if (!defined('BASEPATH'))
    exit('No direct script access allowed');
/**
 * @desc 	Model used to handle data on table ""
 *
 * @author	Abner Tellez
 */
class Login_attempt_model extends MY_Model {

    /**
     * Constructor
     */

    public $_table = LOGIN_ATTEMPT_TABLE;
    public $primary_key = LOGIN_ATTEMPT_ID;

    public function __construct() {

        parent::__construct();

    }

    function exceed_login_attempts($user_id) {

        $this->db->where(LOGIN_ATTEMPT_USER, $user_id);
        $this->db->where('UNIX_TIMESTAMP(' . LOGIN_ATTEMPT_TIME . ') >=', time() - 300);
        $query = $this->db->get($this->_table);

        if ($query->num_rows() >= 3 ) {
            return TRUE;
        } else {
            return FALSE;
        }

    }

}

/* End of file Login_attempt_model.php */
/* Location: ./application/models/backend/Login_attempt_model.php */
