<?php

use App\Http\Controllers\ContactController;
use App\Http\Controllers\FileUploadController;
use App\Http\Controllers\FormController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProjectsController;
use App\Http\Controllers\ResumeController;
use Illuminate\Support\Facades\Route;


// Routes for blade template start
Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/resume', [ResumeController::class, 'index'])->name('resume');
Route::get('/projects', [ProjectsController::class, 'index'])->name('projects');
Route::get('/contact', [ContactController::class, 'index'])->name('contact');

//Routes for blade template end

//Routes for Task 3 start
Route::get('/contact-form', [FormController::class, 'showForm'])->name('contact.form');
Route::post('/contact-submit', [FormController::class, 'submitForm'])->name('contact.submit');
Route::get('/contact-confirm', [FormController::class, 'confirm'])->name('contact.confirm');

// Routes for Task 3 end


//Routes for Task 4 start
Route::get('/upload-file', [FileUploadController::class, 'showFileUploadForm'])->name('file.upload');
Route::post('/file-submit', [FileUploadController::class, 'storeFile'])->name('file.submit');

//Routes for Task 4 end
