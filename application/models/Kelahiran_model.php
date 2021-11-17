<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Kelahiran_model extends CI_Model
{
    public $table = 'kelahiran';
    public $id = 'kelahiran.klhrn_id';

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
    
    public function getById($klhrn_id){
        $this->db->select('kelahiran.*');
        $this->db->from('kelahiran');
        $this->db->where('kelahiran.klhrn_id', $klhrn_id);
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
}
