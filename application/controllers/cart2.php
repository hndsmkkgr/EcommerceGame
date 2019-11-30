<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Cart2 extends CI_Controller {

public function index()
	{
		$this->load->view('header');
		$this->load->view('cart2');
		$this->load->view('footer'); 
	}
}