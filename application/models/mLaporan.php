<?php
defined('BASEPATH') or exit('No direct script access allowed');

class mLaporan extends CI_Model
{

	public function lap_harian_transaksi($tanggal, $bulan, $tahun)
	{
		$this->db->select('*');
		$this->db->from('transaksi');
		$this->db->join('wisatawan', 'transaksi.id_wisatawan = wisatawan.id_wisatawan', 'left');
		$this->db->join('detail_transaksi', 'transaksi.id_transaksi = detail_transaksi.id_transaksi', 'left');
		$this->db->join('tiket', 'tiket.id_tiket = detail_transaksi.id_tiket', 'left');

		$this->db->where('transaksi.stat_transaksi=2');
		$this->db->where('DAY(transaksi.tgl_transaksi)', $tanggal);
		$this->db->where('MONTH(transaksi.tgl_transaksi)', $bulan);
		$this->db->where('YEAR(transaksi.tgl_transaksi)', $tahun);
		return $this->db->get()->result();
	}
	public function lap_bulanan_transaksi($bulan, $tahun)
	{

		$this->db->select('*');
		$this->db->from('transaksi');
		$this->db->join('wisatawan', 'transaksi.id_wisatawan = wisatawan.id_wisatawan', 'left');
		$this->db->join('detail_transaksi', 'transaksi.id_transaksi = detail_transaksi.id_transaksi', 'left');
		$this->db->join('tiket', 'tiket.id_tiket = detail_transaksi.id_tiket', 'left');

		$this->db->where('transaksi.stat_transaksi=2');
		$this->db->where('MONTH(transaksi.tgl_transaksi)', $bulan);
		$this->db->where('YEAR(transaksi.tgl_transaksi)', $tahun);
		return $this->db->get()->result();
	}
	public function lap_tahunan_transaksi($tahun)
	{
		$this->db->select('*');
		$this->db->from('transaksi');
		$this->db->join('wisatawan', 'transaksi.id_wisatawan = wisatawan.id_wisatawan', 'left');
		$this->db->join('detail_transaksi', 'transaksi.id_transaksi = detail_transaksi.id_transaksi', 'left');
		$this->db->join('tiket', 'tiket.id_tiket = detail_transaksi.id_tiket', 'left');

		$this->db->where('transaksi.stat_transaksi=2');
		$this->db->where('YEAR(transaksi.tgl_transaksi)', $tahun);
		return $this->db->get()->result();
	}
}

/* End of file mlaporan.php */
