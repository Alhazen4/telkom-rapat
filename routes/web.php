<?php

use App\Models\RequestorRoom;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RoomController;
use App\Http\Controllers\VerifController;
use App\Http\Controllers\WaClientController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ImageController;
use App\Http\Controllers\RequestorRoomController;

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

Route::get('/', [DashboardController::class, 'show'])->name('dashboard');

Route::get('/getRoom', [RoomController::class,'getRoom'])->name('room.getRoom');

Route::get('/request', [RequestorRoomController::class, 'create'])->name('form.create');

Route::post('/request', [RequestorRoomController::class, 'store'])->name('form.store');

Route::get('/history', [RequestorRoomController::class, 'index'])->name('history');

Route::get('/waclient', [WaClientController::class, 'getQrCode']);

Route::get('/verif', [VerifController::class, 'index']);

Route::get('/test', [RequestorRoomController::class, 'index']);
// Route::get('/test', [RoomController::class, 'show']);
