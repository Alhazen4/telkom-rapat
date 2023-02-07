<?php

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
// Route::get('/{id}', [RoomController::class, 'getRoom']);

Route::get('/{id}', function ($id) {
    // $roomsList =
    // [
    //     [
    //         "id" => "R1",
    //         "name" => "Room 1",
    //         "capacity" => 10,
    //         "location" => "1st Floor",
    //         "detail" => "<p> <ul>This is will be the detail of the room. It will be a paragraph",
    //         "photo" => "imageexample.png"
    //     ],
    //     [
    //         "id" => "R2",
    //         "name" => "Room 2",
    //         "capacity" => 20,
    //         "location" => "2nd Floor",
    //         "detail" => "This is will be the detail of the room. It will be a paragraph",
    //         "photo" => "imageexample.png"
    //     ],
    //     [
    //         "id" => "R3",
    //         "name" => "Room 3",
    //         "capacity" => 30,
    //         "location" => "3rd Floor",
    //         "detail" => "This is will be the detail of the room. It will be a paragraph",
    //         "photo" => "imageexample.png"
    //     ],
    // ];

    // $selectedRoom = [];
    // foreach ($roomsList as $room) {
    //     if ($room["id"] === $id) {
    //         $selectedRoom = $room;
    //     }
    // }

    // var_dump($selectedRoom);

    return view('dialog', [
        "s" => "GULUGUL!"
    ]);
});
