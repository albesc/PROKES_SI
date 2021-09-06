<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Umkm extends CI_Controller
{
    // public function __construct()
    // {
    //     parent::__construct();
    //     $this->load->model('Umkm_model');
    // }

    public function add()
    {
        $data['judul'] = "Tambah UMKM";
        $this->load->view('layout/header', $data);
        $this->load->view('data_umkm/vw_add_umkm', $data);
        $this->load->view('layout/footer', $data);
    }

    public function edit()
    {
        $data['judul'] = "Edit UMKM";
        $this->load->view('layout/header', $data);
        $this->load->view('data_umkm/vw_edit_umkm', $data);
        $this->load->view('layout/footer', $data);
    }

    public function detail()
    {
        $data['judul'] = "Detail UMKM";
        $this->load->view('layout/header', $data);
        $this->load->view('data_umkm/vw_detail_umkm', $data);
        $this->load->view('layout/footer', $data);
    }
}
