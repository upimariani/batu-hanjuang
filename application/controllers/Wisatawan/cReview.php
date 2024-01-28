<?php
defined('BASEPATH') or exit('No direct script access allowed');

class cReview extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		$this->load->model('mReview');
	}

	public function index()
	{
		$data = array(
			'review' => $this->mReview->review()
		);
		$this->load->view('Wisatawan/Layouts/head');
		$this->load->view('Wisatawan/Layouts/header');
		$this->load->view('Wisatawan/vReview', $data);
		$this->load->view('Wisatawan/Layouts/footer');
	}
}

/* End of file cReview.php */
