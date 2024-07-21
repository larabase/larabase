<?php

use App\Http\Controllers\AccountingController;
use App\Http\Controllers\ClassesController;
use App\Http\Controllers\DatasController;
use App\Http\Controllers\InvoicesController;
use App\Http\Controllers\MainController;
use App\Http\Controllers\ParentsController;
use App\Http\Controllers\PaymentsController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\SettingsController;
use App\Http\Controllers\StudentsController;
use App\Http\Controllers\TeachersController;
use App\Http\Controllers\TimetablesController;
use App\Http\Controllers\UsersController;
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

Route::middleware(['auth:web'])->group(function () {
    Route::get('/', [MainController::class, 'index'])->name('index');

    Route::group(['prefix' => 'profile'], function () {
        Route::get('/', [ProfileController::class, 'profile'])->name('profile');
        Route::get('/activities', [ProfileController::class, 'activities'])->name('profile.activities');
        Route::get('/notifications', [ProfileController::class, 'notifications'])->name('profile.notifications');
        Route::get('/security', [ProfileController::class, 'security'])->name('profile.security');
        Route::get('/settings', [ProfileController::class, 'settings'])->name('profile.settings');
    });

    Route::prefix('datas')->group(function () {
        Route::get('/years', [DatasController::class, 'years'])->name('datas.years');
        Route::get('/levels', [DatasController::class, 'levels'])->name('datas.levels');
        Route::get('/subjects', [DatasController::class, 'subjects'])->name('datas.subjects');
        Route::get('/fees', [DatasController::class, 'fees'])->name('datas.fees');
    });

    Route::prefix('students')->group(function () {
        Route::get('/', [StudentsController::class, 'index'])->name('students');
        Route::get('/add', [StudentsController::class, 'add'])->name('students.add');
    });

    Route::prefix('teachers')->group(function () {
        Route::get('/', [TeachersController::class, 'index'])->name('teachers');
        Route::get('/add', [TeachersController::class, 'add'])->name('teachers.add');
    });

    Route::prefix('parents')->group(function () {
        Route::get('/', [ParentsController::class, 'index'])->name('parents');
        Route::get('/add', [ParentsController::class, 'add'])->name('parents.add');
    });

    Route::prefix('classes')->group(function () {
        Route::get('/', [ClassesController::class, 'index'])->name('classes');
        Route::get('/add', [ClassesController::class, 'add'])->name('classes.add');
    });

    Route::prefix('timetables')->group(function () {
        Route::get('/', [TimetablesController::class, 'index'])->name('timetables');
    });

    Route::prefix('accounting')->group(function () {
        Route::get('/', [AccountingController::class, 'index'])->name('accounting');
    });

    Route::prefix('payments')->group(function () {
        Route::get('/', [PaymentsController::class, 'index'])->name('payments');
        Route::get('/add', [PaymentsController::class, 'add'])->name('payments.add');
    });

    Route::prefix('invoices')->group(function () {
        Route::get('/', [InvoicesController::class, 'index'])->name('invoices');
    });

    Route::get('/users', action: [UsersController::class, 'index'])->name('users');
    Route::get('/settings', [SettingsController::class, 'index'])->name('settings');
});

require __DIR__ . '/auth.php';
