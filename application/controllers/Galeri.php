<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Galeri extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Galeri_model');
    }

    public function add()
    {
        $data['judul'] = "Tambah Galeri";
        $this->load->view('layout/header', $data);
        $this->load->view('data_galeri/vw_add_galeri', $data);
        $this->load->view('layout/footer', $data);
    }

    public function edit()
    {
        $data['judul'] = "Edit Galeri";
        $this->load->view('layout/header', $data);
        $this->load->view('data_galeri/vw_edit_galeri', $data);
        $this->load->view('layout/footer', $data);
    }
}
