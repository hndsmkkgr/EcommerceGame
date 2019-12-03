<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Detil extends CI_Controller {

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
		$data['konten']="detil";
		$this->load->view('detil',$data);
		$this->load->view('footer');
	}

}