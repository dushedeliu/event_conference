<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\Organizer\EventController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('home');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::get('/', [HomeController::class, 'homeEvents']);
Route::get('/home/events', [\App\Http\Controllers\HomeController::class, 'index'])->name('home.index');
Route::get('/home/events/book/{event}', [\App\Http\Controllers\HomeController::class, 'ticketShow'])->name('home.book')->middleware(['auth']);
Route::post('/home/events/book/{event}/store', [HomeController::class, 'store'])->name('home.store')->middleware('auth');

Route::group(['prefix' => '/bookings', 'middleware' => 'auth'], function(){
   Route::get('/', [\App\Http\Controllers\BookingController::class, 'index'])->name('bookings.index');
   Route::delete('/{booking}', [\App\Http\Controllers\BookingController::class, 'destroy'])->name('bookings.destroy');
});

Route::group(['prefix' => '/events', 'middleware' => ['auth', 'organizer']], function () {
    Route::get('/', [EventController::class, 'index'])->name('events.index');
    Route::get('/create', [EventController::class, 'create'])->name('events.create');
    Route::post('/store', [EventController::class, 'store'])->name('events.store');
    Route::get('/{event}/edit', [EventController::class, 'edit'])->name('events.edit');
    Route::patch('/{event}/update', [EventController::class, 'update'])->name('events.update');
    Route::delete('/{event}', [EventController::class, 'destroy'])->name('events.destroy');

    Route::get('/bookings/{event}', [\App\Http\Controllers\Organizer\BookingController::class, 'show'])->name('bookings.show');
});

Route::group(['prefix' => '/adminevent', 'middleware' => ['auth', 'admin']], function () {
    Route::get('/', [\App\Http\Controllers\Admin\AdminController::class, 'index'])->name('admin.events.index');
    Route::get('/updatedEvents', [\App\Http\Controllers\Admin\AdminController::class, 'review'])->name('admin.events.updated');
    Route::post('/{event}/approve', [\App\Http\Controllers\Admin\AdminController::class, 'approve'])->name('admin.events.approve');
    Route::post('/{event}/reject', [\App\Http\Controllers\Admin\AdminController::class, 'reject'])->name('admin.events.reject');

    Route::group(['prefix' => '/users'], function () {
        Route::get('/', [\App\Http\Controllers\Admin\UserController::class, 'index'])->name('admin.users.index');
        Route::get('/edit/{user}', [\App\Http\Controllers\Admin\UserController::class, 'edit'])->name('admin.users.edit');
        Route::patch('/update/{user}', [\App\Http\Controllers\Admin\UserController::class, 'update'])->name('admin.users.update');
    });

    Route::group(['prefix' => '/roles'], function (){
        Route::get('/', [\App\Http\Controllers\Admin\RoleController::class, 'index'])->name('admin.roles.index');
        Route::get('/create', [\App\Http\Controllers\Admin\RoleController::class, 'create'])->name('admin.roles.create');
        Route::post('/store', [\App\Http\Controllers\Admin\RoleController::class, 'store'])->name('admin.roles.store');
        Route::get('/edit/{role}', [\App\Http\Controllers\Admin\RoleController::class, 'edit'])->name('admin.roles.edit');
        Route::patch('/update/{role}', [\App\Http\Controllers\Admin\RoleController::class, 'update'])->name('admin.roles.update');
        Route::delete('{role}', [\App\Http\Controllers\Admin\RoleController::class, 'destroy'])->name('admin.roles.destroy');
    });
});

Route::group(['prefix' => '/calendar', 'middleware'=>'auth'], function () {
    Route::get('/', [\App\Http\Controllers\Organizer\CalendarController::class, 'index'])->name('events.fullcalendar');
    Route::get('/events', [\App\Http\Controllers\Organizer\CalendarController::class, 'getEvents'])->name('events.getEvents');
    Route::post('/events', [\App\Http\Controllers\Organizer\CalendarController::class, 'addEvent'])->name('events.addEvent');
    Route::put('/events/update/{id}', [\App\Http\Controllers\Organizer\CalendarController::class, 'updateEvent'])->name('events.updateEvent');
    Route::patch('/events/{id}/resize', [\App\Http\Controllers\Organizer\CalendarController::class, 'resizeEvent'])->name('events.resizeEvent');
    Route::delete('/events/destroy/{id}', [\App\Http\Controllers\Organizer\CalendarController::class, 'destroyEvents'])->name('events.destroyEvents');
});


Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
