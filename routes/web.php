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
    return view('welcome');
})->name('home');

Route::get('first', function () {
    return view('accueil');
})->name('first');


Route::get('second', function () {
    return view('pages.accueil');
})->name('second');

Route::get('menu', function () {
    return view('pages.menu');
})->name('menu');

Route::get('gallery', function () {
    return view('pages.gallery');
})->name('gallery');

Route::get('contact', function () {
    return view('pages.contact');
})->name('contact');

Route::get('about-us', function () {
    return view('pages.about');
})->name('about');

