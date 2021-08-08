<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Agenda extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Agenda_model');
    }

    public function add()
    {
        $data['judul'] = "Tambah Agenda";
        $this->load->view('layout/header', $data);
        $this->load->view('data_agenda/vw_add_agenda', $data);
        $this->load->view('layout/footer', $data);
    }

    public function edit()
    {
        $data['judul'] = "Edit Agenda";
        $this->load->view('layout/header', $data);
        $this->load->view('data_agenda/vw_edit_agenda', $data);
        $this->load->view('layout/footer', $data);
    }
}
