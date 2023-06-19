<?php
defined('BASEPATH') or exit('No direct script access allowed');

class cHome extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		$this->load->model('mHome');
		$this->load->model('mTransaksi');
	}
	public function index()
	{
		$data = array(
			'tiket' => $this->mHome->tiket()
		);
		$this->load->view('Wisatawan/Layouts/head');
		$this->load->view('Wisatawan/Layouts/header');
		$this->load->view('Wisatawan/vHome', $data);
		$this->load->view('Wisatawan/Layouts/footer');
	}
	public function add_to_cart($id)
	{
		$data = $this->db->query("SELECT tiket.id_tiket, nama_tiket, id_diskon, harga, diskon, member, type_tiket FROM tiket LEFT JOIN diskon ON tiket.id_tiket = diskon.id_tiket WHERE tiket.id_tiket=" . $id)->row();

		$data_cart = array(
			'name' => $data->nama_tiket,
			'id' => $data->id_tiket,
			'price' => $data->harga - ($data->diskon / 100 * $data->harga),
			'qty' => '1'
		);
		$this->cart->insert($data_cart);
		redirect('Wisatawan/cHome', 'refresh');
	}
	public function cart()
	{
		$this->load->view('Wisatawan/Layouts/head');
		$this->load->view('Wisatawan/Layouts/header');
		$this->load->view('Wisatawan/vCart');
		$this->load->view('Wisatawan/Layouts/footer');
	}
	public function update_cart()
	{
		$i = 1;
		foreach ($this->cart->contents() as $items) {
			$data = array(
				'rowid'  => $items['rowid'],
				'qty'    => $this->input->post($i . '[qty]')
			);
			$this->cart->update($data);
			$i++;
		}
		redirect('Wisatawan/cHome/cart');
	}
	public function delete($rowid)
	{
		$this->cart->remove($rowid);
		redirect('Wisatawan/cHome/cart');
	}
	public function checkout()
	{
		$data = array(
			'id_wisatawan' => $this->session->userdata('id_wisatawan'),
			'tgl_transaksi' => date('Y-m-d'),
			'tot_transaksi' => $this->cart->total(),
			'stat_transaksi' => '0',
			'stat_pembayaran' => '0',
			'bukti_pembayaran' => '0'
		);
		$this->mTransaksi->insert_transaksi($data);

		$id_transaksi = $this->db->query("SELECT MAX(id_transaksi) as id FROM `transaksi`")->row();

		//menyimpan pesanan ke detail transaksi
		$i = 1;
		foreach ($this->cart->contents() as $item) {
			$data_rinci = array(
				'id_transaksi' => $id_transaksi->id,
				'id_tiket' => $item['id'],
				'qty' => $item['qty']
			);
			$this->mTransaksi->detail_transaksi($data_rinci);
		}

		$this->cart->destroy();
		redirect('Wisatawan/cTransaksi');
	}
}

/* End of file cHome.php */
