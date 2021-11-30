<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Berita extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        is_logged_in2();
        $this->load->model('Berita_model');
        $this->load->model('User_model');
    }

    function index()
    {
        $jumlah_data = $this->Berita_model->tberita();
        $config["base_url"] = base_url() . "Berita/index";
        $config["total_rows"] = $jumlah_data;
        $config["per_page"] = 9;
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
        $data['berita'] = $this->Berita_model->get($config['per_page'], $from);
        $data['links'] = $this->pagination->create_links();

        $data['judul'] = "Halaman Berita";
        // $data['berita'] = $this->Berita_model->get();
        $this->load->view("layout/header", $data);
        $this->load->view("data_berita/vw_berita", $data);
        $this->load->view("layout/footer", $data);
    }

    public function add()
    {
        $data['judul'] = "Tambah Berita";
        // $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $this->load->view('layout/header', $data);
        $this->load->view('data_berita/vw_add_berita', $data);
        $this->load->view('layout/footer', $data);
    }

    public function upload()
    {
        $data = [
            'brt_judul' => $this->input->post('brt_judul'),
            'brt_isi' => $this->input->post('brt_isi'),
        ];
        $upload_image = $_FILES['brt_gambar']['name'];
        if ($upload_image) {
            $config['allowed_types'] = 'gif|jpg|png|jpeg';
            $config['max_size'] = '2048';
            $config['upload_path'] = './assets/img/berita/';
            $this->load->library('upload', $config);
            if ($this->upload->do_upload('brt_gambar')) {
                $new_image = $this->upload->data('file_name');
                $this->db->set('brt_gambar', $new_image);
            } else {
                echo $this->upload->display_errors();
            }
        }

        $this->Berita_model->insert($data, $upload_image);
        redirect("Berita");
    }

    public function edit($brt_id)
    {
        $data['judul'] = "Edit Berita";
        // $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['berita'] = $this->Berita_model->getById($brt_id);
        $this->load->view('layout/header', $data);
        $this->load->view('data_berita/vw_edit_berita', $data);
        $this->load->view('layout/footer', $data);
    }

    public function update()
    {
        $data = [
            'brt_judul' => $this->input->post('brt_judul'),
            'brt_isi' => $this->input->post('brt_isi'),
        ];
        $upload_image = $_FILES['brt_gambar']['name'];
        if ($upload_image) {
            $config['allowed_types'] = 'gif|jpg|png|jpeg';
            $config['max_size'] = '2048';
            $config['upload_path'] = './assets/img/berita/';
            $this->load->library('upload', $config);
            if ($this->upload->do_upload('brt_gambar')) {
                $old_image = $data['berita']['gambar'];
                if ($old_image != 'default.png') {
                    unlink(FCPATH . 'assets/img/berita/' . $old_image);
                }
                $new_image = $this->upload->data('file_name');
                $this->db->set('brt_gambar', $new_image);
            } else {
                echo $this->upload->display_errors();
            }
        }

        $id = $this->input->post('brt_id');
        $this->Berita_model->update(['brt_id' => $id], $data, $upload_image);
        redirect("Berita");
    }
}
