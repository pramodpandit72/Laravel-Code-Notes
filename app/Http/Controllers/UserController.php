<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        return "User List";
    }

    public function show($id)
    {
        return "User ID: " . $id;
    }
}
