<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Product extends CI_Controller {

public function index($id_brg){
		$this->load->model('model_barang');
		if($this->session->isLoggedin)
		{
			$this->load->view('header');
		}
		else
		{
			$this->load->view('header_guest');
        }
		$data['tampil_detil']=$this->model_barang->tampil_id($id_brg);
		$data['konten']="product";
		$this->load->view('product',$data);
		$this->load->view('footer');
	}

public function keranjang($id)
	{
		$this->cekLogin();

		$barang = $this->model_barang->find($id);
		
		$data = array(
        'id'      => $barang->id_brg,
        'qty'     => 1,
        'price'   => $barang->harga,
        'name'    => $barang->nama_brg,
        'kategori'=> $barang->kategori,
        'stock' => $barang->stok
        
		);

		$this->cart->insert($data);

		// var_dump($this->session); die();
		//$insert = $this->load->view('header');
		redirect('Product/index/');
	}

	public function detail_keranjang()
	{
		if($this->session->isLoggedin)
		{
			$this->load->view('header');
		}
		else
		{
			$this->load->view('header_guest');
        }
		$this->load->view('cart');
		$this->load->view('footer'); 
	}

    public function cekLogin()
    {
		if($this->session->isLoggedin == false)
		{
			echo "<script>
                alert('Please log in before purchasing');
			</script>";
			redirect(base_url('welcome'),'refresh');
		}
    }



}