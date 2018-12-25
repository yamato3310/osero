<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class websocketController extends Controller
{
    public function index (Request $request) {
        $room_id = $request->all ();
        event (new \App\Events\enteringTheRoom ($room_id["id"]));
        return view ("roomDetails", ["id" => $room_id["id"]]);
    }
}
