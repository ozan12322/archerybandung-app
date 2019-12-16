<?php 

	class Home extends CI_Controller {
		public function index($nama = '')
		{
			$this->load->view('templates/header1');
			$this->load->view('home/index');
			$this->load->view('templates/footer1');
		}
	}