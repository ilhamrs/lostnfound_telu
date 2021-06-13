<?php
defined('BASEPATH') or exit('No direct script access allowed');
class M_Profil extends CI_Model
{
    public function getDatadiri($idpengguna)
    {
        $this->db->select('*');
        $this->db->from('akun_pengguna');
        $this->db->join('tb_posting', 'akun_pengguna.ID_akun = tb_posting.ID_akun');
        $this->db->where('username', $idpengguna);

        $query = $this->db->get();
        return $query->result();
    }
    
}
