<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Rt extends CI_Controller
{
    public $table = 'rt';
    public $id = 'rt.rt_id';

    public function __construct()
    {
        parent::__construct();
        $this->load->model('Rt_model');
    }

    public function detail()
    {
        $data['judul'] = "Detail RT";
        $this->load->view('layout/header', $data);
        $this->load->view('data_rtrw/vw_detail_rt', $data);
        $this->load->view('layout/footer', $data);
    }

    public function add()
    {
        $data['judul'] = "Tambah RW";
        $this->load->view('layout/header', $data);
        $this->load->view('data_rtrw/vw_add_rt', $data);
        $this->load->view('layout/footer', $data);
    }

    public function edit()
    {
        $data['judul'] = "Edit RT";
        $this->load->view('layout/header', $data);
        $this->load->view('data_rtrw/vw_edit_rt', $data);
        $this->load->view('layout/footer', $data);
    }
}
