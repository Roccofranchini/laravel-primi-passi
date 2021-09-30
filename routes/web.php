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
            'Home',
            'Gallery',
            'Contacts',
            'Chi siamo'
        ],
    ];

    return view('home', $data);
})->name('home');

Route::get('/gallery', function () {

    $data = [
        'message' => 'GALLERY',
        'links' => [
            'Home',
            'Gallery',
            'Contacts',
            'Chi siamo'
        ],
    ];

    return view('gallery', $data);
})->name('gallery');

Route::get('/contacts', function () {

    $data = [
        'message' => 'CONTACTS',
        'links' => [
            'Home',
            'Gallery',
            'Contacts',
            'Chi siamo'
        ],
    ];

    return view('contacts', $data);
})->name('contacts');

Route::get('/chisiamo', function () {

    $data = [
        'message' => 'CHI SIAMO',
        'links' => [
            'Home',
            'Gallery',
            'Contacts',
            'Chi siamo'
        ],
    ];

    return view('chisiamo', $data);
})->name('chisiamo');
