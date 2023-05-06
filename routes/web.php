<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\CoffeeController;
use App\Http\Controllers\TransactionController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/{id}', [UserController::class, 'home']);
Route::get('/{id}/transactions', [TransactionController::class, 'transactions']);

Route::get('/{id}/Espresso', [CoffeeController::class, 'espresso']);
Route::get('/{id}/Brewed', [CoffeeController::class, 'brewed']);
Route::get('/{id}/Blended', [CoffeeController::class, 'blended']);
Route::get('/{id}/Others', [CoffeeController::class, 'others']);
