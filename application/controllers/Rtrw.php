<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Rtrw extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Rtrw_model');
    }

    public function add()
    {
        $data['judul'] = "Tambah RT dan RW";
        $this->load->view('layout/header', $data);
        $this->load->view('data_rtrw/vw_add_rtrw', $data);
        $this->load->view('layout/footer', $data);
    }
}
