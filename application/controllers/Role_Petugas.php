<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Role_Petugas extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Penduduk_model');
        $this->load->model('Pengaduan_model');
        $this->load->model('Berita_model');
        $this->load->model('Agenda_model');
        $this->load->model('Sapras_model');
        $this->load->model('Umkm_model');
        $this->load->model('Umkm_kat_model');
        $this->load->model('Kelahiran_model');
        $this->load->model('Kematian_model');
        $this->load->model('Pindahdomisili_model');
        $this->load->model('Rw_model');
        $this->load->model('Rt_model');
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
        $data['penduduk'] = $this->Penduduk_model->get();
        $this->load->view('layout/header', $data);
        $this->load->view('data_penduduk/vw_penduduk', $data);
        $this->load->view('layout/footer', $data);
    }

    public function kelahiran()
    {
        $data['judul'] = "Data Kelahiran";
        $data['kelahiran'] = $this->Kelahiran_model->get();
        // $data['penduduk'] = $this->Penduduk_model->getAll();
        $this->load->view('layout/header', $data);
        $this->load->view('data_kelahiran/vw_kelahiran', $data);
        $this->load->view('layout/footer', $data);
    }

    public function kematian()
    {
        $data['judul'] = "Data Kematian";
        $data['kematian'] = $this->Kematian_model->get();
        $this->load->view('layout/header', $data);
        $this->load->view('data_kematian/vw_kematian', $data);
        $this->load->view('layout/footer', $data);
    }

    public function pindahdomisili()
    {
        $data['judul'] = "Data Pindah Domisili";
        $data['pindahdomisili'] = $this->Pindahdomisili_model->get();
        $this->load->view('layout/header', $data);
        $this->load->view('data_pindahdomisili/vw_pindahdomisili', $data);
        $this->load->view('layout/footer', $data);
    }

    public function berita()
    {
        $data['judul'] = "Data Berita";
        $data['berita'] = $this->Berita_model->get();
        $this->load->view('layout/header', $data);
        $this->load->view('data_berita/vw_berita', $data);
        $this->load->view('layout/footer', $data);
    }

    public function galeri()
    {
        $data['judul'] = "Data Galeri";
        $data['galeri'] = $this->Galeri_model->get();
        // $data['p_byJk'] = $this->Galeri_model->getByJK();
        $this->load->view('layout/header', $data);
        $this->load->view('data_galeri/vw_galeri', $data);
        $this->load->view('layout/footer', $data);
    }

    public function pengaduan()
    {
        $data['judul'] = "Data Pengaduan";
        $data['pengaduan'] = $this->Pengaduan_model->get();
        // $data['p_byJk'] = $this->Pengaduan_model->getByJK();
        $this->load->view('layout/header', $data);
        $this->load->view('data_pengaduan/vw_pengaduan', $data);
        $this->load->view('layout/footer', $data);
    }

    public function agenda()
    {
        $data['judul'] = "Data Agenda";
        $data['agenda'] = $this->Agenda_model->get();
        $this->load->view('layout/header', $data);
        $this->load->view('data_agenda/vw_agenda', $data);
        $this->load->view('layout/footer', $data);
    }

    public function rt()
    {
        $data['judul'] = "Data RT & RW";
        $data['rt'] = $this->Rt_model->get();
        $this->load->view('layout/header', $data);
        $this->load->view('data_rtrw/vw_rtrw', $data);
        $this->load->view('layout/footer', $data);
    }

    public function rw()
    {
        $data['judul'] = "Data RT & RW";
        $data['rw'] = $this->Rw_model->get();
        $this->load->view('layout/header', $data);
        $this->load->view('data_rtrw/vw_rtrw', $data);
        $this->load->view('layout/footer', $data);
    }

    public function sapras()
    {
        $data['judul'] = "Data Sarana Prasarana";
        $data['saprsarana'] = $this->Sapras_model->get();
        $this->load->view('layout/header', $data);
        $this->load->view('data_sapras/vw_sapras', $data);
        $this->load->view('layout/footer', $data);
    }

    public function umkm()
    {
        $data['judul'] = "Data UMKM";
        $data['umkm'] = $this->Umkm_model->get();
        $data['umkm_kat'] = $this->Umkm_kat_model->get();
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
