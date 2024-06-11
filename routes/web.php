<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\imcController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/imc', function (){
    return view('imc.index');
});

route::get('imc',[imcController::class,'index']);