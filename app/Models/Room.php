<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Room
{
    static $roomsList =
    [
        [
            "name" => "Room 1",
            "capacity" => 10,
            "location" => "1st Floor",
            "detail" => "This is will be the detail of the room. It will be a paragraph",
            "photo" => "imageexample.png"
        ],
        [
            "name" => "Room 2",
            "capacity" => 20,
            "location" => "2nd Floor",
            "detail" => "This is will be the detail of the room. It will be a paragraph",
            "photo" => "imageexample.png"
        ],
        [
            "name" => "Room 3",
            "capacity" => 30,
            "location" => "3rd Floor",
            "detail" => "This is will be the detail of the room. It will be a paragraph",
            "photo" => "imageexample.png"
        ],
    ];

    public static function all()
    {
        return self::$roomsList;
    }

    public static function getRoom(room $room) {

    }
}
