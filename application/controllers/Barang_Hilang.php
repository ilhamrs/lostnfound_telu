<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Barang_Hilang extends CI_Controller
{


	function __construct()
	{
		parent::__construct();
		$this->load->library('session', 'pagination');
		$this->load->Model('M_beranda');
	}

	public function index()
	{
		$this->session->set_userdata('tipe', 'Barang Hilang');
		$sD = $this->session->userdata('tipe');

		$config['base_url'] = 'http://localhost/lostnfound_ci/Barang_hilang/index/';
		$config['per_page'] = 3;
		$config["uri_segment"] = 3;
		$config['total_rows'] = $this->M_beranda->jumlahbarangDitemukan($sD);
		$choice = $config["total_rows"] / $config["per_page"];
		$config["num_links"] = floor($choice);


		//membuat stayle pagination
		$config['next_link']  = 'Next';
		$config['first_link'] = 'First';
		$config['last_link']  = 'Last';
		$config['prev_link']  = 'Previous';

		$config['full_tag_open']    = '<div class="col-12 col-sm-12"><nav><ul class="pagination justify-content-center">';
		$config['full_tag_close']   = '</ul></nav></div>';
		$config['num_tag_open']     = '<li class="page-item"><span class="page-link">';
		$config['num_tag_close']    = '</span></li>';
		$config['cur_tag_open']     = '<li class="page-item active"><span class="page-link">';
		$config['cur_tag_close']    = '</span></li>';
		$config['prev_tag_open']    = '<li class="page-item "><span class="page-link" tabindex="-1">';
		$config['prev_tagl_close']  = '</span></li>';
		$config['next_tag_open']    = '<li class="page-item"><span class="page-link">';
		$config['next_tagl_close']  = '<span aria-hidden="true">&raquo;</span></span></li>';
		$config['first_tag_open']   = '<li class="page-item"><span class="page-link">';
		$config['first_tagl_close'] = '</span></li>';
		$config['last_tag_open']    = '<li class="page-item"><span class="page-link">';
		$config['last_tagl_close']  = '</span></li>';
		$this->pagination->initialize($config);


		// code menjalankan pagination
		$databarang['page'] = ($this->uri->segment(3)) ? $this->uri->segment(3) : 0;
		$databarang['pagination'] = $this->pagination->create_links();

		$databarang['hilang'] = $this->M_beranda->getbarangDitemukan($sD, $config['per_page'], $databarang['page']);

		$this->load->view('template/header');
		$this->load->view('template/sidebar');
		$this->load->view('barang_hilang', $databarang);
		$this->load->view('template/footer');
	}
}
