<?php
defined('BASEPATH') or exit('No direct script access allowed');

class mReview extends CI_Model
{
	public function review()
	{
		$this->db->select('*');
		$this->db->from('review');
		$this->db->join('transaksi', 'review.id_transaksi = transaksi.id_transaksi', 'left');
		$this->db->join('wisatawan', 'transaksi.id_wisatawan = wisatawan.id_wisatawan', 'left');
		return $this->db->get()->result();
	}
}

/* End of file mReview.php */
