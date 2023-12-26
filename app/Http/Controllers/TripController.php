<?php

namespace App\Http\Controllers;
use App\Models\Seat;
use App\Models\Trip;
use App\Models\Location;
use Illuminate\Http\Request;

class TripController extends Controller
{
    public function index(){
        return view('pages.home');
    }
    public function create(){
     $locations = Location::get();
        return view('pages.addTrip', compact('locations'));
    }
    public function store(Request $request){
        
        $request->validate([
            'date' => 'required',
            'from' => 'required',
            'to' => 'required|array',
            'departure_time' => 'required',
            'arrival_time' => 'required',
        ]);

        Trip::create([
            'date' => $request->date,
            'from' => $request->from,
            'to' => $request->to,
            'departure_time' => $request->departure_time,
            'arrival_time' => $request->arrival_time,
        ]);

        return redirect()->back()->with('success', 'Post Created Successfully');
    }

public function searchBus(Request $request){

    




    $searchDepartureStopage = ucwords($request->from);
    $searchArrivalStopage = ucwords($request->to);
    $searchDate = $request->date;

    $availableTrip = Trip::whereDate('date', '=', $searchDate)
        ->where('from', 'LIKE', $searchDepartureStopage)
        ->whereJsonContains('to', $searchArrivalStopage )
        ->get();

        $seats = Seat::get();

        if ($availableTrip->count() > 0) {
            return view('pages.availableTrip', ['availableTrip' => $availableTrip, 'searchDepartureStopage' => $searchDepartureStopage , 'searchArrivalStopage' => $searchArrivalStopage, 'searchDate' => $searchDate, 'seats' => $seats]);
        } else {
            return back()->with('error', 'Bus Not Available.');
        }

}


}
