<?php
 
use App\Http\Controllers\VisitorController;
use Illuminate\Support\Facades\Route;
 
Route::get('/', function () {
    return view('welcome');
});
 
Route::resource('visitors', VisitorController::class);