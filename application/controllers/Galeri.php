<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Galeri extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Galeri_model');
        $this->load->model('User_model');
    }

    function index()
    {
        $data['judul'] = "Halaman galeri";
        // $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['galeri'] = $this->Galeri_model->get();
        $this->load->view("layout/header", $data);
        $this->load->view("data_galeri/vw_galeri", $data);
        $this->load->view("layout/footer", $data);
    }

    public function add()
    {
        $data['judul'] = "Tambah Galeri";
        // $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $this->load->view('layout/header', $data);
        $this->load->view('data_galeri/vw_add_galeri', $data);
        $this->load->view('layout/footer', $data);
    }

    public function upload()
    {
        $data = [
            'gal_title' => $this->input->post('gal_title'),
            'gal_url' => $this->input->post('gal_url'),
            'gal_jns' => $this->input->post('gal_jns'),
        ];

        $this->Galeri_model->insert($data);
        redirect("Galeri");
    }

    public function edit($gal_id)
    {
        $data['judul'] = "Edit Galeri";
        // $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['galeri'] = $this->Galeri_model->getById($gal_id);
        $this->load->view('layout/header', $data);
        $this->load->view('data_galeri/vw_edit_galeri', $data);
        $this->load->view('layout/footer', $data);
    }

    public function update()
    {
        $data = [
            'gal_title' => $this->input->post('gal_title'),
            'gal_url' => $this->input->post('gal_url'),
            'gal_jns' => $this->input->post('gal_jns'),
        ];

        $id = $this->input->post('gal_id');
        $this->Galeri_model->update(['gal_id' => $id], $data);
        redirect("Galeri");
    }
}
