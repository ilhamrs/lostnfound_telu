
<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Detail_barang extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->library('user_agent');

        if ($this->session->userdata('status') != "login") {
            redirect(base_url("login"));
        }
    }
    public function index()
    {
        $id = $this->uri->segment(3);
        $data['byId'] = $this->M_detailBarang->getbyID($id);
        $notif['notif'] = $this->M_notif->getNotif();

        $data['commentPost'] = $this->M_Komentar->getCommentByIDPost($id);
        $this->load->view('template/header', $notif);
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
            redirect($this->agent->referrer());
        } else {
            $notif['notif'] = $this->M_notif->getNotif();

            $this->load->view('template/header', $notif);
            $this->load->view('template/sidebar');
            $this->load->view('index');
            $this->load->view('template/footer');
        }
    }
}
