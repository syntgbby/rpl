<?php

namespace App\Controllers;

class Profile extends BaseController
{
    public function index(): string
    {
        $session = \config\Services::session();
        $email = $session->get('email');
        // dd($email);// 

        $db = \config\Database::connect();
        $query = $db->query("SELECT * FROM users WHERE email = '$email'");
        $get = $query->getRowArray();
        // dd($get);

        return $this->render('Aplikan/myprofile', ['get' => $get]);

    }
    public function indexEdit()
    {
        return $this->render('Aplikan/editprofile');
    }
    

   
}
