<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Http;

class WaClientController extends Controller
{
    public function getQrCode() {
        $res = Http::get('http://localhost:1221/waClient');
        $data = json_decode($res->body(), true);
        return view('components/waclient', [
            'res' => $data,
        ]);
    }
}
