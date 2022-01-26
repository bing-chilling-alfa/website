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
//
Route::view('/', 'pages.index')->name('home');
Route::view('/login', 'pages.login')->name('login');
Route::view('/privacy', 'pages.privacy')->name('privacy');
Route::view('/voorwaarden', 'pages.voorwaarden')->name('voorwaarden');
Route::view('/bedrijven-archief', 'pages.company_archive')->name('bedrijven-archief');
//Route::view('/company', 'pages.company')->name('company');
//Route::view('/college', 'pages.college')->name('college');
//Route::view('/vacature', 'pages.vacature')->name('vacature');
Route::view('/contact', 'pages.contact')->name('contact');

Route::get('/users/{id}/{name}', function ($id, $name) {
    return $id . $name;
});

Route::get('/college', function () {
    return view('pages.college');
});

Route::get('/company', function () {
    return view('pages.company');
});

Route::get('/vacature', function () {
    return view('pages.vacature');
});
