<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CVController;

use App\Http\Controllers\LotController;

use App\Http\Controllers\BetController;

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
Route::get('yovbak/cv',[CVController::class,'index']);
Route::resource('lots' , LotController ::class);
Route::resource('bets' , BetController ::class);

