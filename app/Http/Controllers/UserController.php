<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function dashboard()
    {
        return View('admin.dashboard');
    }
    public function editUser()
    {
        return View('admin.editUser');
    }
    public function login()
    {
        return View('admin.login');
    }
    public function userList()
    {
        return View('admin.userList');
    }
    public function viewUser()
    {
        return View('admin.viewUser');
    }
}
