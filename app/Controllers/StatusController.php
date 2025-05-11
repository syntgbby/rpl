<?php

namespace App\Controllers;

class StatusController extends BaseController
{
    public function index(): string
    {
        return $this->render('Dash/statuspendaftaran');
    }
  
}