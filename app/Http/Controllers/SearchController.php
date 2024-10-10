<?php

namespace App\Http\Controllers;

use App\Models\Property;
use Illuminate\Http\Request;

class SearchController extends Controller
{
    public function search(Request $request)
    {
        // Start building the query
        $query = Property::query();

        // Search by Location or Project Name
        if ($request->filled('search_term')) {
            $searchTerm = $request->search_term;
            $query->where('title', 'like', "%{$searchTerm}%")
                  ->orWhereHas('locations', function ($q) use ($searchTerm) {
                      $q->where('city_id', 'like', "%{$searchTerm}%")
                        ->orWhere('state_id', 'like', "%{$searchTerm}%")
                        ->orWhere('country_id', 'like', "%{$searchTerm}%");
                  });
        }

        // Filter by BHK Type
        if ($request->filled('bhk_type')) {
            $query->where('bhk_type', $request->bhk_type);
        }

        // Filter by Property Type
        if ($request->filled('property_type')) {
            $query->whereIn('property_type', $request->property_type);
        }

        // Filter by Budget Range
        if ($request->filled('min_budget') && $request->filled('max_budget')) {
            $query->whereBetween('price_range_start', [$request->min_budget, $request->max_budget]);
        }

        // Filter by Possession Status
        if ($request->filled('possession_status')) {
            $query->whereIn('possession_status', $request->possession_status);
        }

        // Filter by Amenities
        if ($request->filled('amenities')) {
            $query->whereHas('amenities', function ($q) use ($request) {
                $q->whereIn('name', $request->amenities);
            });
        }

        // Execute the query and get the results
        $properties = $query->get();
        $recentProperties = Property::where('recent_property', true)->get();
        // Return the filtered properties to the view
        return view('frontend.home.search', compact('properties','recentProperties'));
    }
}
