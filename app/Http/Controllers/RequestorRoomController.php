<?php

namespace App\Http\Controllers;

use Illuminate\Support\Str;
use App\Models\RequestorRoom;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class RequestorRoomController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(RequestorRoom $requestorRoom)
    {
        //
        $show_request = $requestorRoom::all(['*']);

        return view('components.dashboard', $show_request);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        
        return view('form');
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, Response $response, $id)
    {
        //
        // dd($id);
        $validatedData = $request->validate([
            'name' => 'required|string',
            'date' => 'required',
            'time' => 'required',
            'unit' => 'required|string',
            'participant' => 'required|integer',
            'telephone' => 'required|string'
        ]);
        // echo $validatedData['date'];

        $hex = Str::random(9);
        $book_number = '#' . $hex;
        // dd($book_number);

        $request_form = RequestorRoom::create([
            'order_number' =>$book_number,
            'name_requestor' => $request->input('name'),
            'date' => $request->input('date'),
            'time' => $request->input('time'),
            'unit' => $request->input('unit'),
            'telephone' => $request->input('telephone'),
            'participant' => $request->input('participant'),
            'room_id' => $id
        ]);
        $check = gettype($request->input('time'));

        
        // dd($request->input('name'), $request->input('date'), $request->input('time'), $request->input('unit'), $request->input('telephone'), $check, $book_number);
        


        return redirect()->route("form.create")->with('success','sukses menambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\RequestorRoom  $requestorRoom
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        //


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

    // public $middleware = [
    //     \App\Http\Middleware\VerifyCsrfToken::class
    // ];
}
