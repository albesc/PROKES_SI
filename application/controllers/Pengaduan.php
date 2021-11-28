<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Pengaduan extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Pengaduan_model');
        $this->load->model('User_model');
    }

    function index()
    {
        $data['judul'] = "Halaman Pengaduan";
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['pengaduan'] = $this->Pengaduan_model->get();
        $this->load->view("layout/header", $data);
        $this->load->view("data_pengaduan/vw_pengaduan", $data);
        $this->load->view("layout/footer", $data);
    }

    public function resp($pgdn_id)
    {
        $data['judul'] = "Tanggapi Pengaduan";
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['pengaduan'] = $this->Pengaduan_model->getById($pgdn_id);
        $this->load->view('layout/header', $data);
        $this->load->view('data_pengaduan/vw_resp_pengaduan', $data);
        $this->load->view('layout/footer', $data);
    }

    public function update()
    {
        $data = [
            'brt_judul' => $this->input->post('brt_judul'),
            'brt_isi' => $this->input->post('brt_isi'),
        ];
        $id = $this->input->post('pgdn_id');
        $this->Pengaduan_model->update(['pgdn_id' => $id], $data);
        redirect("Pengaduan");
    }
}
