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
use App\Http\Controllers\ApplicationController;
use App\Http\Controllers\website\login\RegestationController;
use App\Http\Controllers\JobController as AdminJobController;
use App\Http\Controllers\ManageApplicantController;
use App\Http\Controllers\website\ProfileController;
use App\Models\AddJob;
// use Illuminate\Console\Application;

//Website
Route::get('/', function () {
    return redirect()->route('Home');
});
Route::get('/', function () {
    $jobs = AddJob::all();
    return view('website.layouts.content', compact('jobs'));
})->name('Home');

Route::get('/website/job', [JobController::class, 'job'])->name('jobs.index');
Route::get('/website/aboutus', [AboutusController::class, 'aboutus'])->name('aboutus.index');
Route::get('/website/contactus', [ContactusController::class, 'contactus'])->name('contactus.index');
Route::get('/website/events', [WebsiteEventsController::class, 'events'])->name('events.index');
Route::get('/website/testimonials', [TestimonialsController::class, 'testimonials'])->name('testimonials.index');

//login and regestration Applicant

Route::get('/applicant/login', [ApplicantLoginController::class, 'index'])->name('applicant.login');
Route::post('/applicant/do/login', [ApplicantLoginController::class, 'dologin'])->name('applicant.do.login');

Route::get('/applicant/do/regestation', [ApplicantLoginController::class, 'create'])->name('applicant.do.regestation');
Route::post('/applicant/regestation/done', [ApplicantLoginController::class, 'store'])->name('applicant.registation.done');
Route::get('/applicant/logout', [ApplicantLoginController::class, 'logout'])->name('applicant.logout');


//Company login and Registration 
Route::get('/company/login', [CompanyLoginController::class, 'index'])->name('company.login');
Route::post('/company/do/login', [CompanyLoginController::class,'companydologin'])->name('company.do.login');
Route::get('/compay/logout', [CompanyLoginController::class,'companylogout'])->name('company.logout');

Route::get('/company/registration', [RegestationController::class, 'regestation'])->name('company.regestation');
Route::post('/company/do/registration', [RegestationController::class, 'doregestation'])->name('company.do.regestation');


//Profile
Route::get('/user/profile', [ProfileController::class,'userprofile'])->name('user.profile');



//Jobs
Route::get('/website/jobs/view/details/{jobId}', [JobController::class, 'viewjob'])->name('website.layouts.view.view_details');


//Application website

Route::get('/website/job/application/{jobId}', [JobController::class, 'application'])->name('website.layouts.view.application');
Route::post('/website/job/storeApplication', [JobController::class, 'storeApplication'])->name('storeApplication');





//Admin Login
Route::get('/admin/login', [AdminLoginController::class, 'login'])->name('admin.login');
Route::post('/admin/dologin', [AdminLoginController::class, 'dologin'])->name('admin.do.login');


Route::group(['middleware' => ['auth', 'admin']], function () {
    Route::get('/admin', function () {
        return view('admin.content');
    })->name('admin.dashboard');
    Route::get('/admin/logout', [AdminLoginController::class, 'logout'])->name('admin.logout');

    // Route::get('/admin/test',[AdminController::class,'testtow']);

    // Route::get('/admin/applicant', [TableController::class, 'applicant'])->name('applicant');
    Route::get('/admin/catagories', [TableController::class, 'catagories'])->name('catagories');
    Route::get('/admin/jobs', [TableController::class, 'jobs'])->name('jobs');
    Route::get('/admin/testimonials', [TableController::class, 'testimonials'])->name('testimonials');


    //Company
    Route::get('/admin/company/table', [ManageCompanyController::class, 'viewCompany'])->name('viewCompany');


    //Applicant
    Route::get('/admin/applicant/table', [ManageApplicantController::class, 'viewApplicant'])->name('viewApplicant');

    //Category

    Route::get('/admin/tablecategory', [CategoryController::class, 'indexCategory'])->name('indexCategory');
    Route::get('/admin/table/create/category', [CategoryController::class, 'createCategory'])->name('createCategory');
    Route::post('/admin/table/store/category', [CategoryController::class, 'storeCategory'])->name('storeCategory');


    //Job

    Route::get('/admin/job', [AdminJobController::class, 'job'])->name('add.job');
    Route::post('/admin/post/job', [AdminJobController::class, 'jobPost'])->name('admin.job.post');
    Route::get('/admin/delete/job/{id}', [AdminJobController::class, 'jobDelete'])->name('admin.job.delete');
    Route::get('/admin/edit/job/{id}', [AdminJobController::class, 'jobEdit'])->name('admin.job.edit');
    Route::put('/admin/update/job/{id}', [AdminJobController::class, 'jobUpdate'])->name('admin.update.job');


    //Applications

    Route::get('/admin/applications', [ApplicationController::class, 'application'])->name('application');
    Route::get('/admin/viewCv/{id}', [ApplicationController::class, 'viewCv'])->name('viewCv');

    //Event

    Route::get('/admin/event', [EventController::class, 'index'])->name('index');
    Route::get('/admin/event/create', [EventController::class, 'create'])->name('event.index');
    Route::post('/admin/event/store', [EventController::class, 'store'])->name('add.event.store');
    Route::get('/admin/delete/event/{id}', [EventController::class, 'eventDelete'])->name('admin.event.delete');
    Route::get('/admin/edit/event/{id}', [EventController::class, 'EventEdit'])->name('admin.event.update');
    Route::put('/admin/update/event/{id}', [EventController::class, 'EventUpdate'])->name('admin.update.event');
});
