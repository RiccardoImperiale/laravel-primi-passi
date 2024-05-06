<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/


Route::get('/', function () {
    $message = [
        'heading' => 'Home Page',
        'message' => 'Welcome to the homepage..'
    ];
    return view('home', $message);
})->name('home');

Route::get('/about', function () {
    $message = [
        'heading' => 'About Page',
        'message' => 'You are now on the about page..'
    ];
    return view('about', $message);
})->name('about');
