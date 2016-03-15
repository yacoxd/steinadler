<?php
if (!defined('BASEPATH'))
	exit('No direct script access allowed');

class About_us extends CI_Controller {

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
		load_constant_file('new');

		set_language('admin');

		$this->load->model('page_model', 'page');
		$this->load->model('text_model', 'text');
		$this->load->model('new_model', 'new');

		//General Variables
		$this->user_id = $this->session->userdata('user_id');
		$this->username = $this->session->userdata('username');
		$this->la_id = $this->session->userdata('lang_id_admin');

		is_login($this->user_id);

		$this->page = new Page_model();
		$this->text = new Text_model();
		$this->new = new New_model();

	}

	public function index() {

		$page_where = array(
			PAGE_URL => ABOUT_US_PAGE,
			PAGE_LANGUAGE => $this->la_id,
		);

		$data['info_page'] = $this->page->get_by($page_where);
		$data['news'] = $this->new->order_by(NEW_DATE, 'DESC')->get_many_by(NEW_PAGE, $data['info_page'][PAGE_ID]);

		$text_where = array(TEXT_PAGE => $data['info_page'][PAGE_ID], );

		$data['text_info'] = $this->text->order_by(TEXT_ORDER, 'ASC')->get_many_by($text_where);

		//4dmin4dmin!

		if (!$this->input->post()) {

			//Vistas
			$data['header'] = 'admin/header';
			$data['content'] = 'admin/about_us';
			$data['footer'] = 'admin/footer';
			$data['active'] = 'about';

			$data['breadcrumb_lv1'] = '<span>About Us</span>';

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

			// text 1
			$text_where = array(
				TEXT_PAGE => $data['info_page'][PAGE_ID],
				TEXT_ORDER => 1
			);
			$text_update = array(TEXT_DESCRIPTION => @$text_1);
			$this->text->update_by($text_where, $text_update);

			// text 2
			$text_where = array(
				TEXT_PAGE => $data['info_page'][PAGE_ID],
				TEXT_ORDER => 2
			);
			$text_update = array(TEXT_DESCRIPTION => @$text_2);
			$this->text->update_by($text_where, $text_update);

			if ($this->page->update($data['info_page'][PAGE_ID], $data_update)) {
				$this->session->set_flashdata('message_pa', 'Información guardada exitosamente!');
				redirect($_SERVER["HTTP_REFERER"], 'location', 301);

			} else {
				$this->session->set_flashdata('message_pa_error', 'Ups! no fue posible guarda la información');
				redirect($_SERVER["HTTP_REFERER"], 'location', 301);
			}

		}

	}

	public function add_new() {

		$page_where = array(
			PAGE_URL => ABOUT_US_PAGE,
			PAGE_LANGUAGE => $this->la_id,
		);

		$data['info_page'] = $this->page->get_by($page_where);

		if (!$this->input->post()) {

			//Vistas
			$data['header'] = 'admin/header';
			$data['content'] = 'admin/new-ind';
			$data['footer'] = 'admin/footer';
			$data['active'] = 'about';

			$data['breadcrumb_lv1'] = anchor(base_url('admin/about-us'), 'About Us');
			$data['breadcrumb_lv2'] = '<span>Add New</span>';

			$this->load->view('template', $data);

		} else {

			extract($this->input->post());

			$data_insert = array(
				NEW_DESCRIPTION => @$name,
				NEW_DATE => date('Y-m-d', strtotime(@$date)),
				NEW_USER_CREATED => $this->username,
				NEW_DATE_CREATED => unix_to_human(time(), true),
				NEW_PAGE => $data['info_page'][PAGE_ID],
			);

			if ($this->new->insert($data_insert)) {
				$this->session->set_flashdata('message_pa', 'Información guardada exitosamente!');
				redirect(base_url('admin/about-us'), 'location', 301);

			} else {
				$this->session->set_flashdata('message_pa_error', 'Ups! no fue posible guarda la información');
				redirect($_SERVER["HTTP_REFERER"], 'location', 301);
			}
		}

	}

	public function edit_new() {

		$data['new'] = $this->new->get($this->uri->segment(4));

		if (!$data['new']) {
			redirect(base_url('admin/error'));
		}

		if (!$this->input->post()) {

			//Vistas
			$data['header'] = 'admin/header';
			$data['content'] = 'admin/new-ind';
			$data['footer'] = 'admin/footer';
			$data['active'] = 'about';

			$data['breadcrumb_lv1'] = anchor(base_url('admin/about-us'), 'About Us');
			$data['breadcrumb_lv2'] = '<span>Edit New</span>';

			$this->load->view('template', $data);

		} else {

			extract($this->input->post());

			$data_update = array(
				NEW_DESCRIPTION => @$name,
				NEW_DATE => date('Y-m-d', strtotime(@$date)),
				NEW_USER_CREATED => $this->username,
				NEW_DATE_CREATED => unix_to_human(time(), true),
			);

			if ($this->new->update($this->uri->segment(4), $data_update)) {
				$this->session->set_flashdata('message_pa', 'Información guardada exitosamente!');
				redirect($_SERVER["HTTP_REFERER"], 'location', 301);

			} else {
				$this->session->set_flashdata('message_pa_error', 'Ups! no fue posible guarda la información');
				redirect($_SERVER["HTTP_REFERER"], 'location', 301);
			}
		}

	}

	public function delete_new() {

		$data['new'] = $this->new->get($this->uri->segment(4));

		if (!$data['new']) {
			redirect(base_url('admin/error'));
		}

		if ($this->new->delete($this->uri->segment(4))) {
			$this->session->set_flashdata('message_pa', 'Información eliminada exitosamente!');
			redirect($_SERVER["HTTP_REFERER"], 'location', 301);

		} else {
			$this->session->set_flashdata('message_pa_error', 'Ups! no fue posible eliminar la información');
			redirect($_SERVER["HTTP_REFERER"], 'location', 301);
		}

	}

}
