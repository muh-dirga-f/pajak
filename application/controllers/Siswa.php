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
            $data_spt['id_spt'] = null;
            $data_spt['id_user'] = $this->input->post('id_user');
            $data_spt['jenis_spt'] = $this->input->post('jenisSPT');
            $data_formulir['id_spt_ss1770s'] = null;
            $data_formulir['tahun_pajak'] = $this->input->post('tahun');
            $data_formulir['penghasilan'] = $this->input->post('penghasilan');
            $data_formulir['penghasilan_tidak_kena_pajak'] = $this->input->post('penghasilanTidakKenaPajak');
            $data_formulir['penghasilan_terpotong'] = $this->input->post('penghasilanTerpotong');
            $data_formulir['total_pajak'] = $this->input->post('totalPajak');
            $data_formulir['total_harta'] = $this->input->post('totalHarta');
            $data_formulir['total_utang'] = $this->input->post('totalUtang');
            if($data_spt['jenis_spt'] == "SPT1770S") {
                $this->db->insert('spt_ss1770s', $data_formulir);
                $data_spt['id_spt_lanjutan'] = $this->db->insert_id();
                $this->db->insert('spt', $data_spt);
                $result = ['status'=>true, 'pesan'=>'data tersimpan'];
                echo json_encode($result);
            }
        } else {
            $this->load->view('template/header');
            $this->load->view('siswa/spt');
            $this->load->view('template/footer');
        }
    }
}

/* End of file  home.php */
