<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ReviewController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('review-list',[ReviewController::class,'index'])->name('review-list');

Route::get('review',[ReviewController::class,'create'])->name('review-create');

Route::post('review-post',[ReviewController::class,'store'])->name('review-store');


