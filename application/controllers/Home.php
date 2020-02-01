<?php

class Home extends CI_Controller
{
    public function index()
    {
        $data['user'] = $this->db->get_where('tb_users', ['email' => $this->session->userdata('email')])->row_array();
        $data['title'] = 'Home Page';
        $data['label'] = 'Sistem Informasi Penjualan';
        $this->load->view('template/header', $data);
        $this->load->view('template/navbar', $data);
        $this->load->view('home/index');
        $this->load->view('template/footer', $data);
    }
}
