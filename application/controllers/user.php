<?php
defined('BASEPATH') or exit('No direct script access allowed');

class User extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('ProfileModel');
        $this->load->model('PendidikanModel');
        $this->load->model('PekerjaanModel');
        $this->load->model('KeahlianModel');
        $this->load->model('KontakModel');
    }

    public function index()
    {
        $data['title'] = 'Home';
        $data['user'] = $this->db->get_where('user', ['email' =>
        $this->session->userdata('email')])->row_array();

        $this->load->view('user/index', $data);
    }
    public function education()
    {
        $data['title'] = 'Riwayat Pendidikan';

        $data['list_pendidikan'] = $this->PendidikanModel->list_get_pendidikan();

        $this->load->view('user/education', $data, FALSE);
    }
    public function skill()
    {
        $data['title'] = 'Skills';

        $data['list_keahlian'] = $this->KeahlianModel->list_get_keahlian();

        $this->load->view('user/skill', $data, FALSE);
    }
    public function pekerjaan()
    {
        $data['title'] = 'Experience';

        $data['list_pekerjaan'] = $this->PekerjaanModel->list_get_pekerjaan();

        $this->load->view('user/pekerjaan', $data, FALSE);
    }
    public function profile()
    {
        $data['title'] = 'Profile';

        $data['list_profile'] = $this->ProfileModel->list_get_profile();

        $this->load->view('user/profile', $data, FALSE);
    }
    public function kontak()
    {
        $data['title'] = 'Kontak';

        $data['list_kontak'] = $this->KontakModel->list_get_kontak();

        $this->load->view('user/kontak', $data, FALSE);
    }
}
