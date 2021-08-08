<?php
defined('BASEPATH') or exit('No direct script access allowed');

class RtRw extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        // $this->load->model('Agenda_model');
    }

    public function add()
    {
        $data['judul'] = "Tambah RT RW";
        $this->load->view('layout/header', $data);
        $this->load->view('data_rtrw/vw_add_rtrw', $data);
        $this->load->view('layout/footer', $data);
    }

    public function edit()
    {
        $data['judul'] = "Edit RT RW";
        $this->load->view('layout/header', $data);
        $this->load->view('data_rtrw/vw_edit_rtrw', $data);
        $this->load->view('layout/footer', $data);
    }
}
