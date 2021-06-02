<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Login extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		$this->load->helper(array('form', 'url'));
		$this->load->library('form_validation');
		$this->load->model('M_Login');
	}
	public function index()
	{
		$this->load->view('login');
	}
	public function Auth_Login()
	{
		$username = $this->input->POST('username');
		$password = $this->input->POST('password');
		$cekUser = $this->M_Login->Login($username, $password, 'akun_pengguna');
		if ($cekUser) {
			$this->session->set_userdata('status', 'login');
			redirect('Home');
		} else {
			$data['error'] = 'Username dan Password Salah!!';
			$this->load->view('login', $data);
		}
	}
}
