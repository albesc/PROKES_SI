<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Penduduk extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Penduduk_model');
        $this->load->model('Rw_model');
        $this->load->model('Rt_model');
        $this->load->model('Agama_model');
        $this->load->model('Gol_darah_model');
        $this->load->model('Jns_asuransi_model');
        $this->load->model('Kewarganegaraan_model');
        $this->load->model('Pekerjaan_model');
        $this->load->model('Pendidikan_model');
        $this->load->model('Sts_hub_kel_model');
        $this->load->model('Sts_pernikahan_model');
    }

    function index()
    {
        $data['judul'] = "Halaman Mahasiswa";
        // $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['mahasiswa'] = $this->Mahasiswa_model->get();
        $this->load->view("layout/header", $data);
        $this->load->view("mahasiswa/vw_mahasiswa", $data);
        $this->load->view("layout/footer", $data);
    }

    public function add()
    {
        $data['judul'] = "Tambah Penduduk";
        $this->load->view('layout/header', $data);
        $this->load->view('data_penduduk/vw_add_penduduk', $data);
        $this->load->view('layout/footer', $data);
    }

    public function edit($pndk_id)
    {
        $data['judul'] = "Edit Penduduk";
        $data['penduduk'] = $this->Penduduk_model->getById($pndk_id);
        $this->load->view('layout/header', $data);
        $this->load->view('data_penduduk/vw_edit_penduduk', $data);
        $this->load->view('layout/footer', $data);
    }

    public function detail($pndk_id)
    {
        $data['judul'] = "Detail Penduduk";
        $data['penduduk'] = $this->Penduduk_model->getById($pndk_id);
        $data['agama'] = $this->Agama_model->get();
        $data['gol_darah'] = $this->Gol_darah_model->get();
        $data['jns_asuransi'] = $this->Jns_asuransi_model->get();
        $data['kewarganegaraan'] = $this->Kewarganegaraan_model->get();
        $data['pekerjaan'] = $this->Pekerjaan_model->get();
        $data['pendidikan'] = $this->Pendidikan_model->get();
        $data['sts_hub_kel'] = $this->Sts_hub_kel_model->get();
        $data['sts_pernikahan'] = $this->Sts_pernikahan_model->get();
        $data['rw'] = $this->Rw_model->get();
        $data['rt'] = $this->Rt_model->get();
        $this->load->view('layout/header', $data);
        $this->load->view('data_penduduk/vw_detail_penduduk', $data);
        $this->load->view('layout/footer', $data);
    }
}
