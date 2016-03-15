<?php
if (!defined('BASEPATH'))
	exit('No direct script access allowed');

class Products extends CI_Controller {

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
		load_constant_file('product');

		set_language('admin');

		$this->load->model('page_model', 'page');
		$this->load->model('text_model', 'text');
		$this->load->model('product_model', 'product');

		//General Variables
		$this->user_id = $this->session->userdata('user_id');
		$this->username = $this->session->userdata('username');
		$this->la_id = $this->session->userdata('lang_id_admin');

		is_login($this->user_id);

		$this->page = new Page_model();
		$this->text = new Text_model();
		$this->product = new Product_model();

	}

	public function products_edit() {

		$url = $this->uri->segment(2);

		switch($url) {
			case 'industrial' :
				$data['active'] = INDUSTRIAL_PAGE;
				$data['breadcrumb_lv1'] = '<span>Industrial</span>';
				$url = INDUSTRIAL_PAGE;
				break;

			case 'construction' :
				$data['active'] = CONSTRUCTION_PAGE;
				$data['breadcrumb_lv1'] = '<span>Construction</span>';
				$url = CONSTRUCTION_PAGE;
				break;

			case 'agribusiness' :
				$data['active'] = AGRIBUSINESS_PAGE;
				$data['breadcrumb_lv1'] = '<span>Agribusiness</span>';
				$url = AGRIBUSINESS_PAGE;
				break;

			default :
				$this->session->set_flashdata('message_pa_error', 'Ups! URL No existe!');
				redirect($_SERVER["HTTP_REFERER"], 'location', 301);
				break;
		}

		$page_where = array(
			PAGE_URL => $url,
			PAGE_LANGUAGE => $this->la_id,
		);

		$data['info_page'] = $this->page->get_by($page_where);

		$text_where = array(TEXT_PAGE => $data['info_page'][PAGE_ID], );

		$data['text_info'] = $this->text->order_by(TEXT_ORDER, 'ASC')->get_many_by($text_where);

		$data['products'] = $this->product->get_many_by(PRODUCT_PAGE, $data['info_page'][PAGE_ID]);

		if (!$this->input->post()) {

			//Vistas
			$data['header'] = 'admin/header';
			$data['content'] = 'admin/products-view-edit';
			$data['footer'] = 'admin/footer';

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

			// text 3
			$text_where = array(
				TEXT_PAGE => $data['info_page'][PAGE_ID],
				TEXT_ORDER => 3
			);
			$text_update = array(TEXT_DESCRIPTION => @$text_3);
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

	public function product_individual() {

		$url = $this->uri->segment(2);

		$data['product'] = $this->product->get($this->uri->segment(4));

		if (!$data['product']) {
			redirect(base_url('admin/error'));
		}

		switch($url) {
			case 'industrial' :
				$data['active'] = INDUSTRIAL_PAGE;
				$data['breadcrumb_lv1'] = anchor(base_url('admin/industrial'), 'Industrial');
				$data['breadcrumb_lv2'] = '<span>' . @$data['product'][PRODUCT_NAME] . '</span>';
				$url = INDUSTRIAL_PAGE;
				break;

			case 'construction' :
				$data['active'] = CONSTRUCTION_PAGE;
				$data['breadcrumb_lv1'] = anchor(base_url('admin/construction'), 'Construction');
				$data['breadcrumb_lv2'] = '<span>' . @$data['product'][PRODUCT_NAME] . '</span>';
				$url = CONSTRUCTION_PAGE;
				break;

			case 'agribusiness' :
				$data['active'] = AGRIBUSINESS_PAGE;
				$data['breadcrumb_lv1'] = anchor(base_url('admin/agribusiness'), 'Agribusiness');
				$data['breadcrumb_lv2'] = '<span>' . @$data['product'][PRODUCT_NAME] . '</span>';
				$url = AGRIBUSINESS_PAGE;
				break;

			default :
				$this->session->set_flashdata('message_pa_error', 'Ups! URL No existe!');
				redirect($_SERVER["HTTP_REFERER"], 'location', 301);
				break;
		}

		if (!$this->input->post()) {

			//Vistas
			$data['header'] = 'admin/header';
			$data['content'] = 'admin/products-individual-edit';
			$data['footer'] = 'admin/footer';

			$this->load->view('template', $data);

		} else {

			extract($this->input->post());

			$error = 0;

			if (strlen($_FILES['catalog']['name']) > 3) {

				$upload_file = upload_file($_FILES['catalog'], 'catalog', PATH_PRODUCTS_FILES, TYPE_FILE_SUPPORT);
				if (array_key_exists('error', $upload_file) || $upload_file == FALSE) {
					$error++;
				} else {

					$file_delete = PATH_PRODUCTS_FILES . '/' . $data['product'][PRODUCT_CATALOG];
					if (file_exists($file_delete) && $data['product'][PRODUCT_CATALOG] != '')
						unlink($file_delete);

					$catalog = $upload_file['file_name'];
					$this->product->update($data['product'][PRODUCT_ID], array(PRODUCT_CATALOG => $catalog));
				}
			}

			
			if (strlen($_FILES['image']['name']) > 3) {

				$upload_file = upload_file($_FILES['image'], 'image', PATH_PRODUCTS_FILES, TYPE_FILE_ONLY_IMAGES, false, false, false, array(
					150,
					150
				));
				if (array_key_exists('error', $upload_file) || $upload_file == FALSE) {
					$error++;
				} else {

					$file_delete = PATH_PRODUCTS_FILES . '/' . $data['product'][PRODUCT_IMAGE];
					if (file_exists($file_delete) && $data['product'][PRODUCT_IMAGE] != '')
						unlink($file_delete);

					$image_name = $upload_file['file_name'];
					$this->product->update($data['product'][PRODUCT_ID], array(PRODUCT_IMAGE => $image_name));
				}
			}

			$data_updated = array(
				PRODUCT_NAME => @$name,
				PRODUCT_DESCRIPTION => @$description,
				PRODUCT_TITLE_IMAGE => @$title,
				PRODUCT_ALT_IMAGE => @$alt,
				PRODUCT_USER_MODIFIED => $this->username,
				PRODUCT_DATE_MODIFIED => unix_to_human(time(), TRUE),
			);

			if ($this->product->update($data['product'][PRODUCT_ID], $data_updated) && $error === 0) {
				$this->session->set_flashdata('message_pa', 'Información guardada exitosamente!');
				redirect($_SERVER["HTTP_REFERER"], 'location', 301);

			} else {
				$this->session->set_flashdata('message_pa_error', 'Ups! no fue posible guarda la información, revisa la extensión de los archivos');
				redirect($_SERVER["HTTP_REFERER"], 'location', 301);
			}

		}

	}

}
