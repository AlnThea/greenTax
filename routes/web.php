<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AuthController;

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

// Main content pages
Route::get('/', function () {
    return view('home');
});

Route::get('/basics', function () {
    return view('basics');
});

Route::get('/impact', function () {
    return view('impact');
});

Route::get('/action', function () {
    return view('action');
});

Route::get('/quiz', function () {
    return view('quiz');
});

Route::get('/calculator', function () {
    return view('calculator');
});

// Authentication routes (placeholders for future implementation)
Route::get('/login', function () {
    return view('auth.login');
});

Route::get('/register', function () {
    return view('auth.register');
});

// Additional routes for future implementation
Route::get('/global-policies', function () {
    return view('global_policies');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware('auth');

Route::get('/stories', function () {
    return view('stories');
});

Route::get('/contact', function () {
    return view('contact');
});

Route::get('/about', function () {
    return view('about');
});

Route::get('/resources', function () {
    return view('resources');
});

// Quiz-specific routes
Route::get('/quiz/basics', function () {
    return view('quiz_basics');
});

// Calculator-specific routes
Route::get('/calculator/transportation', function () {
    return view('calculator_transportation');
});
