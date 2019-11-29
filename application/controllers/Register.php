<?php

class Register extends CI_Controller {
	public function __construct()
	{
        parent:: __construct();
        $this->load->model('User');
    }

    public function index()
    {
        $data['error'] = $this->error;
    }
        
	public function registerUser()
	{
        $name = $this->input->post('name');
        $password = $this->input->post('psw');
        $email = $this->input->post('email');

        $newUser = array(
            'name' => $name,
            'e-mail' => $email,
            'password' => $password
        );      

        $this->User->register($newUser);
        $this->load->view('header');
        $this->load->view('home');
        $this->load->view('footer');

    }
}
?>