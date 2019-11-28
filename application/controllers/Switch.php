<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Platform extends CI_Controller {

public function switch(){
		$data['barang'] = $this->model_kategori->data_switch()->result();
		$this->load->view('PS4',$data);
	} 
}