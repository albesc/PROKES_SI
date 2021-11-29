<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Role_Petugas extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('User_model');
        $this->load->model('Penduduk_model');
        $this->load->model('Dashboard_model');
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
        $data['jml_usia'] = $this->calcUsia();
        $data['tpermohonanpindah'] = $this->Permohonanpindah_model->tpermohonanpindah();
        $data['trt'] = $this->Rt_model->trt();
        $data['trw'] = $this->Rw_model->trw();
        $data['tsapras'] = $this->Sapras_model->tsapras();
        $data['tumkm'] = $this->Umkm_model->tumkm();
        $data['countjk'] = $this->Dashboard_model->charts();
        $this->load->view("layout/header", $data);
        $this->load->view("vw_dashboard", $data);
        $this->load->view("layout/footer", $data);
    }
    public function calcUsia()
    {
        $dataUmur = [
            '0-4' => 0, '5-9' => 0, '10-14' => 0, '15-19' => 0, '20-24' => 0, '25-29' => 0, '30-34' => 0, '35-39' => 0,
            '40-44' => 0, '45-49' => 0, '50-54' => 0, '55-59' => 0, '60-64' => 0, '65-69' => 0, '70-74' => 0, '75+' => 0
        ];
        $list_tgl_lahir = $this->Penduduk_model->getByUmur();
        foreach ($list_tgl_lahir as $i) :
            $thn = date_format(date_create($i['pndk_tgl_lahir']), "Y");
            $thnNow = date("Y");

            $age = $thnNow - $thn;
            if (date_create($i['pndk_tgl_lahir']) < date("Y-m-d"))
                $age--;

            if ($age >= 0 && $age <= 4) {
                $dataUmur['0-4'] += 1;
            } else if ($age >= 5 && $age <= 9) {
                $dataUmur['5-9'] += 1;
            } else if ($age >= 10 && $age <= 14) {
                $dataUmur['10-14'] += 1;
            } else if ($age >= 15 && $age <= 19) {
                $dataUmur['15-19'] += 1;
            } else if ($age >= 20 && $age <= 24) {
                $dataUmur['20-24'] += 1;
            } else if ($age >= 25 && $age <= 29) {
                $dataUmur['25-29'] += 1;
            } else if ($age >= 30 && $age <= 34) {
                $dataUmur['30-34'] += 1;
            } else if ($age >= 35 && $age <= 39) {
                $dataUmur['35-39'] += 1;
            } else if ($age >= 40 && $age <= 44) {
                $dataUmur['40-44'] += 1;
            } else if ($age >= 45 && $age <= 49) {
                $dataUmur['45-49'] += 1;
            } else if ($age >= 50 && $age <= 54) {
                $dataUmur['50-54'] += 1;
            } else if ($age >= 55 && $age <= 59) {
                $dataUmur['55-59'] += 1;
            } else if ($age >= 60 && $age <= 64) {
                $dataUmur['60-64'] += 1;
            } else if ($age >= 65 && $age <= 69) {
                $dataUmur['65-69'] += 1;
            } else if ($age >= 70 && $age <= 74) {
                $dataUmur['70-74'] += 1;
            } else if ($age >= 75) {
                $dataUmur['75+'] += 1;
            }
        endforeach;
        return $dataUmur;
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
