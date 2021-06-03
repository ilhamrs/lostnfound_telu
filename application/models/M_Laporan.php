<?php defined('BASEPATH') or exit('No direct script access allowed');

class M_Laporan extends CI_Model
{
    private $_table = "postingan";

    public $id;
    public $id_akun;
    //public $foto;
    public $image = "default.jpg";
    public $tipe_postingan;
    public $nama_barang;
    public $kategori;
    public $lokasi;
    public $tgl_postingan;
    public $tgl_kehilangan;
    public $deskripsi;
    public $no_telp;





    // public function save($data)
    // {

    //     $query = $this->db->insert($this->_table, $data);

    //     if($query->affected_rows() == 1){
    //         return $query->result();
    //     }else{
    //         return false;
    //     }

    //     // $post = $this->input->post();
    //     // $this->id = "";
    //     // $this->id_akun = "";
    //     // $this->foto = "";
    //     // $this->tipe_postingan = "";
    //     // $this->nama_barang = $post["nama_barang"];
    //     // $this->kategori = $post["kategori"];
    //     // $this->lokasi = $post["lokasi"];
    //     // $this->tgl_postingan = time();
    //     // $this->tgl_kehilangan = $post["tgl_kehilangan"];
    //     // $this->deskripsi = $post["deskripsi"];
    //     // $this->no_telp = $post["no_telp"];
    //     // return $this->db->insert($this->_table, $this);
    // }

    public function save()
    {
        $post = $this->input->post();
        $this->id = "";
        $this->id_akun = "4";
        //$this->foto = "";
        $this->image = $this->_uploadImage();
        $this->tipe_postingan = "Kehilangan";
        $this->nama_barang = $post["nama_barang"];
        $this->kategori = $post["kategori"];
        $this->lokasi = $post["lokasi"];
        $this->tgl_postingan = time();
        $this->tgl_kehilangan = $post["tgl_kehilangan"];
        $this->deskripsi = $post["deskripsi"];
        $this->no_telp = $post["no_telp"];
        return $this->db->insert($this->_table, $this);
    }

    private function _uploadImage()
    {
        $config['upload_path']          = './uploads/';
        $config['allowed_types']        = 'gif|jpg|png';
        $config['file_name']            = $this->id;
        $config['overwrite']            = true;
        $config['max_size']             = 1024; // 1MB
        // $config['max_width']            = 1024;
        // $config['max_height']           = 768;

        $this->load->library('upload', $config);

        if ($this->upload->do_upload('foto')) {
            return $this->upload->data("file_name");
        }

        return "default.jpg";
    }
}
