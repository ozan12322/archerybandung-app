<?php 

	class Invoice extends CI_Controller{
		public function index(){
			$data['invoice'] = $this->Model_invoice->tampil_data();
			$this->load->view('templates_admin/header_admin');
			$this->load->view('templates_admin/sidebar_admin');
			$this->load->view('admin/invoice', $data);
			$this->load->view('templates_admin/footer_admin');
		}
	}