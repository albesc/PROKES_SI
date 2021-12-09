<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Permohonanpindah extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        is_logged_in2();
        $this->load->model('Permohonanpindah_model');
        $this->load->model('Rw_model');
        $this->load->model('Rt_model');
    }

    function index()
    {
        $jumlah_data = $this->Permohonanpindah_model->tpermohonanpindah();
        $config["base_url"] = base_url() . "Permohonanpindah/index";
        $config["total_rows"] = $jumlah_data;
        $config["per_page"] = 10;
        $from = $this->uri->segment(3);

        $config['full_tag_open'] = '<ul class="pagination pagination-lg"><li class="page-item">';
        $config['full_tag_close'] = '</ul></li">';

        $config['first_link'] = 'First';
        $config['first_tag_open'] = '<li class="page-item">';
        $config['first_tag_close'] = '</li>';

        $config['last_link'] = 'Last';
        $config['last_tag_open'] = '<li class="page-item">';
        $config['last_tag_close'] = '</li>';

        $config['next_link'] = '&raquo';
        $config['next_tag_open'] = '<li class="page-item">';
        $config['next_tag_close'] = '</li>';

        $config['prev_link'] = '&laquo';
        $config['prev_tag_open'] = '<li class="page-item">';
        $config['prev_tag_close'] = '</li>';

        $config['cur_tag_open'] = '<li class="page-item active" ><a class="page-link">';
        $config['cur_tag_close'] = '</a></li>';

        $config['num_tag_open'] = '<li class="page-item" >';
        $config['num_tag_close'] = '</li>';

        $config['attributes'] = array('class' => 'page-link');

        $this->pagination->initialize($config);
        $data['permohonanpindah'] = $this->Permohonanpindah_model->get($config['per_page'], $from);
        $data['links'] = $this->pagination->create_links();

        $data['judul'] = "Halaman Permohonan Pindah";
        // $data['permohonanpindah'] = $this->Permohonanpindah_model->get();
        $this->load->view("layout/header", $data);
        $this->load->view("data_permohonanpindah/vw_permohonanpindah", $data);
        $this->load->view("layout/footer", $data);
    }

    public function add()
    {
        $data['judul'] = "Tambah Permohonan Pindah";
        $data['rw'] = $this->Rw_model->get1();
        $data['rt'] = $this->Rt_model->get();
        $this->load->view('layout/header', $data);
        $this->load->view('data_permohonanpindah/vw_add_permohonanpindah', $data);
        $this->load->view('layout/footer', $data);
    }

    public function add_keluarga()
    {
        $data['judul'] = "Tambah Keluarga yang Pindah";
        $this->load->view('layout/header', $data);
        $this->load->view('data_permohonanpindah/vw_add_keluarga', $data);
        $this->load->view('layout/footer', $data);
    }

    public function upload()
    {
        $data = [
            'no_kk' => $this->input->post('no_kk'),
            'nama_kepala_keluarga' => $this->input->post('nama_kepala_keluarga'),
            'alamat' => $this->input->post('alamat'),
            'rt_asal' => $this->input->post('rt_asal'),
            'rw_asal' => $this->input->post('rw_asal'),
            'dusun_asal' => $this->input->post('dusun_asal'),
            'desa_kelurahan_asal' => $this->input->post('desa_kelurahan_asal'),
            'kab_kota_asal' => $this->input->post('kab_kota_asal'),
            'kecamatan_asal' => $this->input->post('kecamatan_asal'),
            'provinsi_asal' => $this->input->post('provinsi_asal'),
            'kode_pos_asal' => $this->input->post('kode_pos_asal'),
            'telepon_asal' => $this->input->post('telepon_asal'),
            'nik_pemohon' => $this->input->post('nik_pemohon'),
            'nama_lengkap' => $this->input->post('nama_lengkap'),
            'alasan_pindah' => $this->input->post('alasan_pindah'),
            'alamat_tujuan_pindah' => $this->input->post('alamat_tujuan_pindah'),
            'rt_pindah' => $this->input->post('rt_pindah'),
            'rw_pindah' => $this->input->post('rw_pindah'),
            'dusun_pindah' => $this->input->post('dusun_pindah'),
            'desa_kelurahan_pindah' => $this->input->post('desa_kelurahan_pindah'),
            'kab_kota_pindah' => $this->input->post('kab_kota_pindah'),
            'kecamatan_pindah' => $this->input->post('kecamatan_pindah'),
            'provinsi_pindah' => $this->input->post('provinsi_pindah'),
            'kode_pos_pindah' => $this->input->post('kode_pos_pindah'),
            'telepon_pindah' => $this->input->post('telepon_pindah'),
            'jns_kepindahan' => $this->input->post('jns_kepindahan'),
            'stskk_tidak_pindah' => $this->input->post('stskk_tidak_pindah'),
            'stskk_pindah' => $this->input->post('stskk_pindah'),
            'nik' => $this->input->post('nik'),
            'nama' => $this->input->post('nama'),
            'masa_berlaku_ktp' => $this->input->post('masa_berlaku_ktp'),
            'shdk' => $this->input->post('shdk'),
        ];
        $this->Permohonanpindah_model->insert($data);
        redirect("Permohonanpindah");
    }

    public function upload_keluarga()
    {
        $data = [
            'nik' => $this->input->post('nik'),
            'nama' => $this->input->post('nama'),
            'masa_berlaku_ktp' => $this->input->post('masa_berlaku_ktp'),
            'shdk' => $this->input->post('shdk'),
        ];
        $this->Permohonanpindah_model->insert($data);
        redirect("Permohonanpindah/add");
    }

    public function edit($prmhn_id)
    {
        $data['judul'] = "Edit Permohonan Pindah";
        $data['permohonanpindah'] = $this->Permohonanpindah_model->getById($prmhn_id);
        $data['rw'] = $this->Rw_model->get1();
        $data['rt'] = $this->Rt_model->get();
        $this->load->view('layout/header', $data);
        $this->load->view('data_permohonanpindah/vw_edit_permohonanpindah', $data);
        $this->load->view('layout/footer', $data);
    }

    public function edit_keluarga($prmhn_id)
    {
        $data['judul'] = "Edit Keluarga yang Pindah";
        $data['permohonanpindah'] = $this->Permohonanpindah_model->getById($prmhn_id);
        $this->load->view('layout/header', $data);
        $this->load->view('data_permohonanpindah/vw_edit_keluarga', $data);
        $this->load->view('layout/footer', $data);
    }

    public function update()
    {
        $data = [
            'no_kk' => $this->input->post('no_kk'),
            'nama_kepala_keluarga' => $this->input->post('nama_kepala_keluarga'),
            'alamat' => $this->input->post('alamat'),
            'rt_asal' => $this->input->post('rt_asal'),
            'rw_asal' => $this->input->post('rw_asal'),
            'dusun_asal' => $this->input->post('dusun_asal'),
            'desa_kelurahan_asal' => $this->input->post('desa_kelurahan_asal'),
            'kab_kota_asal' => $this->input->post('kab_kota_asal'),
            'kecamatan_asal' => $this->input->post('kecamatan_asal'),
            'provinsi_asal' => $this->input->post('provinsi_asal'),
            'kode_pos_asal' => $this->input->post('kode_pos_asal'),
            'telepon_asal' => $this->input->post('telepon_asal'),
            'nik_pemohon' => $this->input->post('nik_pemohon'),
            'nama_lengkap' => $this->input->post('nama_lengkap'),
            'alasan_pindah' => $this->input->post('alasan_pindah'),
            'alamat_tujuan_pindah' => $this->input->post('alamat_tujuan_pindah'),
            'rt_pindah' => $this->input->post('rt_pindah'),
            'rw_pindah' => $this->input->post('rw_pindah'),
            'dusun_pindah' => $this->input->post('dusun_pindah'),
            'desa_kelurahan_pindah' => $this->input->post('desa_kelurahan_pindah'),
            'kab_kota_pindah' => $this->input->post('kab_kota_pindah'),
            'kecamatan_pindah' => $this->input->post('kecamatan_pindah'),
            'provinsi_pindah' => $this->input->post('provinsi_pindah'),
            'kode_pos_pindah' => $this->input->post('kode_pos_pindah'),
            'telepon_pindah' => $this->input->post('telepon_pindah'),
            'jns_kepindahan' => $this->input->post('jns_kepindahan'),
            'stskk_tidak_pindah' => $this->input->post('stskk_tidak_pindah'),
            'stskk_pindah' => $this->input->post('stskk_pindah'),
            'nik' => $this->input->post('nik'),
            'nama' => $this->input->post('nama'),
            'masa_berlaku_ktp' => $this->input->post('masa_berlaku_ktp'),
            'shdk' => $this->input->post('shdk'),
        ];
        $id = $this->input->post('prmhn_id');
        $this->Permohonanpindah_model->update(['prmhn_id' => $id], $data);
        redirect("Permohonanpindah");
    }

    public function detail($prmhn_id)
    {
        $data['judul'] = "Detail Permohonan Pindah";
        $data['permohonanpindah'] = $this->Permohonanpindah_model->getById($prmhn_id);
        $data['rw'] = $this->Rw_model->get1();
        $data['rt'] = $this->Rt_model->get();
        $this->load->view('layout/header', $data);
        $this->load->view('data_permohonanpindah/vw_detail_permohonanpindah', $data);
        $this->load->view('layout/footer', $data);
    }
}
