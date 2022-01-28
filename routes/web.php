<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\CompanyController;
use App\Http\Controllers\VacatureController;
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
    Route::view('/', 'pages.home')->name('home');

    // Auth Routes
    Route::group(['prefix' => '/'], function () {
        Route::view('/login', 'pages.login')->name('login');
        Route::post('/login', [AuthController::class, 'login']);
        Route::post('/logout', [AuthController::class, 'logout'])->name('logout');
    });

    // Legal Routes
    Route::group(['prefix' => '/'], function () {
        Route::view('/privacy', 'pages.privacy')->name('privacy');
        Route::view('/voorwaarden', 'pages.voorwaarden')->name('voorwaarden');
    });

    // Company Routes
    Route::group(['prefix' => '/bedrijven'], function () {
        Route::get('/', [CompanyController::class, 'index'])->name('companies');
    });

    // Vacatures Routes
    Route::group(['prefix' => '/vacatures'], function () {
        Route::get('/', [VacatureController::class, 'index'])->name('vacatures');
    });

    // Others
    Route::view('/contact', 'pages.contact')->name('contact');
    Route::view('/college', 'pages.college')->name('college');
    Route::view('/company', 'pages.companies')->name('company');
    Route::view('/vacature', 'pages.vacature')->name('vacature');
    Route::view('/submitpage', 'pages.submitpage')->name('submitpage');
    Route::view('/stageplek','pages.stageplek')->name('stageplek');
});
