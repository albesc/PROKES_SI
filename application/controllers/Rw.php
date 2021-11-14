<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Rtrw extends CI_Controller
{
    public $table = 'rw';
    public $id = 'rw.rw_id';

    public function __construct()
    {
        parent::__construct();
        $this->load->model('Rw_model');
    }

    public function detail()
    {
        $data['judul'] = "Detail RW";
        $this->load->view('layout/header', $data);
        $this->load->view('data_rtrw/vw_detail_rw', $data);
        $this->load->view('layout/footer', $data);
    }

    public function add()
    {
        $data['judul'] = "Tambah RW";
        $this->load->view('layout/header', $data);
        $this->load->view('data_rtrw/vw_add_rw', $data);
        $this->load->view('layout/footer', $data);
    }

    public function edit()
    {
        $data['judul'] = "Edit RW";
        $this->load->view('layout/header', $data);
        $this->load->view('data_rtrw/vw_edit_rw', $data);
        $this->load->view('layout/footer', $data);
    }
}
