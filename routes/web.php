<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminController;

// Public Routes
Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/about', [HomeController::class, 'about'])->name('about');
Route::get('/academics', [HomeController::class, 'academics'])->name('academics');
Route::get('/admissions', [HomeController::class, 'admissions'])->name('admissions');
Route::get('/news', [HomeController::class, 'news'])->name('news');
Route::get('/events', [HomeController::class, 'events'])->name('events');
Route::get('/gallery', [HomeController::class, 'gallery'])->name('gallery');
Route::get('/testimonials', [HomeController::class, 'testimonials'])->name('testimonials');
Route::get('/contact', [HomeController::class, 'contact'])->name('contact');

// Admin Routes
Route::prefix('admin')->name('admin.')->middleware(['auth', 'admin'])->group(function () {
    Route::get('/', [AdminController::class, 'dashboard'])->name('dashboard');
    
    // News Management
    Route::get('/news', [AdminController::class, 'news'])->name('news');
    Route::get('/news/create', [AdminController::class, 'createNews'])->name('news.create');
    Route::post('/news', [AdminController::class, 'storeNews'])->name('news.store');
    Route::get('/news/{news}/edit', [AdminController::class, 'editNews'])->name('news.edit');
    Route::put('/news/{news}', [AdminController::class, 'updateNews'])->name('news.update');
    Route::delete('/news/{news}', [AdminController::class, 'deleteNews'])->name('news.delete');
    
    // Events Management
    Route::get('/events', [AdminController::class, 'events'])->name('events');
    Route::get('/events/create', [AdminController::class, 'createEvent'])->name('events.create');
    Route::post('/events', [AdminController::class, 'storeEvent'])->name('events.store');
    Route::get('/events/{event}/edit', [AdminController::class, 'editEvent'])->name('events.edit');
    Route::put('/events/{event}', [AdminController::class, 'updateEvent'])->name('events.update');
    Route::delete('/events/{event}', [AdminController::class, 'deleteEvent'])->name('events.delete');
    
    // Gallery Management
    Route::get('/gallery', [AdminController::class, 'gallery'])->name('gallery');
    Route::get('/gallery/create', [AdminController::class, 'createGallery'])->name('gallery.create');
    Route::post('/gallery', [AdminController::class, 'storeGallery'])->name('gallery.store');
    
    // Admissions Management
    Route::get('/admissions', [AdminController::class, 'admissions'])->name('admissions');
    Route::get('/admissions/{admission}', [AdminController::class, 'showAdmission'])->name('admissions.show');
    Route::put('/admissions/{admission}/status', [AdminController::class, 'updateAdmissionStatus'])->name('admissions.status');
    
    // Students Management
    Route::get('/students', [AdminController::class, 'students'])->name('students');
    Route::get('/students/create', [AdminController::class, 'createStudent'])->name('students.create');
    Route::post('/students', [AdminController::class, 'storeStudent'])->name('students.store');
});

// Authentication Routes (you can use Laravel Breeze or Jetstream)
Route::get('/login', function () {
    return view('auth.login');
})->name('login');

Route::post('/login', function () {
    // Login logic here
})->name('login.post');

Route::post('/logout', function () {
    // Logout logic here
})->name('logout');
