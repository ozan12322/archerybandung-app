<?php 

	class Dashboard_admin extends CI_Controller {
		public function index(){
			$data['barang'] = $this->Model_barang->tampil_data()->result();	
			$this->load->view('templates_admin/header_admin');
			$this->load->view('templates_admin/sidebar_admin');
			$this->load->view('admin/dashboard', $data);
			$this->load->view('templates_admin/footer_admin');
		}
	}


