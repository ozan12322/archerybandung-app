<?php 

	class Contact extends CI_Controller {
		public function index(){

			$this->load->view('templates/header_contact');
			$this->load->view('templates/sidebar_toko');
			$this->load->view('toko/contact');
			$this->load->view('templates/footer_contact');

		}
	}