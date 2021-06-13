<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Tentang_Kami extends CI_Controller
{

	function __construct()
	{
		parent::__construct();

		if ($this->session->userdata('status') != "login") {
			redirect(base_url("login"));
		}
	}
	public function index()
	{
		$notif['notif'] = $this->M_notif->getNotif();

		$this->load->view('template/header', $notif);
		$this->load->view('template/sidebar');
		$this->load->view('tentang_kami');
		$this->load->view('template/footer');
	}
}
