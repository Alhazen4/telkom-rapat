<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\RequestorRoomController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RoomController;
use App\Models\RequestorRoom;

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

Route::get('/', [RoomController::class, 'show']);
// Route::get('/', [RequestorRoomController::class, 'index']);

Route::get('/getRoom', [RoomController::class,'getRoom'])->name('room.getRoom');

Route::get('/request', [RequestorRoomController::class, 'create'])->name('form.create');

Route::post('/request', [RequestorRoomController::class, 'store'])->name('form.store');

Route::get('/history', [RequestorRoomController::class, 'index']);

Route::get('/test', [DashboardController::class, 'show']);
