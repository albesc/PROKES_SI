<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Galeri_model extends CI_Model
{
    public $table = 'galeri';
    public $id = 'galeri.gal_id';

    public function __construct()
    {
        parent::__construct();
    }

    public function getAll()
    {
        $query = $this->db->get('galeri');
        return $query->result_array();
    }
}
