<?php
defined('BASEPATH') or exit('No direct script access allowed');
class Auth extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('User_model', 'userm');
        // $this->load->model('Role_model', 'rolem');
        // $this->load->model('Status_model', 'stsm');
    }

    function index()
    {
        if ($this->session->userdata('email')) {
            redirect('Role_Petugas');
        }
        $this->form_validation->set_rules('email', 'Email', 'trim|required|valid_email', [
            'valid_email' => 'Email Harus Valid',
            'required' => 'Email Wajib di isi'
        ]);
        $this->form_validation->set_rules('password', 'Password', 'trim|required', [
            'required' => 'Password Wajib di isi'
        ]);
        if ($this->form_validation->run() == false) {
            $this->load->view("layout/auth_header.php");
            $this->load->view("auth/login");
            $this->load->view("layout/auth_footer.php");
        } else {
            $this->cek_login();
        }
    }

    function cek_login()
    {
        $email = $this->input->post('email');
        $password = $this->input->post('password');
        $user = $this->db->get_where('user', ['usr_email' => $email])->row_array();
        if ($user) {
            if (password_verify($password, $user['usr_pass'])) {
                $data = [
                    'email' => $user['usr_email'],
                    'role' => $user['rl_id'],
                    'id' => $user['usr_id'],
                ];
                $this->session->set_userdata($data);
                if ($user['rl_id'] == 2) {
                    redirect('Role_Petugas');
                } else {
                    redirect('Role_PetugasF');
                }
            } else {
                $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Password salah!</div>');
                redirect('auth');
            }
        } else {
            $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Email belum terdaftar!</div>');
            redirect('auth');
        }
    }

    function logout()
    {
        $this->session->unset_userdata('email');
        $this->session->unset_userdata('role');
        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Berhasil Logout!</div>');
        redirect('auth');
    }
}
