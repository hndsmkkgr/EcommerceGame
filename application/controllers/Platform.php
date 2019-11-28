<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Platform extends CI_Controller {
	/*

	public function PC(){
		$data['barang'] = $this->model_kategori->data_PC()->result();
		$this->load->view('PS4',$data);
	} 
	
*/

	public function index(){
	$data['barang'] = $this->model_barang->tampil_data()->result();
		$this->load->view('header');
		$this->load->view('platforms',$data);
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
		redirect('platform');
	}

	public function detail_keranjang()
	{
		$this->load->view('header');
		$this->load->view('cart');
		$this->load->view('footer'); 
	}

	

	


}	