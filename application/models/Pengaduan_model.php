<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Pengaduan_model extends CI_Model
{
    public $table = 'pengaduan';
    public $id = 'pengaduan.pgdn_id';

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

    public function getById($brt_id)
    {
        $this->db->select('pengaduan.*');
        $this->db->from('pengaduan');
        $this->db->where('pengaduan.pgdn_id', $brt_id);
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

    public function tpengaduan()
    {
        $this->db->from($this->table);
        $query = $this->db->get();
        return $query->num_rows();
    }
}
