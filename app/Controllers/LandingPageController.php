<?php

namespace App\Controllers;
use CodeIgniter\Controller;

class LandingPageController extends Controller
{
    public function index()
    {
        $db = \Config\Database::connect();
        $total = $db->table('users')->countAllResults();

        $prodi = $db->table('master_prodi')->get()->getResultArray();
        
        $data = [
            'total_user' => "15",
            'prodi' => $prodi
        ];

        return view('LandingPage/page', $data);
    }
}
