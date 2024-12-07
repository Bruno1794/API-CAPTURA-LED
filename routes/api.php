<?php

use App\Http\Controllers\Api\ClientController;
use Illuminate\Support\Facades\Route;

Route::get('clients',[ClientController::class,'index']);
Route::post('creat-client',[ClientController::class, 'store']);

