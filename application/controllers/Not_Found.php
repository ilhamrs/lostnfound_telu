<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Not_Found extends CI_Controller {

	public function index()
	{
		$this->load->view('not_found');
	}
}
