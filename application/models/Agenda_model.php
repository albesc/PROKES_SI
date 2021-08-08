<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Agenda_model extends CI_Model
{
    public $table = 'agenda';
    public $id = 'agenda.ag_id';

    public function __construct()
    {
        parent::__construct();
    }

    public function getAll()
    {
        $query = $this->db->get('agenda');
        return $query->result_array();
    }
}
