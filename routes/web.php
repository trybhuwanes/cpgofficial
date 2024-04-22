<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\AssesmentController;
use App\Http\Controllers\CeritaUmkmController;
use App\Http\Controllers\OrganizingController;
use App\Http\Controllers\InternshipController;
use App\Http\Controllers\ContactUsController;
use App\Http\Controllers\Auth\AuthenticatedSessionController;
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
    return view('welcome');
});

Route::get('/about', function () {
    return view('aboutPage');
});

Route::get('/program', function () {
    return view('programPage');
});

Route::get('/schedule', function () {
    return view('schedulePage');
});

Route::get('/blog', [BlogController::class, 'index']);
Route::get('/cerita-umkm', [CeritaUmkmController::class, 'index']);
Route::get('/assesment-center', [AssesmentController::class, 'index']);
Route::get('/organizing', [OrganizingController::class, 'index']);
Route::get('/internship', [InternshipController::class, 'index']);
Route::get('/contact', [ContactUsController::class, 'index']);

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () { return view('Admin Page.dashboard'); })->name('dashboard');
Route::get('/login', [AuthenticatedSessionController::class, 'create'])->middleware('guest')->name('login');
Route::post('/login', [AuthenticatedSessionController::class, 'store'])->middleware('guest');
Route::post('/logout', [AuthenticatedSessionController::class, 'destroy'])->middleware('auth')->name('logout');
