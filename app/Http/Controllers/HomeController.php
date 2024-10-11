<?php

namespace App\Http\Controllers;

use App\Models\Area;
use App\Models\Project;
use App\Models\Property;
use DB;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    //     public function index()
    //     {
    //         // Eager load related data using the pivot relationship
    //         $properties = Property::with(['locations.city', 'locations.state', 'locations.country', 'images'])->get();
    //    // Fetch properties based on boolean flags
    //    $topSellingProjects = Property::where('top_projects', true)->get();
    //    $newlyLaunchedProjects = Property::where('newly_added_property', true)->get();
    //    $recentProperties = Property::where('recent_property', true)->get();

    //         return view('index', compact('properties','topSellingProjects', 'newlyLaunchedProjects', 'recentProperties'));
    //     }
    public function index()
    {
        // Retrieve areas with the count of related properties
        $areasWithPropertyCount = Area::whereHas('propertyLocations.properties')
            ->withCount([
                'propertyLocations as property_count' => function ($query) {
                    $query->has('properties');
                },
            ])
            ->get();

        // Existing code
        $topSellingProjects = Property::where('top_projects', true)->get();
        $newlyLaunchedProjects = Property::where('newly_added_property', true)->get();
        $recentProperties = Property::where('recent_property', true)->get();
        // Fetch the latest 2 recently added properties
        $footerProperties = Property::where('recent_property', true)
            ->orderBy('created_at', 'desc') // Order by creation date
            ->take(2) // Limit to 2 properties
            ->with('images.propertyImage.imageCategory') // Eager load the images with their categories
            ->get();
        return view('index', compact('areasWithPropertyCount', 'topSellingProjects', 'newlyLaunchedProjects', 'recentProperties', 'footerProperties'));
    }

    public function search()
    {
        return view('frontend.home.search');
    }

    public function property()
    {
        // Fetch the latest 2 recently added properties
        $footerProperties = Property::where('recent_property', true)
            ->orderBy('created_at', 'desc') // Order by creation date
            ->take(2) // Limit to 2 properties
            ->with('images.propertyImage.imageCategory') // Eager load the images with their categories
            ->get();
        return view('frontend.home.property', compact('footerProperties'));
    }
    public function homeloan()
    {
        // Fetch the latest 2 recently added properties
        $footerProperties = Property::where('recent_property', true)
            ->orderBy('created_at', 'desc') // Order by creation date
            ->take(2) // Limit to 2 properties
            ->with('images.propertyImage.imageCategory') // Eager load the images with their categories
            ->get();
        return view('frontend.home.homeloan', compact('footerProperties'));
    }
}
