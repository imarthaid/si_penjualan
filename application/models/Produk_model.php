<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Produk_model extends CI_Model
{
    public function get()
    {
        $this->db->order_by('id', 'DESC');
        $this->db->select('tb_produk.*, tb_kategori.nama as nama_kategori');
        $this->db->from('tb_produk');
        $this->db->join('tb_kategori', 'tb_kategori.id = tb_produk.id_kategori');
        return $this->db->get()->result_array();
    }

    public function getKategori()
    {
        return $this->db->get('tb_kategori')->result_array();
    }

    public function getKode()
    {
        $this->db->select('kode');
        $query =  $this->db->get('tb_produk')->result_array();
        $query = end($query);
        $query = end($query);
        $query = explode('D', $query);
        $query = $query[1];
        $query = intval($query);
        $kode_nama = 'PROD';
        $kode_nomor = $query + 1;
        $kode_nomor = str_pad($kode_nomor, 3, '0', STR_PAD_LEFT);
        $kode = $kode_nama . $kode_nomor;
        return $kode;
    }

    public function getById($id)
    {
        $this->db->order_by('id', 'DESC');
        $this->db->select('tb_produk.*, tb_kategori.nama as nama_kategori');
        $this->db->from('tb_produk');
        $this->db->join('tb_kategori', 'tb_kategori.id = tb_produk.id_kategori');
        $this->db->where('tb_produk.id', $id);
        return $this->db->get()->row_array();
    }
}
