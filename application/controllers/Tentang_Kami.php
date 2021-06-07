<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Tentang_Kami extends CI_Controller
{

	public function index()
	{
		$this->load->view('template/header');
		$this->load->view('template/sidebar');
		$this->load->view('tentang_kami');
		$this->load->view('template/footer');
	}
}
