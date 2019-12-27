<?php 

	class Product extends CI_Controller {
		public function index($id){
			$data['barang'] = $this->Model_barang->tampil_data()->result();

			$this->load->view('templates/header_toko');
			$this->load->view('templates/sidebar_toko');
			$this->load->view('toko/product', $data);
			$this->load->view('templates/footer_toko');

		}
	}