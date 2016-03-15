<?php
if (!defined('BASEPATH'))
	exit('No direct script access allowed');

class Locations extends CI_Controller {

	/*
	 *
	 * Admin Cotroller
	 * Author Abner Tellez
	 *
	 *
	 * */

	public function __construct() {

		parent::__construct();

		load_constant_file('url');
		load_constant_file('page');
		load_constant_file('text');
		load_constant_file('location');

		set_language('admin');

		$this->load->model('page_model', 'page');
		$this->load->model('text_model', 'text');
		$this->load->model('location_model', 'location');

		//General Variables
		$this->user_id = $this->session->userdata('user_id');
		$this->username = $this->session->userdata('username');
		$this->la_id = $this->session->userdata('lang_id_admin');

		is_login($this->user_id);

		$this->page = new Page_model();
		$this->text = new Text_model();
		$this->location = new Location_model();

	}

	public function index() {

		$page_where = array(
			PAGE_URL => LOCATIONS_PAGE,
			PAGE_LANGUAGE => $this->la_id,
		);

		$data['info_page'] = $this->page->get_by($page_where);

		$data['locations'] = $this->location->get_many_by(LOCATION_PAGE, $data['info_page'][PAGE_ID]);

		$text_where = array(TEXT_PAGE => $data['info_page'][PAGE_ID], );

		$data['text_info'] = $this->text->order_by(TEXT_ORDER, 'ASC')->get_many_by($text_where);

		if (!$this->input->post()) {

			//Vistas
			$data['header'] = 'admin/header';
			$data['content'] = 'admin/locations';
			$data['footer'] = 'admin/footer';
			$data['active'] = 'locations';

			$data['breadcrumb_lv1'] = '<span>Locations</span>';

			$this->load->view('template', $data);

		} else {

			extract($this->input->post());

			$data_update = array(
				PAGE_TITLE => @$page_title,
				PAGE_TAGS => @$page_tags,
				PAGE_DESCRIPTION => @$page_description,
				PAGE_USER_MODIFIED => $this->username,
				PAGE_DATE_MODIFIED => unix_to_human(time(), TRUE),
			);

			if ($this->page->update($data['info_page'][PAGE_ID], $data_update)) {
				$this->session->set_flashdata('message_pa', 'Información guardada exitosamente!');
				redirect($_SERVER["HTTP_REFERER"], 'location', 301);

			} else {
				$this->session->set_flashdata('message_pa_error', 'Ups! no fue posible guarda la información');
				redirect($_SERVER["HTTP_REFERER"], 'location', 301);
			}

		}

	}

	public function edit_location_ind() {

		$data['location'] = $this->location->get($this->uri->segment(4));

		if (!$data['location']) {
			redirect(base_url('admin/error'));
		}

		if (!$this->input->post()) {

			$data['breadcrumb_lv1'] = anchor(base_url('admin/locations'), 'Locations');
			$data['breadcrumb_lv2'] = '<span>' . @$data['location'][LOCATION_NAME] . '</span>';

			//Vistas
			$data['header'] = 'admin/header';
			$data['content'] = 'admin/location-individual-edit';
			$data['footer'] = 'admin/footer';

			$this->load->view('template', $data);

		} else {

			extract($this->input->post());

			$data_updated = array(
				LOCATION_NAME => @$name,
				LOCATION_ADDRESS => @$address, 
				LOCATION_PHONE1 => @$phone1,
				LOCATION_PHONE2 => @$phone2,
				LOCATION_EMAIL1 => @$email1,
				LOCATION_EMAIL2 => @$email2,
				LOCATION_USER_MODIFIED => $this->username,
				LOCATION_DATE_MODIFIED => unix_to_human(time(), TRUE),
			);

			if ($this->location->update($data['location'][LOCATION_ID], $data_updated)) {
				$this->session->set_flashdata('message_pa', 'Información guardada exitosamente!');
				redirect($_SERVER["HTTP_REFERER"], 'location', 301);

			} else {
				$this->session->set_flashdata('message_pa_error', 'Ups! no fue posible guarda la información, revisa la extensión de los archivos');
				redirect($_SERVER["HTTP_REFERER"], 'location', 301);
			}

		}

	}

}
