<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Xbox extends CI_Controller {

//ini juga jangan
public function index(){
		$data['barang'] = $this->model_kategori->data_xbox()->result();
		if($this->session->isLoggedin)
		{
			$this->load->view('header');
		}
		else
		{
			$this->load->view('header_guest');
        }
		$this->load->view('Xbox',$data);
		$this->load->view('footer');
	} 


//ini jangan dirubah
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
		redirect('Xbox');
	}
}	