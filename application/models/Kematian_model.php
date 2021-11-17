<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Kematian_model extends CI_Model
{
    public $table = 'kematian';
    public $id = 'kematian.kmtn_id';

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
    
    public function getById($kmtn_id){
        $this->db->select('kematian.*');
        $this->db->from('kematian');
        $this->db->where('kematian.klhrn_id', $kmtn_id);
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
