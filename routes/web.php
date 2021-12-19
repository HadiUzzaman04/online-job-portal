<?php

use Illuminate\Support\Facades\Route;
use App\Http\controllers\AdminController;
use App\Http\Controllers\ManageCompanyController;
use App\Http\controllers\TableController;
use App\Http\controllers\CategoryController;
use App\Http\Controllers\EventController;
use App\Http\Controllers\Website\JobController;
use App\Http\Controllers\Website\AboutusController;
use App\Http\Controllers\Website\ContactusController;
use App\Http\Controllers\website\EventsController as WebsiteEventsController;
use App\Http\Controllers\website\layout\EventsController;
use App\Http\Controllers\website\login\ApplicantLoginController;
use App\Http\Controllers\Website\TestimonialsController;
use App\Http\Controllers\website\login\CompanyLoginController;
use App\Http\Controllers\website\login\AdminLoginController;
use App\Http\Controllers\website\login\RegestationController;



//Website
Route::get('/',function(){
    return view('website.layouts.content');
})->name('Home');

Route::get('/website/job',[JobController::class,'job'])->name('jobs.index');
Route::get('/website/aboutus',[AboutusController::class,'aboutus'])->name('aboutus.index');
Route::get('/website/contactus',[ContactusController::class,'contactus'])->name('contactus.index');
Route::get('/website/events',[WebsiteEventsController::class,'events'])->name('events.index');
Route::get('/website/testimonials',[TestimonialsController::class,'testimonials'])->name('testimonials.index');

//login

Route::get('/applicant/login',[ApplicantLoginController::class,'index'])->name('applicant.login');
Route::post('/applicant/do/login',[ApplicantLoginController::class,'dologin'])->name('applicant.do.login');

Route::get('/applicant/do/regestation',[ApplicantLoginController::class,'create'])->name('applicant.do.regestation');
Route::post('/applicant/regestation/done',[ApplicantLoginController::class,'store'])->name('applicant.registation.done');
Route::get('/applicant/logout',[ApplicantLoginController::class,'logout'])->name('applicant.logout');

Route::get('/company/login',[CompanyLoginController::class,'index'])->name('company.login');
Route::get('/admin/login',[AdminLoginController::class,'index'])->name('admin.login');






//Admin

Route::get('/admin',[AdminController::class,'testtow']);



Route::get('/applicant',[TableController::class,'applicant'])->name('applicant');
Route::get('/catagories',[TableController::class,'catagories'])->name('catagories');
Route::get('/jobs',[TableController::class,'jobs'])->name('jobs');
Route::get('/testimonials',[TableController::class,'testimonials'])->name('testimonials');


//NEW

Route::get('/table',[ManageCompanyController::class,'index'])->name('index');
Route::get('/table/create',[ManageCompanyController::class,'create'])->name('create');
Route::post('/table/store',[ManageCompanyController::class,'store'])->name('store');

//Category

Route::get('/tablecategory',[CategoryController::class,'indexCategory'])->name('indexCategory');
Route::get('/table/create/category',[CategoryController::class,'createCategory'])->name('createCategory');
Route::post('/table/store/category',[CategoryController::class,'storeCategory'])->name('storeCategory');

//Event

Route::get('/event',[EventController::class,'index'])->name('index');
Route::get('/event/create',[EventController::class,'create'])->name('event.index');
Route::post('/event/store',[EventController::class,'store'])->name('add.event.store');




