<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\LikedYouController;
use App\Http\Controllers\PreferencesController;

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

Auth::routes();



Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/profile', [ProfileController::class, 'index'])->name('profile');
Route::get('/profile/add', [ProfileController::class, 'create'])->name('add');
Route::get('/likedyou', [LikedYouController::class, 'index'])->name('likedyou');
Route::post('/profile/store', [ProfileController::class, 'store'])->name('store');
Route::get('/profile/edit/{id}', [ProfileController::class, 'edit'])->name('edit');
Route::post('/profile/update/{id}', [ProfileController::class, 'update'])->name('update');
Route::delete('/profile/delete/{id}', [ProfileController::class, 'destroy'])->name('delete');
Route::get('/preferences', [PreferencesController::class, 'index'])->name('preferences');






