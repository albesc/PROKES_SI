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

    public function get($num, $start)
    {
        $this->db->from($this->table);
        $this->db->limit($num, $start);
        $query = $this->db->get();
        return $query->result_array();
        // $this->db->from($this->table);
        // $query = $this->db->get();
        // return $query->result_array();
    }

    public function getById($ag_id)
    {
        $this->db->select('agenda.*');
        $this->db->from('agenda');
        $this->db->where('agenda.ag_id', $ag_id);
        $query = $this->db->get();
        return $query->row_array();
    }

    public function update($where, $data)
    {
        $this->db->update($this->table, $data, $where);
        return $this->db->affected_rows();
    }

    public function insert($data)
    {
        $this->db->insert($this->table, $data);
        return $this->db->insert_id();
    }

    public function delete($id)
    {
        $this->db->where($this->id, $id);
        $this->db->delete($this->table);
        return $this->db->affected_rows();
    }

    public function tagenda()
    {
        $this->db->from($this->table);
        $query = $this->db->get();
        return $query->num_rows();
    }
}
