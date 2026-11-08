<?php

use App\Http\Controllers\VisitorController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return redirect()->route('visitors.index');
});

Route::resource('visitors', VisitorController::class);