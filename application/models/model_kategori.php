<?php

class Model_kategori extends CI_Model{
	public function data_PS4(){
		return $this->db->get_where("produk",array('kategori' => 'PS 4'));
	}

	public function data_PC(){
		return $this->db->get_where("produk",array('kategori' => 'PC'));
	}

	public function data_xbox(){
		return $this->db->get_where("produk",array('kategori' => 'xbox'));
	}

	public function data_switch(){
		return $this->db->get_where("produk",array('kategori' => 'switch'));
	}

	
}