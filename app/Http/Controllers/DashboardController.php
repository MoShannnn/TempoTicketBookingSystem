<?php

namespace App\Http\Controllers;

use App\Models\Ticket;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index(){
        $user = auth()->user();

        $tickets = Ticket::with('user', 'live')->where('user_id', $user->id)->get();

        // dd($tickets);

        return view('dashboard', [
            'user' => $user,
            'tickets' => $tickets,
        ]);
    }
}
