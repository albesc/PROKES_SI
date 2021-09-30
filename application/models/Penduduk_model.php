<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Penduduk_model extends CI_Model
{
    public $table = 'penduduk';
    public $pndk_id = 'penduduk.pndk_id';

    public function __construct(){
        parent::__construct();
    }

    public function get(){
        $this->db->from($this->table);
        $query = $this->db->get();
        return $query->result_array();
    }

    public function getById($pndk_id){
        $this->db->select('penduduk.*, rw.no_rw as rw, rt.no_rt as rt, agama.agm_ket as agama, gol_darah.goldr_ket as gol_darah, 
        pendidikan.pnd_ket as pendidikan, pekerjaan.pkrj_ket as pekerjaan, sts_hub_kel.sts_hub_ket as sts_hub_kel, 
        sts_pernikahan.stspnkn_ket as sts_pernikahan, jns_asuransi.jnsasn_ket as jns_asuransi');
        $this->db->from('penduduk');
        $this->db->join('rw', 'penduduk.rw_id = rw.rw_id');
        $this->db->join('rt', 'penduduk.rt_id = rt.rt_id');
        $this->db->join('agama', 'penduduk.agm_id = agama.agm_id');
        $this->db->join('gol_darah', 'penduduk.goldr_id = gol_darah.goldr_id');
        $this->db->join('pendidikan', 'penduduk.pnd_id = pendidikan.pnd_id');
        $this->db->join('pekerjaan', 'penduduk.pkrj_id = pekerjaan.pkrj_id');
        $this->db->join('sts_hub_kel', 'penduduk.sts_hub_id = sts_hub_kel.sts_hub_id');
        $this->db->join('sts_pernikahan', 'penduduk.stspnkn_id = sts_pernikahan.stspnkn_id');
        $this->db->join('jns_asuransi', 'penduduk.jnsasn_id = jns_asuransi.jnsasn_id');
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

    // public function getByJK(){
    //     $this->db->select('pndk_jk as jk, count(*) as jumlah');
    //     $this->db->from($this->table);
    //     $this->db->group_by('pndk_jk');
    //     $query = $this->db->get();
    //     return $query->result_array();
    // }

    // public function getByAgama(){
    //     $this->db->select('agm_ket as "agama", count(*) as "jumlah"');
    //     $this->db->from('penduduk p');
    //     $this->db->join('agama a', 'p.agm_id = a.agm_id');
    //     $this->db->group_by('p.pndk_jk');
    //     $query = $this->db->get();
    //     return $query->result_array();
    // }

    // public function getByUmur(){

    // }

    // public function getByPendidikan(){
    //     $this->db->select('pnd_ket as "pendidikan", count(*) as "jumlah"');
    //     $this->db->from('penduduk p');
    //     $this->db->join('pendidikan pn', 'p.pnd_id = pn.pnd_id');
    //     $this->db->group_by('p.pnd_id');
    //     $query = $this->db->get();
    //     return $query->result_array();
    // }

    // public function getByGolDarah(){
    //     $this->db->select('goldr_ket as "golongan darah", count(*) as "jumlah"');
    //     $this->db->from('penduduk p');
    //     $this->db->join('gol_darah g', 'p.goldr_id = g.goldr_id');
    //     $this->db->group_by('p.goldr_id');
    //     $query = $this->db->get();
    //     return $query->result_array();
    // }

    // public function getByPekerjaan(){
    //     $this->db->select('pkrj_ket as "pekerjaan", count(*) as "jumlah"');
    //     $this->db->from('penduduk p');
    //     $this->db->join('pekerjaan pk', 'p.pkrj_id = pk.pkrj_id');
    //     $this->db->group_by('p.pkrj_id');
    //     $query = $this->db->get();
    //     return $query->result_array();
    // }

    // public function getByStsHub(){
    //     $this->db->select('sts_hub_ket as "status_hub", count(*) as "jumlah"');
    //     $this->db->from('penduduk p');
    //     $this->db->join('sts_hub_kel s', 'p.sts_hub_id = s.sts_hub_id');
    //     $this->db->group_by('p.sts_hub_id');
    //     $query = $this->db->get();
    //     return $query->result_array();
    // }

    // public function getByStsPnkn(){
    //     $this->db->select('stspnkn_ket as "status_pernikahan", count(*) as "jumlah"');
    //     $this->db->from('penduduk p');
    //     $this->db->join('sts_pernikahan s', 'p.stspnkn_id = s.stspnkn_id');
    //     $this->db->group_by('p.stspnkn_id');
    //     $query = $this->db->get();
    //     return $query->result_array();
    // }
}
