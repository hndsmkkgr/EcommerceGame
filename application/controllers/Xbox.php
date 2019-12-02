<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Xbox extends CI_Controller {

public function index(){
		$data['barang'] = $this->model_kategori->data_xbox()->result();
		$this->load->view('header');
		$this->load->view('xbox',$data);
		$this->load->view('footer');
	} 
public function keranjang($id)
	{
		$barang = $this->model_barang->find($id);
		
		$data = array(
        'id'      => $barang->id_brg,
        'qty'     => 1,
        'price'   => $barang->harga,
        'name'    => $barang->nama_brg
        
		);

		$this->cart->insert($data);
		//$insert = $this->load->view('header');
		redirect('Xbox');
	}
}	