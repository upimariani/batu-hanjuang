<?php
defined('BASEPATH') or exit('No direct script access allowed');

class mTransaksi extends CI_Model
{
	//wisatawan
	public function insert_transaksi($data)
	{
		$this->db->insert('transaksi', $data);
	}
	public function detail_transaksi($data)
	{
		$this->db->insert('detail_transaksi', $data);
	}
	public function transaksi_wisatawan()
	{
		$data['belum_bayar'] = $this->db->query("SELECT * FROM `transaksi` WHERE id_wisatawan = '" . $this->session->userdata('id_wisatawan') . "' AND stat_transaksi='0'")->result();
		$data['menunggu'] = $this->db->query("SELECT * FROM `transaksi` WHERE id_wisatawan = '" . $this->session->userdata('id_wisatawan') . "' AND stat_transaksi='1'")->result();
		$data['selesai'] = $this->db->query("SELECT * FROM `transaksi` WHERE id_wisatawan = '" . $this->session->userdata('id_wisatawan') . "' AND stat_transaksi='2'")->result();
		return $data;
	}
	public function detail_transaksi_wisatawan($id)
	{
		$data['detail_transaksi'] = $this->db->query("SELECT * FROM `transaksi` JOIN detail_transaksi ON transaksi.id_transaksi=detail_transaksi.id_transaksi JOIN tiket ON tiket.id_tiket=detail_transaksi.id_tiket LEFT JOIN diskon ON tiket.id_tiket = diskon.id_tiket WHERE transaksi.id_transaksi='" . $id . "'")->result();
		$data['transaksi'] = $this->db->query("SELECT * FROM `transaksi` WHERE id_transaksi='" . $id . "'")->row();
		return $data;
	}
	public function bayar($id, $data)
	{
		$this->db->where('id_transaksi', $id);
		$this->db->update('transaksi', $data);
	}

	//admin
	public function transaksi_admin()
	{
		return $this->db->query("SELECT * FROM `transaksi` JOIN wisatawan ON transaksi.id_wisatawan = wisatawan.id_wisatawan ORDER BY stat_transaksi ASC")->result();
	}
	public function detail_transaksi_admin($id)
	{
		$data['detail_transaksi'] = $this->db->query("SELECT * FROM `transaksi` JOIN detail_transaksi ON transaksi.id_transaksi=detail_transaksi.id_transaksi JOIN tiket ON tiket.id_tiket=detail_transaksi.id_tiket LEFT JOIN diskon ON tiket.id_tiket = diskon.id_tiket WHERE transaksi.id_transaksi='" . $id . "'")->result();
		$data['transaksi'] = $this->db->query("SELECT * FROM `transaksi` JOIN wisatawan ON transaksi.id_wisatawan=wisatawan.id_wisatawan WHERE id_transaksi='" . $id . "'")->row();
		return $data;
	}
	public function konfirmasi($id, $data)
	{
		$this->db->where('id_transaksi', $id);
		$this->db->update('transaksi', $data);
	}
}

/* End of file mTransaksi.php */
