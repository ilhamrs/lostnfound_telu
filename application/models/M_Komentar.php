<?php defined('BASEPATH') or exit('No direct script access allowed');

class M_Komentar extends CI_Model
{
    private $_table = "tb_komentar";

    public $ID_komentar;
    public $ID_akun;
    public $ID_posting;
    public $isi_komentar;
    public $date;

    public function save($id_akun, $id_posting)
    {
        $post = $this->input->post();
        $this->ID_komentar = "";
        $this->ID_akun = $id_akun;
        $this->ID_posting = $id_posting;
        $this->isi_komentar = $post["isi_komentar"];
        $this->date = date("Y-m-d H:i:s");
        return $this->db->insert($this->_table, $this);
    }

    public function getCommentByIDPost($id)
    {
        $this->db->where('ID_posting', $id);
        $query = $this->db->get($this->_table);
        return $query->result();
    }

}
