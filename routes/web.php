<?php

use App\Http\Controllers\Admin\BookingController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\RoomController;
<<<<<<< HEAD
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\BookingController as ControllersBookingController;
=======
use App\Http\Controllers\AuthController;
use App\Http\Controllers\BlogController;
>>>>>>> 67267aadb1b3084f9cf5104d13370fece08adce9
use App\Http\Controllers\RoomController as ControllersRoomController;
use Illuminate\Support\Facades\Route;
Route::get('/',[BlogController::class,'index'])->name('index');
Route::get('/admin',[DashboardController::class,'index'])->name('dashboard.index');


<<<<<<< HEAD
Route::get('/',[BlogController::class,'index'])->name('index');
Route::get('/room{id}', [BlogController::class, 'detail'])->name('room.detail');


=======
>>>>>>> 67267aadb1b3084f9cf5104d13370fece08adce9

// login or su=ignup routes
Route::get("/login", [AuthController::class, 'loginForm'])->name("loginForm");
Route::post("/login", [AuthController::class, 'login'])->name("login");
Route::post("/logout", [AuthController::class, 'logout'])->name('logout');
Route::get("/signup", [AuthController::class, 'signupForm'])->name("signupForm");
Route::post("/register", [AuthController::class, 'register'])->name("register");


<<<<<<< HEAD

// nav set

Route::get('/about',[BlogController::class,'about'])->name('about');
// rooms crud
Route::prefix('admin')->middleware(['auth','is_admin'])->group(function () {
    Route::get('/',[DashboardController::class,'index'])->name('dashboard.index');
=======
// rooms crud

Route::prefix('admin')->middleware(['auth','is_admin'])->group(function () {
>>>>>>> 67267aadb1b3084f9cf5104d13370fece08adce9
    Route::get('/rooms', [RoomController::class, 'index'])->name('rooms.index');
    Route::get('/rooms/create', [RoomController::class, 'create'])->name('rooms.create');
    Route::post('/rooms', [RoomController::class, 'store'])->name('rooms.store');
    Route::get('/rooms/{room}/edit', [RoomController::class, 'edit'])->name('rooms.edit');
    Route::put('/rooms/{room}', [RoomController::class, 'update'])->name('rooms.update');
    Route::delete('/rooms/{room}', [RoomController::class, 'destroy'])->name('rooms.destroy');
<<<<<<< HEAD

    // booking
    Route::get('/admin/bookings', [BookingController::class, 'index'])->name('admin.bookings');


    //coustmer
    Route::get('/customers', [UserController::class, 'index'])->name('admin.customers');
    

});


//.user booking

   Route::middleware(['auth'])->group(function () {
    Route::get('/my-bookings', [ControllersBookingController::class, 'index'])->name('user.bookings');
     Route::get('/book-room', [ControllersBookingController::class, 'create'])->name('book.room');
    Route::post('/book-room', [ControllersBookingController::class, 'store'])->name('book.room.store');
});
=======
});
>>>>>>> 67267aadb1b3084f9cf5104d13370fece08adce9
