<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Data_barang extends CI_Controller {
	public function __construct(){
		parent::__construct();
		is_logged_in();
           $this->load->library('form_validation');
	}

	public function index(){
		$data['title'] = "Data Barang";
		$data['user'] = $this->db->get_where('user', ['email' => 
		$this->session->userdata('email')])->row_array();
		$data['barang'] = $this->Model_barang->tampil_data()->result();
		$this->load->view('templates_admin/header_admin');
		$this->load->view('templates_admin/sidebar_admin',$data);
		$this->load->view('admin/data_barang', $data);
		$this->load->view('templates_admin/footer_admin');
	}
	public function tambah_aksi(){
			$data['user'] = $this->db->get_where('user', ['email' => 
			$this->session->userdata('email')])->row_array();
		$nama_brg = $this->input->post('nama_brg');
		$keterangan = $this->input->post('keterangan');
		$kategori = $this->input->post('kategori');
		$harga = $this->input->post('harga');
		$stok = $this->input->post('stok');
		$gambar = $_FILES['gambar']['name'];
		if($gambar = ''){

		}else{ 
			$config ['upload_path'] = './uploads';
			$config ['allowed_types'] = 'jpg|jpeg|png|gif';

			$this->load->library('upload', $config);
			if(!$this->upload->do_upload('gambar')){
				echo "Gambar gagal di upload";
			}else{
				$gambar = $this->upload->data('file_name');
			}
		}
			$data = array(
				'nama_brg' => $nama_brg,
				'keterangan' => $keterangan,
				'kategori' => $kategori,
				'harga' => $harga,
				'stok' => $stok,
				'gambar' => $gambar
			);

			$this->Model_barang->tambah_barang($data, 'tb_barang');
			$this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Data barang berhasil ditambah!</div>');
			redirect('admin/data_barang/index');
		}

		public function edit($id){
			$data['title'] = "Edit Data Barang";
			$data['user'] = $this->db->get_where('user', ['email' => 
			$this->session->userdata('email')])->row_array();
			$where = array('id_brg' => $id);
			$data['barang'] = $this->Model_barang->edit_barang($where, 'tb_barang')->result();
			$this->load->view('templates_admin/header_admin');
			$this->load->view('templates_admin/sidebar_admin', $data);
			$this->load->view('admin/edit_barang', $data);
			$this->load->view('templates_admin/footer_admin');
		}

		public function update(){
			$data['user'] = $this->db->get_where('user', ['email' => 
			$this->session->userdata('email')])->row_array();
			$id = $this->input->post('id_brg');
			$nama_brg = $this->input->post('nama_brg');
			$keterangan = $this->input->post('keterangan');
			$kategori = $this->input->post('kategori');
			$harga = $this->input->post('harga');
			$stok = $this->input->post('stok');

			$data = array(
				'nama_brg' => $nama_brg,
				'keterangan' => $keterangan,
				'kategori' => $kategori,
				'harga' => $harga,
				'stok' => $stok
			);

			$where = array(
				'id_brg' => $id
			);

			$this->Model_barang->update_data($where,$data, 'tb_barang');
			redirect('admin/data_barang/index');
		}

		public function hapus($id){
			$data['user'] = $this->db->get_where('user', ['email' => 
			$this->session->userdata('email')])->row_array();
			$where = array('id_brg' => $id);
			$this->Model_barang->hapus_data($where, 'tb_barang');
			redirect('admin/data_barang/index');
		}

		public function detail($id_brg){
			$data['title'] = "Detail Barang";
			$data['user'] = $this->db->get_where('user', ['email' => 
			$this->session->userdata('email')])->row_array();

			$data['barang'] = $this->Model_barang->detail_brg($id_brg);
			$this->load->view('templates_admin/header_admin');
			$this->load->view('templates_admin/sidebar_admin', $data);
			$this->load->view('admin/detail_brg', $data);
			$this->load->view('templates_admin/footer_admin');
		}

}