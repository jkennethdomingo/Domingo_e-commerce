<?php

namespace App\Controllers;

use App\Models\Accounts;
use CodeIgniter\Controller;
use CodeIgniter\HTTP\RequestInterface;

class Home extends Controller
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

    public function AuthLogin(RequestInterface $request)
    {
        $validation = \Config\Services::validation();

        // Define validation rules for email and password
        $validation->setRules([
            'email' => 'required|valid_email',
            'password' => 'required|min_length[6]',
        ]);

        if (!$validation->withRequest($request)->run()) {
            // Validation failed, redirect with validation errors
            return redirect()->to('/login')->withInput()->with('errors', $validation->getErrors());
        }

        $email = $request->getPost('email');
        $password = $request->getPost('password');

        $user = $this->accounts->login($email, $password);

        if ($user) {
            $sessionData = [
                'id' => $user['id'],
                'email' => $user['email'],
                'isLoggedIn' => true,
            ];

            $this->session->set($sessionData);

            return redirect()->to('/shop');
        } else {
            $this->session->setFlashdata('msg', 'Invalid email or password');
            return redirect()->to('/login');
        }
    }

    public function logout()
    {
        // Destroy the user's session
        $this->session->destroy();

        return redirect()->to('/login');
    }
}
