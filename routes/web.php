<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LocationController;

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



Route::controller(LocationController::class)->group(function () {
    Route::get('location',  'index');
    Route::post('get-states',  'getStates')->name('getStates');
    Route::post('get-cities',  'getCities')->name('getCities');
    Route::post('save-location', 'storeLocation')->name('saveLocation');

});
