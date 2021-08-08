<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Sapras extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Sapras_model');
    }

    public function add()
    {
        $data['judul'] = "Tambah Sarana dan Prasarana";
        $this->load->view('layout/header', $data);
        $this->load->view('data_sapras/vw_add_sapras', $data);
        $this->load->view('layout/footer', $data);
    }

    public function edit()
    {
        $data['judul'] = "Edit Sarana dan Prasarana";
        $this->load->view('layout/header', $data);
        $this->load->view('data_sapras/vw_edit_sapras', $data);
        $this->load->view('layout/footer', $data);
    }
}
