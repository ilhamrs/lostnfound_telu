<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Kirim_Masukan extends CI_Controller
{

	public function index()
	{
		$this->load->view('template/header');
		$this->load->view('template/sidebar');
		$this->load->view('kirim_masukan');
		$this->load->view('template/footer');
	}
}
