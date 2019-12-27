<?php 

	class Model_barang extends CI_Model {

		public function tampil_Data(){

			return $this->db->get('tb_barang');

		}

		public function tambah_barang($data,$table)
		{
			$this->db->insert($table,$data);
		}

	}