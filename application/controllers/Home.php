<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Home extends CI_Controller
{

	function __construct()
	{
		parent::__construct();
		$this->load->library('session');
	}
	public function index()
	{
		if ($this->session->userdata('status') != "login") {
			redirect(base_url("login"));
		} else {
			$this->load->view('index');
		}
	}
	
}
