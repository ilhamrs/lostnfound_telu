<?php
defined('BASEPATH') or exit('No direct script access allowed');
class M_notif extends CI_Model
{
    public function getNotif()
    {
        $this->db->select('*');
        $this->db->order_by('tgl_posting', 'DESC');
        return $this->db->get('tb_posting', 4, 0)->result_array();
    }
}
