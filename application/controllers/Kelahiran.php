<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Kelahiran extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        is_logged_in2();
        $this->load->model('Kelahiran_model');
        $this->load->model('Pekerjaan_model');
    }

    function index()
    {
        $jumlah_data = $this->Kelahiran_model->tkelahiran();
        $config["base_url"] = base_url() . "Kelahiran/index";
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
        $data['kelahiran'] = $this->Kelahiran_model->get($config['per_page'], $from);
        $data['links'] = $this->pagination->create_links();

        $data['judul'] = "Halaman Kelahiran";
        // $data['kelahiran'] = $this->Kelahiran_model->get();
        $this->load->view("layout/header", $data);
        $this->load->view("data_kelahiran/vw_kelahiran", $data);
        $this->load->view("layout/footer", $data);
    }

    public function add()
    {
        $data['judul'] = "Tambah Kelahiran";
        $data['pekerjaan'] = $this->Pekerjaan_model->get();
        $this->load->view('layout/header', $data);
        $this->load->view('data_kelahiran/vw_add_kelahiran', $data);
        $this->load->view('layout/footer', $data);
    }

    public function upload()
    {
        $data = [
            'desa_kelurahan' => $this->input->post('desa_kelurahan'),
            'kecamatan' => $this->input->post('kecamatan'),
            'kabupaten_kota' => $this->input->post('kabupaten_kota'),
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
            'klhrn_ibu_alamat_desakelurahan' => $this->input->post('klhrn_ibu_alamat_desakelurahan'),
            'klhrn_ibu_alamat_kecamatan' => $this->input->post('klhrn_ibu_alamat_kecamatan'),
            'klhrn_ibu_alamat_kabupatenkota' => $this->input->post('klhrn_ibu_alamat_kabupatenkota'),
            'klhrn_ibu_alamat_provinsi' => $this->input->post('klhrn_ibu_alamat_provinsi'),
            'klhrn_ibu_kewarganegaraan' => $this->input->post('klhrn_ibu_kewarganegaraan'),
            'klhrn_ibu_kebangsaan' => $this->input->post('klhrn_ibu_kebangsaan'),
            'klhrn_ibu_tgl_catat_kawin' => $this->input->post('klhrn_ibu_tgl_catat_kawin'),
            'klhrn_ayah_nik' => $this->input->post('klhrn_ayah_nik'),
            'klhrn_ayah_nama' => $this->input->post('klhrn_ayah_nama'),
            'klhrn_ayah_tgl_lahir' => $this->input->post('klhrn_ayah_tgl_lahir'),
            'klhrn_ayah_pekerjaan' => $this->input->post('klhrn_ayah_pekerjaan'),
            'klhrn_ayah_alamat' => $this->input->post('klhrn_ayah_alamat'),
            'klhrn_ayah_alamat_desakelurahan' => $this->input->post('klhrn_ayah_alamat_desakelurahan'),
            'klhrn_ayah_alamat_kecamatan' => $this->input->post('klhrn_ayah_alamat_kecamatan'),
            'klhrn_ayah_alamat_kabupatenkota' => $this->input->post('klhrn_ayah_alamat_kabupatenkota'),
            'klhrn_ayah_alamat_provinsi' => $this->input->post('klhrn_ayah_alamat_provinsi'),
            'klhrn_ayah_kewarganegaraan' => $this->input->post('klhrn_ayah_kewarganegaraan'),
            'klhrn_ayah_kebangsaan' => $this->input->post('klhrn_ayah_kebangsaan'),
            'plpr_nik' => $this->input->post('plpr_nik'),
            'plpr_fullname' => $this->input->post('plpr_fullname'),
            'plpr_umur' => $this->input->post('plpr_umur'),
            'plpr_jk' => $this->input->post('plpr_jk'),
            'plpr_pekerjaan' => $this->input->post('plpr_pekerjaan'),
            'plpr_alamat' => $this->input->post('plpr_alamat'),
            'plpr_alamat_desakelurahan' => $this->input->post('plpr_alamat_desakelurahan'),
            'plpr_alamat_kecamatan' => $this->input->post('plpr_alamat_kecamatan'),
            'plpr_alamat_kabupatenkota' => $this->input->post('plpr_alamat_kabupatenkota'),
            'plpr_alamat_provinsi' => $this->input->post('plpr_alamat_provinsi'),
            'sks1_nik' => $this->input->post('sks1_nik'),
            'sks1_fullname' => $this->input->post('sks1_fullname'),
            'sks1_umur' => $this->input->post('sks1_umur'),
            'sks1_pekerjaan' => $this->input->post('sks1_pekerjaan'),
            'sks1_alamat' => $this->input->post('sks1_alamat'),
            'sks1_alamat_desakelurahan' => $this->input->post('sks1_alamat_desakelurahan'),
            'sks1_alamat_kecamatan' => $this->input->post('sks1_alamat_kecamatan'),
            'sks1_alamat_kabupatenkota' => $this->input->post('sks1_alamat_kabupatenkota'),
            'sks1_alamat_provinsi' => $this->input->post('sks1_alamat_provinsi'),
            'sks2_nik' => $this->input->post('sks2_nik'),
            'sks2_fullname' => $this->input->post('sks2_fullname'),
            'sks2_umur' => $this->input->post('sks2_umur'),
            'sks2_pekerjaan' => $this->input->post('sks2_pekerjaan'),
            'sks2_alamat' => $this->input->post('sks2_alamat'),
            'sks2_alamat_desakelurahan' => $this->input->post('sks2_alamat_desakelurahan'),
            'sks2_alamat_kecamatan' => $this->input->post('sks2_alamat_kecamatan'),
            'sks2_alamat_kabupatenkota' => $this->input->post('sks2_alamat_kabupatenkota'),
            'sks2_alamat_provinsi' => $this->input->post('sks2_alamat_provinsi'),
        ];
        $this->Kelahiran_model->insert($data);
        redirect("Kelahiran");
    }

    public function edit($klhrn_id)
    {
        $data['judul'] = "Edit Kelahiran";
        $data['kelahiran'] = $this->Kelahiran_model->getById($klhrn_id);
        $data['pekerjaan'] = $this->Pekerjaan_model->get();
        $this->load->view('layout/header', $data);
        $this->load->view('data_kelahiran/vw_edit_kelahiran', $data);
        $this->load->view('layout/footer', $data);
    }

    public function update()
    {
        $data = [
            'desa_kelurahan' => $this->input->post('desa_kelurahan'),
            'kecamatan' => $this->input->post('kecamatan'),
            'kabupaten_kota' => $this->input->post('kabupaten_kota'),
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
            'klhrn_ibu_alamat_desakelurahan' => $this->input->post('klhrn_ibu_alamat_desakelurahan'),
            'klhrn_ibu_alamat_kecamatan' => $this->input->post('klhrn_ibu_alamat_kecamatan'),
            'klhrn_ibu_alamat_kabupatenkota' => $this->input->post('klhrn_ibu_alamat_kabupatenkota'),
            'klhrn_ibu_alamat_provinsi' => $this->input->post('klhrn_ibu_alamat_provinsi'),
            'klhrn_ibu_kewarganegaraan' => $this->input->post('klhrn_ibu_kewarganegaraan'),
            'klhrn_ibu_kebangsaan' => $this->input->post('klhrn_ibu_kebangsaan'),
            'klhrn_ibu_tgl_catat_kawin' => $this->input->post('klhrn_ibu_tgl_catat_kawin'),
            'klhrn_ayah_nik' => $this->input->post('klhrn_ayah_nik'),
            'klhrn_ayah_nama' => $this->input->post('klhrn_ayah_nama'),
            'klhrn_ayah_tgl_lahir' => $this->input->post('klhrn_ayah_tgl_lahir'),
            'klhrn_ayah_pekerjaan' => $this->input->post('klhrn_ayah_pekerjaan'),
            'klhrn_ayah_alamat' => $this->input->post('klhrn_ayah_alamat'),
            'klhrn_ayah_alamat_desakelurahan' => $this->input->post('klhrn_ayah_alamat_desakelurahan'),
            'klhrn_ayah_alamat_kecamatan' => $this->input->post('klhrn_ayah_alamat_kecamatan'),
            'klhrn_ayah_alamat_kabupatenkota' => $this->input->post('klhrn_ayah_alamat_kabupatenkota'),
            'klhrn_ayah_alamat_provinsi' => $this->input->post('klhrn_ayah_alamat_provinsi'),
            'klhrn_ayah_kewarganegaraan' => $this->input->post('klhrn_ayah_kewarganegaraan'),
            'klhrn_ayah_kebangsaan' => $this->input->post('klhrn_ayah_kebangsaan'),
            'plpr_nik' => $this->input->post('plpr_nik'),
            'plpr_fullname' => $this->input->post('plpr_fullname'),
            'plpr_umur' => $this->input->post('plpr_umur'),
            'plpr_jk' => $this->input->post('plpr_jk'),
            'plpr_pekerjaan' => $this->input->post('plpr_pekerjaan'),
            'plpr_alamat' => $this->input->post('plpr_alamat'),
            'plpr_alamat_desakelurahan' => $this->input->post('plpr_alamat_desakelurahan'),
            'plpr_alamat_kecamatan' => $this->input->post('plpr_alamat_kecamatan'),
            'plpr_alamat_kabupatenkota' => $this->input->post('plpr_alamat_kabupatenkota'),
            'plpr_alamat_provinsi' => $this->input->post('plpr_alamat_provinsi'),
            'sks1_nik' => $this->input->post('sks1_nik'),
            'sks1_fullname' => $this->input->post('sks1_fullname'),
            'sks1_umur' => $this->input->post('sks1_umur'),
            'sks1_pekerjaan' => $this->input->post('sks1_pekerjaan'),
            'sks1_alamat' => $this->input->post('sks1_alamat'),
            'sks1_alamat_desakelurahan' => $this->input->post('sks1_alamat_desakelurahan'),
            'sks1_alamat_kecamatan' => $this->input->post('sks1_alamat_kecamatan'),
            'sks1_alamat_kabupatenkota' => $this->input->post('sks1_alamat_kabupatenkota'),
            'sks1_alamat_provinsi' => $this->input->post('sks1_alamat_provinsi'),
            'sks2_nik' => $this->input->post('sks2_nik'),
            'sks2_fullname' => $this->input->post('sks2_fullname'),
            'sks2_umur' => $this->input->post('sks2_umur'),
            'sks2_pekerjaan' => $this->input->post('sks2_pekerjaan'),
            'sks2_alamat' => $this->input->post('sks2_alamat'),
            'sks2_alamat_desakelurahan' => $this->input->post('sks2_alamat_desakelurahan'),
            'sks2_alamat_kecamatan' => $this->input->post('sks2_alamat_kecamatan'),
            'sks2_alamat_kabupatenkota' => $this->input->post('sks2_alamat_kabupatenkota'),
            'sks2_alamat_provinsi' => $this->input->post('sks2_alamat_provinsi'),
        ];
        $id = $this->input->post('klhrn_id');
        $this->Kelahiran_model->update(['klhrn_id' => $id], $data);
        redirect("Kelahiran");
    }

    public function detail($klhrn_id)
    {
        $data['judul'] = "Detail Kelahiran";
        $data['kelahiran'] = $this->Kelahiran_model->getById($klhrn_id);
        $data['pekerjaan'] = $this->Pekerjaan_model->get();
        $this->load->view('layout/header', $data);
        $this->load->view('data_kelahiran/vw_detail_kelahiran', $data);
        $this->load->view('layout/footer', $data);
    }
}
