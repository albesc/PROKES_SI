<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Rt_model extends CI_Model
{
    public $table = 'rt';
    public $id = 'rt.rt_id';

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
