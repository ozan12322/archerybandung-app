<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

	class Invoice extends CI_Controller{
		public function index(){
			$data['invoice'] = $this->Model_invoice->tampil_data();
			$this->load->view('templates_admin/header_admin');
			$this->load->view('templates_admin/sidebar_admin');
			$this->load->view('admin/invoice', $data);
			$this->load->view('templates_admin/footer_admin');
		}

		public function detail($id){
			$data['invoice'] = $this->Model_invoice->ambil_id_invoice($id);
			$data['pesanan'] = $this->Model_invoice->ambil_id_pesanan($id);

			$this->load->view('templates_admin/header_admin');
			$this->load->view('templates_admin/sidebar_admin');
			$this->load->view('admin/detail_invoice', $data);
			$this->load->view('templates_admin/footer_admin');

		}
	}