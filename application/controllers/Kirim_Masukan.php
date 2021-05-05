<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kirim_Masukan extends CI_Controller {

	public function index()
	{
		$this->load->view('kirim_masukan');
	}
}
