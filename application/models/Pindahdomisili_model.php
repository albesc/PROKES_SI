<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Pindahdomisili_model extends CI_Model
{
    public $table = 'pindahdomisili';
    public $id = 'pindahdomisili.agm_id';

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
