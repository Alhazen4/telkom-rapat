<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RequestorRoom extends Model
{
    use HasFactory;

    protected $fillable = [
        'order_number',
        'name_requestor',
        'date',
        'time',
        'unit',
        'telephone',
        'rooms_id_rooms',
        'status_id_status'
    ];

    protected $attributes = [
        'status' => 1
    ];
}
