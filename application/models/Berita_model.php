<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Berita_model extends CI_Model
{
    public $table = 'berita';
    public $id = 'berita.brt_id';

    public function __construct()
    {
        parent::__construct();
    }

    public function getAll()
    {
        $query = $this->db->get('berita');
        return $query->result_array();
    }
}
