<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Kategori extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Kategori_model');
    }
    public function index()
    {
        $data['user'] = $this->db->get_where('tb_users', ['email' => $this->session->userdata('email')])->row_array();
        $data['kategori'] = $this->Kategori_model->get();
        $data['title'] = 'Kategori Page';
        $data['label'] = 'Sistem Informasi Penjualan';
        $this->load->view('template/header', $data);
        $this->load->view('template/navbar', $data);
        $this->load->view('kategori/index');
        $this->load->view('template/footer', $data);
    }

    public function tambah()
    {
        $data =  ['nama' => $this->input->post('nama')];
        $this->db->insert('tb_kategori', $data);
        redirect('kategori');
    }

    public function hapus($id)
    {
        $this->db->where('id', $id);
        $this->db->delete('tb_kategori');
        redirect('kategori');
    }
}
