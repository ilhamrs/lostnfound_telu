<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Lapor_Kehilangan extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->helper('form');
        $this->load->model("M_Laporan");
        $this->load->library('form_validation');
        $this->load->library('session');
        //$this->load->library('upload');
    }

    public function index()
    {
        $this->load->view('lapor_kehilangan');
    }

    public function add()
    {
        $laporan = $this->M_Laporan;
        $username = $this->session->userdata('username');

        if ($laporan->saveLost($username)) {
            redirect('Home');
        } else {
            $this->load->view('lapor_kehilangan');
        }
    }
}
