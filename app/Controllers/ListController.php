<?php

namespace App\Controllers;

class ListController extends BaseController
{
    public function listCalonRPL()
    {
        return view('Asesor/v_calon_RPL');  // Pastikan view ini ada
    }
    public function getMatkulByKurikulum()
{
    $kurikulum = $this->request->getGet('kurikulum');

    $kurikulumData = [
        '2022-2023' => [
            ['kode' => '02BBMIK01', 'nama' => 'Bahasa Inggris I'],
            ['kode' => '03KBMIK01', 'nama' => 'Algoritma dan Pemrograman Java'],
            ['kode' => '01KKMIK01', 'nama' => 'Pengantar Teknologi Informasi'],
            ['kode' => '07KBMIK02', 'nama' => 'Desain Jaringan Komputer'],
            ['kode' => '01PBMIK02', 'nama' => 'Kewirausahaan'],
            ['kode' => '14KBMIK04', 'nama' => 'Mobile Programming I'],
            ['kode' => '05ККм1K02', 'nama' => 'K3 dan ISO'],
            ['kode' => '13KBMIK04', 'nama' => 'Manajemen Jaringan'],
            ['kode' => '04PKMIK06', 'nama' => 'Pendidikan Anti Korupsi'],
            ['kode' => '19KBMIK04', 'nama' => 'Sistem informasi Manajemen'],
            ['kode' => '04KBMIK01', 'nama' => 'Desain Web'],
            ['kode' => '01KBMIK01', 'nama' => 'Aplikasi Perkantoran I'],
            ['kode' => '02KBMIK01', 'nama' => 'Aplikasi Perkantoran II'], 
            ['kode' => '11KBMIK03', 'nama' => 'Database Administrator'],
            ['kode' => '06KBMIK02', 'nama' => 'Pemrograman Berbasis Web'],
            ['kode' => '09KBMIK03', 'nama' => 'Security Jaringan'],
            ['kode' => '12KBMIK03', 'nama' => 'Rekayasa Perangkat Lunak'],
            ['kode' => '16KBMIK05', 'nama' => 'Mobile Programming II'],
            ['kode' => '05PBMIK05', 'nama' => 'Leadership & Critical Thinking'],
            ['kode' => '18KBMIK04', 'nama' => 'Data Mining'],
            ['kode' => '16KBMIK02', 'nama' => 'Desain Graphis'],
            ['kode' => '10KBMIK03', 'nama' => 'Pemrograman Frame work'],
            ['kode' => '02KKM1K03', 'nama' => 'UI/UX Desain'],
            ['kode' => '18KBMIK04', 'nama' => 'Data Mining'],
            ['kode' => '06KKMIK04', 'nama' => 'Statistik'],
            ['kode' => '07PBMIK06', 'nama' => 'Tugas Akhir'],
            ['kode' => '04PBMIK05 ', 'nama' => 'Physicology & Professional Ethic'],
            ['kode' => '04BBMIK03 ', 'nama' => 'English For General Communication III'],
            ['kode' => '03PKM1K06', 'nama' => 'Pendidikan Kewarganegaraan'],
            ['kode' => '02PKMIK06', 'nama' => 'Pendidikan Pancasila']
        ],
        '2023-2024' => [

            ['kode' => '02BBMIK01', 'nama' => 'Bahasa Inggris I'],
            ['kode' => '03KBMIK01', 'nama' => 'Algoritma dan Pemrograman Java'],
            ['kode' => '01KKMIK01', 'nama' => 'Pengantar Teknologi Informasi'],
            ['kode' => '07KBMIK02', 'nama' => 'Desain Jaringan Komputer'],
            ['kode' => '01PBMIK02', 'nama' => 'Kewirausahaan'],
            ['kode' => '14KBMIK04', 'nama' => 'Mobile Programming I'],
            ['kode' => '05ККм1K02', 'nama' => 'K3 dan ISO'],
            ['kode' => '13KBMIK04', 'nama' => 'Manajemen Jaringan'],
            ['kode' => '04PKMIK06', 'nama' => 'Pendidikan Anti Korupsi'],
            ['kode' => '19KBMIK04', 'nama' => 'Sistem informasi Manajemen'],
            ['kode' => '04KBMIK01', 'nama' => 'Desain Web'],
            ['kode' => '01KBMIK01', 'nama' => 'Aplikasi Perkantoran I'],
            ['kode' => '02KBMIK01', 'nama' => 'Aplikasi Perkantoran II'], 
            ['kode' => '11KBMIK03', 'nama' => 'Database Administrator'],
            ['kode' => '06KBMIK02', 'nama' => 'Pemrograman Berbasis Web'],
            ['kode' => '09KBMIK03', 'nama' => 'Security Jaringan'],
            ['kode' => '12KBMIK03', 'nama' => 'Rekayasa Perangkat Lunak'],
            ['kode' => '16KBMIK05', 'nama' => 'Mobile Programming II'],
            ['kode' => '05PBMIK05', 'nama' => 'Leadership & Critical Thinking'],
            ['kode' => '18KBMIK04', 'nama' => 'Data Mining'],
            ['kode' => '16KBMIK02', 'nama' => 'Desain Graphis'],
            ['kode' => '10KBMIK03', 'nama' => 'Pemrograman Frame work'],
            ['kode' => '02KKM1K03', 'nama' => 'UI/UX Desain'],
            ['kode' => '18KBMIK04', 'nama' => 'Data Mining'],
            ['kode' => '06KKMIK04', 'nama' => 'Statistik'],
            ['kode' => '07PBMIK06', 'nama' => 'Tugas Akhir'],
            ['kode' => '04PBMIK05 ', 'nama' => 'Physicology & Professional Ethic'],
            ['kode' => '04BBMIK03 ', 'nama' => 'English For General Communication III'],
            ['kode' => '03PKM1K06', 'nama' => 'Pendidikan Kewarganegaraan'],
            ['kode' => '02PKMIK06', 'nama' => 'Pendidikan Pancasila']
        ],
        '2024-2025' => [
            ['kode' => '02BBMIK01', 'nama' => 'Bahasa Inggris I'],
            ['kode' => '03KBMIK01', 'nama' => 'Algoritma dan Pemrograman Java'],
            ['kode' => '01KKMIK01', 'nama' => 'Pengantar Teknologi Informasi'],
            ['kode' => '07KBMIK02', 'nama' => 'Desain Jaringan Komputer'],
            ['kode' => '01PBMIK02', 'nama' => 'Kewirausahaan'],
            ['kode' => '14KBMIK04', 'nama' => 'Mobile Programming I'],
            ['kode' => '05ККм1K02', 'nama' => 'K3 dan ISO'],
            ['kode' => '13KBMIK04', 'nama' => 'Manajemen Jaringan'],
            ['kode' => '04PKMIK06', 'nama' => 'Pendidikan Anti Korupsi'],
            ['kode' => '19KBMIK04', 'nama' => 'Sistem informasi Manajemen'],
            ['kode' => '04KBMIK01', 'nama' => 'Desain Web'],
            ['kode' => '01KBMIK01', 'nama' => 'Aplikasi Perkantoran I'],
            ['kode' => '02KBMIK01', 'nama' => 'Aplikasi Perkantoran II'], 
            ['kode' => '11KBMIK03', 'nama' => 'Database Administrator'],
            ['kode' => '06KBMIK02', 'nama' => 'Pemrograman Berbasis Web'],
            ['kode' => '09KBMIK03', 'nama' => 'Security Jaringan'],
            ['kode' => '12KBMIK03', 'nama' => 'Rekayasa Perangkat Lunak'],
            ['kode' => '16KBMIK05', 'nama' => 'Mobile Programming II'],
            ['kode' => '05PBMIK05', 'nama' => 'Leadership & Critical Thinking'],
            ['kode' => '18KBMIK04', 'nama' => 'Data Mining'],
            ['kode' => '16KBMIK02', 'nama' => 'Desain Graphis'],
            ['kode' => '10KBMIK03', 'nama' => 'Pemrograman Frame work'],
            ['kode' => '02KKM1K03', 'nama' => 'UI/UX Desain'],
            ['kode' => '18KBMIK04', 'nama' => 'Data Mining'],
            ['kode' => '06KKMIK04', 'nama' => 'Statistik'],
            ['kode' => '07PBMIK06', 'nama' => 'Tugas Akhir'],
            ['kode' => '04PBMIK05 ', 'nama' => 'Physicology & Professional Ethic'],
            ['kode' => '04BBMIK03 ', 'nama' => 'English For General Communication III'],
            ['kode' => '03PKM1K06', 'nama' => 'Pendidikan Kewarganegaraan'],
            ['kode' => '02PKMIK06', 'nama' => 'Pendidikan Pancasila']
        ],
    ];

    $data = $kurikulumData[$kurikulum] ?? [];

    return $this->response->setJSON($data);
}

    
}
