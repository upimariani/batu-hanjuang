<?php
defined('BASEPATH') or exit('No direct script access allowed');

class cWisatawan extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		$this->load->model('mWisatawan');
	}

	public function index()
	{
		$data = array(
			'wisatawan' => $this->mWisatawan->select()
		);
		$this->load->view('Admin/Layouts/head');
		$this->load->view('Admin/Layouts/nav');
		$this->load->view('Admin/vWisatawan', $data);
		$this->load->view('Admin/Layouts/footer');
	}
}

/* End of file cWisatawan.php */
