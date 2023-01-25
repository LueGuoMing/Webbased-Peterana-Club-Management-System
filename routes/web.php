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
use App\Http\Controllers\Admin\DocumentationController;
use App\Http\Controllers\Frontend\ClubController as FrontendClubController;
use App\Http\Controllers\Frontend\AdvertisementController as FrontendAdvertisementController;
use App\Http\Controllers\Frontend\BookingController as FrontendBookingController;
use App\Http\Controllers\Member\ClubController as MemberClubController;
use App\Http\Controllers\Member\RoomController as MemberRoomController;
use App\Http\Controllers\Member\BookingController as MemberBookingController;
use App\Http\Controllers\Member\AdvertisementController as MemberAdvertisementController;
use App\Http\Controllers\Member\DocumentationController as MemberDocumentationController;

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

/**
    Route::get('/', function () {
    return view('welcome');
});
*/

Route::get('/', [FrontendAdvertisementController::class, 'welcome']);

/** guest */
Route::get('/guest/clubs/index',[FrontendClubController::class, 'index'])->name('guest.clubs.index');
Route::get('/guest/clubs/{club}',[FrontendClubController::class, 'show'])->name('guest.clubs.show');
Route::get('/guest/advertisements/index',[FrontendAdvertisementController::class, 'index'])->name('guest.advertisements.index');
Route::get('/guest/booking/step-one',[FrontendBookingController::class, 'stepOne'])->name('guest.bookings.step.one');
Route::post('/guest/booking/step-one',[FrontendBookingController::class, 'storeStepOne'])->name('guest.bookings.store.step.one');
Route::get('/guest/booking/step-two',[FrontendBookingController::class, 'stepTwo'])->name('guest.bookings.step.two');
Route::post('/guest/booking/step-two',[FrontendBookingController::class, 'storeStepTwo'])->name('guest.bookings.store.step.two');
Route::get('/thankyou', [FrontendAdvertisementController::class, 'thankyou'])->name('thankyou');
Route::view("/readmore", 'readmore');
Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');


Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    /** Member clubs and events route */

    Route::get('/member/clubs/index', [MemberClubController::class, 'index'])->name('member.clubs.index');
    Route::get('/member/advertisements/create', [MemberAdvertisementController::class, 'create'])->name('member.advertisements.create');
    Route::post('/member/advertisements/store', [MemberAdvertisementController::class, 'store'])->name('member.advertisements.store');
    Route::get('/member/advertisements/{advertisement}', [MemberAdvertisementController::class, 'edit'])->name('member.advertisements.edit');
    Route::patch('/member/advertisements/{advertisement}', [MemberAdvertisementController::class, 'update'])->name('member.advertisements.update');
    Route::delete('/member/advertisements/{advertisement}', [MemberAdvertisementController::class, 'destroy'])->name('member.advertisements.destroy');

    /** Member rooms and bookings route */

    Route::get('/member/rooms/index', [MemberRoomController::class, 'index'])->name('member.rooms.index');
    Route::get('/member/bookings/index', [MemberBookingController::class, 'index'])->name('member.bookings.index');
    Route::get('/member/bookings/{booking}', [MemberBookingController::class, 'create'])->name('member.bookings.create');
    Route::post('/member/bookings/store', [MemberBookingController::class, 'store'])->name('member.bookings.store');
    Route::delete('/member/bookings/{booking}', [MemberBookingController::class, 'destroy'])->name('member.bookings.destroy');

    /** Member upload and download document route */
    Route::get('/member/documentation/index', [MemberDocumentationController::class, 'index'])->name('member.documentation.index');
    Route::get('/member/documentation/create', [MemberDocumentationController::class, 'create'])->name('member.documentation.create');
    Route::post('/member/documentation/store', [MemberDocumentationController::class, 'store'])->name('member.documentation.store');
    Route::get('/member/documentation/{documentation}', [MemberDocumentationController::class, 'download'])->name('member.documentation.download');
    Route::delete('/member/documentation/{documentation}', [MemberDocumentationController::class, 'destroy'])->name('member.documentation.destroy');
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
    Route::resource('/admin/documentation',DocumentationController::class);
    Route::get('/admin/documentation/{documentation}', [DocumentationController::class, 'download'])->name('admin.documentation.download');
    Route::get('/admin/bookings/{booking}', [BookingController::class, 'approve'])->name('admin.bookings.approve');
    Route::post('/admin/bookings/{booking}', [BookingController::class, 'reject'])->name('admin.bookings.reject');
});



