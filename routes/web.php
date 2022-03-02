<?php

use App\Http\Controllers\DetailController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

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

Route::get('/', [DetailController::class, 'index']);

Route::get('/news/featured/{id}', [App\HttpController\DetailController::class, 'featured']);

Route::get('/news/hero-post-detail', [App\Http\Controller\DetailController::class, 'show'])->name('detail');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
