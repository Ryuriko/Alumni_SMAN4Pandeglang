<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AgtsController;
use App\Http\Controllers\RegistController;
use App\Http\Controllers\NewController;
use App\Http\Controllers\AlumniController;

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
    return view('index');
});
Route::get('/agtsnews', [AgtsController::class, 'agtsnews']);
Route::get('/universitynews', [AgtsController::class, 'universitynews']);
Route::get('/schoolarsnews', [AgtsController::class, 'schoolarsnews']);
Route::get('/jobnews', [AgtsController::class, 'jobnews']);

Route::get('/alumni/registrasi', [AgtsController::class, 'registrasi']);
Route::get('/alumni/jobdesk', [AgtsController::class, 'jobdesk']);
Route::get('/alumni/jobdesk/{new:id}', [AgtsController::class, 'singlejobdesk']);
Route::post('/alumni', [AgtsController::class, 'storeregistrasi']);

Route::get('/agtsnews/{new:id}', [AgtsController::class, 'singlenew']);
Route::get('/universitynews/{new:id}', [AgtsController::class, 'singlenew']);
Route::get('/schoolarsnews/{new:id}', [AgtsController::class, 'singlenew']);
Route::get('/jobnews/{new:id}', [AgtsController::class, 'singlenew']);

Route::resource('/signin', RegistController::class)->middleware('guest');
Route::get('/login', [RegistController::class, 'login'])->middleware('guest');
Route::post('/login', [RegistController::class, 'authenticate'])->middleware('guest');
Route::post('/logout', [RegistController::class, 'logout'])->middleware('auth');

Route::resource('/admin', NewController::class)->middleware('auth')->middleware('auth');
Route::get('/programkerja', [NewController::class, 'programkerja'])->middleware('auth');

Route::get('/admin/checkslug', [NewController::class, 'checkslug']);

Route::resource('/ika', AlumniController::class);

Route::get('/ikaa/programkerja', [AlumniController::class, 'programkerja']);
