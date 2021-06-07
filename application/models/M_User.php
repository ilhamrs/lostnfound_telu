<?php defined('BASEPATH') or exit('No direct script access allowed');

class M_User extends CI_Model
{
    private $_table = "akun_pengguna";

    public function getUserByID($id)
    {
        $this->db->where('ID_akun', $id);
        $query = $this->db->get($this->_table);
        return $query->result();
    }

}
