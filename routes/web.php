<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {

    $data = [
        'message' => 'HOME',
        'links' => [
            'home',
            'gallery',
            'contacts',
            'chi siamo'
        ],
    ];

    return view('home', $data);
})->name('home');

Route::get('/gallery', function () {

    $data = [
        'message' => 'GALLERY',
        'links' => [
            'home',
            'gallery',
            'contacts',
            'chi siamo'
        ],
    ];

    return view('gallery', $data);
})->name('gallery');
