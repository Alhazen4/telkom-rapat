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

    public function RequestoRoom()
    {
        return $this->hasMany(RequestorRoom::class);
    }

    public function Image()
    {
        return $this->hasMany(Image::class);
    }
}
