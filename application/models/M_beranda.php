<?php
defined('BASEPATH') or exit('No direct script access allowed');
class M_beranda extends CI_Model
{
    public function get_all($limit, $start, $kategori)
    {

        if ($kategori != "") {
            $this->session->set_userdata('kategori', $kategori);
            $sesionKategori = $this->session->userdata('kategori') ?: '';
            $this->db->where('kategori', $sesionKategori);
        } 
        $query = $this->db->get('tb_posting', $limit, $start);

        return $query->result_array();
    }

    public function getKategori()
    {

        $query = $this->db->get('tb_kategori');
        return $query->result_array();
    }


    public function jumlahRow($kategori)
    {
        $this->db->select_sum('*');
        if ($kategori != "") {
            $this->db->where('kategori', $kategori);
        }
        $query = $this->db->count_all_results('tb_posting');
        return $query;
    }

    //khusus barang ditemukan
    public function getbarangDitemukan($tipebarang, $limit, $start)
    {
        $this->db->where('tipe_posting', $tipebarang);
        $query = $this->db->get('tb_posting', $limit, $start);
        return $query->result_array();
    }
    //jumlah barang ditemukan
    public function jumlahbarangDitemukan($tipebarang)
    {
        $this->db->select_sum('*');
        $this->db->where('tipe_posting', $tipebarang);
        $query = $this->db->count_all_results('tb_posting');
        return $query;
    }

    //khusus barang Hilang
    public function getbarangHilang($tipebarang, $limit, $start)
    {
        $this->db->where('tipe_posting', $tipebarang);
        $query = $this->db->get('tb_posting', $limit, $start);
        return $query->result_array();
    }
    //jumlah barang hilang
    public function jumlahbarangHilang($tipebarang)
    {
        $this->db->select_sum('*');
        $this->db->where('tipe_posting', $tipebarang);
        $query = $this->db->count_all_results('tb_posting');
        return $query;
    }
}
