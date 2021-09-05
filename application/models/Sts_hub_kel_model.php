<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Sts_hub_kel_model extends CI_Model
{
    public $table = 'sts_hub_kel';
    public $id = 'sts_hub_kel.sts_hub_id';

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
