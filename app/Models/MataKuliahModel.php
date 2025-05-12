<?php

namespace App\Models;

use CodeIgniter\Model;

class MataKuliahModel extends Model
{
    protected $table = 'mst_matakuliah';
    protected $primaryKey = 'kode_matkul';
    protected $allowedFields = ['kode_matkul', 'nama_matakuliah'];

    public function get_matakuliah_by_nim($nim)
    {
        return $this->select('mst_matakuliah.kode_matkul, mst_matakuliah.nama_matakuliah')
            ->join('rls_tahun_matakuliah b', 'b.kode_matkul = mst_matakuliah.kode_matkul')
            ->join('mst_aplikan c', 'c.id_tahun_kurikulum = b.id_tahun_kurikulum')
            ->where('c.nim', $nim)
            ->get()
            ->getResultArray();
    }
}
