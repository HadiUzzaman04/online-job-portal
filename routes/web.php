<?php

use Illuminate\Support\Facades\Route;
use App\Http\controllers\AdminController;
use App\Http\Controllers\ManageCompanyController;
use App\Http\controllers\TableController;
use App\Http\controllers\CategoryController;
use App\Http\Controllers\Website\JobController;
use App\Http\Controllers\Website\AboutusController;
use App\Http\Controllers\Website\ContactusController;
use App\Http\Controllers\Website\TestimonialsController;


//Website
Route::get('/',function(){
    return view('website.layouts.content');
});

Route::get('/website/job',[JobController::class,'job'])->name('jobs.index');
Route::get('/website/aboutus',[AboutusController::class,'aboutus'])->name('aboutus.index');
Route::get('/website/contactus',[ContactusController::class,'contactus'])->name('contactus.index');
Route::get('/website/testimonials',[TestimonialsController::class,'testimonials'])->name('testimonials.index');





//Admin

Route::get('/admin',[AdminController::class,'testtow']);



Route::get('/applicant',[TableController::class,'applicant'])->name('applicant');
Route::get('/catagories',[TableController::class,'catagories'])->name('catagories');
Route::get('/events',[TableController::class,'events'])->name('events');


//NEW

Route::get('/table',[ManageCompanyController::class,'index'])->name('index');
Route::get('/table/create',[ManageCompanyController::class,'create'])->name('create');
Route::post('/table/store',[ManageCompanyController::class,'store'])->name('store');

//Category
Route::get('/tablecategory',[CategoryController::class,'indexCategory'])->name('indexCategory');
Route::get('/table/create/category',[CategoryController::class,'createCategory'])->name('createCategory');
Route::post('/table/store/category',[CategoryController::class,'storeCategory'])->name('storeCategory');



