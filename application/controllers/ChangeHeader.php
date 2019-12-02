<?php

class ChangeHeader extends CI_Controller {
	public function __construct()
	{
        parent:: __construct(); 
    }
    
    public function index()
    {
        if($this->session->isLoggedin)
		{
			$this->load->view('header');
		}
		else
		{
			$this->load->view('header_guest');
        }
    }

}

?>