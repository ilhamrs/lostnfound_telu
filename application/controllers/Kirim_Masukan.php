<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Kirim_Masukan extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->helper('form');
		$this->load->model("M_Masukan");
		$this->load->library('form_validation');
		$this->load->library('session');
		//$this->load->library('upload');
	}

	public function index()
	{
		$this->load->view('template/header');
		$this->load->view('template/sidebar');
		$this->load->view('kirim_masukan');
		$this->load->view('template/footer');
	}

	public function add()
	{
		$masukan = $this->M_Masukan;
		$id_akun = $this->session->userdata('ID_akun');

		if ($masukan->save($id_akun)) {
			redirect('Home');
		} else {
			$this->load->view('template/header');
			$this->load->view('template/sidebar');
			$this->load->view('kirim_masukan');
			$this->load->view('template/footer');
		}
	}
}
