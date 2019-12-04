<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Account extends CI_Controller {
	public function __construct()
		{
			parent:: __construct();
			$this->load->model('user');
		}
	public function index()
	{	
		$this->load->view('header');
		$this->load->view('account_personal');
		$this->load->view('footer');

		// $email = $this->input->post('email');
	}
}
?>