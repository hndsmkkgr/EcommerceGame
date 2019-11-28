<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Xbox extends CI_Controller {

public function index(){
		$data['barang'] = $this->model_kategori->data_xbox()->result();
		$this->load->view('PS4',$data);
	} 
}	