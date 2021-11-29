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
        $jumlah_data = $this->Sapras_model->tsapras();
        $config["base_url"] = base_url() . "Sapras/index";
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
        $data['sapras'] = $this->Sapras_model->get($config['per_page'], $from);
        $data['links'] = $this->pagination->create_links();

        $data['judul'] = "Halaman Sarana-Prasarana";
        // $data['saprsarana'] = $this->Sapras_model->get();
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
