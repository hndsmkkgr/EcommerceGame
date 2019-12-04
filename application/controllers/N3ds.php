<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class N3ds extends CI_Controller {

public function index(){
		$data['barang'] = $this->model_kategori->data_3DS()->result();
		if($this->session->isLoggedin)
		{
			$this->load->view('header');
		}
		else
		{
			$this->load->view('header_guest');
        }
		$this->load->view('n3ds',$data);
		$this->load->view('footer');
	} 
}	