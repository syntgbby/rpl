<?php

namespace App\Controllers;

use App\Models\UserModel;

class LoginController extends BaseController
{
    public function index()
    {
        return view('Auth/login');
    }
    public function login()
    {
        $email = $this->request->getPost('email');
        $password = $this->request->getPost('password');

        $userModel = new UserModel();
        $user = $userModel->get_data_user_by_email($email);

        if ($user) {
            if ($user['password'] == $password) {
                // Login sukses
                session()->set('_Nama', $user['nama']);
                session()->set('_Email', $user['email']);
                session()->set('_KodeProdi', $user['kode_prodi']);
                return redirect()->to('/auth');
            } else {
                // Login gagal
                return redirect()->back()->withInput()->with('error', 'passwod salah!');
            }
        } else {
            // Login gagal
            return redirect()->back()->withInput()->with('error', 'email tidak ditemukan!');
        }
    }

    public function auth()
    {
        return view('Dash/dashboard');
    }

    public function logout()
    {
        session()->destroy();
        return redirect()->to('/')->send(); // Wajib pakai ->send() di __construct
    }
}
