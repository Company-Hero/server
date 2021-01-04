<?php

use Illuminate\Support\Facades\Route;

Route::get('/storage', function () {
    return view('storage/index-storage');
})->middleware(['auth'])->name('index-storage');

?>