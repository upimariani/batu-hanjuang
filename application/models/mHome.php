<?php
defined('BASEPATH') or exit('No direct script access allowed');

class mHome extends CI_Model
{
	public function tiket()
	{
		return $this->db->query("SELECT tiket.id_tiket, nama_tiket, id_diskon, harga, diskon, member, type_tiket FROM tiket LEFT JOIN diskon ON tiket.id_tiket = diskon.id_tiket")->result();
	}
}

/* End of file mHome.php */
