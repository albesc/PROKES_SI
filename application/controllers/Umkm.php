<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Umkm extends CI_Controller
{
    public $table = 'umkm';
    public $id = 'umkm.id_umkm';

    public function __construct()
    {
        parent::__construct();
        $this->load->model('Umkm_model');
        $this->load->model('Umkm_kat_model');
    }

    function index()
    {
        $data['judul'] = "Halaman UMKM";
        // $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['umkm'] = $this->Umkm_model->get();
        $data['umkm_kat'] = $this->Umkm_kat_model->get();
        $this->load->view('layout/header', $data);
        $this->load->view('data_umkm/vw_umkm', $data);
        $this->load->view('layout/footer', $data);
    }

    public function add()
    {
        $data['judul'] = "Tambah UMKM";
        $data['umkm'] = $this->Umkm_model->get();
        $data['umkm_kat'] = $this->Umkm_kat_model->get();
        $this->load->view('layout/header', $data);
        $this->load->view('data_umkm/vw_add_umkm', $data);
        $this->load->view('layout/footer', $data);
    }

    public function upload()
    {
        $data = [
            'no_nib' => $this->input->post('no_nib'),
            'nama_owner' => $this->input->post('nama_owner'),
            'nama_usaha' => $this->input->post('nama_usaha'),
            'id_kat' => $this->input->post('id_kat'),
            'alamat' => $this->input->post('alamat'),
        ];
        $upload_image = $_FILES['foto_produk']['name'];
        if ($upload_image) {
            $config['allowed_types'] = 'gif|jpg|png|jpeg';
            $config['max_size'] = '2048';
            $config['upload_path'] = './assets/img/umkm/';
            $this->load->library('upload', $config);
            if ($this->upload->do_upload('foto_produk')) {
                $new_image = $this->upload->data('file_name');
                $this->db->set('foto_produk', $new_image);
            } else {
                echo $this->upload->display_errors();
            }
        }

        $this->Umkm_model->insert($data, $upload_image);
        redirect("Umkm");
    }

    public function edit($id_umkm)
    {
        $data['judul'] = "Edit UMKM";
        $data['umkm'] = $this->Umkm_model->getById($id_umkm);
        $data['umkm_kat'] = $this->Umkm_kat_model->get();
        $this->load->view('layout/header', $data);
        $this->load->view('data_umkm/vw_edit_umkm', $data);
        $this->load->view('layout/footer', $data);
    }

    public function update()
    {
        $data = [
            'no_nib' => $this->input->post('no_nib'),
            'nama_owner' => $this->input->post('nama_owner'),
            'nama_usaha' => $this->input->post('nama_usaha'),
            'id_kat' => $this->input->post('id_kat'),
            'alamat' => $this->input->post('alamat'),
        ];
        $upload_image = $_FILES['foto_produk']['name'];
        if ($upload_image) {
            $config['allowed_types'] = 'gif|jpg|png|jpeg';
            $config['max_size'] = '2048';
            $config['upload_path'] = './assets/img/umkm/';
            $this->load->library('upload', $config);
            if ($this->upload->do_upload('foto_produk')) {
                $old_image = $data['umkm']['gambar'];
                if ($old_image != 'default.png') {
                    unlink(FCPATH . 'assets/img/sapras/' . $old_image);
                }
                $new_image = $this->upload->data('file_name');
                $this->db->set('foto_produk', $new_image);
            } else {
                echo $this->upload->display_errors();
            }
        }

        $id = $this->input->post('id_umkm');
        $this->Umkm_model->update(['id_umkm' => $id], $data, $upload_image);
        redirect("Umkm");
    }

    public function detail($id_umkm)
    {
        $data['judul'] = "Detail UMKM";
        $data['umkm'] = $this->Umkm_model->getById($id_umkm);
        $data['umkm_kat'] = $this->Umkm_kat_model->get();
        $this->load->view('layout/header', $data);
        $this->load->view('data_umkm/vw_detail_umkm', $data);
        $this->load->view('layout/footer', $data);
    }
}
