<?php

namespace App\Http\Controllers;

use App\Models\Live;
use App\Models\Artist;
use App\Models\Ticket;
use Illuminate\Http\Request;

class TicketController extends Controller
{
    public function index(){
        $lives = Live::all();
        $artists = Artist::all();

        // dd($lives);

        return view('index', [
            'lives'=> $lives,
            'artists'=> $artists,
        ]);
    }

    public function create($live) {
        $selectedLive = Live::findOrFail($live); 
        return view('ticketCreate', ['selectedLive' => $selectedLive]);
    }
    
    public function store($live) {
        $attributes = request()->validate([
            'quantity' => 'required|integer',
            'total_price' => 'required|numeric|digits_between:1,6',
        ]);
    
        $liveEvent = Live::findOrFail($live);
    
        $ticket = new Ticket();
        $ticket->live_id = $liveEvent->id;
        $ticket->user_id = auth()->user()->id;
        $ticket->quantity = $attributes['quantity'];
        $ticket->total_price = $attributes['total_price'];
        $ticket->save();
    
        return redirect()->back()->with(['success' => 'Ticket successfully purchased.']);
    }
    
}
