<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {
	
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

	

	



}
