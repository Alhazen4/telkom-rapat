<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Room
{
    private static $roomsList =
    [
        [
            "id" => "R1",
            "name" => "Room 1",
            "capacity" => 10,
            "location" => "1st Floor",
            "detail" => "This is will be the detail of the room. It will be a paragraph",
            "photo" => "ULh0i2txBCY"
        ],
        [
            "id" => "R2",
            "name" => "Room 2",
            "capacity" => 20,
            "location" => "2nd Floor",
            "detail" => "This is will be the detail of the room. It will be a paragraph",
            "photo" => "0sT9YhNgSEs"
        ],
        [
            "id" => "R3",
            "name" => "Room 3",
            "capacity" => 30,
            "location" => "3rd Floor",
            "detail" => "This is will be the detail of the room. It will be a paragraph",
            "photo" => "1RT4txDDAbM"
        ],
        [
            "id" => "R4",
            "name" => "Room 4",
            "capacity" => 40,
            "location" => "4th Floor",
            "detail" => "This is will be the detail of the room. It will be a paragraph",
            "photo" => "_-KLkj7on_c"
        ],
        [
            "id" => "R5",
            "name" => "Room 5",
            "capacity" => 50,
            "location" => "5th Floor",
            "detail" => "This is will be the detail of the room. It will be a paragraph",
            "photo" => "bIZJRVBLfOM"
        ],
        [
            "id" => "R6",
            "name" => "Room 6",
            "capacity" => 60,
            "location" => "6th Floor",
            "detail" => "This is will be the detail of the room. It will be a paragraph",
            "photo" => "eHD8Y1Znfpk"
        ],
        [
            "id" => "R7",
            "name" => "Room 7",
            "capacity" => 70,
            "location" => "7th Floor",
            "detail" => "This is will be the detail of the room. It will be a paragraph",
            "photo" => "GWe0dlVD9e0"
        ],
        [
            "id" => "R8",
            "name" => "Room 8",
            "capacity" => 80,
            "location" => "8th Floor",
            "detail" => "This is will be the detail of the room. It will be a paragraph",
            "photo" => "yjydNkTYy4U"
        ],
        [
            "id" => "R9",
            "name" => "Room 9",
            "capacity" => 90,
            "location" => "9th Floor",
            "detail" => "This is will be the detail of the room. It will be a paragraph",
            "photo" => "d_Etix8Zkag"
        ],
    ];

    public static function all()
    {
        return self::$roomsList;
    }

    public static function find($id) {
        $rooms = self::$roomsList;
        $selectedRoom = [];
        foreach ( $rooms as $room) {
            if($room["id"] === $id) {
                $selectedRoom = $room;
            }
        }

        return $selectedRoom;
    }
}
