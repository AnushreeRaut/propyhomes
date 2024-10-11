<?php

namespace App\Http\Controllers;

use App\Models\Property;
use App\Models\PropertyAmenity;
use Illuminate\Http\Request;

class SearchController extends Controller
{
    public function search(Request $request)
    {
// Get the total number of properties in the table before filters
$totalProperties = Property::count();
        // Start building the query
        $query = Property::query();

        // Search by Location, Project Name, Landmark, or Area
        if ($request->filled('search_term')) {
            $searchTerm = $request->search_term;
            $query
                ->where('title', 'like', "%{$searchTerm}%")
                ->orWhereHas('locations', function ($q) use ($searchTerm) {
                    $q->whereHas('city', function ($q) use ($searchTerm) {
                        $q->where('name', 'like', "%{$searchTerm}%");
                    })
                        ->orWhereHas('state', function ($q) use ($searchTerm) {
                            $q->where('name', 'like', "%{$searchTerm}%");
                        })
                        ->orWhereHas('country', function ($q) use ($searchTerm) {
                            $q->where('name', 'like', "%{$searchTerm}%");
                        })
                        // Use 'area_name' for area search as defined in the migration
                        ->orWhereHas('area', function ($q) use ($searchTerm) {
                            $q->where('area_name', 'like', "%{$searchTerm}%");
                        });
                })
                ->orWhereHas('landmarks', function ($q) use ($searchTerm) {
                    $q->where('name', 'like', "%{$searchTerm}%");
                });
        }

        // Filter by BHK Type (independent)
        if ($request->filled('bhk_type')) {
            $query->where('bhk_type', $request->bhk_type);
        }

        // Filter by Property Type (independent)
        if ($request->filled('property_type')) {
            $query->whereIn('property_type', $request->property_type);
        }

        // Filter by Possession Status (independent)
        if ($request->filled('possession_status')) {
            $query->whereIn('possession_status', $request->possession_status);
        }

        // Filter by Amenities
        if ($request->filled('amenities')) {
            $amenities = $request->amenities; // Array of selected amenities' IDs
            $query->whereHas('amenities', function ($q) use ($amenities) {
                $q->whereIn('property_amenity_id', $amenities);
            });
        }


    // Filter by Budget Range (independent)
    if ($request->filled('price_range_start') && $request->filled('price_range_end')) {
        $minPrice = $request->price_range_start;
        $maxPrice = $request->price_range_end;

        // Check if the budget range is valid
        if ($minPrice > $maxPrice) {
            session()->flash('error', 'Invalid budget range. Minimum price should not exceed the maximum price.');
            $properties = collect([]); // Return empty collection if invalid
        } else {
            // Apply budget filter
            $query->whereBetween('price_range_start', [$minPrice, $maxPrice]);
        }
    }

        // Execute the query and get the results (with pagination)
        $properties = $query->paginate(10);
        $amenities = PropertyAmenity::all(); // Fetch all amenities
        $footerProperties = Property::where('recent_property', true)
        ->orderBy('created_at', 'desc') // Order by creation date
        ->take(2) // Limit to 2 properties
        ->with('images.propertyImage.imageCategory') // Eager load the images with their categories
        ->get();
        // Return the filtered properties to the view
        return view('frontend.home.search', compact('properties', 'amenities','totalProperties','footerProperties'));
    }

    // public function search(Request $request)
    // {
    //     // Start building the query
    //     $query = Property::query();

    //     // Log the BHK Type for debugging
    //     if ($request->filled('bhk_type')) {
    //         \Log::info('BHK Type Filter Applied: ' . $request->bhk_type);
    //     }

    //     // Search by Location or Project Name (independent)
    //     if ($request->filled('search_term')) {
    //         $searchTerm = $request->search_term;
    //         $query->where('title', 'like', "%{$searchTerm}%")->orWhereHas('locations', function ($q) use ($searchTerm) {
    //             $q->whereHas('city', function ($q) use ($searchTerm) {
    //                 $q->where('name', 'like', "%{$searchTerm}%");
    //             })
    //                 ->orWhereHas('state', function ($q) use ($searchTerm) {
    //                     $q->where('name', 'like', "%{$searchTerm}%");
    //                 })
    //                 ->orWhereHas('country', function ($q) use ($searchTerm) {
    //                     $q->where('name', 'like', "%{$searchTerm}%");
    //                 });
    //         });
    //     }

    //     // Filter by BHK Type (independent)
    //     if ($request->filled('bhk_type')) {
    //         $query->where('bhk_type', $request->bhk_type);
    //     }

    //     // Filter by Property Type (independent)
    //     if ($request->filled('property_type')) {
    //         $query->whereIn('property_type', $request->property_type);
    //     }

    //     // Filter by Possession Status (independent)
    //     if ($request->filled('possession_status')) {
    //         $query->whereIn('possession_status', $request->possession_status);
    //     }

    //     // Filter by Amenities
    //     if ($request->filled('amenities')) {
    //         $amenities = $request->amenities; // Array of selected amenities' IDs
    //         $query->whereHas('amenities', function ($q) use ($amenities) {
    //             $q->whereIn('property_amenity_id', $amenities);
    //         });
    //     }

    //     // Execute the query and get the results (with pagination)
    //     $properties = $query->paginate(10);
    //     $amenities = PropertyAmenity::all(); // Fetch all amenities
    //     // Return the filtered properties to the view
    //     return view('frontend.home.search', compact('properties', 'amenities'));
    // }
}
