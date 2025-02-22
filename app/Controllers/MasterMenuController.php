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

    public function indexAdd()
    {
        return $this->render('MasterMenu/add_menu');
    }

    public function getById($rowid)
    {
        $db = \Config\Database::connect();
        $query = $db->query("SELECT * FROM master_menu");
        // Gunakan query builder atau parameterized query untuk menghindari SQL Injection
        $query = $db->query("SELECT * FROM master_menu WHERE rowid = :rowid:", ['rowid' => $rowid]);
        $get = $query->getResultArray();

        if ($get) {
            return $this->response->setJSON($get);
        } else {
            return $this->response->setJSON(['status' => 'error', 'message' => 'Menu not found']);
        }
    }

    public function add()
    {
        $data = $this->request->getVar();

        $rowid = $data['rowid'];
        $menu_cd = $data['menu_cd'];
        $title = $data['title'];
        $url = $data['url'];
        $parent_menucd = $data['parent_menucd'];
        $icon = $data['icon'];
        $order_seq = $data['order_seq'];
        $status = $data['status'];

        if ($rowid == 0) {
            $db = \Config\Database::connect();
            $query = $db->query("INSERT INTO master_menu (menu_cd, title, url, parent_menucd, icon, order_seq, status) VALUES ('$menu_cd', '$title', '$url', '$parent_menucd', '$icon', '$order_seq', '$status')");

            if ($query) {
                $response = [
                    'status' => 'success',
                    'message' => 'Menu added successfully'
                ];
                return $this->response->setJSON($response);
            } else {
                $response = [
                    'status' => 'error',
                    'message' => 'Menu added failed'
                ];
                return $this->response->setJSON($response);
            }
        } else {
            $db = \Config\Database::connect();
            $query = $db->query("UPDATE master_menu SET menu_cd = '$menu_cd', title = '$title', url = '$url', parent_menucd = '$parent_menucd', icon = '$icon', order_seq = '$order_seq', status = '$status' WHERE rowid = '$rowid'");

            if ($query) {
                $response = [
                    'status' => 'success',
                    'message' => 'Menu updated successfully'
                ];
                return $this->response->setJSON($response);
            } else {
                $response = [
                    'status' => 'error',
                    'message' => 'Menu updated failed'
                ];
            }
        }
    }

    public function delete()
    {
        $data = $this->request->getVar();
        $rowid = $data['rowid'];

        $db = \Config\Database::connect();
        
        $query = $db->query("DELETE FROM master_menu WHERE rowid = '$rowid'");

        if ($query) {
            $response = [
                'status' => 'success',
                'message' => 'Menu deleted successfully'
            ];
            return $this->response->setJSON($response);
        } else {
            $response = [
                'status' => 'error',
                'message' => 'Menu deleted failed'
            ];
            return $this->response->setJSON($response);
        }

        return redirect()->to('/master-menu');
    }

}
