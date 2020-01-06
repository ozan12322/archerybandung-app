<?php 

class Model_kategori extends CI_Model{
	public function data_busur(){
		return $this->db->get_where('tb_barang', array('kategori' => 'busur'));
	}
	public function data_panah(){
		return $this->db->get_where('tb_barang', array('kategori' => 'panah'));
	}
	public function data_asesoris(){
		return $this->db->get_where('tb_barang', array('kategori' => 'acc'));
	}
}