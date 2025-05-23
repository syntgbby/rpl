<?php

namespace App\Controllers;

class Datapendaftaran extends BaseController
{
    public function index(): string
    {
        return $this->render('Dash/datapendaftaran');
    }
  
}