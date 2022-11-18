<?php

use App\Http\Controllers\ImageController;
use App\Http\Livewire\CheckOut;
use App\Http\Livewire\GamePlan;
use Illuminate\Support\Facades\Route;

Route::get('/', GamePlan::class)->name('game-plan');
Route::get('/checkout/{id}', CheckOut::class)->name('checkout');
Route::get('/signature/{id}',[ImageController::class,'index'])->name('signature');
Route::post('/signature/{id}',[ImageController::class,'upload']);