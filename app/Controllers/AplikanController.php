<?php

namespace App\Controllers;

use App\Models\AplikanModel;
use App\Models\PengalamanKerjaModel;
use App\Models\PengalamanLainModel;
use App\Models\PihakRekomenModel;
use App\Models\JabatanModel;
use App\Models\KurikulumModel;
use App\Models\MataKuliahModel;
use App\Models\RplModel;

class AplikanController extends BaseController
{

    public function __construct()
    {
        // if (!session()->has('logged_in')) {
        //     return redirect()->to('/')->send(); // Wajib pakai ->send() di __construct
        // }
    }

    public function index()
    {
        $session = session();
        $kodeprodi = $session->get('_KodeProdi');
        $model = new AplikanModel();
        $data['master_aplikan'] = $model->tampilan_awal_by_kode_prodi($kodeprodi);
        // Hasilnya disimpan ke dalam array $data dengan key 'master_aplikan'.
        return view('Aplikan/v_aplikan', $data);
    }

    public function validasi($nim)
    {

        $model_aplikan = new AplikanModel();
        $model_pengalaman = new PengalamanKerjaModel();
        $model_pihak = new PihakRekomenModel();
        $model_posisi = new JabatanModel();
        $model_pengalaman_lain = new PengalamanLainModel();
        $model_kurikulum = new KurikulumModel();
        $model_matkul = new MataKuliahModel();
        $data['data_aplikan'] = $model_aplikan->tampilan_detail_by_nim($nim);
        $data['data_pengalaman_kerja'] = $model_pengalaman->tampilan_detail_pengalaman_kerja_by_nim($nim);
        $data['data_pihak_kerja'] = $model_pihak->tampilan_detail_pihak_kerja_by_nim($nim);
        $data['data_posisi_kerja'] = $model_posisi->tampilan_detail_posisi_kerja_by_nim($nim);
        $data['data_pengalaman_lain'] = $model_pengalaman_lain->tampilan_detail_pengalaman_relevan_by_nim($nim);
        $data['data_kurikulum'] = $model_kurikulum->get_kurikulum_by_nim($nim);
        $data['data_matakuliah'] = $model_matkul->get_matakuliah_by_nim($nim);

        // Hasilnya disimpan ke dalam array $data dengan key 'master_aplikan'.
        return view('Aplikan/validasi', $data);
    }

    public function simpan($nim)
    {
        // Pastikan request-nya AJAX & POST
        if (!$this->request->isAJAX()) {
            return $this->response->setStatusCode(400)->setJSON(['status' => 'error', 'message' => 'Invalid request']);
        }

        // Ambil JSON dari body
        $json = $this->request->getJSON(true); // true = as array

        if (empty($json)) {
            return $this->response->setStatusCode(400)->setJSON(['status' => 'error', 'message' => 'No data received']);
        }

        // Contoh: Simpan ke database (gunakan model kamu sendiri)
        $rplModel = new RplModel();
        $aplikanModel = new AplikanModel();

        foreach ($json as $item) {
            $rplModel->save([
                'nim' => $item['nim'],
                'kode_matkul' => $item['kode_matkul'],
                'validasi' => $item['rpl']
            ]);
        }

        $data = [
            'status_validasi_asesor' => '1',
        ];

        $aplikanModel->update($nim, $data);

        // Kirim redirect URL ke JS
        return $this->response->setJSON([
            'status' => 'ok',
            'redirect' => base_url('/status_rpl')
        ]);
    }

    // status calon aplikan 
    public function status()
    {
        $session = session();
        $kodeprodi = $session->get('_KodeProdi');
        $model = new AplikanModel();
        $data['master_aplikan'] = $model->tampilan_akhir_by_kode_prodi($kodeprodi);
        // Hasilnya disimpan ke dalam array $data dengan key 'master_aplikan'.
        return view('Aplikan/hasil_validasi', $data);
    }


    // public function tampilan_data_pengalaman($id_pengalaman_kerja)
    // {

    //     $model = new PengalamanKerjaModel();
    //     $data['data_aplikan'] = $model->tampilan_detail_by_nim($id_pengalaman_kerja);
    //     // Hasilnya disimpan ke dalam array $data dengan key 'master_aplikan'.
    //     return view('Aplikan/validasi', $data);
    // }


    // public function simpan_validasi($id)
    // {

    //     $rplModel = new \App\Models\ValidasiRplModel();
    //     $tahun = $this->request->getPost('tahun');
    //     $rpl_ids = $this->request->getPost('rpl_ya') ?? [];

    //     $kurikulum = (new \App\Models\KurikulumModel())->where('tahun', $tahun)->first();

    //     foreach ($rpl_ids as $id_mk) {
    //         $rplModel->save([
    //             'id_aplikan' => $id,
    //             'id_mk' => $id_mk,
    //             'status_rpl' => 1
    //         ]);
    //     }

    //     return redirect()->to('/hasil_validasi')->with('message', 'Validasi RPL berhasil disimpan.');
    // }

    // public function hasilValidasi($id)
    // {
    //     $aplikanModel = new \App\Models\AplikanModel();
    //     $rplModel = new \App\Models\ValidasiRplModel();
    //     $mataKuliahModel = new \App\Models\MataKuliahModel();
    //     $kurikulumModel = new \App\Models\KurikulumModel();

    //     $aplikan = $aplikanModel->find($id);

    //     $validasi = $rplModel
    //         ->where('id_aplikan', $id)
    //         ->where('status_rpl', 1)
    //         ->findAll();

    //     // Gabungkan data MK + Tahun
    //     $data_rpl = [];
    //     foreach ($validasi as $v) {
    //         $mk = $mataKuliahModel->find($v['id_mk']);
    //         $kurikulum = $kurikulumModel->find($mk['id_kurikulum'] ?? null);
    //         $data_rpl[] = [
    //             'kode_mk' => $mk['kode_mk'] ?? '-',
    //             'nama_mk' => $mk['nama_mk'] ?? '-',
    //             'tahun' => $kurikulum['tahun'] ?? '-',
    //             'tanggal' => $v['waktu_validasi']
    //         ];
    //     }

    //     return view('aplikan/hasil_validasi', [
    //         'aplikan' => $aplikan,
    //         'hasil' => $data_rpl
    //     ]);
    // }




    // public function update($id)
    // {
    //     $model = new AplikanModel();
    //     $model->update($id, $this->request->getPost());
    //     return redirect()->to('/aplikan');
    // }

    // public function delete($id)
    // {
    //     $model = new AplikanModel();
    //     $model->delete($id);
    //     return redirect()->to('/aplikan');
    // }
}
