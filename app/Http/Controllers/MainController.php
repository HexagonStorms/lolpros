<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use App\Team;
use App\Player;

class MainController extends Controller
{
    public function getData()
    {
        /* DISCLAIMER:
        * This may not always get by teams. There will be
        * more options in the future to sort and get by
        * a variety of different parameters
        */
        $players = Player::with('team')->get();
        return response()->json($players);
    }
}