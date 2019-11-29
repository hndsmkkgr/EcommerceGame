<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {
	public function __construct()
		{
			parent:: __construct();
		}
	public function index()
	{
		// if($account = guest)
		// {
			$this->load->view('header_guest');
		// }
		// else
		// {

		// 	$this->load->view('header');
		// }
		$this->load->view('home'/*, $data*/);
		$this->load->view('footer');
		// $data['barang'] = $this->model_kategori->data_xbox;
		// $data['barang'] = $this->model_kategori->data_ps4;
		// $data['barang'] = $this->model_kategori->data_pc;
		// $data['barang'] = $this->model_kategori->data_switch;
		// $data['barang'] = $this->model_kategori->data_3ds;

				//nama bebas             //nama fungsi
		// $data['dataGame'] = $this->Game->tampil_data()->result;
		// $data['dataGame'] = $this->Game->tampil_id()->result;
	}
}
?>