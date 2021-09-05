<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Sts_pernikahan_model extends CI_Model
{
    public $table = 'sts_pernikahan';
    public $id = 'sts_pernikahan.stspnkn_id';

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
