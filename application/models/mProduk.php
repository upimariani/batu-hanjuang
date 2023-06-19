<?php
defined('BASEPATH') or exit('No direct script access allowed');

class mProduk extends CI_Model
{
	public function insert($data)
	{
		$this->db->insert('tiket', $data);
	}
	public function select()
	{
		$this->db->select('*');
		$this->db->from('tiket');
		return $this->db->get()->result();
	}
	public function edit($id)
	{
		$this->db->select('*');
		$this->db->from('tiket');
		$this->db->where('id_tiket', $id);
		return $this->db->get()->row();
	}
	public function update($id, $data)
	{
		$this->db->where('id_tiket', $id);
		$this->db->update('tiket', $data);
	}
	public function delete($id)
	{
		$this->db->where('id_tiket', $id);
		$this->db->delete('tiket');
	}
}

/* End of file mProduk.php */
