<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Penduduk_model extends CI_Model
{
    public $table = 'penduduk';
    public $pndk_id = 'penduduk.pndk_id';

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

    public function getById($pndk_id)
    {
        $this->db->select('penduduk.*, rw.no_rw as rw, rt.no_rt as rt, agama.agm_ket as agama, gol_darah.goldr_ket as gol_darah, 
        pendidikan.pnd_ket as pendidikan, pekerjaan.pkrj_ket as pekerjaan, sts_hub_kel.sts_hub_ket as sts_hub_kel, 
        sts_pernikahan.stspnkn_ket as sts_pernikahan');
        $this->db->from('penduduk');
        $this->db->join('rw', 'penduduk.rw_id = rw.rw_id');
        $this->db->join('rt', 'penduduk.rt_id = rt.rt_id');
        $this->db->join('agama', 'penduduk.agm_id = agama.agm_id');
        $this->db->join('gol_darah', 'penduduk.goldr_id = gol_darah.goldr_id');
        $this->db->join('pendidikan', 'penduduk.pnd_id = pendidikan.pnd_id');
        $this->db->join('pekerjaan', 'penduduk.pkrj_id = pekerjaan.pkrj_id');
        $this->db->join('sts_hub_kel', 'penduduk.sts_hub_id = sts_hub_kel.sts_hub_id');
        $this->db->join('sts_pernikahan', 'penduduk.stspnkn_id = sts_pernikahan.stspnkn_id');
        $this->db->where('penduduk.pndk_id', $pndk_id);
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

    public function tpenduduk()
    {
        $this->db->from($this->table);
        $query = $this->db->get();
        return $query->num_rows();
    }
}
