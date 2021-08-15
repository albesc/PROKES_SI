<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Rtrw_model extends CI_Model
{
    public $table = 'rtrw';
    public $id = 'rtrw.rtrw_id';

    public function __construct()
    {
        parent::__construct();
    }

    public function getAll()
    {
        $query = $this->db->get('rt');
        return $query->result_array();
    }
}
