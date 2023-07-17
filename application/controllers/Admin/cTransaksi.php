<?php
defined('BASEPATH') or exit('No direct script access allowed');

class cTransaksi extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		$this->load->model('mTransaksi');
		$this->load->model('mAnalisis');
	}

	public function index()
	{
		$data = array(
			'transaksi' => $this->mTransaksi->transaksi_admin()
		);
		$this->load->view('Admin/Layouts/head');
		$this->load->view('Admin/Layouts/nav');
		$this->load->view('Admin/vTransaksiWisatawan', $data);
		$this->load->view('Admin/Layouts/footer');
	}
	public function detail_transaksi($id)
	{
		$data = array(
			'transaksi' => $this->mTransaksi->detail_transaksi_admin($id)
		);
		$this->load->view('Admin/Layouts/head');
		$this->load->view('Admin/Layouts/nav');
		$this->load->view('Admin/vDetailTransaksi', $data);
		$this->load->view('Admin/Layouts/footer');
	}
	public function konfirmasi($id)
	{
		$var_recency = array();
		$var_frequency = array();
		$var_monetary = array();
		$date_in = date('Y-m-d');
		$variabel = $this->mAnalisis->variabel($date_in);
		foreach ($variabel['all'] as $key => $value) {
			$var_recency[] = $value->recency;
			$var_frequency[] = $value->frequency;
			$var_monetary[] = $value->monetary;
			// echo '<br>Recency: ' . $value->recency;
			// echo '<br>Frequency: ' . $value->frequency;
			// echo '<br>Monetary: ' . $value->monetary;
		}

		// echo '<br>';
		// $max_recency = max($var_recency);
		// $max_frequency = max($var_frequency);
		// $max_monetary = max($var_monetary);
		// echo $max_recency . '<br>';
		// echo $max_frequency . '<br>';
		// echo $max_monetary . '<br>';

		// echo '<br>';
		// $rn = $var_recency[0] / $max_recency;
		// $fn = $var_frequency[0] / $max_frequency;
		// $mn = $var_monetary[0] / $max_monetary;
		// echo $var_recency[0] . '|' . $rn . '<br>';
		// echo $var_frequency[0] . '|' . $fn . '<br>';
		// echo $var_monetary[0] . '|' . $mn . '<br>';


		//menentukan rumus euclidean Distance
		$e_recency = array();
		$e_frequecy = array();
		$e_monetary = array();
		foreach ($variabel['limit'] as $key => $value) {
			$e_recency[] = $value->recency;
			$e_frequecy[] = $value->frequency;
			$e_monetary[] = $value->monetary;
		}

		$centroid1 = round(sqrt((pow(($e_recency[1] - $e_recency[0]), 2)) + (pow($e_frequecy[1] - $e_frequecy[0], 2)) + (pow($e_monetary[1] - $e_monetary[0], 2))), 3);
		$centroid2 = round(sqrt((pow(($e_recency[0] - $e_recency[1]), 2)) + (pow($e_frequecy[0] - $e_frequecy[1], 2)) + (pow($e_monetary[0] - $e_monetary[1], 2))), 3);
		// echo '<br>' . $centroid1;
		// echo '<br>' . $centroid2;


		foreach ($variabel['all'] as $key => $value) {
			$centroid_next1 = round(sqrt((pow(($value->recency - $e_recency[0]), 2)) + (pow($value->frequency - $e_frequecy[0], 2)) + (pow($value->monetary - $e_monetary[0], 2))), 3);
			$centroid_next2 = round(sqrt((pow(($value->recency - $e_recency[1]), 2)) + (pow($value->frequency - $e_frequecy[1], 2)) + (pow($value->monetary - $e_monetary[1], 2))), 3);

			if ($centroid1 >= $centroid_next1) {
				$status = 0;
			}
			if ($centroid2 >= $centroid_next2) {
				$status = 1;
			}
			$status_member = array(
				'level_member' => $status
			);
			$this->db->where('id_wisatawan', $value->id_wisatawan);
			$this->db->update('wisatawan', $status_member);
		}

		$data = array(
			'stat_transaksi' => '2'
		);
		$this->mTransaksi->konfirmasi($id, $data);


		$this->session->set_flashdata('success', 'Admin Berhasil Dikonfirmasi!!!');
		redirect('Admin/cTransaksi', 'refresh');
	}
}

/* End of file cTransaksi.php */
