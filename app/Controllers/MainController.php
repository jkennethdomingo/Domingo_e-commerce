<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class MainController extends BaseController
{
    public function __construct()
    {
        $this->accounts = new \App\Models\Accounts();
        helper('url');
    }

    public function index()
    {
        return view('main');
    }

    public function login()
    {
        return view('auth/login');
    }

    public function admin()
    {
        return view('admin/admin');
    }

    public function save()
    {
        $username = $this->request->getVar('username');
        $email = $this->request->getVar('email');
        $password = $this->request->getVar('password');
        $role = 'user';

        $hashedPassword = password_hash($password, PASSWORD_BCRYPT);
        $accountData = [
            'username' => $username,
            'email' => $email,
            'role' => $role,
            'password' => $hashedPassword,
        ];

        try {
            $this->accounts->insert($accountData);
            return redirect()->to(base_url('admin'));
        } catch (Exception $e) {
            return 'Error: ' . $e->getMessage();
        }
    }

}
