<?php

use App\Http\Controllers\AuthController;
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

Route::group(['prefix' => '/'], function () {
    Route::view('/', 'pages.index')->name('home');

    // Auth Routes
    Route::group(['prefix' => '/'], function () {
        Route::view('/login', 'pages.login')->name('login');
        Route::post('/login', [AuthController::class, 'login'])->name('login');
    });

    // Legal Routes
    Route::group(['prefix' => '/'], function () {
        Route::view('/privacy', 'pages.privacy')->name('privacy');
        Route::view('/voorwaarden', 'pages.voorwaarden')->name('voorwaarden');
    });

    // Others
    Route::view('/contact', 'pages.contact')->name('contact');
    Route::view('/college', 'pages.college')->name('college');
    Route::view('/company', 'pages.company')->name('company');
    Route::view('/vacature', 'pages.vacature')->name('vacature');
    Route::view('/bedrijven', 'pages.companies')->name('companies');
});
