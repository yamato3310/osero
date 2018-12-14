<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\room;

class RoomController extends Controller
{
    public function index () {
        $room = Room::all ();
        $rooms = $room->people;
        return view ('room', ["room" => $rooms]);
    }
}
