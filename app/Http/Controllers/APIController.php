<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class APIController extends Controller
{
    public function fetch(){
        $response = Http::get('https://dummyjson.com/quotes');

        $quotes = $response->json('quotes');

        return response()->json($quotes);
        // return view('quotespage', compact('quotes'));
    }
}
