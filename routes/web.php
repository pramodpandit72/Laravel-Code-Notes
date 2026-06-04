<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\APIController;
use App\Http\Controllers\StudentFormController;
use App\Http\Controllers\SendFileController;
use App\Http\Controllers\SendEmail;
use Illuminate\Http\Request;
use App\Http\Controllers\DataRetrival;
use App\Http\Controllers\BasicController;
use App\Http\Controllers\QueryBuilder;

Route::get('/insert', [QueryBuilder::class, 'insert']);
Route::get('/show', [QueryBuilder::class, 'show']);
Route::get('/update', [QueryBuilder::class, 'update']);
Route::get('/delete', [QueryBuilder::class, 'delete']);


// Route Middleware
Route::get('/b', function() {
    return ("Hello From Route middleware");
})->middleware("ageCheck");

// Group Middleware
Route::middleware('ageGroup')->group(function() {
    Route::get('/one', function() {
        return "This is first Group Middleware";
    });
    Route::get('/two', function() {
        return "This is second Group Middleware";
    });
});

// Basic Controllers
Route::get('basic-controller', [BasicController::class, 'index']);

// Data Retrival
Route::post('/dataretrival', [DataRetrival::class, 'store']);
Route::get('/form', function () {
    return view('DataRetrival');
});

// Cookie
Route::get('/set-cookie', function(){
    return response("Cookie Set")->cookie('user', 'Amit', 60);
});
Route::get('/get-cookie', function(Request $request){
    return $request->cookie('user');
    // return "Cookie value: " . $request->cookie('user');
});
Route::get('/delete-cookie', function(){
    return response("Cookie Deleted")->cookie('user', null, -1);
});

// Session
Route::get('/set-session', function (Request $request) {
    $request->session()->put('user', 'Amit');
    return "Session Stored";
});
Route::get('/get-session', function (Request $request) {
    return $request->session()->get('user');
});
Route::get('/delete-session', function (Request $request) {
    $request->session()->forget('user');
    return "Session Deleted";
});

// Localisation
Route::get('/local', function (){
    return view('Localization');
});


// Email Sending Route
Route::get('/send-mail', [SendEmail::class, 'send']);

// File Uploading Route
Route::get('/upload', function () {
    return view('SendFile');
});
Route::post('/upload', [SendFileController::class, 'upload']);

// Form Validation Route
Route::get('/show-form', [StudentFormController::class, 'showForm']);
Route::post('/submit-form', [StudentFormController::class, 'submitForm']);


// Route::get('/insert', [StudentController::class, 'insert']);
// Route::get('/read', [StudentController::class, 'read']);
// Route::get('/update/{id}', [StudentController::class, 'update']);
// Route::get('/delete/{id}', [StudentController::class, 'delete']);

// API
Route::get('/get-quotes',[APIController::class, 'fetch']);

// Database Connection Check
Route::get('/check-db', function() {
    DB::connection()->getMongoClient();

    return "MongoDB Connected Successfully";
});

Route::get('/', function () {
    return view('welcome');
});

// Route::get('/home', function() {
//     return view('home', ['name' => 'Aman']);
// });

use App\Http\Controllers\UserController;
Route::get('/users', [UserController::class, 'index']);
Route::get('/users/{id}',[UserController::class, 'show']);


// Types of Routing 

// Named Route
Route::get('/home', function(){
    return view('home');
});

Route::get('/about1/about2/about3', function() {
    return view('about');
});

Route::get('/contact1/contact2/contact3', function() {
    return view('contact');
})->name('cont');


//Route Prefixing
Route::prefix('admin')->group(function () {

    Route::get('/dashboard', function () {
        return "Admin Dashboard";
    });

    Route::get('/users', function () {
        return "Admin Users";
    });

});

//Domain Routing
Route::domain('admin.localhost')->group(function () { 
    // http://admin.localhost:8000 --> for checking
    Route::get('/ab', function () {
        return "Admin Panel";
    });
});

// Open
// C:\Windows\System32\drivers\etc\hosts
// Add this line:
// 127.0.0.1 admin.localhost

// to get current URL
use Illuminate\Support\Facades\URL;

Route::get('/test1', function () {
    return URL::current();
});

Route::get('/component', function () {
    return view('component');
})->name('component');

Route::get('/test2', function () {
    return route('component');
});

Route::get('/user/{id}', function ($id) {
    return "User ID: " . $id;
});

Route::get('/test3', function () {
    return url('/home');
});

// Asset URL
Route::get('/asset', function() {
    return view('AssetUrl');
});

// Action
use App\Http\Controllers\ActionController;
Route::get('/action', [ActionController::class, 'index']);

// Passing Parameter to the route
Route::get('/post/{id}/{name}', function($id, $name) {
    return $id . " " . $name;
});

// Passing views to the route
Route::get('/dashboard', function() {
    return view('Dashboard');
});

// Passing Data to Views

Route::get('/profile', function() {
    // Using with()
    // return view('Profile')->with('name', 'Rahul');

    // Using Array
    // return view('profile', ['name' => 'Rahul', 'age' => 20]);

    // Using compact()
    $name = "Rahul";
    $age = 20;
    return view('profile', compact('name','age'));

});

// Attaching Headers
Route::get('/header', function() {
    return response('Hello')
    ->header('Content-Type', 'text/plain');
});

// Attaching Cookies
Route::get('/cookie1', function() {
    return response("Cookie Set") 
    ->cookie('name', 'Rahul', 60);
});

// JSON Response
Route::get('/json', function() {
    return response()->json(['name' => 'Rahul', 'age' => 20]);
});

// Laravel Redirections
Route::get('/redirect', function () {
    return redirect('home');
});

// Redirecting to Named Routes
Route::get('/chat', function() {
    return "Chat Page";
})->name('chat');
Route::get('go-chat', function() {
    return redirect()->route('chat');
});

// Redirecting to Controller Actions
use App\Http\Controllers\RedirectControllerAction;
Route::get('/con', [RedirectControllerAction::class, 'index']);
Route::get('/go-con', function() {
    return redirect()->action([RedirectControllerAction::class, 'index']);
});