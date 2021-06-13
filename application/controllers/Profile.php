<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Profile extends CI_Controller
{
	function __construct()
	{
		parent::__construct();
		$this->load->library('session');


		if ($this->session->userdata('status') != "login") {
			redirect(base_url("login"));
		}
	}

	public function index()
	{
		$idpengguna = $this->session->userdata('username');
		$data['dataPengguna'] = $this->M_Profil->getDatadiri($idpengguna);
		$notif['notif'] = $this->M_notif->getNotif();

		$this->load->view('template/header', $notif);
		$this->load->view('template/sidebar');
		$this->load->view('profile', $data);
		$this->load->view('template/footer');
	}
}
