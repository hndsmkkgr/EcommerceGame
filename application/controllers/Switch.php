<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Switch extends CI_Controller {

public function index(){
		$data['barang'] = $this->model_kategori->data_switch()->result();
		$this->load->view('header');
		$this->load->view('PS4',$data);
		$this->load->view('footer');
	} 
}	