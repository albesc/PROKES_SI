<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Pengaduan extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Pengaduan_model');
    }

    public function resp()
    {
        $data['judul'] = "Tanggapi Pengaduan";
        $this->load->view('layout/header', $data);
        $this->load->view('data_pengaduan/vw_resp_pengaduan', $data);
        $this->load->view('layout/footer', $data);
    }
}
