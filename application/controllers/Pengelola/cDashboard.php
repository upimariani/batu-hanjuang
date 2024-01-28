<?php
defined('BASEPATH') or exit('No direct script access allowed');

class cDashboard extends CI_Controller
{

	public function index()
	{
		$this->load->view('Pengelola/Layouts/head');
		$this->load->view('Pengelola/Layouts/nav');
		$this->load->view('Pengelola/vDashboard');
		$this->load->view('Pengelola/Layouts/footer');
	}
}

/* End of file cDashboard.php */
