<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Pindahdomisili extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('PindahDomisili_model');
    }

    function index()
    {
        $data['judul'] = "Halaman Pindah Domisili";
        $data['pindahdomisili'] = $this->PindahDomisili_model->get();
        $this->load->view("layout/header", $data);
        $this->load->view("data_pindahdomisili/vw_pindahdomisili", $data);
        $this->load->view("layout/footer", $data);
    }

    public function add()
    {
        $data['judul'] = "Tambah Data Pindah Domisili";
        $this->load->view('layout/header', $data);
        $this->load->view('data_pindahdomisili/vw_add_pindahdomisili', $data);
        $this->load->view('layout/footer', $data);
    }

    public function add_keluarga()
    {
        $data['judul'] = "Tambah Data Pindah Domisili";
        $this->load->view('layout/header', $data);
        $this->load->view('data_pindahdomisili/vw_add_keluarga', $data);
        $this->load->view('layout/footer', $data);
    }

    public function edit()
    {
        $data['judul'] = "Edit Data Pindah Domisili";
        $this->load->view('layout/header', $data);
        $this->load->view('data_pindahdomisili/vw_edit_pindahdomisili', $data);
        $this->load->view('layout/footer', $data);
    }

    public function edit_keluarga()
    {
        $data['judul'] = "Edit Data Pindah Domisili";
        $this->load->view('layout/header', $data);
        $this->load->view('data_pindahdomisili/vw_edit_keluarga', $data);
        $this->load->view('layout/footer', $data);
    }

    public function detail()
    {
        $data['judul'] = "Detail Data Pindah Domisili";
        $this->load->view('layout/header', $data);
        $this->load->view('data_pindahdomisili/vw_detail_pindahdomisili', $data);
        $this->load->view('layout/footer', $data);
    }
}
