<?php

namespace App\Controllers;

class MasterMenuController extends BaseController
{
    public function index(): string
    {
        $db = \Config\Database::connect();
        $query = $db->query("SELECT * FROM master_menu");
        $get = $query->getResultArray();
        $data = [
            'data' => $get
        ];
        return $this->render('MasterMenu/master_menu', $data);
    }

    public function getTable()
    {
        $db = \Config\Database::connect();
        $query = $db->query("SELECT * FROM master_menu");
        $get = $query->getResultArray();

        return $this->response->setJSON([
            'data' => $get
        ]);
    }
}
