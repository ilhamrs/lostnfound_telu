<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Home extends CI_Controller
{

	function __construct()
	{
		parent::__construct();
		$this->load->library('session', 'pagination');

		if ($this->session->userdata('status') != "login") {
			redirect(base_url("login"));
		}
	}

	public function index()
	{

		if ($this->input->POST('submit')) {
			$databarang['kata'] = $this->input->POST('cari');
			$databarang['urutkan'] = $this->input->POST('urutkan');
			$databarang['kategori'] = $this->input->POST('kategori');
			if ($databarang['kata'] != "" || $databarang['urutkan']  != "" || $databarang['kategori'] != "kategori") {
				$this->session->set_userdata('kalimat', $databarang['kata']);
				$this->session->set_userdata('urut', $databarang['urutkan']);
				$this->session->set_userdata('kate', $databarang['kategori']);
			}
		} else {
			$databarang['kata'] = $this->session->userdata('kalimat');
			$databarang['urutkan'] = $this->session->userdata('urut');
			$databarang['kategori'] = $this->session->userdata('kate');
		}


		//menghitung jumlah baris
		if ($databarang['kategori'] != "") {
			$this->db->where('kategori', $databarang['kategori']);
		}
		$this->db->like('nama_barang', $databarang['kata']);
		$this->db->from('tb_posting');

		$config['total_rows'] = $this->db->count_all_results();
		$config['base_url'] = 'http://localhost/lostnfound_ci/Home/index/';
		$config['per_page'] = 20;
		$config["uri_segment"] = 3;
		$choice = $config["total_rows"] / $config["per_page"];
		$config["num_links"] = floor($choice);

		$this->pagination->initialize($config);
		// code menjalankan pagination
		$databarang['page'] = ($this->uri->segment(3)) ? $this->uri->segment(3) : 0;
		$databarang['pagination'] = $this->pagination->create_links();
		// mengambil seluruh data barang
		$databarang['barang'] = $this->M_beranda->get_all($config['per_page'], $databarang['page'], $databarang['kata'], $databarang['urutkan'], $databarang['kategori']);
		//mengambil macam macam kategori
		$databarang['kategori']   = $this->M_beranda->getKategori();
		//mengambil data notifikasi 
		$notif['notif'] = $this->M_notif->getNotif();

		$this->load->view('template/header', $notif);
		$this->load->view('template/sidebar');
		$this->load->view('index', $databarang);
		$this->load->view('template/footer');
	}
}
