<?php 

	class Archery_war extends CI_Controller {
		public function index(){
			$this->load->view('templates/header_archery_war');
			$this->load->view('archery_war/index');
			$this->load->view('templates/footer_archery_war');
		}
	}