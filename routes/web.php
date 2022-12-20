<?php

use App\Http\Controllers\Admin\AdvertisementController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\Auth\AuthenticatedSessionController;
use App\Http\Controllers\Admin\BookingController;
use App\Http\Controllers\Admin\ClubController;
use App\Http\Controllers\Admin\HomeController;
use App\Http\Controllers\Admin\RoomController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\Frontend\ClubController as FrontendClubController;
use App\Http\Controllers\Frontend\AdvertisementController as FrontendAdvertisementController;
use App\Http\Controllers\Frontend\BookingController as FrontendBookingController;
use App\Http\Controllers\Member\ClubController as MemberClubController;
use App\Http\Controllers\Member\RoomController as MemberRoomController;
use App\Http\Controllers\Member\BookingController as MemberBookingController;
use App\Http\Controllers\Member\AdvertisementController as MemberAdvertisementController;
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
});

Route::get('/clubs/guest',[FrontendClubController::class, 'guest'])->name('clubs.guest');
Route::get('/clubs/{club}',[FrontendClubController::class, 'show'])->name('clubs.show');
Route::get('/advertisements/guest',[FrontendAdvertisementController::class, 'guest'])->name('advertisements.guest');
Route::get('/booking/step-one',[FrontendBookingController::class, 'stepOne'])->name('bookings.step.one');
Route::get('/booking/step-two',[FrontendBookingController::class, 'stepTwo'])->name('bookings.step.two');


Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');


Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    Route::get('/member/clubs/index', [MemberClubController::class, 'index'])->name('member.clubs.index');
    Route::get('/member/rooms/index', [MemberRoomController::class, 'index'])->name('member.rooms.index');
    Route::get('/member/bookings/index', [MemberBookingController::class, 'index'])->name('member.bookings.index');
    Route::get('/member/advertisements/create', [MemberAdvertisementController::class, 'create'])->name('member.advertisements.create');
    Route::post('/member/advertisements/store', [MemberAdvertisementController::class, 'store'])->name('member.advertisements.store');
    Route::get('/member/advertisements/{advertisement}', [MemberAdvertisementController::class, 'edit'])->name('member.advertisements.edit');
    Route::patch('/member/advertisements/{advertisement}', [MemberAdvertisementController::class, 'update'])->name('member.advertisements.update');
    Route::delete('/member/advertisements/{advertisement}', [MemberAdvertisementController::class, 'destroy'])->name('member.advertisements.destroy');
});

/**
Route::middleware(['admin'])->name('admin.')->prefix('admin')->group(function(){
    Route::get('/',[HomeController::class, 'index'])->name('dashboard');
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    Route::post('/logout',[AuthenticatedSessionController::class, 'destroy'])->name('logout');
    Route::resource('/advertisements',AdvertisementController::class);
    Route::resource('/clubs',ClubController::class);
    Route::resource('/rooms',RoomController::class);
    Route::resource('/bookings',BookingController::class);
    Route::resource('/users',UserController::class);
});
*/

require __DIR__.'/auth.php';

Route::get('/admin/login',[AuthenticatedSessionController::class, 'create'])->name('admin.login')->middleware('guest:admin');
Route::post('/admin/login/store',[AuthenticatedSessionController::class, 'store'])->name('admin.login.store');

Route::group(['middleware' => 'admin'], function() {    
    Route::get('/admin',[HomeController::class, 'index'])->name('admin.dashboard');
    Route::get('/admin/profile', [ProfileController::class, 'edit'])->name('admin.profile.edit');
    Route::patch('/admin/profile', [ProfileController::class, 'update'])->name('admin.profile.update');
    Route::delete('/admin/profile', [ProfileController::class, 'destroy'])->name('admin.profile.destroy');
    Route::post('/admin/logout',[AuthenticatedSessionController::class, 'destroy'])->name('admin.logout');
    Route::resource('/admin/advertisements',AdvertisementController::class);
    Route::resource('/admin/clubs',ClubController::class);
    Route::resource('/admin/rooms',RoomController::class);
    Route::resource('/admin/bookings',BookingController::class);
    Route::resource('/admin/users',UserController::class);
});



