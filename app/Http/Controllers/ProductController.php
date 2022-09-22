<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function addProduct()
    {
        return View('admin.addProduct');
    }
    public function editProduct()
    {
        return View('admin.editProduct');
    }
    public function productList()
    {
        return View('admin.productList');
    }
    public function viewProduct()
    {
        return View('admin.viewProduct');
    }
    // public function viewProductUser()
    // {
    //     return View('users.viewProductUser');
    // }
}
