<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\WelcomeController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\DownloadController;
use App\Http\Controllers\FAQController;
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

Route::get('/', [WelcomeController::class, 'show']);
Route::get('/about', [AboutController::class, 'show']);
Route::get('/dashboard', [DashboardController::class, 'show']);
Route::get('/download', [DownloadController::class, 'show']);
Route::resource('/blog', BlogController::class);
Route::resource('/faq', FAQController::class)->except(['show']);

Auth::routes([
    'register' => false, // Registration Routes
    'reset' => false, // Password Reset Routes
    'verify' => false, // Email Verification Routes
  ]);
