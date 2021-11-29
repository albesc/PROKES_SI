<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Role_Petugas extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('User_model');
        $this->load->model('Penduduk_model');
        $this->load->model('Pengaduan_model');
        $this->load->model('Tipe_model');
        $this->load->model('Berita_model');
        $this->load->model('Agenda_model');
        $this->load->model('Galeri_model');
        $this->load->model('Sapras_model');
        $this->load->model('Umkm_model');
        $this->load->model('Umkm_kat_model');
        $this->load->model('Kelahiran_model');
        $this->load->model('Kematian_model');
        $this->load->model('Permohonanpindah_model');
        $this->load->model('Rw_model');
        $this->load->model('Rt_model');
    }

    public function index()
    {
        $data['tpndk'] = $this->Penduduk_model->tpenduduk();
        $data['tpgdn'] = $this->Pengaduan_model->tpengaduan();
        $data['tagenda'] = $this->Agenda_model->tagenda();
        $data['tberita'] = $this->Berita_model->tberita();
        $data['tkelahiran'] = $this->Kelahiran_model->tkelahiran();
        $data['tkematian'] = $this->Kematian_model->tkematian();
        $data['tpermohonanpindah'] = $this->Permohonanpindah_model->tpermohonanpindah();
        $data['trt'] = $this->Rt_model->trt();
        $data['trw'] = $this->Rw_model->trw();
        $data['tsapras'] = $this->Sapras_model->tsapras();
        $data['tumkm'] = $this->Umkm_model->tumkm();
        $this->load->view("layout/header", $data);
        $this->load->view("vw_dashboard", $data);
        $this->load->view("layout/footer", $data);
    }

    // public function penduduk()
    // {
    //     $data['judul'] = "Data Penduduk";
    //     $data['penduduk'] = $this->Penduduk_model->get();
    //     $this->load->view('layout/header', $data);
    //     $this->load->view('data_penduduk/vw_penduduk', $data);
    //     $this->load->view('layout/footer', $data);
    // }

    // public function kelahiran()
    // {
    //     $data['judul'] = "Data Kelahiran";
    //     $data['kelahiran'] = $this->Kelahiran_model->get();
    //     $this->load->view('layout/header', $data);
    //     $this->load->view('data_kelahiran/vw_kelahiran', $data);
    //     $this->load->view('layout/footer', $data);
    // }

    // public function kematian()
    // {
    //     $data['judul'] = "Data Kematian";
    //     $data['kematian'] = $this->Kematian_model->get();
    //     $this->load->view('layout/header', $data);
    //     $this->load->view('data_kematian/vw_kematian', $data);
    //     $this->load->view('layout/footer', $data);
    // }

    // public function permohonanpindah()
    // {
    //     $data['judul'] = "Data Pindah Domisili";
    //     $data['permohonanpindah'] = $this->Permohonanpindah_model->get();
    //     $this->load->view('layout/header', $data);
    //     $this->load->view('data_permohonanpindah/vw_permohonanpindah', $data);
    //     $this->load->view('layout/footer', $data);
    // }

    // public function berita()
    // {
    //     $data['judul'] = "Data Berita";
    //     $data['berita'] = $this->Berita_model->get();
    //     $this->load->view('layout/header', $data);
    //     $this->load->view('data_berita/vw_berita', $data);
    //     $this->load->view('layout/footer', $data);
    // }

    // public function galeri()
    // {
    //     $data['judul'] = "Data Galeri";
    //     $data['galeri'] = $this->Galeri_model->get();
    //     $this->load->view('layout/header', $data);
    //     $this->load->view('data_galeri/vw_galeri', $data);
    //     $this->load->view('layout/footer', $data);
    // }

    // public function pengaduan()
    // {
    //     $data['judul'] = "Data Pengaduan";
    //     $data['pengaduan'] = $this->Pengaduan_model->get();
    //     $data['tipe'] = $this->Tipe_model->get();
    //     $data['user'] = $this->db->get_where('user', ['usr_email' => $this->session->userdata('email')])->row_array();
    //     $this->load->view('layout/header', $data);
    //     $this->load->view('data_pengaduan/vw_pengaduan', $data);
    //     $this->load->view('layout/footer', $data);
    // }

    // public function agenda()
    // {
    //     $data['judul'] = "Data Agenda";
    //     $data['agenda'] = $this->Agenda_model->get();
    //     $this->load->view('layout/header', $data);
    //     $this->load->view('data_agenda/vw_agenda', $data);
    //     $this->load->view('layout/footer', $data);
    // }

    // public function rt()
    // {
    //     $data['judul'] = "Data RT & RW";
    //     $data['rt'] = $this->Rt_model->get();
    //     $this->load->view('layout/header', $data);
    //     $this->load->view('data_rtrw/vw_rtrw', $data);
    //     $this->load->view('layout/footer', $data);
    // }

    // public function rw()
    // {
    //     $data['judul'] = "Data RT & RW";
    //     $data['rw'] = $this->Rw_model->get();
    //     $this->load->view('layout/header', $data);
    //     $this->load->view('data_rtrw/vw_rtrw', $data);
    //     $this->load->view('layout/footer', $data);
    // }

    // public function sapras()
    // {
    //     $data['judul'] = "Data Sarana Prasarana";
    //     $data['saprsarana'] = $this->Sapras_model->get();
    //     $this->load->view('layout/header', $data);
    //     $this->load->view('data_sapras/vw_sapras', $data);
    //     $this->load->view('layout/footer', $data);
    // }

    // public function umkm()
    // {
    //     $data['judul'] = "Data UMKM";
    //     $data['umkm'] = $this->Umkm_model->get();
    //     $data['umkm_kat'] = $this->Umkm_kat_model->get();
    //     $this->load->view('layout/header', $data);
    //     $this->load->view('data_umkm/vw_umkm', $data);
    //     $this->load->view('layout/footer', $data);
    // }
}
