<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Keranjang extends CI_Controller {

		public function index(){
			$this->load->view('header');
		$data['barang'] = $this->model_barang->tampil_data()->result();
		
		$this->load->view('platforms',$data);
		$this->load->view('footer');
	}

}