<?php
defined('BASEPATH') or exit('No direct script access allowed');

class cProduk extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		$this->load->model('mProduk');
	}

	public function index()
	{
		$data = array(
			'tiket' => $this->mProduk->select()
		);
		$this->load->view('Admin/Layouts/head');
		$this->load->view('Admin/Layouts/nav');
		$this->load->view('Admin/vProduk', $data);
		$this->load->view('Admin/Layouts/footer');
	}
	public function create()
	{
		$this->form_validation->set_rules('nama', 'Nama Tiket', 'required');
		$this->form_validation->set_rules('deskripsi', 'Deskripsi', 'required');
		$this->form_validation->set_rules('jml_orang', 'Berlaku Untuk', 'required');
		$this->form_validation->set_rules('tipe', 'Tipe Tiket', 'required');
		$this->form_validation->set_rules('harga', 'Harga Tiket', 'required');

		if ($this->form_validation->run() == FALSE) {
			$this->load->view('Admin/Layouts/head');
			$this->load->view('Admin/Layouts/nav');
			$this->load->view('Admin/vTambahProduk');
			$this->load->view('Admin/Layouts/footer');
		} else {
			$data = array(
				'nama_tiket' => $this->input->post('nama'),
				'deskripsi' => $this->input->post('deskripsi'),
				'jml_orang' => $this->input->post('jml_orang'),
				'type_tiket' => $this->input->post('tipe'),
				'harga' => $this->input->post('harga')
			);
			$this->mProduk->insert($data);
			$this->session->set_flashdata('success', 'Data Tiket Berhasil Ditambahkan!!!');

			redirect('Admin/cProduk', 'refresh');
		}
	}
	public function update($id)
	{
		$this->form_validation->set_rules('nama', 'Nama Tiket', 'required');
		$this->form_validation->set_rules('deskripsi', 'Deskripsi', 'required');
		$this->form_validation->set_rules('jml_orang', 'Berlaku Untuk', 'required');
		$this->form_validation->set_rules('tipe', 'Tipe Tiket', 'required');
		$this->form_validation->set_rules('harga', 'Harga Tiket', 'required');

		if ($this->form_validation->run() == FALSE) {
			$data = array(
				'tiket' => $this->mProduk->edit($id)
			);
			$this->load->view('Admin/Layouts/head');
			$this->load->view('Admin/Layouts/nav');
			$this->load->view('Admin/vUpdateProduk', $data);
			$this->load->view('Admin/Layouts/footer');
		} else {
			$data = array(
				'nama_tiket' => $this->input->post('nama'),
				'deskripsi' => $this->input->post('deskripsi'),
				'jml_orang' => $this->input->post('jml_orang'),
				'type_tiket' => $this->input->post('tipe'),
				'harga' => $this->input->post('harga')
			);
			$this->mProduk->update($id, $data);
			$this->session->set_flashdata('success', 'Data Tiket Berhasil Diperbaharui!!!');

			redirect('Admin/cProduk', 'refresh');
		}
	}
	public function delete($id)
	{
		$this->mProduk->delete($id);
		$this->session->set_flashdata('success', 'Data Tiket Berhasil Dihapus!!!');
		redirect('Admin/cProduk', 'refresh');
	}
}

/* End of file cProduk.php */
