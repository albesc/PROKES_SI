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

    public function get($num, $start)
    {
        $this->db->from($this->table);
        $this->db->limit($num, $start);
        $query = $this->db->get();
        return $query->result_array();
    }

    public function getById($spr_id)
    {
        $this->db->select('saprsarana.*');
        $this->db->from('saprsarana');
        $this->db->where('saprsarana.spr_id', $spr_id);
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

    public function tsapras()
    {
        $this->db->from($this->table);
        $query = $this->db->get();
        return $query->num_rows();
    }
}
