<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\itemController;

Route::get('/', function () {
    return view('welcome');
});
route::get('/items/create', [itemController::class,'create']);
route:: post('/items', [itemController::class,'store'])->name('items.store');

// menggunakan resource route (otomatis membuat index, create, store, dll)
Route::resource('items', itemController::class);