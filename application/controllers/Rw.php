<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Rw extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Rw_model');
        $this->load->model('Rt_model');
        $this->load->model('Rw_histori_model');
        $this->load->model('User_model');
        $this->load->model('Penduduk_model');
    }

    function index()
    {
        $jumlah_data = $this->Rw_model->trw();
        $config["base_url"] = base_url() . "Rw/index";
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
        $data['rw'] = $this->Rw_model->get($config['per_page'], $from);
        $data['links'] = $this->pagination->create_links();

        $data['judul'] = "Halaman RW";
        $data['countrw'] = $this->Penduduk_model->countpendudukbyrw();
        // $data['rw'] = $this->Rw_model->get();
        $this->load->view("layout/header", $data);
        $this->load->view("data_rtrw/vw_rtrw", $data);
        $this->load->view("layout/footer", $data);
    }

    public function add()
    {
        $data['judul'] = "Tambah RW";
        $this->load->view("layout/header", $data);
        $this->load->view("data_rtrw/vw_add_rw", $data);
        $this->load->view("layout/footer", $data);
    }

    public function upload()
    {
        $data = [
            'no_rw' => $this->input->post('no_rw'),
            'rw_nama' => $this->input->post('rw_nama'),
            'alamat' => $this->input->post('alamat'),
            'no_tlp' => $this->input->post('no_tlp'),
            'tgl_jabat' => $this->input->post('tgl_jabat'),
            'tgl_akhir' => $this->input->post('tgl_akhir'),
        ];
        $upload_image = $_FILES['rw_foto']['name'];
        if ($upload_image) {
            $config['allowed_types'] = 'gif|jpg|png|jpeg';
            $config['max_size'] = '2048';
            $config['upload_path'] = './assets/img/rw/';
            $this->load->library('upload', $config);
            if ($this->upload->do_upload('rw_foto')) {
                $new_image = $this->upload->data('file_name');
                $this->db->set('rw_foto', $new_image);
            } else {
                echo $this->upload->display_errors();
            }
        }

        $this->Rw_model->insert($data, $upload_image);
        $this->Rw_histori_model->insert($data, $upload_image);
        redirect("Rw");
    }

    public function edit($rw_id)
    {
        $data['judul'] = "Edit RW";
        $data['rw'] = $this->Rw_model->getById($rw_id);
        $this->load->view("layout/header", $data);
        $this->load->view("data_rtrw/vw_edit_rw", $data);
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
        $upload_image = $_FILES['rw_foto']['name'];
        if ($upload_image) {
            $config['allowed_types'] = 'gif|jpg|png|jpeg';
            $config['max_size'] = '2048';
            $config['upload_path'] = './assets/img/rw/';
            $this->load->library('upload', $config);
            if ($this->upload->do_upload('rw_foto')) {
                $old_image = $data['rw']['gambar'];
                if ($old_image != 'default.png') {
                    unlink(FCPATH . 'assets/img/rw/' . $old_image);
                }
                $new_image = $this->upload->data('file_name');
                $this->db->set('rw_foto', $new_image);
            } else {
                echo $this->upload->display_errors();
            }
        }

        $id = $this->input->post('rw_id');
        $this->Rw_model->update(['rw_id' => $id], $data, $upload_image);
        $this->Rw_histori_model->insert($data, $upload_image);
        redirect("Rw");
    }

    public function detail($rw_id)
    {
        $data['judul'] = "Detail RW";
        $data['rw'] = $this->Rw_model->getById($rw_id);
        $data['rt'] = $this->Rt_model->get();
        $this->load->view("layout/header", $data);
        $this->load->view("data_rtrw/vw_detail_rw", $data);
        $this->load->view("layout/footer", $data);
    }
}
