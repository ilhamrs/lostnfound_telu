<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Home extends CI_Controller
{

	function __construct()
	{
		parent::__construct();
		$this->load->library('session', 'pagination');
		$this->load->Model('M_beranda');
		if ($this->session->userdata('status') != "login") {
			redirect(base_url("login"));
		}
	}
	public function index()
	{
		//mengambil data inputan user kategori
		$databarang['equal'] = $this->input->POST('kategori') ?: "";
		$databarang['mengurut'] = $this->input->POST('urutkan') ?: "";
		$databarang['filter'] = $this->session->userdata('kategori') ?: "";


		$config['base_url'] = 'http://localhost/lostnfound_ci/Home/index/';
		$config['per_page'] = 12;
		$config["uri_segment"] = 3;
		$config['total_rows'] = $this->M_beranda->jumlahRow($databarang['filter']);
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

		//mengambil macam macam kategori
		$databarang['kategori']   = $this->M_beranda->getKategori();
		// mengambil seluruh data barang
		$databarang['barang'] = $this->M_beranda->get_all($config['per_page'], $databarang['page'], $databarang['equal']);
		$this->load->view('template/header');
		$this->load->view('template/sidebar');
		$this->load->view('index', $databarang);
		$this->load->view('template/footer');
	}
}
