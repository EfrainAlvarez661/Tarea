<?php

use App\Http\Controllers\Informacion;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
Route::prefix('sobremi')->controller(Informacion::class)->group(function () {

    Route::get('/',"info");

});