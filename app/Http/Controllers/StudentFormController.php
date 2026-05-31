<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StudentFormController extends Controller
{
    public function showForm()
    {
        return view('studentform');
    }

    public function submitForm(Request $request)
    {
        $request->validate([ // form validation
            'name' => 'required|min:3',
            'email' => 'required|email',
            'course' => 'required'
        ], 
        [  // custom error messages
            "name.min"=>"Minimum 2 character allowed",
            "name.max"=>"You are not allowed to enter characters above length 20",
            "name.regex"=>"Only charcters and spaces allowed",
            "password.regex"=>"Password must contain at least one capital, one numeric, one special character",
            "email.email" => "Enter a valid email address",
        ] 
        );

        return "Form Submitted Successfully";
    }
}