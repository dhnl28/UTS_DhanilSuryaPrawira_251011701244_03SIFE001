<?php

use App\Http\Controllers\ShoeController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return redirect()->route('shoes.index');
});

Route::get('/shoes', [ShoeController::class, 'index'])->name('shoes.index');
Route::get('/shoes/{id}', [ShoeController::class, 'show'])->name('shoes.show');
