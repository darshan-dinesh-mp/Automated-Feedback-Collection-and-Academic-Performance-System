<?php

use App\Http\Controllers\LoginController;
use App\Http\Controllers\DashboardController;

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


Route::post('/login', [LoginController::class, 'login'])->name('login');
Route::get('/logout', [LoginController::class, 'logout'])->name('logout');

Route::get('/admin', function () {
    return view('admin/index');
});

Route::get('/', function () {
    return view('index');
});

Route::get('/dashboard', function () {
    return view('student/dashboard');
});

Route::get('/edit-profile', function () {
    return view('student/edit-profile');
});

Route::get('/general-form', function () {
    return view('student/forms/general-form');
});

Route::get('/general-form', function () {
    return view('student/forms/general-form');
})->name('general-form');


Route::get('/mse-one-form', function () {
    return view('student/forms/mse-one-form');
});

Route::get('/mse-two-form', function () {
    return view('student/forms/mse-two-form');
});

Route::get('/dashboard', function () {
    return view('student/dashboard');
})->name('dashboard');

Route::get('/student-profile', function () {
    return view('student/studentprofile');
})->name('student-profile');

Route::get('/edit-profile', function () {
    return view('student/edit-profile');
})->name('edit-profile');


Route::middleware(['auth'])->group(function () {
    Route::get('/student/dashboard', [DashboardController::class, 'student'])->name('student.dashboard');
    Route::get('/teacher/dashboard', [DashboardController::class, 'teacher'])->name('teacher.dashboard');
    Route::get('/admin/dashboard', [DashboardController::class, 'admin'])->name('admin.dashboard');
});
