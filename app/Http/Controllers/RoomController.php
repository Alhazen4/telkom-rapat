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
        return view('components/dashboard', ["rooms" => Room::all()]);
    }

    public function getRoom(Request $req) {
        $id = $req->id;
        $selectedRoom = Room::find($id);
        return response()->json(['status_code' => '200', 'data' => $selectedRoom]);
    }
}
