<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Kelahiran extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        // $this->load->model('Kelahiran_model');
    }

    public function add()
    {
        $data['judul'] = "Tambah Kelahiran";
        $this->load->view('layout/header', $data);
        $this->load->view('data_kelahiran/vw_add_kelahiran', $data);
        $this->load->view('layout/footer', $data);
    }

    public function edit()
    {
        $data['judul'] = "Edit Kelahiran";
        $this->load->view('layout/header', $data);
        $this->load->view('data_kelahiran/vw_edit_kelahiran', $data);
        $this->load->view('layout/footer', $data);
    }

    public function detail()
    {
        $data['judul'] = "Detail Kelahiran";
        $this->load->view('layout/header', $data);
        $this->load->view('data_kelahiran/vw_detail_kelahiran', $data);
        $this->load->view('layout/footer', $data);
    }
}
