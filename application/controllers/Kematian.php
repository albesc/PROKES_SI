<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Kematian extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Kematian_model');
        $this->load->model('Agama_model');
        $this->load->model('Pekerjaan_model');
    }

    function index()
    {
        $data['judul'] = "Halaman Kematian";
        // $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['kematian'] = $this->Kematian_model->get();
        $this->load->view("layout/header", $data);
        $this->load->view("data_kematian/vw_kematian", $data);
        $this->load->view("layout/footer", $data);
    }

    public function add()
    {
        $data['judul'] = "Tambah Kematian";
        $data['agama'] = $this->Agama_model->get();
        $data['pekerjaan'] = $this->Pekerjaan_model->get();
        $this->load->view('layout/header', $data);
        $this->load->view('data_kematian/vw_add_kematian', $data);
        $this->load->view('layout/footer', $data);
    }

    public function upload()
    {
        $data = [
            'desa_kelurahan' => $this->input->post('desa_kelurahan'),
            'kecamatan' => $this->input->post('kecamatan'),
            'kabupaten_kota' => $this->input->post('kabupaten_kota'),
            'kmtn_kepala_keluarga' => $this->input->post('kmtn_kepala_keluarga'),
            'kmtn_nokk' => $this->input->post('kmtn_nokk'),
            'kmtn_nik' => $this->input->post('kmtn_nik'),
            'kmtn_nama' => $this->input->post('kmtn_nama'),
            'kmtn_jk' => $this->input->post('kmtn_jk'),
            'kmtn_tgl_lahir' => $this->input->post('kmtn_tgl_lahir'),
            'kmtn_tmpt_lahir' => $this->input->post('kmtn_tmpt_lahir'),
            'kmtn_agama' => $this->input->post('kmtn_agama'),
            'kmtn_pekerjaan' => $this->input->post('kmtn_pekerjaan'),
            'kmtn_alamat' => $this->input->post('kmtn_alamat'),
            'kmtn_desakelurahan' => $this->input->post('kmtn_desakelurahan'),
            'kmtn_kecamatan' => $this->input->post('kmtn_kecamatan'),
            'kmtn_kabupatenkota' => $this->input->post('kmtn_kabupatenkota'),
            'kmtn_provinsi' => $this->input->post('kmtn_provinsi'),
            'kmtn_anak_ke' => $this->input->post('kmtn_anak_ke'),
            'kmtn_tgl_mati' => $this->input->post('kmtn_tgl_mati'),
            'kmtn_pkl_mati' => $this->input->post('kmtn_pkl_mati'),
            'kmtn_sebab_mati' => $this->input->post('kmtn_sebab_mati'),
            'kmtn_tempat_mati' => $this->input->post('kmtn_tempat_mati'),
            'kmtn_yang_menerangkan' => $this->input->post('kmtn_yang_menerangkan'),
            'kmtn_ayah_nik' => $this->input->post('kmtn_ayah_nik'),
            'kmtn_ayah_nama' => $this->input->post('kmtn_ayah_nama'),
            'kmtn_ayah_tanggal_lahir' => $this->input->post('kmtn_ayah_tanggal_lahir'),
            'kmtn_ayah_pekerjaan' => $this->input->post('kmtn_ayah_pekerjaan'),
            'kmtn_ayah_alamat' => $this->input->post('kmtn_ayah_alamat'),
            'kmtn_ayah_alamat_desakelurahan' => $this->input->post('kmtn_ayah_alamat_desakelurahan'),
            'kmtn_ayah_alamat_kecamatan' => $this->input->post('kmtn_ayah_alamat_kecamatan'),
            'kmtn_ayah_alamat_kabupatenkota' => $this->input->post('kmtn_ayah_alamat_kabupatenkota'),
            'kmtn_ayah_alamat_provinsi' => $this->input->post('kmtn_ayah_alamat_provinsi'),       
            'kmtn_ibu_nik' => $this->input->post('kmtn_ibu_nik'),
            'kmtn_ibu_nama' => $this->input->post('kmtn_ibu_nama'),
            'kmtn_ibu_tanggal_lahir' => $this->input->post('kmtn_ibu_tanggal_lahir'),
            'kmtn_ibu_pekerjaan' => $this->input->post('kmtn_ibu_pekerjaan'),
            'kmtn_ibu_alamat' => $this->input->post('kmtn_ibu_alamat'),
            'kmtn_ibu_alamat_desakelurahan' => $this->input->post('kmtn_ibu_alamat_desakelurahan'),
            'kmtn_ibu_alamat_kecamatan' => $this->input->post('kmtn_ibu_alamat_kecamatan'),
            'kmtn_ibu_alamat_kabupatenkota' => $this->input->post('kmtn_ibu_alamat_kabupatenkota'),
            'kmtn_ibu_alamat_provinsi' => $this->input->post('kmtn_ibu_alamat_provinsi'), 
            'plpr_nik' => $this->input->post('plpr_nik'),
            'plpr_fullname' => $this->input->post('plpr_fullname'),
            'plpr_tgl_lahir' => $this->input->post('plpr_tgl_lahir'),
            'plpr_umur' => $this->input->post('plpr_umur'),
            'plpr_pekerjaan' => $this->input->post('plpr_pekerjaan'),
            'plpr_alamat' => $this->input->post('plpr_alamat'),
            'plpr_alamat_desakelurahan' => $this->input->post('plpr_alamat_desakelurahan'),
            'plpr_alamat_kecamatan' => $this->input->post('plpr_alamat_kecamatan'),
            'plpr_alamat_kabupatenkota' => $this->input->post('plpr_alamat_kabupatenkota'),
            'plpr_alamat_provinsi' => $this->input->post('plpr_alamat_provinsi'), 
            'sks1_nik' => $this->input->post('sks1_nik'),
            'sks1_fullname' => $this->input->post('sks1_fullname'),
            'sks1_tgl_lahir' => $this->input->post('sks1_tgl_lahir'),
            'sks1_pekerjaan' => $this->input->post('sks1_pekerjaan'),
            'sks1_alamat' => $this->input->post('sks1_alamat'),
            'sks1_alamat_desakelurahan' => $this->input->post('sks1_alamat_desakelurahan'),
            'sks1_alamat_kecamatan' => $this->input->post('sks1_alamat_kecamatan'),
            'sks1_alamat_kabupatenkota' => $this->input->post('sks1_alamat_kabupatenkota'),
            'sks1_alamat_provinsi' => $this->input->post('sks1_alamat_provinsi'), 
            'sks2_nik' => $this->input->post('sks2_nik'),
            'sks2_fullname' => $this->input->post('sks2_fullname'),
            'sks2_tgl_lahir' => $this->input->post('sks2_tgl_lahir'),
            'sks2_pekerjaan' => $this->input->post('sks2_pekerjaan'),
            'sks2_alamat' => $this->input->post('sks2_alamat'),
            'sks2_alamat_desakelurahan' => $this->input->post('sks2_alamat_desakelurahan'),
            'sks2_alamat_kecamatan' => $this->input->post('sks2_alamat_kecamatan'),
            'sks2_alamat_kabupatenkota' => $this->input->post('sks2_alamat_kabupatenkota'),
            'sks2_alamat_provinsi' => $this->input->post('sks2_alamat_provinsi'), 
        ];
        $this->Kematian_model->insert($data);
        redirect("Kematian");
    }

    public function edit($kmtn_id)
    {
        $data['judul'] = "Edit Kematian";
        $data['kematian'] = $this->Kematian_model->getById($kmtn_id);
        $data['agama'] = $this->Agama_model->get();
        $data['pekerjaan'] = $this->Pekerjaan_model->get();
        $this->load->view('layout/header', $data);
        $this->load->view('data_kematian/vw_edit_kematian', $data);
        $this->load->view('layout/footer', $data);
    }

    public function update()
    {
        $data = [
            'desa_kelurahan' => $this->input->post('desa_kelurahan'),
            'kecamatan' => $this->input->post('kecamatan'),
            'kabupaten_kota' => $this->input->post('kabupaten_kota'),
            'kmtn_kepala_keluarga' => $this->input->post('kmtn_kepala_keluarga'),
            'kmtn_nokk' => $this->input->post('kmtn_nokk'),
            'kmtn_nik' => $this->input->post('kmtn_nik'),
            'kmtn_nama' => $this->input->post('kmtn_nama'),
            'kmtn_jk' => $this->input->post('kmtn_jk'),
            'kmtn_tgl_lahir' => $this->input->post('kmtn_tgl_lahir'),
            'kmtn_tmpt_lahir' => $this->input->post('kmtn_tmpt_lahir'),
            'kmtn_agama' => $this->input->post('kmtn_agama'),
            'kmtn_pekerjaan' => $this->input->post('kmtn_pekerjaan'),
            'kmtn_alamat' => $this->input->post('kmtn_alamat'),
            'kmtn_desakelurahan' => $this->input->post('kmtn_desakelurahan'),
            'kmtn_kecamatan' => $this->input->post('kmtn_kecamatan'),
            'kmtn_kabupatenkota' => $this->input->post('kmtn_kabupatenkota'),
            'kmtn_provinsi' => $this->input->post('kmtn_provinsi'),
            'kmtn_anak_ke' => $this->input->post('kmtn_anak_ke'),
            'kmtn_tgl_mati' => $this->input->post('kmtn_tgl_mati'),
            'kmtn_pkl_mati' => $this->input->post('kmtn_pkl_mati'),
            'kmtn_sebab_mati' => $this->input->post('kmtn_sebab_mati'),
            'kmtn_tempat_mati' => $this->input->post('kmtn_tempat_mati'),
            'kmtn_yang_menerangkan' => $this->input->post('kmtn_yang_menerangkan'),
            'kmtn_ayah_nik' => $this->input->post('kmtn_ayah_nik'),
            'kmtn_ayah_nama' => $this->input->post('kmtn_ayah_nama'),
            'kmtn_ayah_tanggal_lahir' => $this->input->post('kmtn_ayah_tanggal_lahir'),
            'kmtn_ayah_pekerjaan' => $this->input->post('kmtn_ayah_pekerjaan'),
            'kmtn_ayah_alamat' => $this->input->post('kmtn_ayah_alamat'),
            'kmtn_ayah_alamat_desakelurahan' => $this->input->post('kmtn_ayah_alamat_desakelurahan'),
            'kmtn_ayah_alamat_kecamatan' => $this->input->post('kmtn_ayah_alamat_kecamatan'),
            'kmtn_ayah_alamat_kabupatenkota' => $this->input->post('kmtn_ayah_alamat_kabupatenkota'),
            'kmtn_ayah_alamat_provinsi' => $this->input->post('kmtn_ayah_alamat_provinsi'),       
            'kmtn_ibu_nik' => $this->input->post('kmtn_ibu_nik'),
            'kmtn_ibu_nama' => $this->input->post('kmtn_ibu_nama'),
            'kmtn_ibu_tanggal_lahir' => $this->input->post('kmtn_ibu_tanggal_lahir'),
            'kmtn_ibu_pekerjaan' => $this->input->post('kmtn_ibu_pekerjaan'),
            'kmtn_ibu_alamat' => $this->input->post('kmtn_ibu_alamat'),
            'kmtn_ibu_alamat_desakelurahan' => $this->input->post('kmtn_ibu_alamat_desakelurahan'),
            'kmtn_ibu_alamat_kecamatan' => $this->input->post('kmtn_ibu_alamat_kecamatan'),
            'kmtn_ibu_alamat_kabupatenkota' => $this->input->post('kmtn_ibu_alamat_kabupatenkota'),
            'kmtn_ibu_alamat_provinsi' => $this->input->post('kmtn_ibu_alamat_provinsi'), 
            'plpr_nik' => $this->input->post('plpr_nik'),
            'plpr_fullname' => $this->input->post('plpr_fullname'),
            'plpr_tgl_lahir' => $this->input->post('plpr_tgl_lahir'),
            'plpr_umur' => $this->input->post('plpr_umur'),
            'plpr_pekerjaan' => $this->input->post('plpr_pekerjaan'),
            'plpr_alamat' => $this->input->post('plpr_alamat'),
            'plpr_alamat_desakelurahan' => $this->input->post('plpr_alamat_desakelurahan'),
            'plpr_alamat_kecamatan' => $this->input->post('plpr_alamat_kecamatan'),
            'plpr_alamat_kabupatenkota' => $this->input->post('plpr_alamat_kabupatenkota'),
            'plpr_alamat_provinsi' => $this->input->post('plpr_alamat_provinsi'), 
            'sks1_nik' => $this->input->post('sks1_nik'),
            'sks1_fullname' => $this->input->post('sks1_fullname'),
            'sks1_tgl_lahir' => $this->input->post('sks1_tgl_lahir'),
            'sks1_pekerjaan' => $this->input->post('sks1_pekerjaan'),
            'sks1_alamat' => $this->input->post('sks1_alamat'),
            'sks1_alamat_desakelurahan' => $this->input->post('sks1_alamat_desakelurahan'),
            'sks1_alamat_kecamatan' => $this->input->post('sks1_alamat_kecamatan'),
            'sks1_alamat_kabupatenkota' => $this->input->post('sks1_alamat_kabupatenkota'),
            'sks1_alamat_provinsi' => $this->input->post('sks1_alamat_provinsi'), 
            'sks2_nik' => $this->input->post('sks2_nik'),
            'sks2_fullname' => $this->input->post('sks2_fullname'),
            'sks2_tgl_lahir' => $this->input->post('sks2_tgl_lahir'),
            'sks2_pekerjaan' => $this->input->post('sks2_pekerjaan'),
            'sks2_alamat' => $this->input->post('sks2_alamat'),
            'sks2_alamat_desakelurahan' => $this->input->post('sks2_alamat_desakelurahan'),
            'sks2_alamat_kecamatan' => $this->input->post('sks2_alamat_kecamatan'),
            'sks2_alamat_kabupatenkota' => $this->input->post('sks2_alamat_kabupatenkota'),
            'sks2_alamat_provinsi' => $this->input->post('sks2_alamat_provinsi'), 
        ];
        $id = $this->input->post('kmtn_id');
        $this->Kematian_model->update(['kmtn_id' => $id], $data);
        redirect("Kematian");
    }

    public function detail($kmtn_id)
    {
        $data['judul'] = "Detail Kematian";
        $data['kematian'] = $this->Kematian_model->getById($kmtn_id);
        $data['agama'] = $this->Agama_model->get();
        $data['pekerjaan'] = $this->Pekerjaan_model->get();
        $this->load->view('layout/header', $data);
        $this->load->view('data_kematian/vw_detail_kematian', $data);
        $this->load->view('layout/footer', $data);
    }
}
