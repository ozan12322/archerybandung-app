<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

	class My_profile extends CI_Controller {
		public function __construct(){
			parent::__construct();
			is_logged_in();
           $this->load->library('form_validation');
		}
		
		public function index(){
			$data['user'] = $this->db->get_where('user', ['email' => 
			$this->session->userdata('email')])->row_array();
			$data['title'] = "My Profile";
			$this->load->view('templates_admin/header_admin');
			$this->load->view('templates_admin/sidebar_admin', $data);
			$this->load->view('admin/profile', $data);
			$this->load->view('templates_admin/footer_admin');
		}
	}


