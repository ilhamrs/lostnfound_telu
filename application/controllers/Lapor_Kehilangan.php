<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Lapor_Kehilangan extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->helper('form');
		$this->load->model("M_Laporan");
		$this->load->library('form_validation');
		$this->load->library('session');
		//$this->load->library('upload');
	}

	public function index()
	{
		$this->load->view('template/header');
		$this->load->view('template/sidebar');
		$this->load->view('lapor_kehilangan');
		$this->load->view('template/footer');
	}
	public function add()
	{
		$laporan = $this->M_Laporan;
		$id_akun = $this->session->userdata('ID_akun');

		if ($laporan->saveLost($id_akun)) {
			redirect('Home');
		} else {
			$this->load->view('template/header');
			$this->load->view('template/sidebar');
			$this->load->view('lapor_kehilangan');
			$this->load->view('template/footer');
		}
	}
}
