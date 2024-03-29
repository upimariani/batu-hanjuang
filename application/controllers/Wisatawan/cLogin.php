<?php
defined('BASEPATH') or exit('No direct script access allowed');

class cLogin extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		$this->load->model('mLogin');
	}


	public function index()
	{
		$this->form_validation->set_rules('username', 'Username', 'required');
		$this->form_validation->set_rules('password', 'Password', 'required');
		$this->form_validation->set_rules('hak_akses', 'Hak Akses', 'required');

		if ($this->form_validation->run() == FALSE) {
			$this->load->view('Wisatawan/Layouts/head');
			$this->load->view('Wisatawan/Layouts/header');
			$this->load->view('Wisatawan/vLogin');
			$this->load->view('Wisatawan/Layouts/footer');
		} else {
			$hak_akses = $this->input->post('hak_akses');
			$username = $this->input->post('username');
			$password = $this->input->post('password');

			if ($hak_akses == '1') {
				$data_cek = $this->mLogin->login_wisatawan($username, $password);
				if ($data_cek) {
					$id = $data_cek->id_wisatawan;
					$level_member = $data_cek->level_member;
					$nama = $data_cek->nama_wisatawan;

					$array = array(
						'id_wisatawan' => $id,
						'level' => $level_member,
						'nama' => $nama
					);

					$this->session->set_userdata($array);
					redirect('Wisatawan/cHome', 'refresh');
				} else {
					$this->session->set_flashdata('error', 'Username dan Password Anda Salah!!!');
					redirect('Wisatawan/cLogin', 'refresh');
				}
			} else {
				$data_cek = $this->mLogin->login($username, $password);
				if ($data_cek) {
					$level = $data_cek->level_user;
					$id = $data_cek->id_user;

					$array = array(
						'id' => $id
					);

					$this->session->set_userdata($array);

					if ($level == '1') {
						redirect('Admin/cDashboard', 'refresh');
					} else {
						redirect('Pengelola/cDashboard', 'refresh');
					}
				} else {
					$this->session->set_flashdata('error', 'Username dan Password Anda Salah!!!');
					redirect('Wisatawan/cLogin', 'refresh');
				}
			}
		}
	}
	public function registrasi()
	{
		$this->form_validation->set_rules('nama', 'Nama Wisatawan', 'required');
		$this->form_validation->set_rules('alamat', 'Alamat', 'required');
		$this->form_validation->set_rules('tgl', 'Tanggal Lahir', 'required');
		$this->form_validation->set_rules('jk', 'Jenis Kelamin', 'required');
		$this->form_validation->set_rules('username', 'Username', 'required');
		$this->form_validation->set_rules('password', 'Password', 'required');
		$this->form_validation->set_rules('tlpon', 'No Telepon', 'required|min_length[11]|max_length[12]');


		if ($this->form_validation->run() == FALSE) {
			$this->load->view('Wisatawan/Layouts/head');
			$this->load->view('Wisatawan/Layouts/header');
			$this->load->view('Wisatawan/vRegistrasi');
			$this->load->view('Wisatawan/Layouts/footer');
		} else {
			$data = array(
				'nama_wisatawan' => $this->input->post('nama'),
				'alamat' => $this->input->post('alamat'),
				'tgl_lahir' => $this->input->post('tgl'),
				'jk' => $this->input->post('jk'),
				'username_wisatawan' => $this->input->post('username'),
				'password_wisatawan' => $this->input->post('password'),
				'no_hp_wisatawan' => $this->input->post('tlpon')
			);
			$this->mLogin->registrasi($data);
			$this->session->set_flashdata('success', 'Anda Berhasil Registrasi!!! Silahkan Login!!!');
			redirect('Wisatawan/cLogin', 'refresh');
		}
	}
	public function logout()
	{

		$this->session->unset_userdata('id_wisatawan');
		$this->session->unset_userdata('level');
		$this->session->unset_userdata('nama');
		$this->session->set_flashdata('success', 'Anda Berhasil Logout!!!');
		redirect('Wisatawan/cLogin', 'refresh');
	}
}

/* End of file cLogin.php */
