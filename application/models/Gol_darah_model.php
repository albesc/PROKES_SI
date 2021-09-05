<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Gol_darah_model extends CI_Model
{
    public $table = 'gol_darah';
    public $id = 'gol_darah.goldr_id';

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
