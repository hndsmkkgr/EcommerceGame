<?php

class Model_barang extends CI_Model{
	public function tampil_data(){
		return $this->db->get('produk');
	}
	public function tampil_id($id){
		return $this->db->where('id_brg',$id)->get('produk')->row();
	}

	public function find($id)
	{
		$result = $this->db->where('id_brg', $id)
						   ->limit(1)
						   ->get('produk');

		if ($result->num_rows() > 0)
		{
			return $result->row();
		}else{
			return array();
		}


	}
}