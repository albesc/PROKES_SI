<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Role_Petugas extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Penduduk_model');
        $this->load->model('Pengaduan_model');
    }

    public function index()
    {
        $data['judul'] = "Dashboard";
        $this->load->view('layout/header', $data);
        $this->load->view('vw_dashboard', $data);
        $this->load->view('layout/footer', $data);
    }

    public function penduduk()
    {
        $data['judul'] = "Data Penduduk";
        $data['penduduk'] = $this->Penduduk_model->getAll();
        $this->load->view('layout/header', $data);
        $this->load->view('data_penduduk/vw_penduduk', $data);
        $this->load->view('layout/footer', $data);
    }

    public function kelahiran()
    {
        $data['judul'] = "Data Kelahiran";
        // $data['penduduk'] = $this->Penduduk_model->getAll();
        $this->load->view('layout/header', $data);
        $this->load->view('data_kelahiran/vw_kelahiran', $data);
        $this->load->view('layout/footer', $data);
    }

    public function kematian()
    {
        $data['judul'] = "Data Kematian";
        // $data['penduduk'] = $this->Penduduk_model->getAll();
        $this->load->view('layout/header', $data);
        $this->load->view('data_kematian/vw_kematian', $data);
        $this->load->view('layout/footer', $data);
    }

    public function pindahdomisili()
    {
        $data['judul'] = "Data Pindah Domisili";
        // $data['penduduk'] = $this->Penduduk_model->getAll();
        $this->load->view('layout/header', $data);
        $this->load->view('data_pindahdomisili/vw_pindahdomisili', $data);
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
        $data['pengaduan'] = $this->Pengaduan_model->getAll();
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
