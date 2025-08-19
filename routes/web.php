<?php

use App\Http\Controllers\PageviewController;
use Illuminate\Support\Facades\Route;



// Routes for all page views
Route::get('/',[PageviewController::class,'index_page'])->name('home');
Route::get('/about',[PageviewController::class,'about_page'])->name('about');
Route::get('/contact',[PageviewController::class,'contact_page'])->name('contact');
Route::get('/projects',[PageviewController::class,'projects_page'])->name('projects');
Route::get('/blogs',[PageviewController::class,'blogs_page'])->name('blogs');