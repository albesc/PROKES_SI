<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Agenda extends CI_Controller
{
    public $table = 'agenda';
    public $id = 'agenda.ag_id';

    public function __construct()
    {
        parent::__construct();
        is_logged_in2();
        $this->load->model('Agenda_model');
    }

    function index()
    {
        $jumlah_data = $this->Agenda_model->tagenda();
        $config["base_url"] = base_url() . "Agenda/index";
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
        $data['agenda'] = $this->Agenda_model->get($config['per_page'], $from);
        $data['links'] = $this->pagination->create_links();

        $data['judul'] = "Halaman Agenda";
        // $data['agenda'] = $this->Agenda_model->get();
        $this->load->view("layout/header", $data);
        $this->load->view("data_agenda/vw_agenda", $data);
        $this->load->view("layout/footer", $data);
    }

    public function add()
    {
        $data['judul'] = "Tambah Agenda";
        $this->load->view('layout/header', $data);
        $this->load->view('data_agenda/vw_add_agenda', $data);
        $this->load->view('layout/footer', $data);
    }

    public function upload()
    {
        $data = [
            'ag_name' => $this->input->post('ag_name'),
            'ag_tgl_mulai' => $this->input->post('ag_tgl_mulai'),
            'ag_tgl_akhir' => $this->input->post('ag_tgl_akhir'),
            'ag_ket' => $this->input->post('ag_ket'),
        ];
        $this->Agenda_model->insert($data);
        redirect("Agenda");
    }

    public function edit($ag_id)
    {
        $data['judul'] = "Edit Agenda";
        $data['agenda'] = $this->Agenda_model->getById($ag_id);
        $this->load->view('layout/header', $data);
        $this->load->view('data_agenda/vw_edit_agenda', $data);
        $this->load->view('layout/footer', $data);
    }

    public function update()
    {
        $data = [
            'ag_name' => $this->input->post('ag_name'),
            'ag_tgl_mulai' => $this->input->post('ag_tgl_mulai'),
            'ag_tgl_akhir' => $this->input->post('ag_tgl_akhir'),
            'ag_ket' => $this->input->post('ag_ket'),
        ];
        $id = $this->input->post('ag_id');
        $this->Agenda_model->update(['ag_id' => $id], $data);
        redirect("Agenda");
    }
}
