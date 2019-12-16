<?php 

	class Model_barang extends CI_Model {

		public function tampil_Data(){

			return $this->db->get('tb_barang');

		}

	}