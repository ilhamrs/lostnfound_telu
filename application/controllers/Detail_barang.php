
<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Detail_barang extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('M_detailBarang');
        $this->load->model('M_Komentar');
    }
    public function index()
    {
        $id = $this->uri->segment(3);
        $data['byId'] = $this->M_detailBarang->getbyID($id);
        $data['commentPost'] = $this->M_Komentar->getCommentByIDPost($id);
        $this->load->view('template/header');
        $this->load->view('template/sidebar');
        $this->load->view('detail_barang', $data);
        $this->load->view('template/footer');
    }

    public function add()
	{
		$komentar = $this->M_Komentar;
        $id_akun = $this->session->userdata('ID_akun');
        $id_posting = $this->uri->segment(3);

		if ($komentar->save($id_akun, $id_posting)) {
			redirect('Home');
		} else {
			$this->load->view('template/header');
			$this->load->view('template/sidebar');
			$this->load->view('lapor_kehilangan');
			$this->load->view('template/footer');
		}
	}
}
