<?php

namespace App\Http\Controllers;

use Illuminate\Support\Str;
use App\Models\RequestorRoom;
use Illuminate\Http\Request;

class RequestorRoomController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, $id)
    {
        //

        $request->validate([
            'name_requestor' => 'required|string',
            'date' => 'required|date',
            'time' => 'required',
            'unit' => 'required|string',
            'telephone' => 'required|string'
        ]);

        $hex = Str::random(9);
        $book_number = '#' . $hex;

        $request_form = RequestorRoom::create([
            'order_number' => $book_number,
            'name_requestor' => $request->input('name'),
            'date' => $request->input('date'),
            'time' => $request->input('time'),
            'unit' => $request->input('unit'),
            'telephone' => $request->input('telephone'),
            'rooms_id_rooms' => $id,
            'status_id_status' => 1
        ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\RequestorRoom  $requestorRoom
     * @return \Illuminate\Http\Response
     */
    public function show(RequestorRoom $requestorRoom)
    {
        //

        $show_request = $requestorRoom::all(['*']);

        return view('', $show_request);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\RequestorRoom  $requestorRoom
     * @return \Illuminate\Http\Response
     */
    public function edit(RequestorRoom $requestorRoom)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\RequestorRoom  $requestorRoom
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, RequestorRoom $requestorRoom)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\RequestorRoom  $requestorRoom
     * @return \Illuminate\Http\Response
     */
    public function destroy(RequestorRoom $requestorRoom)
    {
        //
    }
}
