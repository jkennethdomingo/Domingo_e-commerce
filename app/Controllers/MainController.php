<?php

namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\Accounts;
use CodeIgniter\Session\Session;
use Exception;

class MainController extends Controller
{
    protected $accounts;
    protected $session;

    public function __construct()
    {
        helper('url');
    }

    public function initController(\CodeIgniter\HTTP\RequestInterface $request, \CodeIgniter\HTTP\ResponseInterface $response, \Psr\Log\LoggerInterface $logger)
    {
        // Do Not Edit This Line
        parent::initController($request, $response, $logger);

        $this->accounts = new Accounts();
        $this->session = \Config\Services::session();
    }

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
