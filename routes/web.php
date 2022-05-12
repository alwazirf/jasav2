<?php

use Illuminate\Http\Request;
use App\Http\Livewire\Profile;
use App\Http\Livewire\DataUser;
use App\Http\Livewire\EditUser;
use App\Http\Livewire\Dashboard;
use App\Http\Livewire\Auth\Login;
use App\Http\Livewire\TambahUser;
use App\Http\Livewire\TampilUser;
use App\Http\Livewire\DataAnggota;
use App\Http\Livewire\EditAnggota;
use App\Http\Livewire\KartuAnggota;
use App\Http\Livewire\ResetPassword;
use App\Http\Livewire\TambahAnggota;
use App\Http\Livewire\TampilAnggota;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Livewire\ResetPasswordUser;
use Illuminate\Support\Facades\Password;
use App\Http\Controllers\ResetController;
use App\Http\Controllers\InfoUserController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\SessionsController;
use App\Http\Controllers\ChangePasswordController;

// use Symfony\Component\HttpKernel\Profiler\Profile;

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

Route::get('/', Login::class)->name('login');

Route::get('/login', Login::class)->name('login');

Route::middleware('auth')->group(function () {
    Route::get('/', [HomeController::class, 'home']);
    Route::get('/dashboard', Dashboard::class)->name('dashboard');
    Route::get('/profile', Profile::class)->name('profile');
    Route::get('/reset-password/{id}', ResetPassword::class)->name('reset-password');
    Route::get('/logout', [SessionsController::class, 'destroy']);


    //admin utama
    Route::get('/member-data', DataAnggota::class)->name('member-data');
    Route::get('/create-member', TambahAnggota::class)->name('member-create');
    Route::get('/show-member/{id}', TampilAnggota::class)->name('member-show');
    Route::get('/edit-member/{id}', EditAnggota::class)->name('member-edit');
});

Route::middleware('is_admin')->group(function () {
    Route::get('/card', KartuAnggota::class)->name('card');
    Route::get('/reset-password-user/{id}', ResetPasswordUser::class)->name('reset-password-user');
    Route::get('/user-data', DataUser::class)->name('data-user');
    Route::get('/user-create', TambahUser::class)->name('user-create');
    Route::get('/user-show/{id}', TampilUser::class)->name('user-show');
    Route::get('/user-edit/{id}', EditUser::class)->name('user-edit');
});
