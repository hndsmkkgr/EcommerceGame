<?php

class Model_kategori extends CI_Model{
	public function data_PS4(){
		return $this->db->get_where("produk",array('kategori' => 'PS4'));
	}

	public function data_3DS(){
		return $this->db->get_where("produk",array('kategori' => '3DS'));
	}

	public function data_xbox(){
		return $this->db->get_where("produk",array('kategori' => 'XBOX'));
	}

	public function data_switch(){
		return $this->db->get_where("produk",array('kategori' => 'Switch'));
	}

	
}