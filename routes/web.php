<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\GoogleController;
use App\Http\Controllers\AuthControllermanual;
use App\Http\Controllers\ProfilController;
use App\Http\Controllers\DashboardController;
use App\Http\Middleware\CekProfilLengkap;
use App\Http\Middleware\Authenticate;

Route::middleware([CekProfilLengkap::class])->group(function () {
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
});

Route::get('/lengkapi-profil', [ProfilController::class, 'form'])->name('profil.lengkapi');
Route::post('/lengkapi-profil', [ProfilController::class, 'simpan'])->name('profil.simpan');


Route::get('auth/google', [GoogleController::class, 'redirectToGoogle']);
Route::get('auth/google/callback', [GoogleController::class, 'handleGoogleCallback']);

Route::post('/daftarmanual', [AuthControllermanual::class, 'register'])->name('daftarmanual');
Route::post('/loginmanual', [AuthControllermanual::class, 'login'])->name('loginmanual');
Route::get('/logoutmanual', [AuthControllermanual::class, 'logout'])->name('logoutmanual');


Route::get('/', function () {
    return view('index');
})->name('/');

Route::get('/masuk', function () {
    return view('masuk');
})->name('masuk');

Route::get('/daftar', function () {
    return view('daftar');
})->name('daftar');

Route::get('/dashboarduser', function () {
    return view('baseuser');
})->name('dashboarduser');

Route::get('/dashboardadmin', function () {
    return view('baseadmin');
})->name('dashbordadmin');

Route::get('/dashboardver', function () {
    return view('basever');
})->name('dashbordver');

Route::get('/verbase', function () {
    return view('verbase');
})->name('verbase');


Route::get('/profile', function () {
    return view('profile');
})->name('profile');

Route::get('/profilevalidator', function () {
    return view('profilevalidator');
})->name('profilevalidator');


Route::get('/pengajuansurat', function () {
    return view('surat');
})->name('pengajuansurat');

Route::get('/lihatsertifikat', function () {
    return view('lihatsertifikat');
})->name('lihatsertifikat');

Route::get('/validator', function () {
    return view('validator');
})->name('validator');

Route::get('/daftarpengajuanpengguna', function () {
    return view('daftarpengajuanpengguna');
})->name('daftarpengajuanpengguna');

Route::get('/daftarpengajuanvalidator', function () {
    return view('daftarpengajuanvalidator');
})->name('daftarpengajuanvalidator');


Route::get('/suratterbituser', function () {
    return view('suratterbituser');
})->name('suratterbituser');

Route::get('/logout', function () {
    Auth::logout();
    return redirect('/daftar'); 
})->name('logout');