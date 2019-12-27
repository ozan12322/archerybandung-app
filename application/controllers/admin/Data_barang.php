<?php 

class Data_barang extends CI_Controller {

	public function index(){
		$data['barang'] = $this->Model_barang->tampil_data()->result();
		$this->load->view('templates_admin/header_admin');
		$this->load->view('templates_admin/sidebar_admin');
		$this->load->view('admin/data_barang', $data);
		$this->load->view('templates_admin/footer_admin');
	}
	public function tambah_aksi(){
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
}