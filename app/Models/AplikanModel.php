<?php

namespace App\Models;

use CodeIgniter\Model;

class AplikanModel extends Model
{

    protected $table = 'mst_aplikan';
    protected $primaryKey = 'nim';
    protected $allowedFields = [
        'nim',
        'nama_lengkap',
        'alamat',
        'tanggal_lahir',
        'kodepos',
        'email',
        'pendidikan_terakhir',
        'kota',
        'provinsi',
        'no_hp',
        'jenis_kelamin',
        'id_pelatihan',
        'id_pengalaman_kerja',
        'id_posisi',
        'id_pengalaman_lain',
        'id_dokumen_pendukung',
        'status_perjajian',
        'status_validasi_admin',
        'status_validasi_asesor',
        'id_tahun_kurikulum',
        'kode_prodi'
    ];

    public function tampilan_awal_by_kode_prodi($kode_prodi)
    {
        return $this->select('nim,nama_lengkap,pendidikan_terakhir,jenis_kelamin')
            ->where('kode_prodi', $kode_prodi)
            ->where('status_validasi_admin', '1')
            ->where('status_validasi_asesor', '0')
            ->get()
            ->getResultArray();
    }

    public function tampilan_detail_by_nim($nim)
    {
        return $this->where('nim', $nim)
            ->get()
            ->getRowArray();
    }
    public function tampilan_akhir_by_kode_prodi($kode_prodi)
    {

        return $this->select('mst_aplikan.nim,mst_aplikan.nama_lengkap,mst_aplikan.pendidikan_terakhir,mst_aplikan.jenis_kelamin, count(b.validasi) as validasi')
            ->join('rls_aplikan_matakuliah b', 'b.nim = mst_aplikan.nim and b.validasi = 0', 'left')
            ->where('kode_prodi', $kode_prodi)
            ->where('status_validasi_admin', '1')
            ->where('status_validasi_asesor', '1')
            ->groupBy(['mst_aplikan.nim', 'mst_aplikan.nama_lengkap', 'mst_aplikan.pendidikan_terakhir', 'mst_aplikan.jenis_kelamin'])
            ->get()
            ->getResultArray();
    }
}
