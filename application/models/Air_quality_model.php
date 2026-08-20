<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Air_quality_model extends CI_Model
{
    protected $table = 'kualitas_udara';

    public function get_all($search = '')
    {
        $this->db
            ->select('bulan, karbon_monoksida, kategori, `max`, nitrogen_dioksida, ozon, parameter_pencemar_kritis, periode_data, pm_duakomalima, pm_sepuluh, stasiun, sulfur_dioksida, tanggal');

        if ($search !== '') {
            $this->db->group_start()
                ->like('bulan', $search)
                ->or_like('karbon_monoksida', $search)
                ->or_like('kategori', $search)
                ->or_like('max', $search)
                ->or_like('nitrogen_dioksida', $search)
                ->or_like('ozon', $search)
                ->or_like('parameter_pencemar_kritis', $search)
                ->or_like('periode_data', $search)
                ->or_like('pm_duakomalima', $search)
                ->or_like('pm_sepuluh', $search)
                ->or_like('stasiun', $search)
                ->or_like('sulfur_dioksida', $search)
                ->or_like('tanggal', $search)
                ->group_end();
        }

        return $this->db
            ->order_by('tanggal', 'DESC')
            ->limit(25)
            ->get($this->table)
            ->result();
    }

    public function insert_data($data)
    {
        return $this->db->insert($this->table, $data);
    }
}
