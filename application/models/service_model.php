<?php
if (!defined('BASEPATH'))
	exit('No direct script access allowed');
/**
 * @desc 	Model used to handle data on table "st_location"
 *
 * @author	Abner Tellez
 */
class Service_model extends MY_Model {

	/**
	 * Constructor
	 */

	public $_table = SERVICE_TABLE;
	public $primary_key = SERVICE_ID;

	public function __construct() {

		parent::__construct();

	}

}
