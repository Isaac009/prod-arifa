<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\GalleryController;
use App\Http\Controllers\ProjectController;
use App\Http\Controllers\SessionController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/about', [HomeController::class, 'about'])->name('about');
Route::get('/contact-us', [HomeController::class, 'contactUs'])->name('contact-us');
Route::post('contact', [HomeController::class, 'send'])->name('contact.send');
Route::get('/team', [HomeController::class, 'team'])->name('team');
Route::get('/gallery', [GalleryController::class, 'index'])->name('gallery.index');
Route::get('/gallery/{photo}', [GalleryController::class, 'show'])->name('gallery.show');
Route::get('/team/{member}', [HomeController::class, 'team_member_details'])->name('team.show');
Route::get('/objectives', [HomeController::class, 'objectives'])->name('objectives');

Route::post('/remove-session-value', [SessionController::class,'removeValue'])->name('session.remove');

// Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/fallback', function () {
    return view('frontend.fallback');
})->name('fallback');

Route::get('projects', [ProjectController::class, 'index'])->name('projects');
Route::get('projects/{project}', [ProjectController::class, 'show'])->name('projects.show');
