<?php
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Validator;

Route::get('/', function () {
    return view('welcome');  
});

Route::post('/user', function () {
    $username = request('username');  

    
    $rules = ['username' => 'required|regex:/^[a-zA-Z]+$/'];
    $messages = ['username.regex' => 'The username should contain only alphabetic characters.'];

    $validator = Validator::make(request()->all(), $rules, $messages);

    if ($validator->fails()) {
        return redirect('/')->withErrors($validator)->withInput(); 
    }

    return redirect('/')->with('username', $username); 
});

Route::get('/', function () {
    $username = session('username');
    return view('welcome', ['username' => $username]);
});

Route::get('/about', function () {
    return view('about');  
});

Route::get('/home', function () {
    return redirect('/');  
});

Route::get('/contact', function () {
    return view('contact');  
});

