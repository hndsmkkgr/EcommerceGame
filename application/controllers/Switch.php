<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Switch extends CI_Controller {

public function index(){
		$data['barang'] = $this->model_kategori->data_switch()->result();
		if($this->session->isLoggedin)
		{
			$this->load->view('header');
		}
		else
		{
			$this->load->view('header_guest');
        }
		$this->load->view('switch',$data);
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
		redirect('Switch');
	}
}	