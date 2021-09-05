<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Rt extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Rt_model');
    }

    public function detail_rt()
    {
        $data['judul'] = "Detail RW";
        $this->load->view('layout/header', $data);
        $this->load->view('data_rtrw/vw_detail_rt', $data);
        $this->load->view('layout/footer', $data);
    }

    public function add_rt()
    {
        $data['judul'] = "Tambah RW";
        $this->load->view('layout/header', $data);
        $this->load->view('data_rtrw/vw_add_rt', $data);
        $this->load->view('layout/footer', $data);
    }

    public function edit_rt()
    {
        $data['judul'] = "Edit RT";
        $this->load->view('layout/header', $data);
        $this->load->view('data_rtrw/vw_edit_rt', $data);
        $this->load->view('layout/footer', $data);
    }
}
