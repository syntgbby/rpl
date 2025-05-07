<?php

namespace App\Controllers;

class Assesor extends BaseController
{

    public function edit($id)
    {
        // Simulasi data berdasarkan ID (sementara, karena belum dari database)
        $dummyData = [
            1 => [
                'name' => 'Tiger Nixon',
                'position' => 'System Architect',
                'office' => 'Edinburgh',
                'age' => 61,
                'start_date' => '2011-04-25',
                'salary' => '320800',
            ],
            2 => [
                'name' => 'Garrett Winters',
                'position' => 'Accountant',
                'office' => 'Tokyo',
                'age' => 63,
                'start_date' => '2011-07-25',
                'salary' => '170750',
            ]
        ];

        // Ambil data berdasarkan ID
        $data = $dummyData[$id] ?? null;

        if (!$data) {
            return "Data tidak ditemukan."; // bisa diarahkan ke 404 atau halaman lain
        }

        return view('Asesor/edit', ['id' => $id, 'data' => $data]);
    }

}