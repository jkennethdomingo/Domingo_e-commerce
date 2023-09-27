<?php

namespace App\Controllers;

use CodeIgniter\Controller;
use CodeIgniter\Session\Session;
use App\Models\Accounts;

class ViewController extends Controller
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

    public function shop()
    {
        return view('user/body/shop/shop');
    }
}
