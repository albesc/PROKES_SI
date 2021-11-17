<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Umkm_kat_model extends CI_Model
{
    public $table = 'umkm_kat';
    public $id = 'umkm_kat.id_kat';

    public function __construct()
    {
        parent::__construct();
    }

    public function get()
    {
        $this->db->from($this->table);
        $query = $this->db->get();
        return $query->result_array();
    }
}
