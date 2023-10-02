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
        $data['products'] = $products = $this->products->findAll();
        $data['categories'] = $categories = $this->category->findAll();
        return view('admin/Views/tables/table', $data);
    }

    public function shop()
    {
        $data['currentPath'] = '/shop';
        return view('user/Views/shop/shop', $data);
    }

    public function edit($id = null) {
        $data = [
            'modalTitle' => $id ? 'Edit Product' : 'Add Product',
            'submitButtonLabel' => $id ? 'Save Changes' : 'Save Product',
            'categories' => $this->category->findAll(),
            'products' => $this->products->findAll(),
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
