<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CustomerController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('customer.create');
});

Route::prefix('customer')->group(function(){
    Route::get('/all', [CustomerController::class,'all'])->name('customer.all');
    Route::get('/create', [CustomerController::class,'create']);
    Route::post('/insert',[CustomerController::class,'insert']);
    Route::get('/edit/{id}', [CustomerController::class,'edit']);
    Route::post('/update/{id}', [CustomerController::class,'update']);
    Route::delete('/delete/{id}', [CustomerController::class,'delete']);
});
