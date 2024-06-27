<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\imcController;
use App\Http\Controllers\NotaController;


// Route::get('/imc', function (){
//     return view('imc.index');
// });

// Route::get('/nota', function () {
//     return view('nota.index');
// });

Route::get('/imc',[imcController::class,'index']);
Route::get('/imc/calcularImc', [imcController::class,'calcularImc'])->name("imc.calcular");
route::post('/imc/store', [imcController::class,'store'])->name('imc.store');
Route::get('/nota',[NotaController::class,'index']);
route::get('imc/show', [imcController::class,'show'])->name('imc.show');
