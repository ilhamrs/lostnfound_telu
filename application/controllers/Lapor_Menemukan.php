<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Lapor_Menemukan extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		$this->load->helper('form');
		$this->load->model("M_Laporan");
		$this->load->library('form_validation');
		$this->load->library('session');

		if ($this->session->userdata('status') != "login") {
			redirect(base_url("login"));
		}
	}

	public function index()
	{
		$notif['notif'] = $this->M_notif->getNotif();

		$this->load->view('template/header', $notif);
		$this->load->view('template/sidebar');
		$this->load->view('lapor_menemukan');
		$this->load->view('template/footer');
	}

	public function add()
	{
		$laporan = $this->M_Laporan;
		$id_akun = $this->session->userdata('ID_akun');

		if ($laporan->saveFound($id_akun)) {
			redirect('Home');
		} else {
			$notif['notif'] = $this->M_notif->getNotif();
			$this->load->view('template/header', $notif);
			$this->load->view('template/sidebar');
			$this->load->view('lapor_menemukan');
			$this->load->view('template/footer');
		}
	}
}
