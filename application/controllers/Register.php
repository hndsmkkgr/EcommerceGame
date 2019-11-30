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

        $this->accountExist($email, $password, $name, $newUser);
    }

    //kalo udh punya akun tapi daftar lagi
    public function accountExist($email, $password, $name, $newUser)
    {
        $this->db->where('e-mail',$email);
        $dataUser = $this->db->get('user')->row_array();

        if($dataUser > 0)
        {
            echo "<script>
                alert('This email is already registered! Please use another email!');
            </script>";
        }
        else
        {            
            $this->User->register($newUser);
        }
        redirect(base_url('welcome'),'refresh');
    }
}
?>