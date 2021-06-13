<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Barang_Ditemukan extends CI_Controller
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

		$this->db->like('nama_barang', $databarang['kata']);
		$this->db->where('tipe_posting', 'Barang Ditemukan');
		if ($databarang['kategori'] != "") {
			$this->db->where('kategori', $databarang['kategori']);
		}
		$this->db->from('tb_posting');



		$config['base_url'] = 'http://localhost/lostnfound_ci/Barang_Ditemukan/index/';
		$config['per_page'] = 20;
		$config["uri_segment"] = 3;
		$config['total_rows'] = $this->db->count_all_results();
		$choice = $config["total_rows"] / $config["per_page"];
		$config["num_links"] = floor($choice);



		$this->pagination->initialize($config);


		// code menjalankan pagination
		$databarang['page'] = ($this->uri->segment(3)) ? $this->uri->segment(3) : 0;
		$databarang['pagination'] = $this->pagination->create_links();

		$notif['notif'] = $this->M_notif->getNotif();

		$databarang['ditemukan'] = $this->M_beranda->getbarangKhusus("Barang Ditemukan", $config['per_page'], $databarang['page'], $databarang['urutkan'], $databarang['kata'], $databarang['kategori']);
		$this->load->view('template/header', $notif);
		$this->load->view('template/sidebar');
		$this->load->view('barang_ditemukan', $databarang);
		$this->load->view('template/footer');
	}
}
