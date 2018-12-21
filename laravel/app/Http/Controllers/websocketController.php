<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Events;

class websocketController extends Controller
{
    public function index () {
        event (new enteringTheRoom ());
    }
}
