<?php

namespace App\Controllers;

class ListController extends BaseController
{
    public function index()
    {
        return view('list/v_list_pendaftaran');  // Pastikan view ini ada
    }
}
