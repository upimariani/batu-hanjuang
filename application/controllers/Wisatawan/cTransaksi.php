<?php
defined('BASEPATH') or exit('No direct script access allowed');

class cTransaksi extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		$this->load->model('mTransaksi');
	}


	public function index()
	{
		$data = array(
			'transaksi' => $this->mTransaksi->transaksi_wisatawan()
		);
		$this->load->view('Wisatawan/Layouts/head');
		$this->load->view('Wisatawan/Layouts/header');
		$this->load->view('Wisatawan/vPesananSaya', $data);
		$this->load->view('Wisatawan/Layouts/footer');
	}
	public function detail_transaksi($id)
	{
		$data = array(
			'detail' => $this->mTransaksi->detail_transaksi_wisatawan($id)
		);
		$this->load->view('Wisatawan/Layouts/head');
		$this->load->view('Wisatawan/Layouts/header');
		$this->load->view('Wisatawan/vDetailTransaksi', $data);
		$this->load->view('Wisatawan/Layouts/footer');
	}
	public function bayar($id)
	{
		$config['upload_path']          = './asset/bukti-pembayaran';
		$config['allowed_types']        = 'gif|jpg|png|jpeg';
		$config['max_size']             = 5000;
		$this->load->library('upload', $config);

		if (!$this->upload->do_upload('gambar')) {
			$data = array(
				'transaksi' => $this->mTransaksi->transaksi_wisatawan(),
				'error' => $this->upload->display_errors()
			);
			$this->load->view('Wisatawan/Layouts/head');
			$this->load->view('Wisatawan/Layouts/header');
			$this->load->view('Wisatawan/vPesananSaya', $data);
			$this->load->view('Wisatawan/Layouts/footer');
		} else {
			$upload_data = $this->upload->data();
			$data = array(
				'stat_transaksi' => '1',
				'stat_pembayaran' => '1',
				'bukti_pembayaran' => $upload_data['file_name']
			);
			$this->mTransaksi->bayar($id, $data);
			$this->session->set_flashdata('success', 'Pembayaran Berhasil Dikirim!');
			redirect('Wisatawan/cTransaksi');
		}
	}
}

/* End of file cTransaksi.php */
