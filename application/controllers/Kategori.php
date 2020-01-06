<?php 

class Kategori extends CI_Controller{
	public function busur(){
		$data['busur'] = $this->Model_kategori->data_busur()->result();

		$this->load->view('templates/header_kategori');
		$this->load->view('templates/sidebar_toko');
		$this->load->view('toko/kategori_busur', $data);
		$this->load->view('templates/footer_kategori');
	}
	public function panah(){
		$data['panah'] = $this->Model_kategori->data_panah()->result();

		$this->load->view('templates/header_kategori');
		$this->load->view('templates/sidebar_toko');
		$this->load->view('toko/kategori_panah', $data);
		$this->load->view('templates/footer_kategori');
	}
	public function asesoris(){
		$data['asesoris'] = $this->Model_kategori->data_asesoris()->result();

		$this->load->view('templates/header_kategori');
		$this->load->view('templates/sidebar_toko');
		$this->load->view('toko/kategori_asesoris', $data);
		$this->load->view('templates/footer_kategori');
	}

}