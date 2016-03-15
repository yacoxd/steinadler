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
		load_constant_file('new');
		load_constant_file('product');
		load_constant_file('location');
		load_constant_file('service');

		set_language('frontend');

		$this->load->helper('language');

		$this->load->model('page_model', 'page');
		$this->load->model('text_model', 'text');
		$this->load->model('new_model', 'new');
		$this->load->model('product_model', 'product');
		$this->load->model('location_model', 'location');
		$this->load->model('service_model', 'service');

		$this->la_id = $this->session->userdata('lang_id_frontend');

		$this->page = new Page_model();
		$this->text = new Text_model();
		$this->new = new New_model();
		$this->product = new Product_model();
		$this->location = new Location_model();
		$this->service = new Service_model();

	}

	public function index() {

		//Vistas
		$data['header'] = 'frontend/header';
		$data['content'] = 'frontend/home';
		$data['footer'] = 'frontend/footer';

		$data['page_type'] = $data['page_id'] = HOME_PAGE;

		$page_where = array(
			PAGE_URL => HOME_PAGE,
			PAGE_LANGUAGE => $this->la_id,
		);

		$data['info_page'] = $this->page->get_by($page_where);

		$text_where = array(TEXT_PAGE => $data['info_page'][PAGE_ID], );

		$data['text_info'] = $this->text->order_by(TEXT_ORDER, 'ASC')->get_many_by($text_where);

		$data['page_title'] = $this->lang->line('pt_page_title_home');

		$this->load->view('template', $data);

	}

	public function product() {

		$data['page_type'] = 'construction';

		switch ($this->uri->segment(1)) {
			case 'construction' :
				$data['page_id'] = CONSTRUCTION_PAGE;

				$page_where = array(
					PAGE_URL => CONSTRUCTION_PAGE,
					PAGE_LANGUAGE => $this->la_id,
				);

				$data['icon'] = 'construction-logo.png';

				break;

			case 'industrial' :
				$data['page_id'] = INDUSTRIAL_PAGE;

				$page_where = array(
					PAGE_URL => INDUSTRIAL_PAGE,
					PAGE_LANGUAGE => $this->la_id,
				);

				$data['icon'] = 'industrial-logo.png';

				break;

			case 'agribussines' :
				$data['page_id'] = AGRIBUSINESS_PAGE;

				$page_where = array(
					PAGE_URL => AGRIBUSINESS_PAGE,
					PAGE_LANGUAGE => $this->la_id,
				);

				$data['icon'] = 'agribusiness-logo.png';

				break;

			default :
				break;
		}

		//Vistas
		$data['header'] = 'frontend/header';
		$data['content'] = 'frontend/construction';
		$data['footer'] = 'frontend/footer';

		$data['info_page'] = $this->page->get_by($page_where);
		$data['page_title'] = $data['info_page'][PAGE_TITLE];

		$text_where = array(TEXT_PAGE => $data['info_page'][PAGE_ID], );

		$data['text_info'] = $this->text->order_by(TEXT_ORDER, 'ASC')->get_many_by($text_where);

		$data['products'] = $this->product->get_many_by(PRODUCT_PAGE, $data['info_page'][PAGE_ID]);

		$this->load->view('template', $data);

	}

	public function contact() {

		$page_where = array(
			PAGE_URL => LOCATIONS_PAGE,
			PAGE_LANGUAGE => $this->la_id,
		);

		$data['info_page'] = $this->page->get_by($page_where);
		$data['page_title'] = $data['info_page'][PAGE_TITLE];
		$data['locations'] = $this->location->get_many_by(LOCATION_PAGE, $data['info_page'][PAGE_ID]);

		$text_where = array(TEXT_PAGE => $data['info_page'][PAGE_ID], );

		$data['text_info'] = $this->text->order_by(TEXT_ORDER, 'ASC')->get_many_by($text_where);

		if (!$this->input->post()) {
			//Vistas
			$data['header'] = 'frontend/header';
			$data['content'] = 'frontend/contact';
			$data['footer'] = 'frontend/footer';

			$data['page_type'] = $data['page_id'] = LOCATIONS_PAGE;

			$this->load->view('template', $data);

		} else {

			$data['company'] = $this->input->post('name');
			$data['country'] = $this->input->post('country');
			$data['email'] = $this->input->post('email');
			$data['message'] = $this->input->post('message');

			send_standar_email('email/contact', 'Contact', $this->config->item('cms_email_info'), $data);

			redirect($_SERVER["HTTP_REFERER"], 'location', 301);

		}

	}

	public function about_us() {

		$page_where = array(
			PAGE_URL => ABOUT_US_PAGE,
			PAGE_LANGUAGE => $this->la_id,
		);

		$data['info_page'] = $this->page->get_by($page_where);
		$data['page_title'] = $data['info_page'][PAGE_TITLE];

		$text_where = array(TEXT_PAGE => $data['info_page'][PAGE_ID], );

		$data['text_info'] = $this->text->order_by(TEXT_ORDER, 'ASC')->get_many_by($text_where);
		$data['news'] = $this->new->order_by(NEW_DATE, 'ASC')->get_many_by(NEW_PAGE, $data['info_page'][PAGE_ID]);

		//Vistas
		$data['header'] = 'frontend/header';
		$data['content'] = 'frontend/about_us';
		$data['footer'] = 'frontend/footer';

		$data['page_type'] = $data['page_id'] = ABOUT_US_PAGE;

		$this->load->view('template', $data);

	}

	public function services() {
		
		$data['page_type'] = 'construction';

		$data['page_id'] = SERVICES_PAGE;

		$page_where = array(
			PAGE_URL => SERVICES_PAGE,
			PAGE_LANGUAGE => $this->la_id,
		);

		
		//Vistas
		$data['header'] = 'frontend/header';
		$data['content'] = 'frontend/services';
		$data['footer'] = 'frontend/footer';

		$data['info_page'] = $this->page->get_by($page_where);
		$data['page_title'] = $data['info_page'][PAGE_TITLE];

		$text_where = array(TEXT_PAGE => $data['info_page'][PAGE_ID], );

		$data['text_info'] = $this->text->order_by(TEXT_ORDER, 'ASC')->get_many_by($text_where);

		$data['services'] = $this->service->get_many_by(SERVICE_PAGE, $data['info_page'][PAGE_ID]);

		$this->load->view('template', $data);

	}

}
