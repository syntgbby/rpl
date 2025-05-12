<?php

namespace App\Models;

use CodeIgniter\Model;

class PengalamanKerjaModel extends Model
{
    protected $table = 'mst_pengalaman_kerja';
    protected $primaryKey = 'id_pengalaman_kerja';
    protected $allowedFields = [
        'id_pengalaman_kerja',
        'nama_perusahaan',
        'alamat',
        'kota',
        'kodepos',
        'lama_kerja',
        'provinsi',
        'negara',
        'no_hp',
        'sejak',
        'sampai',
        'id_rekomendasi',
        'id_posisi',
    ];

    public function tampilan_detail_pengalaman_kerja_by_nim($nim)
    {
        return $this->where('LEFT(id_pengalaman_kerja, 12) =', $nim)
            ->get()
            ->getRowArray();
    }
}
