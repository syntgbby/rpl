<?php

namespace App\Controllers;

class Profile extends BaseController
{
    public function editprofile(): string
    {
        return $this->render('editprofile');
    }
    
}

