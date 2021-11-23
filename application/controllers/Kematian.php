<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Kematian extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        // $this->load->model('Kematian_model');
    }

    public function add()
    {
        $data['judul'] = "Tambah Kematian";
        $this->load->view('layout/header', $data);
        $this->load->view('data_kematian/vw_add_kematian', $data);
        $this->load->view('layout/footer', $data);
    }

    public function edit()
    {
        $data['judul'] = "Edit Kematian";
        $this->load->view('layout/header', $data);
        $this->load->view('data_kematian/vw_edit_kematian', $data);
        $this->load->view('layout/footer', $data);
    }

    public function detail()
    {
        $data['judul'] = "Detail Kematian";
        $this->load->view('layout/header', $data);
        $this->load->view('data_kematian/vw_detail_kematian', $data);
        $this->load->view('layout/footer', $data);
    }

    public function upload()
    {
        $data = [
            'kmtn_kepala_keluarga' => $this->input->post('kmtn_kepala_keluarga'),
            'kmtn_nokk' => $this->input->post('kmtn_nokk'),
            'kmtn_nik' => $this->input->post('kmtn_nik'),
            'kmtn_nama' => $this->input->post('kmtn_nama'),
            'kmtn_jk' => $this->input->post('kmtn_jk'),
            'kmtn_agama' => $this->input->post('kmtn_agama'),
            'kmtn_pekerjaan' => $this->input->post('kmtn_pekerjaan'),
            'kmtn_alamat' => $this->input->post('kmtn_alamat'),
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
            'kmtn_ibu_nik' => $this->input->post('kmtn_ibu_nik'),
            'kmtn_ibu_nama' => $this->input->post('kmtn_ibu_nama'),
            'kmtn_ibu_tanggal_lahir' => $this->input->post('kmtn_ibu_tanggal_lahir'),
            'kmtn_ibu_pekerjaan' => $this->input->post('kmtn_ibu_pekerjaan'),
            'kmtn_ibu_alamat' => $this->input->post('kmtn_ibu_alamat'),
            'plpr_nik' => $this->input->post('plpr_nik'),
            'plpr_fullname' => $this->input->post('plpr_fullname'),
            'plpr_tgl_lahir' => $this->input->post('plpr_tgl_lahir'),
            'plpr_umur' => $this->input->post('plpr_umur'),
            'plpr_pekerjaan' => $this->input->post('plpr_pekerjaan'),
            'plpr_alamat' => $this->input->post('plpr_alamat'),
            'sks1_nik' => $this->input->post('sks1_nik'),
            'sks1_fullname' => $this->input->post('sks1_fullname'),
            'sks1_tgl_lahir' => $this->input->post('sks1_tgl_lahir'),
            'sks1_pekerjaan' => $this->input->post('sks1_pekerjaan'),
            'sks1_alamat' => $this->input->post('sks1_alamat'),
            'sks2_nik' => $this->input->post('sks2_nik'),
            'sks2_fullname' => $this->input->post('sks2_fullname'),
            'sks2_tgl_lahir' => $this->input->post('sks2_tgl_lahir'),
            'sks2_pekerjaan' => $this->input->post('sks2_pekerjaan'),
            'sks2_alamat' => $this->input->post('sks2_alamat'),
        ];
        $this->Kematian_model->insert($data);
        redirect("Kematian");
    }

    public function update()
    {
        $data = [
            'kmtn_kepala_keluarga' => $this->input->post('kmtn_kepala_keluarga'),
            'kmtn_nokk' => $this->input->post('kmtn_nokk'),
            'kmtn_nik' => $this->input->post('kmtn_nik'),
            'kmtn_nama' => $this->input->post('kmtn_nama'),
            'kmtn_jk' => $this->input->post('kmtn_jk'),
            'kmtn_agama' => $this->input->post('kmtn_agama'),
            'kmtn_pekerjaan' => $this->input->post('kmtn_pekerjaan'),
            'kmtn_alamat' => $this->input->post('kmtn_alamat'),
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
            'kmtn_ibu_nik' => $this->input->post('kmtn_ibu_nik'),
            'kmtn_ibu_nama' => $this->input->post('kmtn_ibu_nama'),
            'kmtn_ibu_tanggal_lahir' => $this->input->post('kmtn_ibu_tanggal_lahir'),
            'kmtn_ibu_pekerjaan' => $this->input->post('kmtn_ibu_pekerjaan'),
            'kmtn_ibu_alamat' => $this->input->post('kmtn_ibu_alamat'),
            'plpr_nik' => $this->input->post('plpr_nik'),
            'plpr_fullname' => $this->input->post('plpr_fullname'),
            'plpr_tgl_lahir' => $this->input->post('plpr_tgl_lahir'),
            'plpr_umur' => $this->input->post('plpr_umur'),
            'plpr_pekerjaan' => $this->input->post('plpr_pekerjaan'),
            'plpr_alamat' => $this->input->post('plpr_alamat'),
            'sks1_nik' => $this->input->post('sks1_nik'),
            'sks1_fullname' => $this->input->post('sks1_fullname'),
            'sks1_tgl_lahir' => $this->input->post('sks1_tgl_lahir'),
            'sks1_pekerjaan' => $this->input->post('sks1_pekerjaan'),
            'sks1_alamat' => $this->input->post('sks1_alamat'),
            'sks2_nik' => $this->input->post('sks2_nik'),
            'sks2_fullname' => $this->input->post('sks2_fullname'),
            'sks2_tgl_lahir' => $this->input->post('sks2_tgl_lahir'),
            'sks2_pekerjaan' => $this->input->post('sks2_pekerjaan'),
            'sks2_alamat' => $this->input->post('sks2_alamat'),
        ];
        $id = $this->input->post('kmtn_id');
        $this->Kematian_model->update(['kmtn_id' => $id], $data);
        redirect("Kematian");
    }
}
