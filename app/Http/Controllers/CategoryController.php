<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function addCategory()
    {
        return View('admin.addCategory');
    }

    public function categoryList()
    {
        return View('admin.categoryList');
    }
    public function editCategory()
    {
        return View('admin.editCategory');
    }
    public function viewCategory()
    {
        return View('admin.viewCategory');
    }
}
