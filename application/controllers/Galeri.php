<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Galeri extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        is_logged_in2();
        $this->load->model('Galeri_model');
        $this->load->model('User_model');
    }

    function index()
    {
        $jumlah_data = $this->Galeri_model->tgaleri();
        $config["base_url"] = base_url() . "Galeri/index";
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
        $data['galeri'] = $this->Galeri_model->get($config['per_page'], $from);
        $data['links'] = $this->pagination->create_links();

        $data['judul'] = "Halaman galeri";
        // $data['galeri'] = $this->Galeri_model->get();
        $this->load->view("layout/header", $data);
        $this->load->view("data_galeri/vw_galeri", $data);
        $this->load->view("layout/footer", $data);
    }

    public function add()
    {
        $data['judul'] = "Tambah Galeri";
        $this->load->view('layout/header', $data);
        $this->load->view('data_galeri/vw_add_galeri', $data);
        $this->load->view('layout/footer', $data);
    }

    public function upload()
    {
        $data = [
            'gal_title' => $this->input->post('gal_title'),
            'gal_url' => $this->input->post('gal_url'),
            'gal_jns' => $this->input->post('gal_jns'),
        ];

        $this->Galeri_model->insert($data);
        redirect("Galeri");
    }

    public function edit($gal_id)
    {
        $data['judul'] = "Edit Galeri";
        $data['galeri'] = $this->Galeri_model->getById($gal_id);
        $this->load->view('layout/header', $data);
        $this->load->view('data_galeri/vw_edit_galeri', $data);
        $this->load->view('layout/footer', $data);
    }

    public function update()
    {
        $data = [
            'gal_title' => $this->input->post('gal_title'),
            'gal_url' => $this->input->post('gal_url'),
            'gal_jns' => $this->input->post('gal_jns'),
        ];

        $id = $this->input->post('gal_id');
        $this->Galeri_model->update(['gal_id' => $id], $data);
        redirect("Galeri");
    }
}
