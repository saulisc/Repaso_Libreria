<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ControladorDB;

Route::get('recuerdo/create', [ControladorDB::class,'create']) -> name('recuerdo.create');

Route::get('/', [ControladorDB::class,'showHome']) -> name('home');


// Route::get('/', function () {
//     return view('welcome');
// });
