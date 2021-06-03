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
        //$this->load->library('upload');
    }

    public function index()
    {
        $this->load->view('lapor_kehilangan');
    }

    // public function add()
    // {
    //     $config['upload_path']          = '<?php echo base_url();/dist/uploads/'; //'./dist/uploads/';
    //     $config['allowed_types']        = 'gif|jpg|png';
    //     $config['max_size']             = 2048000;
    //     $config['max_width']            = 1024;
    //     $config['max_height']           = 768;
    //     $this->load->library('upload', $config);

    //     if (!$this->upload->do_upload('foto')) {
    //         $error = array('error' => $this->upload->display_errors());
    //     } else {
    //         $image_data = $this->upload->data();
	// 		$imgdata = file_get_contents($image_data['full_path']);
	// 		$file_encode=base64_encode($imgdata);

    //         $data['id'] = "";
    //         $data['id_akun'] = "";
    //         $data['foto'] = $file_encode; //$this->input->POST('foto');
    //         $data['ukuran_foto'] = $this->upload->data('file_size');
    //         $data['tipe_foto'] = $this->upload->data('file_type');
    //         $data['nama_foto'] = $this->upload->data('file_name');

    //         $data['tipe_postingan'] = "Kehilangan";
    //         $data['nama_barang'] = $this->input->POST('nama_barang');
    //         $data['kategori'] = $this->input->POST('kategori');
    //         $data['lokasi'] = $this->input->POST('lokasi');
    //         $data['tgl_postingan'] = "";
    //         $data['tgl_kehilangan'] = $this->input->POST('tgl_kehilangan');
    //         $data['deskripsi'] = $this->input->POST('deskripsi');
    //         $data['no_telp'] = $this->input->POST('no_telp');
            
    //         $this->db->insert('postingan',$data);
	// 		unlink($image_data['full_path']);
    //         redirect('lapor_kehilangan');
            
    //         // $laporan = $this->M_Laporan->save($data);
    //         // //echo $data;

    //         // if ($laporan) {
    //         //     unlink($image_data['full_path']);
    //         //     redirect('Home');
    //         //     //echo $data;
    //         // } else {
    //         //     $this->load->view('lapor_kehilangan');
    //         // }
    //     }
    //     //$this->load->view("Home");
    // }

    public function add()
    {
        $laporan = $this->M_Laporan;
        //$validation = $this->form_validation;
        //$validation->set_rules($laporan->rules());

        // if ($validation->run()) {
    		if($laporan->save()){
    			redirect('Home');
    		}else{
    			$this->load->view('lapor_kehilangan');
    		}
            //$this->session->set_flashdata('success', 'Berhasil disimpan');
        //}


        //$this->load->view("Home");
    }

}
