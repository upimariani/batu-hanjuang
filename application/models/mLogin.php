<?php
defined('BASEPATH') or exit('No direct script access allowed');

class mLogin extends CI_Model
{
	public function login($username, $password)
	{
		$this->db->select('*');
		$this->db->from('user');
		$this->db->where('username', $username);
		$this->db->where('password', $password);
		return $this->db->get()->row();
	}

	//wisatawan
	public function registrasi($data)
	{
		$this->db->insert('wisatawan', $data);
	}
	public function login_wisatawan($username, $password)
	{
		$this->db->select('*');
		$this->db->from('wisatawan');
		$this->db->where('username_wisatawan', $username);
		$this->db->where('password_wisatawan', $password);
		return $this->db->get()->row();
	}
}

/* End of file mLogin.php */
