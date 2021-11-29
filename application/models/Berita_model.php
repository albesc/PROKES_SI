<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Berita_model extends CI_Model
{
    public $table = 'berita';
    public $id = 'berita.brt_id';

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

    public function getById($brt_id){
        $this->db->select('berita.*');
        $this->db->from('berita');
        $this->db->where('berita.brt_id', $brt_id);
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

    public function tberita()
    {
        $this->db->from($this->table);
        $query = $this->db->get();
        return $query->num_rows();
    }
}
