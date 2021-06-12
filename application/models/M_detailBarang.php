<?php
defined('BASEPATH') or exit('No direct script access allowed');
class M_detailBarang extends CI_Model
{
    public function getbyID($id)
    {
        $this->db->where('ID_posting', $id);
        $this->db->join('akun_pengguna', 'tb_posting.ID_akun = akun_pengguna.ID_akun');
        $query = $this->db->get('tb_posting');
        return $query->result();
    }

    public function deleteCommentByID($id)
    {
        $this->db->where('ID_posting', $id);
        //$this->db->join('tb_komentar', 'tb_posting.ID_posting = tb_komentar.ID_posting');
        //$query = $this->db->delete('tb_komentar');
        //return $query->result();
        $this->db->delete('tb_komentar');
    }

    public function deletePostByID($id)
    {
        $this->db->where('ID_posting', $id);
        //$this->db->join('tb_komentar', 'tb_posting.ID_posting = tb_komentar.ID_posting');
        //$query = $this->db->delete('tb_posting');
        //return $query->result();
        $this->db->delete('tb_posting');
    }
}
