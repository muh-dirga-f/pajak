<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Siswa extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        is_logged_in();
        if (!($this->session->userdata('user_data')[0]['level'] == 'siswa')) redirect('login/logout', 'refresh');
    }
    public function index()
    {
        $data['user_data'] = $this->session->userdata('user_data');
        $this->load->view('template/header');
        $this->load->view('siswa/index', $data);
        $this->load->view('template/footer');
    }
    public function spt()
    {
        if ($this->input->post()) {
            $data['tahun_pajak'] = $this->input->post('tahun');
            $data['penghasilan'] = $this->input->post('penghasilan');
            $data['penghasilan_tidak_kena_pajak'] = $this->input->post('penghasilanTidakKenaPajak');
            $data['penghasilan_terpotong'] = $this->input->post('penghasilanTerpotong');
            $data['total_pajak'] = $this->input->post('totalPajak');
            $data['total_harta'] = $this->input->post('totalHarta');
            $data['total_utang'] = $this->input->post('totalUtang');

            $dataspt['jenis_spt'] = $this->input->post('jenisSPT');
            $dataspt['id_user'] = $this->input->post('id_user');

            if ($dataspt['jenis_spt'] == "SPT1770S") {
                $this->db->insert('spt_ss1770s', $data);
                $insert_id = $this->db->insert_id();
                $dataspt['id_spt_lanjutan'] = $insert_id;
                $this->db->insert('spt', $dataspt);
            }

            if ($dataspt['jenis_spt'] == "SPT1770SS") {
                $this->db->insert('spt_ss1770ss', $data);
                $insert_id = $this->db->insert_id();
                $dataspt['id_spt_lanjutan'] = $insert_id;
                $this->db->insert('spt', $dataspt);
            }

            if ($dataspt['jenis_spt'] == "FILE") {
                $this->db->insert('spt_ss1770s', $data);
                $insert_id = $this->db->insert_id();
                $dataspt['id_spt_lanjutan'] = $insert_id;
                $this->db->insert('spt', $dataspt);
            }

            echo json_encode(['status' => true, 'pesan' => 'data berhasil disimpan']);
        } else {
            $data['id_user'] = $this->session->get_userdata('user_data')['user_data'][0]['id'];
            $data['spt'] = [];
            $spt = $this->db->get_where('spt', ['id_user' => $data['id_user']])->result_array();
            foreach ($spt as $key => $value) {
                if ($value['jenis_spt'] == 'SPT1770S') {
                    $res = $this->db->get_where('spt_ss1770s', ['id_spt_ss1770s' => $value['id_spt_lanjutan']])->result_array();
                    array_push($data['spt'], array_merge($value, $res[0]));
                }
                if ($value['jenis_spt'] == 'SPT1770SS') {
                    $res = $this->db->get_where('spt_ss1770ss', ['id_spt_ss1770ss' => $value['id_spt_lanjutan']])->result_array();
                    array_push($data['spt'], array_merge($value, $res[0]));
                }
            }
            $data['spt'] = json_encode($data['spt']);
            $this->load->view('template/header');
            $this->load->view('siswa/spt', $data);
            $this->load->view('template/footer');
        }
    }
}

/* End of file  home.php */
