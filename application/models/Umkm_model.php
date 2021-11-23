<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Umkm_model extends CI_Model
{
    public $table = 'umkm';
    public $id = 'umkm.id_umkm';

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

    public function getById($spr_id)
    {
        $this->db->select('umkm.*');
        $this->db->from('umkm');
        $this->db->where('umkm.id_umkm', $spr_id);
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

    public function tumkm()
    {
        $this->db->from($this->table);
        $query = $this->db->get();
        return $query->num_rows();
    }
}
