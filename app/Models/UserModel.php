<?php

namespace App\Models;

use CodeIgniter\Model;

class UserModel extends Model
{
    protected $table = 'mst_user';
    protected $primaryKey = 'id';
    protected $allowedFields = ['email', 'nama', 'password'];

    public function get_data_user_by_email($email)
    {
        return $this->select('mst_user.email, mst_user.password, mst_user.nama, a.kode_prodi')
            ->join('mst_asesor a', 'a.email = mst_user.email')
            ->where('mst_user.email', $email)
            ->first();
    }
}
