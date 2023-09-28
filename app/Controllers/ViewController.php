<?php

namespace App\Controllers;

use CodeIgniter\Controller;

class ViewController extends BaseController
{
    public function index()
    {
        return view('user/Views/homepage/homepage');
    }

    public function login()
    {
        return view('auth/login');
    }

    public function admin()
    {
        return view('admin/dashboard/dashboard-main');
    }

    public function tables()
    {
        return view('admin/tables/table');
    }

    public function shop()
    {
        return view('user/Views/shop/shop');
    }
}
