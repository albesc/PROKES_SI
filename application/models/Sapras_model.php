<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Sapras_model extends CI_Model
{
    public $table = 'saprsarana';
    public $id = 'saprsarana.spr_id';

    public function __construct()
    {
        parent::__construct();
    }

    public function getAll()
    {
        $query = $this->db->get('saprsarana');
        return $query->result_array();
    }
}
