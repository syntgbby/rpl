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
    
    public function update()
{
    $session = \Config\Services::session();
    $email = $session->get('email');

    if (!$email) {
        return redirect()->to('/login');
    }

    $db = \Config\Database::connect();

    // Validasi Input
    $validation = \Config\Services::validation();
    $validation->setRules([
        'name'          => 'required|min_length[3]',
        'telepon'       => 'required|numeric',
        'tempat_lahir'  => 'required',
        'jenis_kelamin' => 'required',
        'agama'         => 'required',
        'avatar'        => 'permit_empty|uploaded[avatar]|max_size[avatar,2048]|is_image[avatar]|mime_in[avatar,image/jpg,image/jpeg,image/png]'
    ]);

    if (!$validation->withRequest($this->request)->run()) {
        return redirect()->back()->withInput()->with('errors', $validation->getErrors());
    }

    $name          = $this->request->getPost('name');
    $telepon       = $this->request->getPost('telepon');
    $tempat_lahir  = $this->request->getPost('tempat_lahir');
    $jenis_kelamin = $this->request->getPost('jenis_kelamin');
    $agama         = $this->request->getPost('agama');

    $data = [
        'name'          => $name,
        'telepon'       => $telepon,
        'tempat_lahir'  => $tempat_lahir,
        'jenis_kelamin' => $jenis_kelamin,
        'agama'         => $agama
    ];

    // Upload Avatar (Jika Ada)
    $avatar = $this->request->getFile('pict');
    if ($avatar->isValid() && !$avatar->hasMoved()) {
        $newName = $avatar->getRandomName();
        $avatar->move('uploads/pict/', $newName);
        $data['pict'] = $newName;

        // Hapus Gambar Lama (Opsional)
        $oldAvatar = $db->query("SELECT pict FROM users WHERE email = '$email'")->getRowArray();
        if ($oldAvatar['avatar'] != null && file_exists('uploads/pict/' . $oldAvatar['pict'])) {
            unlink('uploads/pict/' . $oldAvatar['pict']);
        }
    }

    // Update Data
    $query = $db->table('users')->where('email', $email)->update($data);

    if ($query) {
        $session->setFlashdata('success', 'Profile berhasil diperbarui');
        return redirect()->to('/profile');
    } else {
        $session->setFlashdata('error', 'Gagal memperbarui profile');
        return redirect()->back();
    }
}

}
