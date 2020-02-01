<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Kategori_model extends CI_Model
{
    public function get()
    {
        $this->db->order_by('id', 'DESC');
        return $this->db->get('tb_kategori')->result_array();
    }
}
