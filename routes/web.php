<?php

use Illuminate\Support\Facades\Route;
use Spatie\FlareClient\View;
use app\Http\Controllers\HomeController;
use App\Http\Controllers\routeController;
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

Route::get('/', [routeController::class, 'loadHome'])->name('home');
Route::get('/facilities', [routeController::class, 'loadFacilities'])->name('facilities');
Route::get('/contact', [routeController::class, 'loadContact'])->name('contact');
Route::get('/achievements', [routeController::class, 'loadAchievements'])->name('achievements');
Route::get('/gallery', [routeController::class, 'loadGallery'])->name('gallery');
Route::get('/login', [routeController::class, 'login'])->name('login');
Route::get('/registration', [routeController::class, 'registration'])->name('registration');
Route::get('/register',[routeController::class, 'register'])->name('register');



