<?php

namespace App\Models;

use CodeIgniter\Model;

class LoginModel extends Model
{
    protected $table = 'admin'; 
    protected $primaryKey = 'id';
    protected $allowedFields = ['username', 'password', 'nama', 'email', 'level', 'created_at'];

    // Fungsi untuk mencari user berdasarkan username dan password
    public function getData($username, $password)
    {
        return $this->where('username', $username)
                    ->where('password', $password) // Sesuaikan dengan enkripsi password
                    ->first(); // Mengambil data pertama
    }
}