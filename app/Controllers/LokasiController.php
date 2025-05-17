<?php

namespace App\Controllers;

class LokasiController extends BaseController
{
    public function index(): string
    {
        return $this->render('Dash/lokasi');
    }
  
}