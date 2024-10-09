<?php

namespace App\Http\Controllers;

use App\Models\Project;
use App\Models\Property;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        // Eager load related data using the pivot relationship
        $properties = Property::with(['locations.city', 'locations.state', 'locations.country', 'images'])->get();
   // Fetch properties based on boolean flags
   $topSellingProjects = Property::where('top_projects', true)->get();
   $newlyLaunchedProjects = Property::where('newly_added_property', true)->get();
   $recentProperties = Property::where('recent_property', true)->get();

        return view('index', compact('properties','topSellingProjects', 'newlyLaunchedProjects', 'recentProperties'));
    }

    public function search()
    {
        return view('frontend.home.search');
    }

    public function property()
    {
        return view('frontend.home.property');
    }
    public function homeloan()
    {
        return view('frontend.home.homeloan');
    }
}
