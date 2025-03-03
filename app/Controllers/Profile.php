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
    
    public function getById($email)
    {
        $db = \Config\Database::connect();
        $query = $db->query("SELECT * FROM users");
        // Gunakan query builder atau parameterized query untuk menghindari SQL Injection
        $query = $db->query("SELECT * FROM users WHERE email = :email:", ['email' => $email]);
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

        $email = $data['email'];
        $name = $data['name'];
        $tempat_lahir = $data['tempat_lahir'];
        $tanggal_lahir = $data['tanggal_lahir'];
        $jenis_kelamin = $data['jenis_kelamin'];
        $telepon = $data['telepon'];
        $agama = $data['agama'];

        if ($email == 0) {
            $db = \Config\Database::connect();
            $query = $db->query("INSERT INTO users (email, name, tempat_lahir, tanggal_lahir, jenis_kelamin, telepon, agama) VALUES ('$email', '$name', '$tempat_lahir', '$tanggal_lahir', '$jenis_kelamin', '$telepon', '$agama')");

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
            $query = $db->query("UPDATE users SET name = '$name', tempat_lahir = '$tempat_lahir', tanggal_lahir = '$tanggal_lahir', jenis_kelamin = '$jenis_kelamin', telepon = '$telepon', agama = '$agama', email = '$email' WHERE email = '$email'");

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

}
