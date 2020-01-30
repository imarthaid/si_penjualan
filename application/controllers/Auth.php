<?php

class Auth extends CI_Controller
{
    public function index()
    {
        $data['title'] = 'Login Page';
        $data['label'] = 'Sistem Informasi Penjualan';
        $this->load->view('template/auth_header', $data);
        $this->load->view('auth/index');
        $this->load->view('template/auth_footer');
    }

    public function regist()
    {
        $data['title'] = 'Registation Page';
        $data['label'] = 'Sistem Informasi Penjualan';
        $this->load->view('template/auth_header', $data);
        $this->load->view('auth/regist');
        $this->load->view('template/auth_footer');
    }
}
