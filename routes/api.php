<?php 

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\api\UnitTenagaSuryaController1;
use App\Http\Controllers\PengajuanController;



Route::post('/unit-tenaga-surya1', [UnitTenagaSuryaController1::class, 'store']);

Route::get('/coba-api', function () {
    return response()->json(['pesan' => 'API aktif']);
});

