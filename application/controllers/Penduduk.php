<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Penduduk extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Penduduk_model');
        $this->load->model('Rw_model');
        $this->load->model('Rt_model');
        $this->load->model('Agama_model');
        $this->load->model('Gol_darah_model');
        $this->load->model('Pekerjaan_model');
        $this->load->model('Pendidikan_model');
        $this->load->model('Sts_hub_kel_model');
        $this->load->model('Sts_pernikahan_model');
    }

    function index()
    {
        $data['judul'] = "Halaman Penduduk";
        // $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['penduduk'] = $this->Penduduk_model->get();
        $this->load->view("layout/header", $data);
        $this->load->view("data_penduduk/vw_penduduk", $data);
        $this->load->view("layout/footer", $data);
    }

    public function add()
    {
        $data['judul'] = "Tambah Penduduk";
        $data['agama'] = $this->Agama_model->get();
        $data['gol_darah'] = $this->Gol_darah_model->get();
        $data['pekerjaan'] = $this->Pekerjaan_model->get();
        $data['pendidikan'] = $this->Pendidikan_model->get();
        $data['sts_hub_kel'] = $this->Sts_hub_kel_model->get();
        $data['sts_pernikahan'] = $this->Sts_pernikahan_model->get();
        $data['rw'] = $this->Rw_model->get();
        $data['rt'] = $this->Rt_model->get();
        $this->load->view('layout/header', $data);
        $this->load->view('data_penduduk/vw_add_penduduk', $data);
        $this->load->view('layout/footer', $data);
    }

    public function upload()
    {
        $data = [
            'pndk_nik' => $this->input->post('pndk_nik'),
            'pndk_nokk' => $this->input->post('pndk_nokk'),
            'pndk_alamat' => $this->input->post('pndk_alamat'),
            'rt_id' => $this->input->post('rt_id'),
            'rw_id' => $this->input->post('rw_id'),
            'pndk_fullname' => $this->input->post('pndk_fullname'),
            'pndk_jk' => $this->input->post('pndk_jk'),
            'pndk_tmp_lahir' => $this->input->post('pndk_tmp_lahir'),
            'pndk_tgl_lahir' => $this->input->post('pndk_tgl_lahir'),
            'pndk_tlp' => $this->input->post('pndk_tlp'),
            'agm_id' => $this->input->post('agm_id'),
            'goldr_id' => $this->input->post('goldr_id'),
            'pnd_id' => $this->input->post('pnd_id'),
            'pkrj_id' => $this->input->post('pkrj_id'),
            'sts_hub_id' => $this->input->post('sts_hub_id'),
            'stspnkn_id' => $this->input->post('stspnkn_id'),
            'pndk_akta_kawin' => $this->input->post('pndk_akta_kawin'),
            'pndk_akta_cerai' => $this->input->post('pndk_akta_cerai'),
            'pndk_kelainan' => $this->input->post('pndk_kelainan'),
            'pndk_desalurah' => $this->input->post('pndk_desalurah'),
            'pndk_kecamatan' => $this->input->post('pndk_kecamatan'),
            'pndk_kabupatenkota' => $this->input->post('pndk_kabupatenkota'),
            'pndk_provinsi' => $this->input->post('pndk_provinsi'),
            'pndk_kodepos' => $this->input->post('pndk_kodepos'),
            'pndk_tgl_kawin' => $this->input->post('pndk_tgl_kawin'),
            'pndk_nopaspor' => $this->input->post('pndk_nopaspor'),
            'pndk_nama_ayah' => $this->input->post('pndk_nama_ayah'),
            'pndk_nama_ibu' => $this->input->post('pndk_nama_ibu'),
            'pndk_tlpkeluarga' => $this->input->post('pndk_tlpkeluarga'),
            'pndk_tgl_berakhir_paspor' => $this->input->post('pndk_tgl_berakhir_paspor'),
            'pndk_akta_lahir' => $this->input->post('pndk_akta_lahir'),
            'pndk_noakta_lahir' => $this->input->post('pndk_noakta_lahir'),
            'pndk_noakta_kawin' => $this->input->post('pndk_noakta_kawin'),
            'pndk_noakta_cerai' => $this->input->post('pndk_noakta_cerai'),
            'pndk_tgl_cerai' => $this->input->post('pndk_tgl_cerai'),
            'pndk_cacat' => $this->input->post('pndk_cacat'),
            'pndk_nik_ayah' => $this->input->post('pndk_nik_ayah'),
            'pndk_nik_ibu' => $this->input->post('pndk_nik_ibu'),
            'pndk_namakk' => $this->input->post('pndk_namakk'),
        ];
        $upload_image = $_FILES['pndk_foto']['name'];
        if ($upload_image) {
            $config['allowed_types'] = 'gif|jpg|png|jpeg';
            $config['max_size'] = '2048';
            $config['upload_path'] = './assets/img/penduduk/';
            $this->load->library('upload', $config);
            if ($this->upload->do_upload('pndk_foto')) {
                $new_image = $this->upload->data('file_name');
                $this->db->set('pndk_foto', $new_image);
            } else {
                echo $this->upload->display_errors();
            }
        }

        $this->Penduduk_model->insert($data, $upload_image);
        redirect("Penduduk");
    }

    public function edit($pndk_id)
    {
        $data['judul'] = "Detail Penduduk";
        $data['penduduk'] = $this->Penduduk_model->getById($pndk_id);
        $data['agama'] = $this->Agama_model->get();
        $data['gol_darah'] = $this->Gol_darah_model->get();
        $data['pekerjaan'] = $this->Pekerjaan_model->get();
        $data['pendidikan'] = $this->Pendidikan_model->get();
        $data['sts_hub_kel'] = $this->Sts_hub_kel_model->get();
        $data['sts_pernikahan'] = $this->Sts_pernikahan_model->get();
        $data['rw'] = $this->Rw_model->get();
        $data['rt'] = $this->Rt_model->get();
        $this->load->view('layout/header', $data);
        $this->load->view('data_penduduk/vw_edit_penduduk', $data);
        $this->load->view('layout/footer', $data);
    }

    public function update()
    {
        $data = [
            'pndk_nik' => $this->input->post('pndk_nik'),
            'pndk_nokk' => $this->input->post('pndk_nokk'),
            'pndk_alamat' => $this->input->post('pndk_alamat'),
            'rt_id' => $this->input->post('rt_id'),
            'rw_id' => $this->input->post('rw_id'),
            'pndk_fullname' => $this->input->post('pndk_fullname'),
            'pndk_jk' => $this->input->post('pndk_jk'),
            'pndk_tmp_lahir' => $this->input->post('pndk_tmp_lahir'),
            'pndk_tgl_lahir' => $this->input->post('pndk_tgl_lahir'),
            'pndk_tlp' => $this->input->post('pndk_tlp'),
            'agm_id' => $this->input->post('agm_id'),
            'goldr_id' => $this->input->post('goldr_id'),
            'pnd_id' => $this->input->post('pnd_id'),
            'pkrj_id' => $this->input->post('pkrj_id'),
            'sts_hub_id' => $this->input->post('sts_hub_id'),
            'stspnkn_id' => $this->input->post('stspnkn_id'),
            'pndk_akta_kawin' => $this->input->post('pndk_akta_kawin'),
            'pndk_akta_cerai' => $this->input->post('pndk_akta_cerai'),
            'pndk_kelainan' => $this->input->post('pndk_kelainan'),
            'pndk_desalurah' => $this->input->post('pndk_desalurah'),
            'pndk_kecamatan' => $this->input->post('pndk_kecamatan'),
            'pndk_kabupatenkota' => $this->input->post('pndk_kabupatenkota'),
            'pndk_provinsi' => $this->input->post('pndk_provinsi'),
            'pndk_kodepos' => $this->input->post('pndk_kodepos'),
            'pndk_tgl_kawin' => $this->input->post('pndk_tgl_kawin'),
            'pndk_nopaspor' => $this->input->post('pndk_nopaspor'),
            'pndk_nama_ayah' => $this->input->post('pndk_nama_ayah'),
            'pndk_nama_ibu' => $this->input->post('pndk_nama_ibu'),
            'pndk_tlpkeluarga' => $this->input->post('pndk_tlpkeluarga'),
            'pndk_tgl_berakhir_paspor' => $this->input->post('pndk_tgl_berakhir_paspor'),
            'pndk_akta_lahir' => $this->input->post('pndk_akta_lahir'),
            'pndk_noakta_lahir' => $this->input->post('pndk_noakta_lahir'),
            'pndk_noakta_kawin' => $this->input->post('pndk_noakta_kawin'),
            'pndk_noakta_cerai' => $this->input->post('pndk_noakta_cerai'),
            'pndk_tgl_cerai' => $this->input->post('pndk_tgl_cerai'),
            'pndk_cacat' => $this->input->post('pndk_cacat'),
            'pndk_nik_ayah' => $this->input->post('pndk_nik_ayah'),
            'pndk_nik_ibu' => $this->input->post('pndk_nik_ibu'),
            'pndk_namakk' => $this->input->post('pndk_namakk'),
        ];
        $upload_image = $_FILES['pndk_foto']['name'];
        if ($upload_image) {
            $config['allowed_types'] = 'gif|jpg|png|jpeg';
            $config['max_size'] = '2048';
            $config['upload_path'] = './assets/img/';
            $this->load->library('upload', $config);
            if ($this->upload->do_upload('pndk_foto')) {
                $old_image = $data['penduduk']['gambar'];
                if ($old_image != 'default.png') {
                    unlink(FCPATH . 'assets/img/penduduk/' . $old_image);
                }
                $new_image = $this->upload->data('file_name');
                $this->db->set('pndk_foto', $new_image);
            } else {
                echo $this->upload->display_errors();
            }
        }

        $id = $this->input->post('pndk_id');
        $this->Penduduk_model->update(['pndk_id' => $id], $data, $upload_image);
        redirect("Penduduk");
    }

    public function detail($pndk_id)
    {
        $data['judul'] = "Detail Penduduk";
        $data['penduduk'] = $this->Penduduk_model->getById($pndk_id);
        $data['agama'] = $this->Agama_model->get();
        $data['gol_darah'] = $this->Gol_darah_model->get();
        $data['pekerjaan'] = $this->Pekerjaan_model->get();
        $data['pendidikan'] = $this->Pendidikan_model->get();
        $data['sts_hub_kel'] = $this->Sts_hub_kel_model->get();
        $data['sts_pernikahan'] = $this->Sts_pernikahan_model->get();
        $data['rw'] = $this->Rw_model->get();
        $data['rt'] = $this->Rt_model->get();
        $this->load->view('layout/header', $data);
        $this->load->view('data_penduduk/vw_detail_penduduk', $data);
        $this->load->view('layout/footer', $data);
    }
}
