<?php
defined('BASEPATH') or exit('No direct script access allowed');
class M_Login extends CI_Model
{
    public function Login($username, $password, $table)
    {
        $this->db->select('*');
        $this->db->from($table);
        $this->db->where('username', $username);
        $this->db->where('password', $password);
        $this->db->limit(1);

        $query = $this->db->get();
        if ($query->num_rows() == 1) {
            $data = $query->row();
            $dataDiri = array(
                'Nama_Lengkap' => $data->Nama_Lengkap,
                'username' => $data->username,
                'Email'     => $data->Email,

                'status'    => 'login'
            );
            $this->session->set_userdata($dataDiri);
            return true;
        } else {
            return false;
        }
    }
}
