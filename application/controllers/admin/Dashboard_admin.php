<?php 

	class Dashboard_admin extends CI_Controller {
		public function index(){
			$this->load->view('templates_admin/header_admin');
			$this->load->view('templates_admin/sidebar_admin');
			$this->load->view('admin/dashboard');
			$this->load->view('templates_admin/footer_admin');
		}
	}


