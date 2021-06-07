<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Profile extends CI_Controller
{
	function __construct()
	{
		parent::__construct();
		$this->load->library('session');
		$this->load->Model('M_Profil');
	}

	public function index()
	{
		$idpengguna = $this->session->userdata('username');
		$data['dataPengguna'] = $this->M_Profil->getDatadiri($idpengguna);
		$this->load->view('template/header');
		$this->load->view('template/sidebar');
		$this->load->view('profile', $data);
		$this->load->view('template/footer');
	}
}
