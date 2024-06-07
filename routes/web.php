<?php

use App\Models\Publication;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\EventController;
use App\Http\Controllers\GalleryController;
use App\Http\Controllers\ProjectController;
use App\Http\Controllers\SessionController;
use App\Http\Controllers\IndustryController;
use App\Http\Controllers\ResearchController;
use App\Http\Controllers\TrainingController;
use App\Http\Controllers\OpportunityController;
use App\Http\Controllers\PublicationController;

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
Route::get('/event/{event}/details', [EventController::class, 'details'])->name('events.details');

Route::get('/blogs', [BlogController::class, 'index'])->name('blogs.index');
Route::get('/blog/{blog}/details', [BlogController::class, 'details'])->name('blogs.details');


Route::get('/publications', [PublicationController::class, 'index'])->name('publications.index');
Route::get('/publications/details', [PublicationController::class, 'show'])->name('publications.show');

Route::get('/opportunities', [OpportunityController::class, 'index'])->name('opportunities.index');
Route::get('/opportunities/details', [OpportunityController::class, 'show'])->name('opportunities.show');
Route::get('/opportunities/Call-for-proposal', [OpportunityController::class, 'callforpaper'])->name('opportunities.call-for-papers');
Route::get('/opportunities/become-instructor', [OpportunityController::class, 'becomeinstructor'])->name('opportunities.become-instructor');
Route::get('/opportunities/careers', [OpportunityController::class, 'careers'])->name('opportunities.careers');

Route::get('/research/research-and-dev', [ResearchController::class, 'researchDev'])->name('research.dev');
Route::get('/research/research-projects', [ResearchController::class, 'researchProjects'])->name('research.projects');
Route::get('/research/research-projects/{project}/project', [ResearchController::class, 'show'])->name('research.projects.show');

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
