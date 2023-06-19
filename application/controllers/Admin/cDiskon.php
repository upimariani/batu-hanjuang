<?php
defined('BASEPATH') or exit('No direct script access allowed');

class cDiskon extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		$this->load->model('mDiskon');
		$this->load->model('mProduk');
	}


	public function index()
	{
		$data = array(
			'diskon' => $this->mDiskon->select()
		);
		$this->load->view('Admin/Layouts/head');
		$this->load->view('Admin/Layouts/nav');
		$this->load->view('Admin/vDiskon', $data);
		$this->load->view('Admin/Layouts/footer');
	}
	public function create()
	{
		$this->form_validation->set_rules('nama', 'Nama Tiket', 'required');
		$this->form_validation->set_rules('tgl', 'Tanggal Tiket', 'required');
		$this->form_validation->set_rules('nama_diskon', 'Nama Diskon', 'required');
		$this->form_validation->set_rules('besar', 'Besar Tiket', 'required');
		$this->form_validation->set_rules('member', 'Member', 'required');

		if ($this->form_validation->run() == FALSE) {
			$data = array(
				'tiket' => $this->mDiskon->select_produk()
			);
			$this->load->view('Admin/Layouts/head');
			$this->load->view('Admin/Layouts/nav');
			$this->load->view('Admin/vTambahDiskon', $data);
			$this->load->view('Admin/Layouts/footer');
		} else {
			$data = array(
				'id_tiket' => $this->input->post('nama'),
				'tgl_diskon' => $this->input->post('tgl'),
				'diskon' => $this->input->post('besar'),
				'nama_diskon' => $this->input->post('nama_diskon'),
				'member' => $this->input->post('member')
			);
			$this->mDiskon->insert($data);
			$this->session->set_flashdata('success', 'Data Diskon Berhasil Ditambahkan!!!');
			redirect('Admin/cDiskon');
		}
	}
	public function update($id)
	{
		$this->form_validation->set_rules('nama', 'Nama Tiket', 'required');
		$this->form_validation->set_rules('tgl', 'Tanggal Tiket', 'required');
		$this->form_validation->set_rules('nama_diskon', 'Nama Diskon', 'required');
		$this->form_validation->set_rules('besar', 'Besar Tiket', 'required');
		$this->form_validation->set_rules('member', 'Member', 'required');

		if ($this->form_validation->run() == FALSE) {
			$data = array(
				'tiket' => $this->mDiskon->edit($id),
				'data_tiket' => $this->mProduk->select()
			);
			$this->load->view('Admin/Layouts/head');
			$this->load->view('Admin/Layouts/nav');
			$this->load->view('Admin/vUpdateDiskon', $data);
			$this->load->view('Admin/Layouts/footer');
		} else {
			$data = array(
				'id_tiket' => $this->input->post('nama'),
				'tgl_diskon' => $this->input->post('tgl'),
				'diskon' => $this->input->post('besar'),
				'nama_diskon' => $this->input->post('nama_diskon'),
				'member' => $this->input->post('member')
			);
			$this->mDiskon->update($id, $data);
			$this->session->set_flashdata('success', 'Data Diskon Berhasil Diperbaharui!!!');
			redirect('Admin/cDiskon');
		}
	}
	public function delete($id)
	{
		$this->mDiskon->delete($id);
		$this->session->set_flashdata('success', 'Data Diskon Berhasil Dihapus!!!');
		redirect('Admin/cDiskon');
	}
}

/* End of file cDiskon.php */
