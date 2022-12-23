<?php

use Illuminate\Support\Facades\Route;
use Spatie\FlareClient\View;

use App\Http\Controllers\routeController;
use App\Http\Controllers\albumController;
use App\Http\Controllers\achievementController;
use App\Http\Controllers\tournamentController;
use App\Models\achievements;

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

Route::get('/admin',[routeController::class, 'admin'])->name('admin');
Route::get('/adtournament',[tournamentController::class, 'viewTournament'])->name('adtournament');
// Route::get('/adgallery',[routeController::class, 'adgallery'])->name('adgallery');
Route::get('/adfaq',[routeController::class, 'adfaq'])->name('adfaq');
Route::get('/adpart',[routeController::class, 'adpart'])->name('adpart');
// Route::get('/adachievement',[routeController::class, 'adachievement'])->name('adachievement');


// Route::post('adphoto', [galleryController::class, 'addphoto']);

Route::post('/store-image',[albumController::class,'addphoto'])->name('images.store');
Route::get('/adgallery',[albumController::class, 'viewImage'])->name('adgallery');
Route::post('/delete-image',[albumController::class, 'deletephoto'])->name('deletephoto');

// achievement routes
Route::post('/store-achievement',[achievementController::class,'addAchievement'])->name('achievement.store');
Route::get('/adachievement',[achievementController::class, 'viewAchievement'])->name('adachievement');
Route::post('/delete-achievement',[achievementController::class, 'deleteAchievement'])->name('achievement.delete');

//tournament routes
Route::post('/new-tournament',[tournamentController::class,'addTournament'])->name('tournament.store');
Route::post('/delete-tournament',[tournamentController::class, 'deletetournament'])->name('deletetournament');


Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
