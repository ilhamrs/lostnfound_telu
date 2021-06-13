<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Kirim_Masukan extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->helper('form');
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
			$notif['notif'] = $this->M_notif->getNotif();

			$this->load->view('template/header', $notif);
			$this->load->view('template/sidebar');
			$this->load->view('kirim_masukan');
			$this->load->view('template/footer');
		}
	}
}
