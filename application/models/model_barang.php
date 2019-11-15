<?php

class Model_barang extends CI_Model{
	public function tampil_data(){
		return $this->db->get('produk');
	}
	public function tampil_id($id){
		return $this->db->where('id_brg',$id)->get('produk')->row();
	}
}