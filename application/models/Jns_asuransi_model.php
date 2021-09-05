<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Jns_asuransi_model extends CI_Model
{
    public $table = 'jns_asuransi';
    public $id = 'jns_asuransi.jnsasn_id';

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
