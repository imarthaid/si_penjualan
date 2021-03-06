<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Produk extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Produk_model');
    }

    public function index()
    {
        $data['user'] = $this->db->get_where('tb_users', ['email' => $this->session->userdata('email')])->row_array();
        $data['produk'] = $this->Produk_model->get();
        // $data['kategori'] = $this->Produk_model->getkategori();
        $data['title'] = 'Produk Page';
        $data['label'] = 'Sistem Informasi Penjualan';
        $data['page'] = 'Produk';
        $data['page_url'] = base_url('produk');
        $this->load->view('template/header', $data);
        $this->load->view('template/navbar', $data);
        $this->load->view('produk/index');
        $this->load->view('template/footer', $data);
    }

    public function add()
    {
        $data['user'] = $this->db->get_where('tb_users', ['email' => $this->session->userdata('email')])->row_array();
        $data['produk'] = $this->Produk_model->get();
        $data['kategori'] = $this->Produk_model->getkategori();
        $data['title'] = 'Tambah Produk';
        $data['label'] = 'Sistem Informasi Penjualan';
        $data['kode_produk'] = $this->Produk_model->getKode();
        $this->load->view('template/header', $data);
        $this->load->view('template/navbar', $data);
        $this->load->view('produk/add');
        $this->load->view('template/footer', $data);
    }

    public function edit($id)
    {
        $data['user'] = $this->db->get_where('tb_users', ['email' => $this->session->userdata('email')])->row_array();
        $data['produk'] = $this->Produk_model->get();
        $data['produkId'] = $this->Produk_model->getById($id);
        $data['kategori'] = $this->Produk_model->getkategori();
        $data['title'] = 'Edit Produk';
        $data['label'] = 'Sistem Informasi Penjualan';
        $data['kode_produk'] = $this->Produk_model->getKode();
        $this->load->view('template/header', $data);
        $this->load->view('template/navbar', $data);
        $this->load->view('produk/edit');
        $this->load->view('template/footer', $data);
    }

    public function tambah()
    {
        $data =  [
            'nama' => $this->input->post('nama'),
            'kode' => $this->input->post('kode'),
            'id_kategori' => $this->input->post('id_kategori'),
            'stok' => $this->input->post('stok'),
            'modal' => $this->input->post('modal'),
            'jual' => $this->input->post('jual'),
        ];
        $this->db->insert('tb_produk', $data);
        redirect('produk');
    }

    public function hapus($id)
    {
        $this->db->where('id', $id);
        $this->db->delete('tb_produk');
        redirect('produk');
    }

    public function ubah()
    {
        $data =  [
            'nama' => $this->input->post('nama'),
            'kode' => $this->input->post('kode'),
            'id_kategori' => $this->input->post('id_kategori'),
            'stok' => $this->input->post('stok'),
            'modal' => $this->input->post('modal'),
            'jual' => $this->input->post('jual'),
        ];

        $this->db->where('id', $this->input->post('id'));
        $this->db->update('tb_produk', $data);
        redirect('produk');
    }
}
