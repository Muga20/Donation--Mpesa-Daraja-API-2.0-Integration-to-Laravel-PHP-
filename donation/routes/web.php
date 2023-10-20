<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PaymentController;
use App\Http\Controllers\MpesaController;




Route::get('/' ,[PaymentController::class, 'index'])->name('index');
Route::get('/token' ,[PaymentController::class, 'token'])->name('token');
Route::post('/initiatePush', [PaymentController::class, 'initiateStkPush'])->name('initiatePush');
Route::post('/stkCallBack',  [PaymentController::class,'stkCallback'])->name('stkCallBack');



  
    
