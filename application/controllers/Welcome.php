<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {
	public function __construct()
		{
			parent:: __construct();
		}
	public function index()
	{
		$data['barang'] = $this->model_barang->tampil_data()->result();
		
		if($this->session->isLoggedin)
		{
			$this->load->view('header');
		}
		else
		{
			$this->load->view('header_guest');
        }
		$this->load->view('home', $data);
		$this->load->view('footer');

		//nama bebas             //nama fungsi
		// $data['dataGame'] = $this->Game->tampil_data()->result;
		// $data['dataGame'] = $this->Game->tampil_id()->result;
	}
}
?>