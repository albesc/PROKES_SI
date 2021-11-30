<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Pengaduan extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        is_logged_in2();
        $this->load->model('Pengaduan_model');
        $this->load->model('User_model');
        $this->load->model('Tipe_model');
    }

    function index()
    {
        $jumlah_data = $this->Pengaduan_model->tpengaduan();
        $config["base_url"] = base_url() . "Pengaduan/index";
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
        $data['pengaduan'] = $this->Pengaduan_model->get($config['per_page'], $from);
        $data['links'] = $this->pagination->create_links();

        $data['judul'] = "Halaman Pengaduan";
        $data['user'] = $this->db->get_where('user', ['usr_email' => $this->session->userdata('email')])->row_array();
        // $data['pengaduan'] = $this->Pengaduan_model->get();
        $data['tipe'] = $this->Tipe_model->get();
        $this->load->view("layout/header", $data);
        $this->load->view("data_pengaduan/vw_pengaduan", $data);
        $this->load->view("layout/footer", $data);
    }

    public function resp($pgdn_id)
    {
        $data['judul'] = "Tanggapi Pengaduan";
        $data['user'] = $this->db->get_where('user', ['usr_email' => $this->session->userdata('email')])->row_array();
        $data['pengaduan'] = $this->Pengaduan_model->getById($pgdn_id);
        $data['tipe'] = $this->Tipe_model->get();
        $this->load->view('layout/header', $data);
        $this->load->view('data_pengaduan/vw_resp_pengaduan', $data);
        $this->load->view('layout/footer', $data);
    }

    public function update()
    {
        $p = $this->input->post('status');
        $tes = ($p == "1") ? "1" : "0";
        $data = [
            'usr_id' => $this->input->post('usr_id'),
            'tanggapan' => $this->input->post('tanggapan'),
            'status' => $tes,
        ];

        $id = $this->input->post('pgdn_id');
        $this->Pengaduan_model->update(['pgdn_id' => $id], $data);
        redirect("Pengaduan");
    }
}
