<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Kelahiran_model extends CI_Model
{
    public $table = 'kelahiran';
    public $id = 'kelahiran.agm_id';

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
