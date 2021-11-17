<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Rw extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Rt_model');
        $this->load->model('Rw_model');
        $this->load->model('User_model');
    }

    function index()
    {
        $data['judul'] = "Halaman RT";
        // $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['rt'] = $this->Rw_model->get();
        $this->load->view("layout/header", $data);
        $this->load->view("data_rtrw/vw_detail_rw", $data);
        $this->load->view("layout/footer", $data);
    }

    public function add()
    {
        $data['judul'] = "Tambah RT";
        // $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $this->load->view("layout/header", $data);
        $this->load->view("data_rtrw/vw_add_rt", $data);
        $this->load->view("layout/footer", $data);
    }

    public function upload()
    {
        $data = [
            'no_rt' => $this->input->post('no_rt'),
            'rt_nama' => $this->input->post('rt_nama'),
            'alamat' => $this->input->post('alamat'),
            'no_tlp' => $this->input->post('no_tlp'),
            'tgl_jabat' => $this->input->post('tgl_jabat'),
            'tgl_akhir' => $this->input->post('tgl_akhir'),
            'rw_id' => $this->input->post('rw_id'),
        ];
        $upload_image = $_FILES['rt_foto']['name'];
        if ($upload_image) {
            $config['allowed_types'] = 'gif|jpg|png|jpeg';
            $config['max_size'] = '2048';
            $config['upload_path'] = './assets/img/rt/';
            $this->load->library('upload', $config);
            if ($this->upload->do_upload('rt_foto')) {
                $new_image = $this->upload->data('file_name');
                $this->db->set('rt_foto', $new_image);
            } else {
                echo $this->upload->display_errors();
            }
        }

        $this->Rt_model->insert($data, $upload_image);
        redirect("Rw/detail/", $data['rw_id']);
    }

    public function edit($rt_id)
    {
        $data['judul'] = "Edit RT";
        // $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['rt'] = $this->Rw_model->getById($rt_id);
        $this->load->view("layout/header", $data);
        $this->load->view("data_rtrw/vw_edit_rt", $data);
        $this->load->view("layout/footer", $data);
    }

    public function update()
    {
        $data = [
            'no_rw' => $this->input->post('no_rw'),
            'rw_nama' => $this->input->post('rw_nama'),
            'alamat' => $this->input->post('alamat'),
            'no_tlp' => $this->input->post('no_tlp'),
            'tgl_jabat' => $this->input->post('tgl_jabat'),
            'tgl_akhir' => $this->input->post('tgl_akhir'),
        ];
        $upload_image = $_FILES['rt_foto']['name'];
        if ($upload_image) {
            $config['allowed_types'] = 'gif|jpg|png|jpeg';
            $config['max_size'] = '2048';
            $config['upload_path'] = './assets/img/rt/';
            $this->load->library('upload', $config);
            if ($this->upload->do_upload('rt_foto')) {
                $old_image = $data['rt']['gambar'];
                if ($old_image != 'default.png') {
                    unlink(FCPATH . 'assets/img/rt/' . $old_image);
                }
                $new_image = $this->upload->data('file_name');
                $this->db->set('rt_foto', $new_image);
            } else {
                echo $this->upload->display_errors();
            }
        }

        $id = $this->input->post('rt_id');
        $this->Rw_model->update(['rt_id' => $id], $data, $upload_image);
        redirect("Rt/detail/", $data['rw_id']);
    }

    public function detail($rt_id)
    {
        $data['judul'] = "Detail RT";
        // $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['rt'] = $this->Rw_model->getById($rt_id);
        $this->load->view("layout/header", $data);
        $this->load->view("data_rtrw/vw_detail_rt", $data);
        $this->load->view("layout/footer", $data);
    }
}
