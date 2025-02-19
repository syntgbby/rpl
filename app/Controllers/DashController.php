<?php

namespace App\Controllers;

class DashController extends BaseController
{
    public function index(): string
    {
        return $this->render('Dash/dashboard');
    }

    public function auth()
    {
        $email = $this->request->getVar('email');
        $password = $this->request->getVar('password');
        var_dump($email, $password);
        die();
        // Menggunakan query builder untuk menghindari SQL Injection
        $userModel = model('App\Models\UserModel');
        $user = $userModel->where('email', $email)->first();

        // Mengecek apakah user ditemukan
        if (!$user) {
            return $this->response->setJSON([
                'status' => 'error',
                'message' => 'Email atau password salah'
            ]);
        }

        // Memverifikasi password menggunakan password_verify()
        if (!password_verify($password, $user['password'])) {
            return $this->response->setJSON([
                'status' => 'error',
                'message' => 'Email atau password salah'
            ]);
        }

        // Jika login berhasil
        return $this->response->setJSON([
            'status' => 'success',
            'message' => 'Login berhasil',
            'data' => [
                'user_id' => $user['rowid'],
                'email' => $user['email']
            ]
        ]);
    }

    public function register()
    {
        return view('Auth/register');
    }
}
