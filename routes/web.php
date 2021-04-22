<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\DB;

use App\Http\Controllers\LocalizationController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\PostController;

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
    return view('layouts.home');
});

Route::get('/internships', function () {
    return view('layouts.intern');
});

Route::get('/vacancies', function () {
    return view('layouts.vacan');
});

Route::get('/articles', function () {
    return view('layouts.articles');
});

Route::get('/contact', function () {
    return view('layouts.contactform');
});

Route::get('/resume-upload', function () {
    return view('resume');
});

Route::get('/contact', [ContactController::class, 'contactForm']);
Route::post('/contact', [ContactController::class, 'storeContactForm'])->name('contact-form.store');

Route::get('/resume-upload', [ PostController::class, 'index' ]);
Route::post('/resume-upload', [ PostController::class, 'store' ]);

Route::get('/{lang}', [LocalizationController::class, 'index']);

