<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SendFileController extends Controller
{
    public function upload(Request $request)
    {
        $request->file('file')->store('uploads');

        return "Uploaded";
    }
}
