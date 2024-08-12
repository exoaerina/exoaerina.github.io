<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Produk_model extends CI_Model
{
    public function getAllProduk()
    {
        $this->db->select('tb_produk.*, kategori_produk.kategori as kategori_produk');
        $this->db->from('tb_produk');
        $this->db->join('kategori_produk', 'tb_produk.kategoriproduk_id = kategori_produk.id_kategoriproduk');
        return $this->db->get()->result_array();
    }


    public function insertProduk($data)
    {
        $this->db->insert('tb_produk', $data);
    }

    public function getProdukById($id)
    {
        return $this->db->get_where('tb_produk', ['id' => $id])->row_array();
    }

    public function updateProduk($id, $data)
    {
        $this->db->where('id', $id);
        $this->db->update('tb_produk', $data);
    }

    public function deleteProduk($id)
    {
        $this->db->where('id', $id);
        $this->db->delete('tb_produk');
    }

    public function getProduk($limit, $start)
    {
        $this->db->select('tb_produk.*, kategori_produk.kategori as kategori_produk');
        $this->db->from('tb_produk');
        $this->db->join('kategori_produk', 'tb_produk.kategoriproduk_id = kategori_produk.id_kategoriproduk');
        $this->db->limit($limit, $start);
        return $this->db->get()->result_array();
    }
    
    public function countProduk()
    {
        return $this->db->count_all('tb_produk');
    }
    
    
}

