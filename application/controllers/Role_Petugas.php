<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Role_Petugas extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Penduduk_model');
    }

    public function index()
    {
        $data['judul'] = "Data Penduduk";
        // $data['p_byJk'] = $this->Penduduk_model->getByJK();
        $this->load->view('layout/header', $data);
        $this->load->view('data_penduduk/vw_penduduk', $data);
        $this->load->view('layout/footer', $data);
    }

    public function berita()
    {
        $data['judul'] = "Data Berita";
        // $data['p_byJk'] = $this->Berita_model->getByJK();
        $this->load->view('layout/header', $data);
        $this->load->view('data_berita/vw_berita', $data);
        $this->load->view('layout/footer', $data);
    }

    public function galeri()
    {
        $data['judul'] = "Data Galeri";
        // $data['p_byJk'] = $this->Galeri_model->getByJK();
        $this->load->view('layout/header', $data);
        $this->load->view('data_galeri/vw_galeri', $data);
        $this->load->view('layout/footer', $data);
    }

    public function pengaduan()
    {
        $data['judul'] = "Data Pengaduan";
        // $data['p_byJk'] = $this->Pengaduan_model->getByJK();
        $this->load->view('layout/header', $data);
        $this->load->view('data_pengaduan/vw_pengaduan', $data);
        $this->load->view('layout/footer', $data);
    }

    public function agenda()
    {
        $data['judul'] = "Data Agenda";
        // $data['p_byJk'] = $this->Agenda_model->getByJK();
        $this->load->view('layout/header', $data);
        $this->load->view('data_agenda/vw_agenda', $data);
        $this->load->view('layout/footer', $data);
    }

    public function rtrw()
    {
        $data['judul'] = "Data RT & RW";
        // $data['p_byJk'] = $this->Rtrw_model->getByJK();
        $this->load->view('layout/header', $data);
        $this->load->view('data_rtrw/vw_rtrw', $data);
        $this->load->view('layout/footer', $data);
    }

    public function sapras()
    {
        $data['judul'] = "Data Sarana Prasarana";
        // $data['p_byJk'] = $this->Sapras_model->getByJK();
        $this->load->view('layout/header', $data);
        $this->load->view('data_sapras/vw_sapras', $data);
        $this->load->view('layout/footer', $data);
    }

    public function umkm()
    {
        $data['judul'] = "Data UMKM";
        // $data['p_byJk'] = $this->Umkm_model->getByJK();
        $this->load->view('layout/header', $data);
        $this->load->view('data_umkm/vw_umkm', $data);
        $this->load->view('layout/footer', $data);
    }

    public function pooling()
    {
        $data['judul'] = "Data Pooling";
        // $data['p_byJk'] = $this->Pooling_model->getByJK();
        $this->load->view('layout/header', $data);
        $this->load->view('data_pooling/vw_pooling', $data);
        $this->load->view('layout/footer', $data);
    }
}
