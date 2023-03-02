<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Siswa extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
    }
    public function index()
    {
        $this->load->view('template/header');
        $this->load->view('siswa/index');
        $this->load->view('template/footer');
    }
    public function spt()
    {
        if ($this->input->post()) {
            $data['tahun'] = $this->input->post('tahun');
            $data['penghasilan'] = $this->input->post('penghasilan');
            $data['penghasilanTidakKenaPajak'] = $this->input->post('penghasilanTidakKenaPajak');
            $data['penghasilanTerpotong'] = $this->input->post('penghasilanTerpotong');
            $data['totalPajak'] = $this->input->post('totalPajak');
            $data['totalHarta'] = $this->input->post('totalHarta');
            $data['totalUtang'] = $this->input->post('totalUtang');
            $data['jenisSPT'] = $this->input->post('jenisSPT');
            print_r($data);
            die();
        } else {
            $this->load->view('template/header');
            $this->load->view('siswa/spt');
            $this->load->view('template/footer');
        }
    }
}

/* End of file  home.php */
