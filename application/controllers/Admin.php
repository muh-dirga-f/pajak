<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Admin extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        is_logged_in();
        if (!($this->session->userdata('user_data')[0]['level'] == 'admin')) redirect('login/logout', 'refresh');
    }
    public function index()
    {
        $data['user_data'] = $this->session->userdata('user_data');
        $this->load->view('template/header');
        $this->load->view('admin/index', $data);
        $this->load->view('template/footer');
    }
}

/* End of file  home.php */
