<?php

namespace App\Http\Controllers;

use App\Models\City;
use App\Models\State;
use Illuminate\Http\Request;

class LocationController extends Controller
{
    public function getStates($countryId)
    {
        // Fetch all states that belong to the given country
        $states = State::where('country_id', $countryId)->get();
        return response()->json($states);
    }

    public function getCities($stateId)
    {
        // Fetch all cities that belong to the given state
        $cities = City::where('state_id', $stateId)->get();
        return response()->json($cities);
    }

}
