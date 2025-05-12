<?php

namespace App\Models;

use CodeIgniter\Model;

class KurikulumModel extends Model
{
    protected $table = 'mst_tahun_kurikulum';
    protected $primaryKey = 'id_tahun_kurikulum';
    protected $allowedFields = ['id_tahun_kurikulum', 'nama_kurikulum', 'keterangan'];

    public function get_kurikulum_by_nim($nim)
    {
        return $this->select('mst_tahun_kurikulum.id_tahun_kurikulum,mst_tahun_kurikulum.nama_kurikulum,mst_tahun_kurikulum.keterangan')
            ->join('mst_aplikan a', 'a.id_tahun_kurikulum = mst_tahun_kurikulum.id_tahun_kurikulum')
            ->where('a.nim', $nim)
            ->get()
            ->getRowArray();
    }
}
