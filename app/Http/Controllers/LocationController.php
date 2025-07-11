<?php

namespace App\Http\Controllers;

use App\Models\City;
use App\Models\State;
use App\Models\Country;
use App\Models\UserLocation;
use Illuminate\Http\Request;

class LocationController extends Controller
{
    public function index()
    {
        $countries = Country::all();
        return view('location', compact('countries'));
    }

    public function getStates(Request $request)
    {
        $states = State::where('country_id', $request->country_id)->get();
        return response()->json($states);
    }

    public function getCities(Request $request)
    {
        $cities = City::where('state_id', $request->state_id)->get();
        return response()->json($cities);
    }

    public function storeLocation(Request $request)
    {
        $request->validate([
            'country_id' => 'required|exists:countries,id',
            'state_id'   => 'required|exists:states,id',
            'city_id'    => 'required|exists:cities,id',
        ]);

        UserLocation::create([
            'country_id' => $request->country_id,
            'state_id'   => $request->state_id,
            'city_id'    => $request->city_id,
        ]);

        return back()->with('success', 'Location saved successfully!');
    }

}
