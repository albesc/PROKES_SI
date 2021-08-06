<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Penduduk extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Penduduk_model');
    }

    public function add()
    {
        $data['judul'] = "Tambah Penduduk";
        $this->load->view('layout/header', $data);
        $this->load->view('data_penduduk/vw_add_penduduk', $data);
        $this->load->view('layout/footer', $data);
    }
}