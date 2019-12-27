<?php 

	class Toko extends CI_Controller {

		public function __construct()
		{
			parent::__construct();
			$this->load->model('Model_barang');
			$this->load->library('form_validation');
		}

		public function index()
		{
			$data['judul'] = 'One Archery Shop';
			$data['barang'] = $this->Model_barang->tampil_data()->result();

			$this->load->view('templates/header_toko', $data);
			$this->load->view('templates/sidebar_toko');
			$this->load->view('toko/index', $data);
			$this->load->view('templates/footer_toko');

		}
		public function product($id)
		{
			$data['judul'] = 'Detail Product';
			$data['barang'] = $this->Model_barang->getProductById($id);

			$this->load->view('templates/header_toko', $data);
			$this->load->view('templates/sidebar_toko');
			$this->load->view('toko/product', $data);
			$this->load->view('templates/footer_toko');
		}

	}