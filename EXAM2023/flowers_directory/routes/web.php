<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FlowerController;
use App\Http\Controllers\RegionController;
use Illuminate\Http\Request;
use App\Models\flower;
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


Route::resource('flower', FlowerController::class); 

Route::resource('region', RegionController::class); 




