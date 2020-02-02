<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Kategori_model extends CI_Model
{
    public function get()
    {
        $this->db->order_by('id', 'DESC');
        return $this->db->get('tb_kategori')->result_array();
    }

    public function getKategoriById($id)
    {
        return $this->db->get_where('tb_kategori', ['id' => $id])->row_array();
    }

    public function ubahKategori()
    {
        $data = [
            "nama" => $this->input->post('nama', true)
        ];

        $this->db->where('id', $this->input->post('id'));
        $this->db->update('tb_kategori', $data);
    }
}
