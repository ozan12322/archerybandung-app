<?php 

	class Dashboard extends CI_Controller {

		public function index(){

			$data['barang'] = $this->Model_barang->tampil_data()->result();

			$this->load->view('templates/header2');
			$this->load->view('templates/sidebar2');
			$this->load->view('dashboard/dashboard', $data);
			$this->load->view('templates/footer2');

		}

	}