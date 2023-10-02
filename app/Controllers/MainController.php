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

    public function addOrEditProduct()
    {
        $request = $this->request;

        // Get product ID from the request
        $productId = $request->getVar('productId');

        // Check if a new image is uploaded
        $productImage = $request->getFile('productImage');
        $newImageName = '';

        if ($productImage->isValid() && !$productImage->hasMoved()) {
            // Generate a unique name for the uploaded file and move it to the './uploads' directory
            $newImageName = $productImage->getRandomName();
            $productImage->move('./uploads', $newImageName);
        } elseif (empty($newImageName) && $productId) {
            // If no new image is uploaded, retain the existing image filename
            $existingProduct = $this->products->find($productId);

            if ($existingProduct) {
                $newImageName = $existingProduct['image'];
            }
        }

        // Prepare product data
        $data = [
            'name' => $request->getVar('productName'),
            'description' => $request->getVar('productDescription'),
            'price' => $request->getVar('productPrice'),
            'category' => $request->getVar('productCategory'),
            'quantity' => $request->getVar('productQuantity'),
        ];

        // If a new image is uploaded or an existing image is retained, include it in the data
        if (!empty($newImageName)) {
            $data['image'] = $newImageName;
        }

        // Use conditional update or insert based on whether an 'id' is provided
        if ($productId) {
            $this->products->update(['id' => $productId], $data);
        } else {
            $this->products->insert($data);
        }

        // Redirect to a success page or return a success message
        return redirect()->to(base_url('table'));
    }


    
    public function deleteProduct($id = null){
        $this->products->delete($id);
        return redirect()->to('table');
    }




}
