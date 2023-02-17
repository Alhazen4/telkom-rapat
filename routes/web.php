<?php

use App\Http\Controllers\RequestorRoomController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RoomController;
use Illuminate\Support\Facades\Http;

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

Route::get('/request', [RequestorRoomController::class, 'create'])->name('form.create');

Route::post('/request/{id}', [RequestorRoomController::class, 'store']);

Route::get('/history', [RequestorRoomController::class, 'RequestorRoomController@show']);

Route::get('/waclient', function() {
    $res = Http::get('http://localhost:1221/waClient');
    $data = json_decode($res->body(), true);
    return view('components/waclient', [
        'res' => $data,
    ]);
});
