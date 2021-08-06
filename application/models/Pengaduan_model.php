<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Pengaduan_model extends CI_Model
{
    public $table = 'pengaduan';
    public $id = 'pengaduan.pgdn_id';

    public function __construct()
    {
        parent::__construct();
    }

    public function getAll()
    {
        $query = $this->db->get('pengaduan');
        return $query->result_array();
    }
}
