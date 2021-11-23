<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Kelahiran extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        // $this->load->model('Kelahiran_model');
    }

    public function add()
    {
        $data['judul'] = "Tambah Kelahiran";
        $this->load->view('layout/header', $data);
        $this->load->view('data_kelahiran/vw_add_kelahiran', $data);
        $this->load->view('layout/footer', $data);
    }

    public function edit()
    {
        $data['judul'] = "Edit Kelahiran";
        $this->load->view('layout/header', $data);
        $this->load->view('data_kelahiran/vw_edit_kelahiran', $data);
        $this->load->view('layout/footer', $data);
    }

    public function detail()
    {
        $data['judul'] = "Detail Kelahiran";
        $this->load->view('layout/header', $data);
        $this->load->view('data_kelahiran/vw_detail_kelahiran', $data);
        $this->load->view('layout/footer', $data);
    }

    public function upload()
    {
        $data = [
            'klhrn_kepala_keluarga' => $this->input->post('klhrn_kepala_keluarga'),
            'klhrn_nokk' => $this->input->post('klhrn_nokk '),
            'klhrn_nama' => $this->input->post('klhrn_nama'),
            'klhrn_jk' => $this->input->post('klhrn_jk'),
            'klhrn_tmpt_dilahirkan' => $this->input->post('klhrn_tmpt_dilahirkan'),
            'klhrn_tmpt_kelahiran' => $this->input->post('klhrn_tmpt_kelahiran'),
            'klhrn_tgl_lahir' => $this->input->post('klhrn_tgl_lahir'),
            'klhrn_pkl_lahir' => $this->input->post('klhrn_pkl_lahir'),
            'klhrn_jns_klmn_detail' => $this->input->post('klhrn_jns_klmn_detail'),
            'klhrn_ke' => $this->input->post('klhrn_ke'),
            'klhrn_penolong' => $this->input->post('klhrn_penolong'),
            'klhrn_berat' => $this->input->post('klhrn_berat'),
            'klhrn_panjang' => $this->input->post('klhrn_panjang'),
            'klhrn_ibu_nik' => $this->input->post('klhrn_ibu_nik'),
            'klhrn_ibu_nama' => $this->input->post('klhrn_ibu_nama'),
            'klhrn_ibu_tgl_lahir' => $this->input->post('klhrn_ibu_tgl_lahir'),
            'klhrn_ibu_pekerjaan' => $this->input->post('klhrn_ibu_pekerjaan'),
            'klhrn_ibu_alamat' => $this->input->post('klhrn_ibu_alamat'),
            'klhrn_ibu_kewarganegaraan' => $this->input->post('klhrn_ibu_kewarganegaraan'),
            'klhrn_ibu_kebangsaan' => $this->input->post('klhrn_ibu_kebangsaan'),
            'klhrn_ibu_tgl_catat_kawin' => $this->input->post('klhrn_ibu_tgl_catat_kawin'),
            'klhrn_ayah_nik' => $this->input->post('klhrn_ayah_nik'),
            'klhrn_ayah_nama' => $this->input->post('klhrn_ayah_nama'),
            'klhrn_ayah_tgl_lahir' => $this->input->post('klhrn_ayah_tgl_lahir'),
            'klhrn_ayah_pekerjaan' => $this->input->post('klhrn_ayah_pekerjaan'),
            'klhrn_ayah_alamat' => $this->input->post('klhrn_ayah_alamat'),
            'klhrn_ayah_kewarganegaraan' => $this->input->post('klhrn_ayah_kewarganegaraan'),
            'klhrn_ayah_kebangsaan' => $this->input->post('klhrn_ayah_kebangsaan'),
            'plpr_nik' => $this->input->post('plpr_nik'),
            'plpr_fullname' => $this->input->post('plpr_fullname'),
            'plpr_umur' => $this->input->post('plpr_umur'),
            'plpr_jk' => $this->input->post('plpr_jk'),
            'plpr_pekerjaan' => $this->input->post('plpr_pekerjaan'),
            'plpr_alamat' => $this->input->post('plpr_alamat'),
            'sks1_nik' => $this->input->post('sks1_nik'),
            'sks1_fullname' => $this->input->post('sks1_fullname'),
            'sks1_umur' => $this->input->post('sks1_umur'),
            'sks1_pekerjaan' => $this->input->post('sks1_pekerjaan'),
            'sks1_alamat' => $this->input->post('sks1_alamat'),
            'sks2_nik' => $this->input->post('sks2_nik'),
            'sks2_fullname' => $this->input->post('sks2_fullname'),
            'sks2_umur' => $this->input->post('sks2_umur'),
            'sks2_pekerjaan' => $this->input->post('sks2_pekerjaan'),
            'sks2_alamat' => $this->input->post('sks2_alamat'),
        ];
        $this->Kelahiran_model->insert($data);
        redirect("Kelahiran");
    }

    public function update()
    {
        $data = [
            'klhrn_kepala_keluarga' => $this->input->post('klhrn_kepala_keluarga'),
            'klhrn_nokk' => $this->input->post('klhrn_nokk '),
            'klhrn_nama' => $this->input->post('klhrn_nama'),
            'klhrn_jk' => $this->input->post('klhrn_jk'),
            'klhrn_tmpt_dilahirkan' => $this->input->post('klhrn_tmpt_dilahirkan'),
            'klhrn_tmpt_kelahiran' => $this->input->post('klhrn_tmpt_kelahiran'),
            'klhrn_tgl_lahir' => $this->input->post('klhrn_tgl_lahir'),
            'klhrn_pkl_lahir' => $this->input->post('klhrn_pkl_lahir'),
            'klhrn_jns_klmn_detail' => $this->input->post('klhrn_jns_klmn_detail'),
            'klhrn_ke' => $this->input->post('klhrn_ke'),
            'klhrn_penolong' => $this->input->post('klhrn_penolong'),
            'klhrn_berat' => $this->input->post('klhrn_berat'),
            'klhrn_panjang' => $this->input->post('klhrn_panjang'),
            'klhrn_ibu_nik' => $this->input->post('klhrn_ibu_nik'),
            'klhrn_ibu_nama' => $this->input->post('klhrn_ibu_nama'),
            'klhrn_ibu_tgl_lahir' => $this->input->post('klhrn_ibu_tgl_lahir'),
            'klhrn_ibu_pekerjaan' => $this->input->post('klhrn_ibu_pekerjaan'),
            'klhrn_ibu_alamat' => $this->input->post('klhrn_ibu_alamat'),
            'klhrn_ibu_kewarganegaraan' => $this->input->post('klhrn_ibu_kewarganegaraan'),
            'klhrn_ibu_kebangsaan' => $this->input->post('klhrn_ibu_kebangsaan'),
            'klhrn_ibu_tgl_catat_kawin' => $this->input->post('klhrn_ibu_tgl_catat_kawin'),
            'klhrn_ayah_nik' => $this->input->post('klhrn_ayah_nik'),
            'klhrn_ayah_nama' => $this->input->post('klhrn_ayah_nama'),
            'klhrn_ayah_tgl_lahir' => $this->input->post('klhrn_ayah_tgl_lahir'),
            'klhrn_ayah_pekerjaan' => $this->input->post('klhrn_ayah_pekerjaan'),
            'klhrn_ayah_alamat' => $this->input->post('klhrn_ayah_alamat'),
            'klhrn_ayah_kewarganegaraan' => $this->input->post('klhrn_ayah_kewarganegaraan'),
            'klhrn_ayah_kebangsaan' => $this->input->post('klhrn_ayah_kebangsaan'),
            'plpr_nik' => $this->input->post('plpr_nik'),
            'plpr_fullname' => $this->input->post('plpr_fullname'),
            'plpr_umur' => $this->input->post('plpr_umur'),
            'plpr_jk' => $this->input->post('plpr_jk'),
            'plpr_pekerjaan' => $this->input->post('plpr_pekerjaan'),
            'plpr_alamat' => $this->input->post('plpr_alamat'),
            'sks1_nik' => $this->input->post('sks1_nik'),
            'sks1_fullname' => $this->input->post('sks1_fullname'),
            'sks1_umur' => $this->input->post('sks1_umur'),
            'sks1_pekerjaan' => $this->input->post('sks1_pekerjaan'),
            'sks1_alamat' => $this->input->post('sks1_alamat'),
            'sks2_nik' => $this->input->post('sks2_nik'),
            'sks2_fullname' => $this->input->post('sks2_fullname'),
            'sks2_umur' => $this->input->post('sks2_umur'),
            'sks2_pekerjaan' => $this->input->post('sks2_pekerjaan'),
            'sks2_alamat' => $this->input->post('sks2_alamat'),
        ];
        $id = $this->input->post('klhrn_id');
        $this->Kelahiran_model->update(['klhrn_id' => $id], $data);
        redirect("Kelahiran");
    }
}
