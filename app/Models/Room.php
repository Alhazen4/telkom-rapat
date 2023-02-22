<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Room extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'capacity',
        'location',
        'facility',
        'contact'
    ];

    public function requestRoom()
    {
        return $this->hasMany(RequestorRoom::class, 'id_rooms');
    }

    public function image()
    {
        return $this->hasMany(Image::class, 'id_rooms');
    }
}
