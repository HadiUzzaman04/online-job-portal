<?php

use Illuminate\Support\Facades\Route;
use App\Http\controllers\AdminController;
use App\Http\controllers\TableController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/', [HomeConroller::class, 'index']);
Route::get('/admin',[AdminController::class,'testtow']);
Route::get('/table',[TableController::class,'companies'])->name('companies');
Route::get('/add_company',[TableController::class,'addComp'])->name('add_company');


Route::get('/applicant',[TableController::class,'applicant'])->name('applicant');
Route::get('/catagories',[TableController::class,'catagories'])->name('catagories');
Route::get('/events',[TableController::class,'events'])->name('events');

