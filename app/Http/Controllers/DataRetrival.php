<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DataRetrival extends Controller
{
    public function store(Request $request)
    {
        // $data = $request->all();
        // $data = $request->only(['name', 'email']);
        $name = $request->input('name');
        $email = $request->input('email');

        return $name . " <br> " . $email;
    }
}
