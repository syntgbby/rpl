<?php

namespace App\Controllers;

class ListController extends BaseController
{
    public function index()
    {
        return view('list/v_daftar_mata_kuliah');  // Pastikan view ini ada
        return view('list/v_formulir_riwayat_hidup');  // Pastikan view ini ada
    }
    public function formRiwayatHidup()
    {
        return view('list/v_formulir_riwayat_hidup');  // Pastikan view ini ada
    }
}
