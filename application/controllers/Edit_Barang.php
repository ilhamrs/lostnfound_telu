
<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Edit_barang extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('M_detailBarang');
        $this->load->model('M_Komentar');
        $this->load->library('user_agent');
    }
    public function index()
    {
        $id = $this->uri->segment(3);
        $data['byId'] = $this->M_detailBarang->getbyID($id);
        $data['commentPost'] = $this->M_Komentar->getCommentByIDPost($id);
        $this->load->view('template/header');
        $this->load->view('template/sidebar');
        $this->load->view('edit_barang', $data);
        $this->load->view('template/footer');
    }

    public function delete()
    {
        $id = $this->uri->segment(3);
        //$hapus = $this->M_detailBarang;

        $this->M_detailBarang->deleteCommentByID($id);
        $this->M_detailBarang->deletePostByID($id);
        redirect("Profile/index");
        // $this->load->view('template/header');
        // $this->load->view('template/sidebar');
        // $this->load->view('index');
        // $this->load->view('template/footer');
    }

    public function add()
    {
        $komentar = $this->M_Komentar;
        $id_akun = $this->session->userdata('ID_akun');
        $id_posting = $this->uri->segment(3);

        if ($komentar->save($id_akun, $id_posting)) {
            redirect($this->agent->referrer());
        } else {
            $this->load->view('template/header');
            $this->load->view('template/sidebar');
            $this->load->view('index');
            $this->load->view('template/footer');
        }
    }
}
