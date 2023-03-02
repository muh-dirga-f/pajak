<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Login extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
    }
    public function index()
    {
        $this->load->view('template/header');
        $this->load->view('login');
        $this->load->view('template/footer');
    }
    public function login()
    {
        if($this->input->post()){
            $npwp = $this->input->post('npwp');
            $password = $this->input->post('password');
            $users = $this->db->get_where('users', ['npwp' => $npwp, 'password' => $password]);
            if($users->num_rows() > 0){
                $this->session->set_userdata('users',$users->result_array());
                echo json_encode(['users'=>$users->result_array(), 'status'=>true]);
            }else{
                echo json_encode(['status'=>false]);
            }
        }
    }
}
        
    /* End of file  login.php */
