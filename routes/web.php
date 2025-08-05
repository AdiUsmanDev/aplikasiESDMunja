<?php

use Illuminate\Support\Facades\Route;

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




Route::get('/berandateknis', function () {
    return view('berandateknis');
})->name('berandateknis');

Route::get('/berandaevaluator', function () {
    return view('berandaevaluator');
})->name('berandaevaluator');

Route::get('/berandavalidator', function () {
    return view('berandavalidator');
})->name('berandavalidator');

Route::get('/verbase', function () {
    return view('verbase');
})->name('verbase');


Route::get('/profile', function () {
    return view('profile');
})->name('profile');

Route::get('/profileteknis', function () {
    return view('profileteknis');
})->name('profileteknis');

Route::get('/profilevalidator', function () {
    return view('profilevalidator');
})->name('profilevalidator');

Route::get('/profileevaluator', function () {
    return view('profileevaluator');
})->name('profileevaluator');


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

Route::get('/daftarpengajuaneval', function () {
    return view('daftarpengajuaneval');
})->name('daftarpengajuaneval');

Route::get('/halamanevaluasi', function () {
    return view('halamanevaluasi');
})->name('halamanevaluasi');

Route::get('/halamantimteknis', function () {
    return view('halamantimteknis');
})->name('halamantimteknis');

Route::get('/halamantimteknisperbaikan', function () {
    return view('halamantimteknisperbaikan');
})->name('halamantimteknisperbaikan');

Route::get('/halamantimteknistelahdievaluasi', function () {
    return view('halamantimteknistelahdievaluasi');
})->name('halamantimteknistelahdievaluasi');

Route::get('/daftarpengajuanteknis', function () {
    return view('daftarpengajuanteknis');
})->name('daftarpengajuanteknis');

Route::get('/daftarpengajuanval', function () {
    return view('daftarpengajuanval');
})->name('daftarpengajuanval');

Route::get('/suketteknis', function () {
    return view('suketteknis');
})->name('suketteknis');

Route::get('/suketval', function () {
    return view('suketval');
})->name('suketval');

Route::get('/suratterbituser', function () {
    return view('suratterbituser');
})->name('suratterbituser');

Route::get('/verifikasiemail', function () {
    return view('verifikasiemail');
})->name('verifikasiemail');

Route::get('/daftarpengajuanteknis', function () {
    return view('daftarpengajuanteknis');
})->name('daftarpengajuanteknis');

Route::get('/daftarpengajuanvalidator', function () {
    return view('daftarpengajuanvalidator');
})->name('daftarpengajuanvalidator');

Route::get('/daftarpengajuanevaluator', function () {
    return view('daftarpengajuaneval');
})->name('daftarpengajuanevaluator');


Route::get('/halamanevaluasi', function () {
    return view('halamanevaluasi');
})->name('halamanevaluasi');

Route::get('/halamantimteknisplts', function () {
    return view('halamantimteknisplts');
})->name('halamantimteknisplts');


Route::get('/profileberkalavalidator', function () {
    return view('profileberkalavalidator');
})->name('profileberkalavalidator');

Route::get('/formdataberkala', function () {
    return view('formdataberkala');
})->name('formdataberkala');

Route::get('/formdataumum', function () {
    return view('formdataumum');
})->name('formdataumum');

Route::get('/berkaladaftarpengajuaneval', function () {
    return view('berkaladaftarpengajuaneval');
})->name('berkaladaftarpengajuaneval');

Route::get('/kelolapegawai', function () {
    return view('kelolapegawai');
})->name('kelolapegawai');

Route::get('/suratperbaikansurya', function () {
    return view('suratperbaikansurya');
})->name('suratperbaikansurya');

Route::get('/suratperbaikannonsurya', function () {
    return view('suratperbaikannonsurya');
})->name('suratperbaikannonsurya');

Route::get('/kelolabadanusaha', function () {
    return view('kelolabadanusaha');
})->name('kelolabadanusaha');

Route::get('/kelolaevaluator', function () {
    return view('kelolaevaluator');
})->name('kelolaevaluator');

Route::get('/suketevaluator', function () {
    return view('suketevaluator');
})->name('suketevaluator');




Route::get('/profilepenggunaberkala', function () {
    return view('profilepenggunaberkala');
})->name('profilepenggunaberkala');

Route::get('/berandapenggunaberkala', function () {
    return view('berandapenggunaberkala');
})->name('berandapenggunaberkala');

Route::get('/buatpermohonanberkala', function () {
    return view('buatpermohonanberkala');
})->name('buatpermohonanberkala');

Route::get('/lembarpengesahan', function () {
    return view('lembarpengesahan');
})->name('lembarpengesahan');

Route::get('/daftarpengajuanpenggunaberkala', function () {
    return view('daftarpengajuanpenggunaberkala');
})->name('daftarpengajuanpenggunaberkala');




Route::get('/daftarlaporanberkalateknis', function () {
    return view('daftarlaporanberkalateknis');
})->name('daftarlaporanberkalateknis');

Route::get('/halamanteknisberkala', function () {
    return view('halamanteknisberkala');
})->name('halamanteknisberkala');


Route::get('/berandaevalutorberkala', function () {
    return view('berandaevaluatorberkala');
})->name('berandaevaluatorberkala');

Route::get('/halamanevaluasiberkala', function () {
    return view('halamanevaluasiberkala');
})->name('halamanevaluasiberkala');

Route::get('/berandavalidatorberkala', function () {
    return view('berandavalidatorberkala');
})->name('berandavalidatorberkala');

Route::get('/profilepenggunaberkala', function () {
    return view('profilepenggunaberkala');
})->name('profilepenggunaberkala');

Route::get('/profilevalidatorberkala', function () {
    return view('profilevalidatorberkala');
})->name('profilevalidatorberkala');

Route::get('/daftarpermohonanvalidatorberkala', function () {
    return view('daftarpermohonanvalidatorberkala');
})->name('daftarpermohonanvalidatorberkala');



Route::get('/halamanteknis', function () {
    return view('halamanteknis');
})->name('halamanteknis');

