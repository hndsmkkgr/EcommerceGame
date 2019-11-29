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

    public function loginUser()
    {
        $password = $this->input->post('psw');
        $email = $this->input->post('email');

        $user = $this->user->loginUser($email, $password);

        if($user > 0){
            $this->load->view('header');
            $this->load->view('home');
            $this->load->view('footer');   
        }
        else
        {
        }
    }
}
?>