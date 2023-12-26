<?php

namespace App\Http\Controllers;

use App\Models\Location;
use Illuminate\Http\Request;

class LocationController extends Controller
{
    public function create(){
        return view('pages.location');
    }
    public function store(Request $request){

        $request->validate([
            'name' => 'required',
        ]);

        Location::create([
            'name' => $request->name
        ]);
        return redirect()->back()->with('success', 'Location Created Successfully');
   }

}
