<?php
defined('BASEPATH') or exit('No direct script access allowed');

class cProsesMetode extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('mAnalisis');
	}

	public function index()
	{



		$this->load->view('Admin/Layouts/head');
		$this->load->view('Admin/Layouts/nav');
		$this->load->view('Admin/vProsesMetode');
		$this->load->view('Admin/Layouts/footer');
	}
}

/* End of file cProsesMetode.php */
