<?php
defined('BASEPATH') or exit('No direct script access allowed');

class mWisatawan extends CI_Model
{
	public function select()
	{
		$this->db->select('*');
		$this->db->from('wisatawan');
		return $this->db->get()->result();
	}
}

/* End of file mWisatawan.php */
