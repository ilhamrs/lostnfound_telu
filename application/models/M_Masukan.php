<?php defined('BASEPATH') or exit('No direct script access allowed');

class M_Masukan extends CI_Model
{
    private $_table = "tb_masukan";

    public $ID_masukan;
    public $ID_akun;
    public $images = "default.jpg";
    public $email;
    public $isi;

    public function save($id_akun)
    {
        $post = $this->input->post();
        $this->ID_masukan = "";
        $this->ID_akun = $id_akun;
        $this->images = $this->_uploadImage('foto');
        $this->email = $post["email"];
        $this->isi = $post["isi"];
        return $this->db->insert($this->_table, $this);
    }

    

    private function _uploadImage($foto)
    {
        $config['upload_path']          = './dist/images/uploads/masukan/';
        $config['allowed_types']        = 'gif|jpg|png';
        $config['file_name']            = $this->ID_masukan;
        $config['overwrite']            = true;
        $config['max_size']             = 10240;
        // $config['max_width']            = 1024;
        // $config['max_height']           = 768;

        $this->load->library('upload', $config);

        if ($this->upload->do_upload($foto)) {
            return $this->upload->data("file_name");
        }

        return "default.jpg";
    }
}
