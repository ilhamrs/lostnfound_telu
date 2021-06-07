
<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Detail_barang extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('M_detailBarang');
    }
    public function index()
    {
        $id = $this->uri->segment(3);
        $data['byId'] = $this->M_detailBarang->getbyID($id);
        $this->load->view('template/header');
        $this->load->view('template/sidebar');
        $this->load->view('detail_barang', $data);
        $this->load->view('template/footer');
    }
}
