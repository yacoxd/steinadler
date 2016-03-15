<?php
if (!defined('BASEPATH'))
	exit('No direct script access allowed');
/**
 * @desc 	Model used to handle data on table "st_new"
 *
 * @author	Abner Tellez
 */
class New_model extends MY_Model {

	/**
	 * Constructor
	 */

	public $_table = NEW_TABLE;
	public $primary_key = NEW_ID;

	public function __construct() {

		parent::__construct();

	}

}
