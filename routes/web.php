<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\URL;
use App\Http\Controllers\TaskController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/tasks', TaskController::class);


Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {

    return view('dashboard');
});

Route::get('/hello/{id?}', function ($id = 1) {
    return 'Hello Mohamed Your id is ' . $id;
})->where(['id' => '[0-9]+'])->name('hello.world');

Route::get('/subscribe/{user}', function ($user) {
    return $user;
})->name('subscribe');

Route::name('auth.')->prefix('auth')->group(function () {
    Route::get('login', function () {
        return 'Login Page';
    })->name('login');

    Route::get('signed', function () {
        return URL::signedRoute('subscribe', ['user' => 'Mohamed']);
    });

    Route::get('signup', function () {
        return 'Signup Page';
    })->name('signup');
});
