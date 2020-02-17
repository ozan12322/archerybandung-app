<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

	class Home extends CI_Controller {
		public function index($nama = '')
		{
			$this->load->view('templates/header1');
			$this->load->view('home/index');
			$this->load->view('templates/footer1');
		}
	}