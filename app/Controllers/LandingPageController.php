<?php

namespace App\Controllers;
use CodeIgniter\Controller;

class LandingPageController extends Controller
{
    public function index()
    {
        return view('LandingPage/page');
    }
}
