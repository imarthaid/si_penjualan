<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Auth extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->library('form_validation');
    }

    public function index()
    {
        $this->form_validation->set_rules('email', 'Email', 'required|trim|valid_email');
        $this->form_validation->set_rules('password', 'Password', 'required|trim');

        if ($this->form_validation->run() == false) {
            $data['title'] = 'Login Page';
            $data['label'] = 'Sistem Informasi Penjualan';
            $this->load->view('template/auth_header', $data);
            $this->load->view('auth/index');
            $this->load->view('template/auth_footer');
        } else {
            //validasi sukses
            $this->_login();
        }
    }

    private function _login()
    {
        $email = $this->input->post('email');
        $password = $this->input->post('password');

        $user = $this->db->get_where('tb_users', ['email' => $email])->row_array();

        if ($user) {
            // jika user aktif
            if ($user['is_active'] == 1) {
                if (password_verify($password, $user['password'])) {
                    $data = [
                        'email' => $user['email'],
                        'role_id' => $user['role_id']
                    ];

                    $this->session->set_userdata($data);
                    redirect('user');
                } else {
                    $this->session->set_flashdata('password_gagal', 'aktif');
                    redirect(base_url('auth'));
                }
            } else {
                $this->session->set_flashdata('gagal', 'aktif');
                redirect(base_url('auth'));
            }
        } else {
            $this->session->set_flashdata('gagal', 'terdaftar');
            redirect(base_url('auth'));
        }
    }

    public function regist()
    {
        $this->form_validation->set_rules('name', 'Name', 'required|trim');
        $this->form_validation->set_rules('email', 'Email', 'required|trim|valid_email|is_unique[tb_users.email]', ['is_unique' => 'This email has allready registered']);
        $this->form_validation->set_rules('password1', 'Password', 'required|trim|min_length[4]|matches[password2]', ['matches' => 'Password dont matches', 'min_length' => 'Password too short']);
        $this->form_validation->set_rules('password2', 'Password', 'required|trim|matches[password1]');

        if ($this->form_validation->run() == false) {
            $data['title'] = 'Registation Page';
            $data['label'] = 'Sistem Informasi Penjualan';
            $this->load->view('template/auth_header', $data);
            $this->load->view('auth/regist');
            $this->load->view('template/auth_footer');
        } else {
            $data = [
                'name' => htmlspecialchars($this->input->post('name', true)),
                'email' => htmlspecialchars($this->input->post('email', true)),
                'image' => 'default.jgp',
                'password' => password_hash($this->input->post('password1'), PASSWORD_DEFAULT),
                'role_id' => 2,
                'is_active' => 1, // 1 = belum aktif, 2 = aktif
                'date_created' => time()
            ];

            $this->db->insert('tb_users', $data);
            $this->session->set_flashdata('pesan', 'Dibuat');
            redirect(base_url('auth'));
        }
    }

    public function logout()
    {
        $this->session->unset_userdata('email');
        $this->session->unset_userdata('role_id');
        $this->session->set_flashdata('pesan', 'Keluar');
        redirect(base_url('auth'));
    }
}
