<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class PS4 extends CI_Controller {


public function index(){
		$data['barang'] = $this->model_kategori->data_PS4()->result();
		$this->load->view('PS4',$data);

	} 

}