<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Rt_model extends CI_Model
{
    public $table = 'rt';
    public $id = 'rt.rt_id';

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
    
    public function getById($rt_id){
        $this->db->select('rt.*');
        $this->db->from('rt');
        $this->db->where('rt.rt_id', $rt_id);
        $query = $this->db->get();
        return $query->row_array();
    }

    public function getByRw($rw_id){
        $this->db->select('rt.*');
        $this->db->from('rt');
        $this->db->where('rt.rw_id', $rw_id);
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
