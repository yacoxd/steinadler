<?php
if (!defined('BASEPATH'))
	exit('No direct script access allowed');

class Home extends CI_Controller {

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

		set_language('admin');

		$this->load->model('page_model', 'page');
		$this->load->model('text_model', 'text');

		//General Variables
		$this->user_id = $this->session->userdata('user_id');
		$this->username = $this->session->userdata('username');
		$this->la_id = $this->session->userdata('lang_id_admin');

		is_login($this->user_id);

		$this->page = new Page_model();
		$this->text = new Text_model();

	}

	public function index() {

		//Vistas
		$data['header'] = 'admin/header';
		$data['content'] = 'admin/home';
		$data['footer'] = 'admin/footer';
		
		

		$this->load->view('template', $data);

	}

	public function home_edit() {

		$page_where = array(
			PAGE_URL => HOME_PAGE,
			PAGE_LANGUAGE => $this->la_id,
		);

		$data['info_page'] = $this->page->get_by($page_where);

		$text_where = array(TEXT_PAGE => $data['info_page'][PAGE_ID], );

		$data['text_info'] = $this->text->order_by(TEXT_ORDER, 'ASC')->get_many_by($text_where);

		if (!$this->input->post()) {

			//Vistas
			$data['header'] = 'admin/header';
			$data['content'] = 'admin/home-view-edit';
			$data['footer'] = 'admin/footer';
			$data['active'] = 'home';
			
			$data['breadcrumb_lv1'] = '<span>Home</span>';

			$this->load->view('template', $data);

		}
		else {

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

			}
			else {
				$this->session->set_flashdata('message_pa_error', 'Ups! no fue posible guarda la información');
				redirect($_SERVER["HTTP_REFERER"], 'location', 301);
			}

		}

	}

}
