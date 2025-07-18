<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\GoogleController;
use App\Http\Controllers\AuthControllermanual;
use App\Http\Controllers\ProfilController;
use App\Http\Controllers\DashboardController;
use App\Http\Middleware\CekProfilLengkap;
use App\Http\Middleware\Authenticate;
use App\Http\Controllers\PengajuanController;

Route::post('/pengajuan/store', [PengajuanController::class, 'store'])->name('pengajuan.store');


Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfilController::class, 'form'])->name('profile');
    Route::post('/profile', [ProfilController::class, 'simpan'])->name('profile.simpan');
});

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

Route::middleware(['auth', 'cek.profil'])->group(function () {
    Route::get('/dashboarduser', function () {
        return view('baseuser');
    });
});

Route::get('/dashboardadmin', function () {
    return view('baseadmin');
})->name('dashbordadmin');

Route::get('/dashboardver', function () {
    return view('basever');
})->name('dashbordver');

Route::get('/verbase', function () {
    return view('verbase');
})->name('verbase');

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
