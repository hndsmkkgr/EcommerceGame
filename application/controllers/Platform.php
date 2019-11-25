<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {
	public function PS4(){
		$data['barang'] = $this->model_kategori->data_PS4()->result();
		$this->load->view('PS4',$data);

	} 

	public function PC(){
		$data['barang'] = $this->model_kategori->data_PC()->result();
		$this->load->view('PS4',$data);
	} 

	public function xbox(){
		$data['barang'] = $this->model_kategori->data_xbox()->result();
		$this->load->view('PS4',$data);
	} 

	public function switch(){
		$data['barang'] = $this->model_kategori->data_switch()->result();
		$this->load->view('PS4',$data);
	} 

	public function detil($id_brg){
		$this->load->model('model_barang');
		$data['tampil_detil']=$this->model_barang->tampil_id($id_brg);
		$data['konten']="detil";
		$this->load->view('detil',$data);
	}

	public function platform(){
	$data['barang'] = $this->model_barang->tampil_data()->result();
		$this->load->view('platforms',$data);

	}
}