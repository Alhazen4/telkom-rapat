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
    public function index()
    {
        //
        $show_request = RequestorRoom::all(['*']);

        return $show_request->all();
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
    public function store(Request $request, Response $response)
    {
        // dd($request->all());
        //
        // $validatedData = $request->validate([
        //     'name' => 'required|string',
        //     'date' => 'required',
        //     'time' => 'required',
        //     'unit' => 'required|string',
        //     'participant' => 'required|integer',
        //     'telephone' => 'required|string'
        // ]);
        // echo $validatedData['date'];

        $hex = Str::random(9);
        $book_number = '#' . $hex;
        // dd($book_number);

        $request_form = RequestorRoom::create([
            'order_number' => $book_number,
            'room_id' => $request->input('inputIdRoom'),
            'name_requestor' => $request->input('inputNama'),
            'date' => $request->input('inputTglPesan'),
            'time' => $request->input('inputWktMulai'),
            'unit' => $request->input('inputUnit'),
            'telephone' => $request->input('inputNoTelp'),
            'participant' => $request->input('inputJmlPeserta'),
        ]);

        // $check = gettype($request->input('time'));

        return redirect()->route("dashboard");
        // return response()->json([
        //     'success' => true,
        // ]);
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
