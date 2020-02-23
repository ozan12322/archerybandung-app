<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

	class Invoice extends CI_Controller{
		public function __construct(){
			parent::__construct();
			is_logged_in();
           $this->load->library('form_validation');
		}
		
		public function index(){
			$data['title'] = "Invoice";
			$data['user'] = $this->db->get_where('user', ['email' => 
			$this->session->userdata('email')])->row_array();
			$data['invoice'] = $this->Model_invoice->tampil_data();
			$this->load->view('templates_admin/header_admin');
			$this->load->view('templates_admin/sidebar_admin', $data);
			$this->load->view('admin/invoice', $data);
			$this->load->view('templates_admin/footer_admin');
		}

		public function detail($id){
			$data['title'] = "Detail Invoice";
			$data['user'] = $this->db->get_where('user', ['email' => 
			$this->session->userdata('email')])->row_array();
			$data['invoice'] = $this->Model_invoice->ambil_id_invoice($id);
			$data['pesanan'] = $this->Model_invoice->ambil_id_pesanan($id);

			$this->load->view('templates_admin/header_admin');
			$this->load->view('templates_admin/sidebar_admin', $data);
			$this->load->view('admin/detail_invoice', $data);
			$this->load->view('templates_admin/footer_admin');

		}
	}