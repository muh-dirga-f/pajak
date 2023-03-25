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
        $data['spt'] = [];
        $spt = $this->db->get('spt')->result_array();
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
        $this->load->view('admin/index', $data);
        $this->load->view('template/footer');
    }
    public function users_list()
    {
        $data = $this->db->get_where('users', ['id !=' => '1', 'status' => '0'])->result_array();
        echo json_encode($data);
    }
    public function users_verified()
    {
        $data = $this->db->get_where('users', ['id !=' => '1', 'status' => '1'])->result_array();
        echo json_encode($data);
    }
    public function verifikasi_user()
    {
        $id = $this->input->post('id');
        $update = $this->db->update('users', ['status' => '1'], ['id' => $id]);
        echo json_encode($update);
    }
    public function hapus_user()
    {
        $id = $this->input->post('id');
        $delete = $this->db->delete('users', ['id' => $id]);
        echo json_encode($delete);
    }
    public function hapus_spt_ss1770s()
    {
        $id_spt = $this->input->post('id_spt');
        $id_spt_lanjutan = $this->input->post('id_spt_lanjutan');
        $delete1 = $this->db->delete('spt', ['id_spt' => $id_spt]);
        $delete2 = $this->db->delete('spt_ss1770s', ['id_spt_ss1770s' => $id_spt_lanjutan]);
        echo json_encode($delete1);
    }
    public function hapus_spt_ss1770ss()
    {
        $id_spt = $this->input->post('id_spt');
        $id_spt_lanjutan = $this->input->post('id_spt_lanjutan');
        $delete1 = $this->db->delete('spt', ['id_spt' => $id_spt]);
        $delete2 = $this->db->delete('spt_ss1770ss', ['id_spt_ss1770ss' => $id_spt_lanjutan]);
        echo json_encode($delete1);
    }
}

/* End of file  home.php */
