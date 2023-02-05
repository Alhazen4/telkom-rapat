<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Room;

class RoomController extends Controller
{
    public function index()
    {
        // $rooms = DB::table('rooms')->get();
        // return view('dashboard', compact('rooms'));

        return view('dashboard', ["rooms" => Room::all()]);
    }
}
