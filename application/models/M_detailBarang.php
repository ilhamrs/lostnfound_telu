<?php
defined('BASEPATH') or exit('No direct script access allowed');
class M_detailBarang extends CI_Model
{
    public function getbyID($id)
    {
        $this->db->where('ID_posting', $id);
        $query = $this->db->get('tb_posting');
        return $query->result();
    }
}
