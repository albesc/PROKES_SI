<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Kematian extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        // $this->load->model('Kematian_model');
    }

    public function add()
    {
        $data['judul'] = "Tambah Kematian";
        $this->load->view('layout/header', $data);
        $this->load->view('data_kematian/vw_add_kematian', $data);
        $this->load->view('layout/footer', $data);
    }

    public function edit()
    {
        $data['judul'] = "Edit Kematian";
        $this->load->view('layout/header', $data);
        $this->load->view('data_kematian/vw_edit_kematian', $data);
        $this->load->view('layout/footer', $data);
    }

    public function detail()
    {
        $data['judul'] = "Detail Kematian";
        $this->load->view('layout/header', $data);
        $this->load->view('data_kematian/vw_detail_kematian', $data);
        $this->load->view('layout/footer', $data);
    }
}
