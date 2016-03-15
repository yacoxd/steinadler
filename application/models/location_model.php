<?php
if (!defined('BASEPATH'))
	exit('No direct script access allowed');
/**
 * @desc 	Model used to handle data on table "st_location"
 *
 * @author	Abner Tellez
 */
class Location_model extends MY_Model {

	/**
	 * Constructor
	 */

	public $_table = LOCATION_TABLE;
	public $primary_key = LOCATION_ID;

	public function __construct() {

		parent::__construct();

	}

}
