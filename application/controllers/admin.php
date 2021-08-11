<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Admin extends CI_Controller
{

    public function index()
    {
        $data['title'] = 'Dashboard';
        $data['user'] = $this->db->get_where('user', ['email' =>
        $this->session->userdata('email')])->row_array();

        $this->load->view('admin/index', $data);
    }
    public function profile()
    {
        $this->load->model('ProfileModel', 'profilemodel');

        $data['allprofile'] = $this->profilemodel->get_all_data_profile();
        $data['title'] = "Daftar Profile";

        $this->load->view('admin/profile', $data);
    }
    public function create_profile()
    {
        $data['title'] = "Tambah Profile";

        $this->load->view('admin/create_profile', $data);
    }
    public function simpanprofile()
    {
        $data = [
            'nama' => $this->input->post('nama'),
            'tgl_lahir' => $this->input->post('tgl_lahir'),
            'jenis_kelamin' => $this->input->post('jenis_kelamin'),
            'alamat' => $this->input->post('alamat'),
        ];
        $this->db->insert('profile', $data);

        $this->session->set_flashdata('message', '<div class="alert alert-success alert-dismissible fade show" role="alert">
		<strong>Berhasil!</strong>Data profile sudah ditambahkan.
		<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
	  </div>');

        redirect('admin/profile');
    }

    public function edit_profile($profile_id)
    {
        $data['title'] = "Edit Profile";
        $data['profile'] = $this->db->get_where('profile', ['profile_id' => $profile_id])->row_array();

        $this->load->view('admin/edit_profile', $data);
    }
    public function editprofile()
    {

        $this->db->set('nama', $this->input->post('nama'));
        $this->db->set('tgl_lahir', $this->input->post('tgl_lahir'));
        $this->db->set('jenis_kelamin', $this->input->post('jenis_kelamin'));
        $this->db->set('alamat', $this->input->post('alamat'));
        $this->db->where('profile_id', $this->input->post('profile_id'));
        $this->db->update('profile');

        $this->session->set_flashdata('message', '<div class="alert alert-success alert-dismissible fade show" role="alert">
		<strong>Berhasil!</strong>Data profile sudah di edit.
		<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
	  </div>');

        redirect('admin/profile');
    }

    public function hapus($profile_id)
    {

        $this->db->where('profile_id', $profile_id);
        $this->db->delete('profile');

        $this->session->set_flashdata('message', '<div class="alert alert-success alert-dismissible fade show" role="alert">
		<strong>Berhasil!</strong>Data profile sudah dihapus.
		<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
	  </div>');

        redirect('admin/profile');
    }
    //pendidikan
    public function pendidikan()
    {
        $this->load->model('PendidikanModel', 'pendidikanmodel');

        $data['allpendidikan'] = $this->pendidikanmodel->get_all_data_pendidikan();
        $data['title'] = "Daftar Pendidikan";

        $this->load->view('admin/pendidikan', $data);
    }
    public function create_pendidikan()
    {
        $data['title'] = "Tambah Pendidikan";

        $this->load->view('admin/create_pendidikan', $data);
    }
    public function simpanpendidikan()
    {
        $data = [
            'tahun' => $this->input->post('tahun'),
            'nama_instansi' => $this->input->post('nama_instansi'),
        ];
        $this->db->insert('pendidikan', $data);

        $this->session->set_flashdata('message', '<div class="alert alert-success alert-dismissible fade show" role="alert">
		<strong>Berhasil!</strong>Data pendidikan sudah ditambahkan.
		<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
	  </div>');

        redirect('admin/pendidikan');
    }

    public function edit_pendidikan($pendidikan_id)
    {
        $data['title'] = "Edit Pendidikan";
        $data['pendidikan'] = $this->db->get_where('pendidikan', ['pendidikan_id' => $pendidikan_id])->row_array();

        $this->load->view('admin/edit_pendidikan', $data);
    }
    public function editpendidikan()
    {

        $this->db->set('tahun', $this->input->post('tahun'));
        $this->db->set('nama_instansi', $this->input->post('nama_instansi'));
        $this->db->where('pendidikan_id', $this->input->post('pendidikan_id'));
        $this->db->update('pendidikan');

        $this->session->set_flashdata('message', '<div class="alert alert-success alert-dismissible fade show" role="alert">
		<strong>Berhasil!</strong>Data pendidikan sudah di edit.
		<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
	  </div>');

        redirect('admin/pendidikan');
    }

    public function hapuspendidikan($pendidikan_id)
    {

        $this->db->where('pendidikan_id', $pendidikan_id);
        $this->db->delete('pendidikan');

        $this->session->set_flashdata('message', '<div class="alert alert-success alert-dismissible fade show" role="alert">
		<strong>Berhasil!</strong>Data pendidikan sudah dihapus.
		<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
	  </div>');

        redirect('admin/pendidikan');
    }
    //pekerjaan
    public function pekerjaan()
    {
        $this->load->model('PekerjaanModel', 'pekerjaanmodel');

        $data['allpekerjaan'] = $this->pekerjaanmodel->get_all_data_pekerjaan();
        $data['title'] = "Daftar pekerjaan";

        $this->load->view('admin/pekerjaan', $data);
    }
    public function create_pekerjaan()
    {
        $data['title'] = "Tambah pekerjaan";

        $this->load->view('admin/create_pekerjaan', $data);
    }
    public function simpanpekerjaan()
    {
        $data = [
            'tahun' => $this->input->post('tahun'),
            'nama_perusahaan' => $this->input->post('nama_perusahaan'),
            'status' => $this->input->post('status'),
        ];
        $this->db->insert('pekerjaan', $data);

        $this->session->set_flashdata('message', '<div class="alert alert-success alert-dismissible fade show" role="alert">
		<strong>Berhasil!</strong>Data pekerjaan sudah ditambahkan.
		<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
	  </div>');

        redirect('admin/pekerjaan');
    }

    public function edit_pekerjaan($pekerjaan_id)
    {
        $data['title'] = "Edit pekerjaan";
        $data['pekerjaan'] = $this->db->get_where('pekerjaan', ['pekerjaan_id' => $pekerjaan_id])->row_array();

        $this->load->view('admin/edit_pekerjaan', $data);
    }
    public function editpekerjaan()
    {

        $this->db->set('tahun', $this->input->post('tahun'));
        $this->db->set('nama_perusahaan', $this->input->post('nama_perusahaan'));
        $this->db->set('status', $this->input->post('status'));
        $this->db->where('pekerjaan_id', $this->input->post('pekerjaan_id'));
        $this->db->update('pekerjaan');

        $this->session->set_flashdata('message', '<div class="alert alert-success alert-dismissible fade show" role="alert">
		<strong>Berhasil!</strong>Data pekerjaan sudah di edit.
		<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
	  </div>');

        redirect('admin/pekerjaan');
    }

    public function hapuspekerjaan($pekerjaan_id)
    {

        $this->db->where('pekerjaan_id', $pekerjaan_id);
        $this->db->delete('pekerjaan');

        $this->session->set_flashdata('message', '<div class="alert alert-success alert-dismissible fade show" role="alert">
		<strong>Berhasil!</strong>Data pekerjaan sudah dihapus.
		<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
	  </div>');

        redirect('admin/pekerjaan');
    }
    //keahlian
    public function keahlian()
    {
        $this->load->model('KeahlianModel', 'keahlianmodel');

        $data['allkeahlian'] = $this->keahlianmodel->get_all_data_keahlian();
        $data['title'] = "Daftar keahlian";

        $this->load->view('admin/keahlian', $data);
    }
    public function create_keahlian()
    {
        $data['title'] = "Tambah keahlian";

        $this->load->view('admin/create_keahlian', $data);
    }
    public function simpankeahlian()
    {
        $data = [
            'nama_keahlian' => $this->input->post('nama_keahlian'),
        ];
        $this->db->insert('keahlian', $data);

        $this->session->set_flashdata('message', '<div class="alert alert-success alert-dismissible fade show" role="alert">
		<strong>Berhasil!</strong>Data keahlian sudah ditambahkan.
		<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
	  </div>');

        redirect('admin/keahlian');
    }

    public function edit_keahlian($keahlian_id)
    {
        $data['title'] = "Edit keahlian";
        $data['keahlian'] = $this->db->get_where('keahlian', ['keahlian_id' => $keahlian_id])->row_array();

        $this->load->view('admin/edit_keahlian', $data);
    }
    public function editkeahlian()
    {

        $this->db->set('nama_keahlian', $this->input->post('nama_keahlian'));
        $this->db->where('keahlian_id', $this->input->post('keahlian_id'));
        $this->db->update('keahlian');

        $this->session->set_flashdata('message', '<div class="alert alert-success alert-dismissible fade show" role="alert">
		<strong>Berhasil!</strong>Data keahlian sudah di edit.
		<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
	  </div>');

        redirect('admin/keahlian');
    }

    public function hapuskeahlian($keahlian_id)
    {

        $this->db->where('keahlian_id', $keahlian_id);
        $this->db->delete('keahlian');

        $this->session->set_flashdata('message', '<div class="alert alert-success alert-dismissible fade show" role="alert">
		<strong>Berhasil!</strong>Data keahlian sudah dihapus.
		<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
	  </div>');

        redirect('admin/keahlian');
    }
    //kontak
    public function kontak()
    {
        $this->load->model('KontakModel', 'kontakmodel');

        $data['allkontak'] = $this->kontakmodel->get_all_data_kontak();
        $data['title'] = "Daftar kontak";

        $this->load->view('admin/kontak', $data);
    }
    public function create_kontak()
    {
        $data['title'] = "Tambah kontak";

        $this->load->view('admin/create_kontak', $data);
    }
    public function simpankontak()
    {
        $data = [
            'no_tlp' => $this->input->post('no_tlp'),
            'email' => $this->input->post('email'),
        ];
        $this->db->insert('kontak', $data);

        $this->session->set_flashdata('message', '<div class="alert alert-success alert-dismissible fade show" role="alert">
		<strong>Berhasil!</strong>Data kontak sudah ditambahkan.
		<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
	  </div>');

        redirect('admin/kontak');
    }

    public function edit_kontak($kontak_id)
    {
        $data['title'] = "Edit kontak";
        $data['kontak'] = $this->db->get_where('kontak', ['kontak_id' => $kontak_id])->row_array();

        $this->load->view('admin/edit_kontak', $data);
    }
    public function editkontak()
    {

        $this->db->set('no_tlp', $this->input->post('no_tlp'));
        $this->db->set('email', $this->input->post('email'));
        $this->db->where('kontak_id', $this->input->post('kontak_id'));
        $this->db->update('kontak');

        $this->session->set_flashdata('message', '<div class="alert alert-success alert-dismissible fade show" role="alert">
		<strong>Berhasil!</strong>Data kontak sudah di edit.
		<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
	  </div>');

        redirect('admin/kontak');
    }

    public function hapuskontak($kontak_id)
    {

        $this->db->where('kontak_id', $kontak_id);
        $this->db->delete('kontak');

        $this->session->set_flashdata('message', '<div class="alert alert-success alert-dismissible fade show" role="alert">
		<strong>Berhasil!</strong>Data kontak sudah dihapus.
		<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
	  </div>');

        redirect('admin/kontak');
    }
}
