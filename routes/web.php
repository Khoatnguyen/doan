<?php

use App\Http\Controllers\admin\DashboardController;
use App\Http\Controllers\admin\ManagerHotelController;
use App\Http\Controllers\admin\ManagerTourController;
use App\Http\Controllers\HotelController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\TourController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('welcome');
})->name('home');
Route::get ('/register',[RegisterController::class,'register'])->name('register');
Route::post ('/register',[RegisterController::class,'postRegister'])->name('post.register');
Route::get('/login',[LoginController::class,'index'])->name('login');
Route::get('/logout',[LoginController::class,'logout'])->name('logout');
Route::post('/login',[LoginController::class,'login'])->name('post.login');

Route::get('/user-info',[UserController::class,'index'])->name('user');
Route::get('/records-manager',[UserController::class,'records'])->name('records');
Route::get('/update-user',[UserController::class,'updateUser'])->name('update-user');
Route::post('/update-user',[UserController::class,'updateUser'])->name('post.update-user');
Route::get('/add-tour',[TourController::class,'index'])->name('tour');
//Route::post('/add-tour',[TourController::class,'createTour'])->name('post.add-tour');
Route::get('/detail-tour/{id}',[TourController::class,'getDetail'])->name("get.detail");
//Route::get('/edit-tour/{id}',[TourController::class,'getEdit'])->name("get.edit");
//Route::post('/edit-tour/{id}',[TourController::class,'postEdit'])->name("post.edit");
Route::post('/add-schedule/{id}',[TourController::class,'postSchedules'])->name("post.schedules");
Route::get('/list-tour',[TourController::class,'getList'])->name("get.list");
Route::post('/search',[TourController::class,'search'])->name('search');
Route::post('/filter',[TourController::class,'filter'])->name('filter');
//Route::get('/add-hotel',[HotelController::class,'index'])->name('add-hotel');
//Route::post('/add-hotel',[HotelController::class,'addHotel'])->name('post.add-hotel');
Route::get('/details-hotel',[HotelController::class,'getHotel'])->name('get.detail');

Route::get('/dashboard',[DashboardController::class,'index']);
//dashboard manager tour
Route::get('/manager-tour',[ManagerTourController::class,'index'])->name('get.list-tour');
Route::get('/add-tour',[ManagerTourController::class,'getAddTour'])->name('get.add-tour');
Route::post('/add-tour',[ManagerTourController::class,'addTour'])->name('post.add-tour');
Route::get('/edit-tour/{id}',[ManagerTourController::class,'getEdit'])->name('get.edit-tour');
Route::post('/edit-tour/{id}',[ManagerTourController::class,'updata'])->name('post.edit-tour');
Route::get('/delete-tour/{id}',[ManagerTourController::class,'delete'])->name('manager.tour.delete');
//dashboard manager hotel
Route::get('/manager-hotel',[ManagerHotelController::class,'index'])->name('get.list-hotel');
Route::get('/add-hotel',[ManagerHotelController::class,'getAddHotel'])->name('get.add-hotel');
Route::post('/add-hotel',[ManagerHotelController::class,'AddHotel'])->name('post.add-hotel');
Route::get('/edit-hotel/{id}',[ManagerHotelController::class,'getEdit'])->name('get.edit-hotel');
Route::post('/edit-hotel/{id}',[ManagerHotelController::class,'update'])->name('post.edit-hotel');
Route::get('/delete-hotel/{id}',[ManagerHotelController::class,'delete'])->name('magager.delete-hotel');
Route::get('/detail-hotel/{id}',[ManagerHotelController::class,'detailHotel'])->name('magager.detail-hotel');


