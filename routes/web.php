<?php

use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\Auth\LogoutController;
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
    Route::view('/contact', 'pages.contact')->name('contact');


    // Auth Routes
    Route::group(['prefix' => '/', 'as' => 'auth.'], function () {
        Route::get('/login', [LoginController::class, 'index'])->name('login');
        Route::post('/login', [LoginController::class, 'store']);

        Route::get('/register', [RegisterController::class, 'index'])->name('register');
        Route::post('/register', [RegisterController::class, 'store']);

        Route::post('/logout', [LogoutController::class, 'store'])->name('logout');
    });

    // Legal Routes
    Route::group(['prefix' => '/', 'as' => 'legal.'], function () {
        Route::view('/privacy-beleid', 'pages.legal.privacy-policy')->name('privacy-policy');
        Route::view('/algemene-voorwaarden', 'pages.legal.terms-of-service')->name('terms-of-service');
    });

    // Company Routes
    Route::group(['prefix' => '/bedrijven', 'as' => 'companies.'], function () {
        Route::get('/', [CompanyController::class, 'index'])->name('index');
        Route::get('/{id}', [CompanyController::class, 'show'])->name('show');
    });

    // Vacatures Routes
    Route::group(['prefix' => '/vacatures', 'as' => 'vacatures.'], function () {
        Route::get('/', [VacatureController::class, 'index'])->name('index');
        Route::get('/{id}', [VacatureController::class, 'show'])->name('show');
    });

    // Dashboard Routes
    Route::group(['prefix' => '/dashboard', 'as' => 'dashboard.'], function () {
        Route::view('/docent', 'pages.dashboard.teacher')->name('teacher');
        Route::view('/student', 'pages.dashboard.student')->name('student');
    });

    // Others
    Route::view('/college', 'pages.college')->name('college');
    Route::view('/inleveren', 'pages.submit')->name('submit');
});
