<?php

namespace App\Http\Controllers;

use App\Models\Venue;
use Illuminate\Http\Request;

class VenueController extends Controller
{
    public function index()
    {
        $venues = Venue::all();
        return view('venues.index', compact('venues'));
    }
    public function show($id)
{
    $venue = Venue::findOrFail($id);
    return view('venues.show', compact('venue'));
}
public function seating($id)
{
    $venue = Venue::findOrFail($id);
    return view('venues.seating', compact('venue'));
}



    public function create()
    {
        return view('venues.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'address' => 'required',
            'latitude' => 'required|numeric',
            'longitude' => 'required|numeric',
        ]);

        Venue::create($request->all());

        return redirect()->route('venues.index');
    }
}
