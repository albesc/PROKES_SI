<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Berita extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Berita_model');
    }

    public function add()
    {
        $data['judul'] = "Tambah Berita";
        $this->load->view('layout/header', $data);
        $this->load->view('data_berita/vw_add_berita', $data);
        $this->load->view('layout/footer', $data);
    }

    public function edit()
    {
        $data['judul'] = "Edit Berita";
        $this->load->view('layout/header', $data);
        $this->load->view('data_berita/vw_edit_berita', $data);
        $this->load->view('layout/footer', $data);
    }
}
