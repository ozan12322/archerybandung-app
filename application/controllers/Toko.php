<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

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

		public function detail($id_brg)
		{
			$data['barang'] = $this->Model_barang->detail_brg($id_brg);
			$this->load->view('templates/header_detail');
			$this->load->view('templates/sidebar_toko');
			$this->load->view('toko/detail_brg', $data);
			$this->load->view('templates/footer_detail');
		}

		public function tambah_ke_keranjang($id)
		{
			$barang = $this->Model_barang->find($id);

			$data = array(
				'id' => $barang->id_brg,
				'qty' => 1,
				'price' => $barang->harga,
				'name' => $barang->nama_brg
			);

			$this->cart->insert($data);
			redirect('toko');
		}

		public function hapus_cart(){
			$this->cart->destroy();
			redirect('toko/index');
		}

		public function check_out(){
			if ($this->session->userdata('email')) {
             if ($this->form_validation->run() == FALSE)
                {
                  $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
                  $this->load->view('templates/header_checkout');
					$this->load->view('templates/sidebar_toko', $data);
					$this->load->view('toko/checkout', $data);
					$this->load->view('templates/footer_checkout');
                }
                else
                {
                 $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
                 $is_processed = $this->Model_invoice->index();
                 if ($is_processed) {
                  $this->cart->destroy();
                  $this->load->view('templates/header_checkout');
					$this->load->view('templates/sidebar_toko', $data);
					$this->load->view('toko/checkout', $data);
					$this->load->view('templates/footer_checkout');
                  
                   }else {
                  echo "Maat pesananan anda gagal diproses";
                  }
                }
             
        } else {
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">please, login before you pay your produk !</div>');
              redirect('auth');
        }

		}

		public function proses_checkout(){
			$is_processed = $this->Model_invoice->index();
			if($is_processed){
			$this->cart->destroy();
			$this->load->view('templates/header_checkout');
			$this->load->view('templates/sidebar_toko');
			$this->load->view('toko/proses_checkout');
			$this->load->view('templates/footer_checkout');
			}else{
				echo "Maaf, Pesanan Anda Gagal diproses!";
			}
		}

		public function cari()
		{
			$data['judul'] = 'One Archery Shop';
			$data['barang'] = $this->Model_barang->cariDataProduk();
			$this->load->view('templates/header_toko', $data);
			$this->load->view('templates/sidebar_toko');
			$this->load->view('toko/index', $data);
			$this->load->view('templates/footer_toko');
			
		}

	}