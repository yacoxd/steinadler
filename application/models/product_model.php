<?php
if (!defined('BASEPATH'))
	exit('No direct script access allowed');
/**
 * @desc 	Model used to handle data on table "st_page"
 *
 * @author	Abner Tellez
 */
class Product_model extends MY_Model {

	/**
	 * Constructor
	 */

	public $_table = PRODUCT_TABLE;
	public $primary_key = PRODUCT_ID;

	public function __construct() {

		parent::__construct();

	}

}
