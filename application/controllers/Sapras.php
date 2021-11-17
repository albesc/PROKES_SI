<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Sapras extends CI_Controller
{
    public $table = 'saprsarana';
    public $id = 'saprsarana.spr_id';

    public function __construct()
    {
        parent::__construct();
        $this->load->model('Sapras_model');
        $this->load->model('Sprjns_model');
    }

    function index()
    {
        $data['judul'] = "Halaman Sarana-Prasarana";
        // $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['saprsarana'] = $this->Sapras_model->get();
        $this->load->view('layout/header', $data);
        $this->load->view('data_sapras/vw_sapras', $data);
        $this->load->view('layout/footer', $data);
    }

    public function add()
    {
        $data['judul'] = "Tambah Sarana dan Prasarana";
        $data['saprsarana'] = $this->Sapras_model->get();
        $data['sprjns'] = $this->Sprjns_model->get();
        $this->load->view('layout/header', $data);
        $this->load->view('data_sapras/vw_add_sapras', $data);
        $this->load->view('layout/footer', $data);
    }

    public function upload()
    {
        $data = [
            'spr_name' => $this->input->post('spr_name'),
            'spr_kondisi' => $this->input->post('spr_kondisi'),
            'spr_lokasi' => $this->input->post('spr_lokasi'),
            'sprjns_id' => $this->input->post('sprjns_id'),
        ];
        $upload_image = $_FILES['spr_gambar']['name'];
        if ($upload_image) {
            $config['allowed_types'] = 'gif|jpg|png|jpeg';
            $config['max_size'] = '2048';
            $config['upload_path'] = './assets/img/sapras/';
            $this->load->library('upload', $config);
            if ($this->upload->do_upload('spr_gambar')) {
                $new_image = $this->upload->data('file_name');
                $this->db->set('spr_gambar', $new_image);
            } else {
                echo $this->upload->display_errors();
            }
        }

        $this->Sapras_model->insert($data, $upload_image);
        redirect("Sapras");
    }

    public function edit($spr_id)
    {
        $data['judul'] = "Edit Sarana dan Prasarana";
        $data['saprsarana'] = $this->Sapras_model->getById($spr_id);
        $data['sprjns'] = $this->Sprjns_model->get();
        $this->load->view('layout/header', $data);
        $this->load->view('data_sapras/vw_edit_sapras', $data);
        $this->load->view('layout/footer', $data);
    }

    public function update()
    {
        $data = [
            'spr_name' => $this->input->post('spr_name'),
            'spr_kondisi' => $this->input->post('spr_kondisi'),
            'spr_lokasi' => $this->input->post('spr_lokasi'),
            'sprjns_id' => $this->input->post('sprjns_id'),
        ];
        $upload_image = $_FILES['spr_gambar']['name'];
        if ($upload_image) {
            $config['allowed_types'] = 'gif|jpg|png|jpeg';
            $config['max_size'] = '2048';
            $config['upload_path'] = './assets/img/sapras/';
            $this->load->library('upload', $config);
            if ($this->upload->do_upload('spr_gambar')) {
                $old_image = $data['sapras']['gambar'];
                if ($old_image != 'default.png') {
                    unlink(FCPATH . 'assets/img/sapras/' . $old_image);
                }
                $new_image = $this->upload->data('file_name');
                $this->db->set('spr_gambar', $new_image);
            } else {
                echo $this->upload->display_errors();
            }
        }

        $id = $this->input->post('spr_id');
        $this->Sapras_model->update(['spr_id' => $id], $data, $upload_image);
        redirect("Sapras");
    }

    public function detail($spr_id)
    {
        $data['judul'] = "Detail Sarana dan Prasarana";
        $data['saprsarana'] = $this->Sapras_model->getById($spr_id);
        $data['sprjns'] = $this->Sprjns_model->get();
        $this->load->view('layout/header', $data);
        $this->load->view('data_sapras/vw_detail_sapras', $data);
        $this->load->view('layout/footer', $data);
    }
}
