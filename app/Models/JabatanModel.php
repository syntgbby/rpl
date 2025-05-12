<?php

namespace App\Models;

use CodeIgniter\Model;

class JabatanModel extends Model
{
    protected $table = 'mst_pengalaman_jabatan';
    protected $primaryKey = 'id_posisi';
    protected $allowedFields = [
        'id_posisi',
        'nama_posisi',
        'lama_waktu'
    ];
    public function tampilan_detail_posisi_kerja_by_nim($nim)
    {
        return $this->where('LEFT(id_posisi, 12) =', $nim)
            ->get()
            ->getRowArray();
    }
}
