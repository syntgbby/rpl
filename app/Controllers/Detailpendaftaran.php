<?php

namespace App\Controllers;

class Detailpendaftaran extends BaseController
{
    public function index(): string
    {
        return $this->render('Dash/detailpendaftaran');
    }
  
}