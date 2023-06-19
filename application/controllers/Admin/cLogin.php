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

		if ($this->form_validation->run() == FALSE) {
			$this->load->view('Admin/Layouts/head');
			$this->load->view('Admin/Layouts/nav');
			$this->load->view('Admin/vLogin');
			$this->load->view('Admin/Layouts/footer');
		} else {
			$username = $this->input->post('username');
			$password = $this->input->post('password');

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
				redirect('Admin/cLogin', 'refresh');
			}
		}
	}
	public function logout()
	{
		$this->session->unset_userdata('id');
		$this->session->set_flashdata('success', 'Anda Berhasil Logout!!!');
		redirect('Admin/cLogin', 'refresh');
	}
}

/* End of file cLogin.php */
