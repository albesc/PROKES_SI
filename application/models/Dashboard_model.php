<?php
defined('BASEPATH') or exit('No direct script access allowed');
class Dashboard_model extends CI_Model
{
    public $table = 'penduduk';
    public $id = 'penduduk.pndk_id';
    public function __construct()
    {
        parent::__construct();
    }
    public function charts()
    {
        $this->db->select('p.*, count(p.pndk_jk) as jk');
        $this->db->from('penduduk p');
        $this->db->group_by('p.pndk_jk');
        $query = $this->db->get();
        return $query->result_array();
    }
}
