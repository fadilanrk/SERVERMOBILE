<?php

namespace App\Controllers;

use CodeIgniter\RESTful\ResourceController;
use App\Models\LoginModel;

class LoginController extends ResourceController
{
    public function index()
    {
        // Ambil data JSON dari body request
        //$data = $this->request->getJSON(true);
        //$username = $data['username'];
        //$password = $data['password'];

        $username = 'fadnrk';
        $password = 'abc123';

        $loginModel = new LoginModel();
        $loginSukses = $loginModel->getData($username, $password);

        if ($loginSukses) {
            // Jika login berhasil
            return $this->respond([
                'status' => 'success',
                'message' => 'Login success',
                'data' => $loginSukses
            ]);
        } else {
            // Jika login gagal
            return $this->failUnauthorized('Username atau kata sandi salah.');
        }
    }
}