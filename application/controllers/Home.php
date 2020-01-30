<?php

class Home extends CI_Controller
{
    public function index()
    {
        $data['title'] = 'Home Page';
        $data['label'] = 'Sistem Informasi Penjualan';
        $this->load->view('template/header', $data);
        $this->load->view('template/navbar', $data);
        $this->load->view('home/index');
        $this->load->view('template/footer', $data);
    }
}
