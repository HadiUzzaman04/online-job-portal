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
use App\Http\Controllers\AdminLoginController;
use App\Http\Controllers\website\login\RegestationController;
use App\Http\Controllers\JobController as AdminJobController;
use App\Models\AddJob;


//Website
Route::get('/', function (){
    return redirect()->route('Home');
});
Route::get('/',function(){
    $jobs=AddJob::all();
    return view('website.layouts.content',compact('jobs'));
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

//Jobs
Route::get('/website/jobs/view/details/{id}',[JobController::class,'viewjob'])->name('website.layouts.view.view_details');
Route::get('/website/job/application',[JobController::class,'application'])->name('website.layouts.view.application');






//Admin Login
Route::get('/admin/login',[AdminLoginController::class,'login'])->name('admin.login');
Route::post('/admin/dologin',[AdminLoginController::class,'dologin'])->name('admin.do.login');


Route::group(['middleware'=>['auth','admin']],function(){
    Route::get('/admin',function(){
        return view('admin.index');
    })->name('admin.dashboard');
    Route::get('/admin/logout',[AdminLoginController::class,'logout'])->name('admin.logout');

// Route::get('/admin/test',[AdminController::class,'testtow']);

Route::get('/admin/applicant',[TableController::class,'applicant'])->name('applicant');
Route::get('/admin/catagories',[TableController::class,'catagories'])->name('catagories');
Route::get('/admin/jobs',[TableController::class,'jobs'])->name('jobs');
Route::get('/admin/testimonials',[TableController::class,'testimonials'])->name('testimonials');


//Company

Route::get('/admin/table',[ManageCompanyController::class,'index'])->name('index.company');
Route::get('/admin/table/create',[ManageCompanyController::class,'create'])->name('create');
Route::post('/admin/table/store',[ManageCompanyController::class,'store'])->name('store');

//Category

Route::get('/admin/tablecategory',[CategoryController::class,'indexCategory'])->name('indexCategory');
Route::get('/admin/table/create/category',[CategoryController::class,'createCategory'])->name('createCategory');
Route::post('/admin/table/store/category',[CategoryController::class,'storeCategory'])->name('storeCategory');


//Job

Route::get('/admin/job',[AdminJobController::class,'job'])->name('add.job');
Route::post('/admin/post/job',[AdminJobController::class,'jobPost'])->name('admin.job.post');


//Event

Route::get('/admin/event',[EventController::class,'index'])->name('index');
Route::get('/admin/event/create',[EventController::class,'create'])->name('event.index');
Route::post('/admin/event/store',[EventController::class,'store'])->name('add.event.store');


});

