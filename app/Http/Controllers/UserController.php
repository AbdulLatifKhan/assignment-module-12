<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function store(Request $request){

        $validatedData = $request->validate([
            'from' => 'required',
            'to' => 'required',
            'date' => 'required',
            'departure_time' => 'required',
            'arrival_time' => 'required',
            'phone_number' => 'required',
            'seat_id' => 'required'
        ]);

        $user = User::create([
            'from' => $request->from,
            'to' => $request->to,
            'date' => $request->date,
            'departure_time' => $request->departure_time,
            'arrival_time' => $request->arrival_time,
            'phone_number' => $request->phone_number,
            'seat_id' => $request->seat_id
        ]);

        return redirect()->back()->with('success', 'Ticket Buy Successfully');
    }
}
