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
        if ($this->input->post()) {
            $npwp = $this->input->post('npwp');
            $password = $this->input->post('password');
            $users = $this->db->get_where('users', ['npwp' => $npwp, 'password' => $password]);
            if ($users->num_rows() > 0) {
                if ($users->result_array()[0]['status'] == 1) {
                    $this->session->set_userdata('user_data', $users->result_array());
                    echo json_encode(['user_data' => $users->result_array(), 'status' => true]);
                } else if ($users->result_array()[0]['status'] == 0) {
                    echo json_encode(['status' => false, 'pesan' => 'registrasi belum dikonfirmasi admin!']);
                } else {
                    echo json_encode(['status' => false, 'pesan' => 'registrasi ditolak admin!']);
                }
            } else {
                echo json_encode(['status' => false, 'pesan' => 'npwp atau password salah!']);
            }
        }
    }
    public function logout()
    {
        $CI = &get_instance();
        $CI->session->sess_destroy();
        redirect('login', 'refresh');
    }
}
/* End of file  login.php */