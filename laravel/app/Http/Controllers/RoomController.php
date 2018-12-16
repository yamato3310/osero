<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Room;
use App\Person;

class RoomController extends Controller
{
    public function index () {
        $rooms = Room::all ();
        return view ('room', ["rooms" => $rooms]);
    }

    public function create () {
        return view ('createRoom');
    }

    public function createRoom (Request $request) {
        $form = $request->all ();
        $room = new Room;
        $room->room_name = $form["room_name"];
        $room->password = $form["password"];
        $room->name = $form["name"];
        $room->build_flg = true;
        $room->save ();

        $person = new Person;
        $person->name = $form["name"];
        $person->color = $form["color"];
        $room = Room::name ($form["name"])->flg (1)->roomName ($form["room_name"])->first ();
        $person->room_id = $room->id;
        $person->save ();
        return redirect ("/room");
    }
}
