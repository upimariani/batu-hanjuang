<?php
defined('BASEPATH') or exit('No direct script access allowed');

class mAnalisis extends CI_Model
{
	public function variabel($date)
	{
		$data['all'] = $this->db->query("SELECT COUNT(id_transaksi) as frequency, DATEDIFF('" . $date . "', MAX(tgl_transaksi)) as recency, SUM(tot_transaksi) as monetary, id_wisatawan FROM `transaksi`GROUP BY id_wisatawan")->result();
		$data['limit'] = $this->db->query("SELECT COUNT(id_transaksi) as frequency, DATEDIFF('" . $date . "', MAX(tgl_transaksi)) as recency, SUM(tot_transaksi) as monetary, id_wisatawan FROM `transaksi`GROUP BY id_wisatawan LIMIT 2")->result();
		return $data;
	}
}

/* End of file mAnalisis.php */
