<?php

namespace App\Controllers;

use CodeIgniter\Controller;

class ViewController extends BaseController
{
    public function index()
    {
        $data['currentPath'] = '/';
        return view('user/Views/homepage/homepage',$data);
    }

    public function login()
    {
        return view('auth/login');
    }

    public function tables()
    {
        $perPage = 5; // Set the number of records per page

        $data['products'] = $this->products->paginate($perPage, 'bootstrap');
        $data['pager'] = $this->products->pager;
        $data['categories'] = $this->category->findAll();

        return view('admin/Views/tables/table', $data);
    }

    public function shop()
    {
        $data = [
            'currentPath' => '/shop',
            'products' => $this->products->findAll(),
            'categories' => $this->category->findAll(),
        ];
        return view('user/Views/shop/shop', $data);
    }

    public function edit($id = null) {
        $perPage = 5;
        $data = [
            'modalTitle' => $id ? 'Edit Product' : 'Add Product',
            'submitButtonLabel' => $id ? 'Save Changes' : 'Save Product',
            'categories' => $this->category->findAll(),
            'products' => $this->products->paginate($perPage, 'bootstrap'),
            'pager' => $this->products->pager,
        ];
    
        // If editing, fetch product data and pass it to the view
        if ($id) {
            $product = $this->products->find($id);
    
            if ($product) {
                // Pass product data to populate form fields
                $data['product'] = $product;
            }
        }
    
        // Pass product ID as well
        $data['product']['id'] = $id;
    
        // Pass these variables to the view
        return view('admin/Views/tables/table', $data);
    }
    
    
    

}
