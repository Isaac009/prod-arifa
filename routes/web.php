<?php

use App\Http\Controllers\EventController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\GalleryController;
use App\Http\Controllers\ProjectController;
use App\Http\Controllers\SessionController;
use App\Http\Controllers\IndustryController;
use App\Http\Controllers\TrainingController;

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

Route::get('/industry/industry-partners-program', [IndustryController::class, 'program'])->name('industry.program');
Route::get('/industry/levels-of-engagement-and-support', [IndustryController::class, 'engagement'])->name('industry.engagement');

Route::get('/events', [EventController::class, 'index'])->name('events.index');

Route::get('/training/program', [TrainingController::class, 'program'])->name('training.program');
Route::get('/training/corporate-training', [TrainingController::class, 'corporate'])->name('training.corporate');
Route::get('/training/government-training', [TrainingController::class, 'government'])->name('training.government');
Route::get('/training/register-for-a-course', [TrainingController::class, 'registerCourse'])->name('training.register');

Route::post('/remove-session-value', [SessionController::class,'removeValue'])->name('session.remove');

// Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/fallback', function () {
    return view('frontend.fallback');
})->name('fallback');

Route::get('projects', [ProjectController::class, 'index'])->name('projects');
Route::get('projects/{project}', [ProjectController::class, 'show'])->name('projects.show');
