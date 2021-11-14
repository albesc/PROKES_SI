<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Sapras extends CI_Controller
{
    public $table = 'saprsarana';
    public $id = 'saprsarana.spr_id';

    public function __construct()
    {
        parent::__construct();
        $this->load->model('Sapras_model');
        $this->load->model('Sprjns_model');
    }

    function index()
    {
        $data['judul'] = "Halaman Sarana-Prasarana";
        // $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['saprsarana'] = $this->Sapras_model->get();
        $this->load->view('layout/header', $data);
        $this->load->view('data_sapras/vw_sapras', $data);
        $this->load->view('layout/footer', $data);
    }

    public function add()
    {
        $data['judul'] = "Tambah Sarana dan Prasarana";
        $data['saprsarana'] = $this->Sapras_model->get();
        $data['sprjns'] = $this->Sprjns_model->get();
        $this->load->view('layout/header', $data);
        $this->load->view('data_sapras/vw_add_sapras', $data);
        $this->load->view('layout/footer', $data);
    }

    public function edit($spr_id)
    {
        $data['judul'] = "Edit Sarana dan Prasarana";
        $data['saprsarana'] = $this->Sapras_model->getById($spr_id);
        $data['sprjns'] = $this->Sprjns_model->get();
        $this->load->view('layout/header', $data);
        $this->load->view('data_sapras/vw_edit_sapras', $data);
        $this->load->view('layout/footer', $data);
    }

    public function detail($spr_id)
    {
        $data['judul'] = "Detail Sarana dan Prasarana";
        $data['saprsarana'] = $this->Sapras_model->getById($spr_id);
        $data['sprjns'] = $this->Sprjns_model->get();
        $this->load->view('layout/header', $data);
        $this->load->view('data_sapras/vw_detail_sapras', $data);
        $this->load->view('layout/footer', $data);
    }
}
