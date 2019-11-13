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

}
