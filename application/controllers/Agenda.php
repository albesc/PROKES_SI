<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Agenda extends CI_Controller
{
    public $table = 'agenda';
    public $id = 'agenda.ag_id';

    public function __construct()
    {
        parent::__construct();
        $this->load->model('Agenda_model');
    }

    function index()
    {
        $data['judul'] = "Halaman Agenda";
        // $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['agenda'] = $this->Agenda_model->get();
        $this->load->view("layout/header", $data);
        $this->load->view("data_agenda/vw_agenda", $data);
        $this->load->view("layout/footer", $data);
    }

    public function add()
    {
        $data['judul'] = "Tambah Agenda";
        // $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $this->load->view('layout/header', $data);
        $this->load->view('data_agenda/vw_add_agenda', $data);
        $this->load->view('layout/footer', $data);
    }

    public function upload()
    {
        $data = [
            'ag_name' => $this->input->post('ag_name'),
            'ag_start_date' => $this->input->post('ag_start_date'),
            'ag_finish_date' => $this->input->post('ag_finish_date'),
            'ag_ket' => $this->input->post('ag_ket'),
        ];
        $this->Agenda_model->insert($data);
        redirect("Agenda");
    }

    public function edit($ag_id)
    {
        $data['judul'] = "Edit Berita";
        // $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['agenda'] = $this->Agenda_model->getById($ag_id);
        $this->load->view('layout/header', $data);
        $this->load->view('data_agenda/vw_edit_agenda', $data);
        $this->load->view('layout/footer', $data);
    }

    public function update()
    {
        $data = [
            'ag_name' => $this->input->post('ag_name'),
            'ag_start_date' => $this->input->post('ag_start_date'),
            'ag_finish_date' => $this->input->post('ag_finish_date'),
            'ag_ket' => $this->input->post('ag_ket'),
        ];
        $id = $this->input->post('ag_id');
        $this->Agenda_model->update(['ag_id' => $id], $data);
        redirect("Agenda");
    }
}
