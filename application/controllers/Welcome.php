<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {
	public function __construct()
		{
			parent:: __construct();
		}
	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
		$this->load->view('home');
	}

	public function about()
	{
		// fungsi untuk me-load view about.php
		$this->load->view('about');
	}

	public function contact()
	{
		// fungsi untuk me-load view about.php
		$this->load->view('contact');
	}
	
	public function cart()
	{
		// fungsi untuk me-load view about.php
		$this->load->view('cart');
	}

	public function header()
	{
		$this->load->view('header');
	}

	public function PS4(){
		$data['barang'] = $this->model_kategori->data_PS4()->result();
		$this->load->view('PS4',$data);

	} 

	public function PC(){
		$data['barang'] = $this->model_kategori->data_PC()->result();
		//$this->load->view('template_view/header');
		//$this->load->view('template_view/footer');
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
		$this->load->view('PS4',$data);

	}

	



}
