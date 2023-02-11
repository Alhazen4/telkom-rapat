<?php

use App\Http\Controllers\RequestorRoomController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RoomController;

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

Route::get('/', [RoomController::class, 'index']);

Route::get('/getRoom', [RoomController::class,'getRoom'])->name('room.getRoom');

Route::post('/request/{id}', [RequestorRoomController::class, 'RequestorRoomController@store']);

Route::get('/history', [RequestorRoomController::class, 'RequestorRoomController@show']);
