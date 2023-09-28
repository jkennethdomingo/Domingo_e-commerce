<?php

namespace App\Controllers;

use CodeIgniter\Controller;

class Authentication extends BaseController
{
    public function AuthLogin()
    {
        $validation = \Config\Services::validation();

        // Define validation rules for email and password
        $validation->setRules([
            'email' => 'required|valid_email',
            'password' => 'required|min_length[6]',
        ]);

        if (!$validation->withRequest($this->request)->run()) {
            // Validation failed, redirect with validation errors
            return redirect()->to(base_url('login'))->withInput()->with('errors', $validation->getErrors());
        }

        $email = $this->request->getPost('email');
        $password = $this->request->getPost('password');

        $user = $this->accounts->login($email, $password);

        if ($user) {
            $sessionData = [
                'id' => $user['id'],
                'email' => $user['email'],
                'role' => $user['role'],
                'isLoggedIn' => true,
            ];

            $this->session->set($sessionData);

            // Use ternary operator for redirection based on role
            return $user['role'] !== 'admin' ? redirect()->to(base_url('shop')) : redirect()->to(base_url('admin'));
        } else {
            $this->session->setFlashdata('msg', 'Invalid email or password');
            return redirect()->to(base_url('login'));
        }
    }

    public function logout()
    {
        // Destroy the user's session
        $this->session->destroy();

        return redirect()->to(base_url('login'));
    }
}