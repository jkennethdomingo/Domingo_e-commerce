<?php

namespace App\Controllers;

use Exception;

class MainController extends BaseController
{
    public function save()
    {
        $validationRules = [
            'username' => 'required|min_length[3]|max_length[50]',
            'email' => 'required|valid_email',
            'password' => 'required|min_length[6]',
        ];

        if (!$this->validate($validationRules)) {
            // Validation failed, redirect with validation errors
            return redirect()->to(base_url('login'))->withInput()->with('errors', $this->validator);
        }

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
