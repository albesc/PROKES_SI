<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Umkm extends CI_Controller
{
    public $table = 'umkm';
    public $id = 'umkm.id_umkm';

    public function __construct()
    {
        parent::__construct();
        $this->load->model('Umkm_model');
        $this->load->model('Umkm_kat_model');
    }

    function index()
    {
        $jumlah_data = $this->Umkm_model->tumkm();
        $config["base_url"] = base_url() . "Umkm/index";
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
        $data['umkm'] = $this->Umkm_model->get($config['per_page'], $from);
        $data['links'] = $this->pagination->create_links();

        $data['judul'] = "Halaman UMKM";
        // $data['umkm'] = $this->Umkm_model->get();
        $data['umkm_kat'] = $this->Umkm_kat_model->get();
        $this->load->view('layout/header', $data);
        $this->load->view('data_umkm/vw_umkm', $data);
        $this->load->view('layout/footer', $data);
    }

    public function add()
    {
        $data['judul'] = "Tambah UMKM";
        $data['umkm'] = $this->Umkm_model->get();
        $data['umkm_kat'] = $this->Umkm_kat_model->get();
        $this->load->view('layout/header', $data);
        $this->load->view('data_umkm/vw_add_umkm', $data);
        $this->load->view('layout/footer', $data);
    }

    public function upload()
    {
        $data = [
            'no_nib' => $this->input->post('no_nib'),
            'nama_owner' => $this->input->post('nama_owner'),
            'nama_usaha' => $this->input->post('nama_usaha'),
            'id_kat' => $this->input->post('id_kat'),
            'alamat' => $this->input->post('alamat'),
        ];
        $upload_image = $_FILES['foto_produk']['name'];
        if ($upload_image) {
            $config['allowed_types'] = 'gif|jpg|png|jpeg';
            $config['max_size'] = '2048';
            $config['upload_path'] = './assets/img/umkm/';
            $this->load->library('upload', $config);
            if ($this->upload->do_upload('foto_produk')) {
                $new_image = $this->upload->data('file_name');
                $this->db->set('foto_produk', $new_image);
            } else {
                echo $this->upload->display_errors();
            }
        }

        $this->Umkm_model->insert($data, $upload_image);
        redirect("Umkm");
    }

    public function edit($id_umkm)
    {
        $data['judul'] = "Edit UMKM";
        $data['umkm'] = $this->Umkm_model->getById($id_umkm);
        $data['umkm_kat'] = $this->Umkm_kat_model->get();
        $this->load->view('layout/header', $data);
        $this->load->view('data_umkm/vw_edit_umkm', $data);
        $this->load->view('layout/footer', $data);
    }

    public function update()
    {
        $data = [
            'no_nib' => $this->input->post('no_nib'),
            'nama_owner' => $this->input->post('nama_owner'),
            'nama_usaha' => $this->input->post('nama_usaha'),
            'id_kat' => $this->input->post('id_kat'),
            'alamat' => $this->input->post('alamat'),
        ];
        $upload_image = $_FILES['foto_produk']['name'];
        if ($upload_image) {
            $config['allowed_types'] = 'gif|jpg|png|jpeg';
            $config['max_size'] = '2048';
            $config['upload_path'] = './assets/img/umkm/';
            $this->load->library('upload', $config);
            if ($this->upload->do_upload('foto_produk')) {
                $old_image = $data['umkm']['gambar'];
                if ($old_image != 'default.png') {
                    unlink(FCPATH . 'assets/img/sapras/' . $old_image);
                }
                $new_image = $this->upload->data('file_name');
                $this->db->set('foto_produk', $new_image);
            } else {
                echo $this->upload->display_errors();
            }
        }

        $id = $this->input->post('id_umkm');
        $this->Umkm_model->update(['id_umkm' => $id], $data, $upload_image);
        redirect("Umkm");
    }

    public function detail($id_umkm)
    {
        $data['judul'] = "Detail UMKM";
        $data['umkm'] = $this->Umkm_model->getById($id_umkm);
        $data['umkm_kat'] = $this->Umkm_kat_model->get();
        $this->load->view('layout/header', $data);
        $this->load->view('data_umkm/vw_detail_umkm', $data);
        $this->load->view('layout/footer', $data);
    }
}
