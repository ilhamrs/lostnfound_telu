<?php
defined('BASEPATH') or exit('No direct script access allowed');
class M_beranda extends CI_Model
{
    public function get_all($limit, $start, $kata = null, $urutkan, $kategori)
    {

        if ($kategori != "") {
            $this->db->where('kategori', $kategori);
        }

        if ($kata) {
            $this->db->like('nama_barang', $kata);
        }
        if ($urutkan == "terlama") {
            $this->db->order_by('tgl_posting', 'ASC');
        } else {
            $this->db->order_by('tgl_posting', 'DESC');
        }

        $query =  $this->db->get('tb_posting', $limit, $start)->result_array();
        return $query;
    }


    public function getKategori()
    {

        $query = $this->db->get('tb_kategori');
        return $query->result_array();
    }


    public function jumlahRow()
    {
        $this->db->select_sum('*');
        // if ($kategori != "") {
        //     $this->db->where('kategori', $kategori);
        // }
        $query = $this->db->count_all_results('tb_posting');
        return $query;
    }

    //khusus barang khusus -- barang ditemukan dan barang hilang
    public function getbarangKhusus($tipebarang, $limit, $start, $urutkan, $kata, $kategori)
    {
        $this->db->where('tipe_posting', $tipebarang);

        if ($kategori != "") {
            $this->db->where('kategori', $kategori);
        }

        if ($kata) {
            $this->db->like('nama_barang', $kata);
        }
        if ($urutkan == "terlama") {
            $this->db->order_by('tgl_posting', 'ASC');
        } else {
            $this->db->order_by('tgl_posting', 'DESC');
        }
        $this->db->where('tipe_posting', $tipebarang);
        $query = $this->db->get('tb_posting', $limit, $start);
        return $query->result_array();
    }
}
