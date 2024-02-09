<?php

namespace App\Http\Controllers;

use App\Models\Live;
use App\Models\Artist;
use Illuminate\Http\Request;

class TicketController extends Controller
{
    public function index(){
        $tickets = Live::all();
        $artists = Artist::all();

        // dd($tickets);

        return view('index', [
            'tickets'=> $tickets,
            'artists'=> $artists,
        ]);
    }
}
