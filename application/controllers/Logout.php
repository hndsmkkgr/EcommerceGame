<?php
class Logout extends CI_Controller {
	public function __construct()
	{
        parent:: __construct();  
    }
    
    public function index()
    {
        $this->session->isLoggedin = false;
        redirect(base_url('welcome'),'refresh');
    }

}

?>