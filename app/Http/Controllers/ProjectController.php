<?php

namespace App\Http\Controllers;

use App\Models\OutdoorFeature;
use App\Models\Project;
use App\Models\ProjectImage;
use App\Models\PropertyDetail;
use App\Models\PropertyUnit;
use DB;
use Illuminate\Http\Request;

class ProjectController extends Controller
{
    public function index()
    {
        return view('admin.project.create');
    }

    public function show($id)
    {
        // Fetch the project along with its related details
        $project = Project::with(['propertyDetail', 'outdoorFeatures', 'propertyUnits'])
                          ->findOrFail($id);

        // Get outdoor features and property units related to the project
        $outdoorFeatures = $project->outdoorFeatures; // Fetch outdoor features from the project
        $propertyUnits = $project->propertyUnits; // Fetch property units from the project

        return view('frontend.newproject.projectfile', compact('project', 'outdoorFeatures', 'propertyUnits'));
    }


    public function store(Request $request)
    {
        // Validate the incoming request data
        $request->validate([
            'cover_image' => 'nullable|image|max:2048',
            'location' => 'required|string|max:255',
            'address' => 'required|string|max:255',
            'title' => 'required|string|max:255',
            'banner_image' => 'nullable|image|max:2048',
            'video' => 'nullable|url',
            'floor_plan_image' => 'nullable|image|max:2048',
            'description' => 'required|string',
            'price_range_start' => 'required|numeric',
            'price_range_end' => 'required|numeric',
            'google_link' => 'nullable|url',
            'property_title.*' => 'required|string|max:255',
            'property_value.*' => 'required|numeric',
            'property_unit.title.*' => 'required|string|max:255', // Validation for property unit titles
            'property_unit.description.*' => 'required|string',    // Validation for property unit descriptions
            'feature_title.*' => 'required|string|max:255',        // Validation for outdoor feature titles
            'feature_description.*' => 'required|string',          // Validation for outdoor feature descriptions
        ]);

        // Store the project details
        $project = new Project();

        try {
            // Handle cover image
            if ($request->hasFile('cover_image')) {
                $coverImage = $request->file('cover_image');
                $coverImageName = time() . '_' . $coverImage->getClientOriginalName();
                $coverImage->move(public_path('uploads/projects'), $coverImageName);
                $project->cover_image = 'uploads/projects/' . $coverImageName;
            }

            // Handle banner image
            if ($request->hasFile('banner_image')) {
                $bannerImage = $request->file('banner_image');
                $bannerImageName = time() . '_' . $bannerImage->getClientOriginalName();
                $bannerImage->move(public_path('uploads/projects'), $bannerImageName);
                $project->banner_image = 'uploads/projects/' . $bannerImageName;
            }

            // Handle floor plan image
            if ($request->hasFile('floor_plan_image')) {
                $floorPlanImage = $request->file('floor_plan_image');
                $floorPlanImageName = time() . '_' . $floorPlanImage->getClientOriginalName();
                $floorPlanImage->move(public_path('uploads/projects'), $floorPlanImageName);
                $project->floor_plan_image = 'uploads/projects/' . $floorPlanImageName;
            }

            // Save other project details
            $project->location = $request->location;
            $project->address = $request->address;
            $project->title = $request->title;
            $project->description = $request->description;
            $project->price_range_start = $request->price_range_start;
            $project->price_range_end = $request->price_range_end;
            $project->google_link = $request->google_link;
            $project->added_by = auth()->id(); // Assuming you're using authentication
            $project->save();

            // Store the property details
            foreach ($request->property_title as $key => $title) {
                $propertyDetail = new PropertyDetail();
                $propertyDetail->project_id = $project->id;
                $propertyDetail->title = $title;
                $propertyDetail->value = $request->property_value[$key];
                $propertyDetail->added_by = auth()->id();
                $propertyDetail->save();
            }

            // Store the property units details
            if (isset($request->property_unit['title'])) {
                foreach ($request->property_unit['title'] as $index => $unitTitle) {
                    $propertyUnit = new PropertyUnit();
                    $propertyUnit->project_id = $project->id;
                    $propertyUnit->title = $unitTitle;
                    $propertyUnit->description = $request->property_unit['description'][$index]; // Assuming it's plain text
                    $propertyUnit->added_by = auth()->id();
                    $propertyUnit->save();
                }
            }

            // Store the outdoor features
            if (isset($request->feature_title)) {
                foreach ($request->feature_title as $index => $featureTitle) {
                    $outdoorFeature = new OutdoorFeature();
                    $outdoorFeature->project_id = $project->id;
                    $outdoorFeature->title = $featureTitle;
                    $outdoorFeature->description = $request->feature_description[$index]; // Assuming it's plain text
                    $outdoorFeature->added_by = auth()->id();
                    $outdoorFeature->save();
                }
            }

            return redirect()->route('projects.index')->with('success', 'Project, Property Details, Property Units, and Outdoor Features created successfully!');
        } catch (\Exception $e) {
            return redirect()->back()->withErrors(['error' => 'An error occurred while saving the project: ' . $e->getMessage()]);
        }
    }

    // public function store(Request $request)
    // {
    //     // Validate the incoming request data
    //     $request->validate([
    //         'cover_image' => 'nullable|image|max:2048',
    //         'location' => 'required|string|max:255',
    //         'address' => 'required|string|max:255',
    //         'title' => 'required|string|max:255',
    //         'banner_image' => 'nullable|image|max:2048',
    //         'video' => 'nullable|url',
    //         'floor_plan_image' => 'nullable|image|max:2048',
    //         'description' => 'required|string',
    //         'price_range_start' => 'required|numeric',
    //         'price_range_end' => 'required|numeric',
    //         'google_link' => 'nullable|url',
    //         'property_title.*' => 'required|string|max:255',
    //         'property_value.*' => 'required|numeric',
    //         'property_unit.title.*' => 'required|string|max:255',  // Validation for property unit titles
    //         'property_unit.description.*' => 'required|string',     // Validation for property unit descriptions
    //     ]);

    //     // Store the project details
    //     $project = new Project();

    //     try {
    //         // Handle cover image
    //         if ($request->hasFile('cover_image')) {
    //             $coverImage = $request->file('cover_image');
    //             $coverImageName = time() . '_' . $coverImage->getClientOriginalName();
    //             $coverImage->move(public_path('uploads/projects'), $coverImageName);
    //             $project->cover_image = 'uploads/projects/' . $coverImageName;
    //         }

    //         // Handle banner image
    //         if ($request->hasFile('banner_image')) {
    //             $bannerImage = $request->file('banner_image');
    //             $bannerImageName = time() . '_' . $bannerImage->getClientOriginalName();
    //             $bannerImage->move(public_path('uploads/projects'), $bannerImageName);
    //             $project->banner_image = 'uploads/projects/' . $bannerImageName;
    //         }

    //         // Handle floor plan image
    //         if ($request->hasFile('floor_plan_image')) {
    //             $floorPlanImage = $request->file('floor_plan_image');
    //             $floorPlanImageName = time() . '_' . $floorPlanImage->getClientOriginalName();
    //             $floorPlanImage->move(public_path('uploads/projects'), $floorPlanImageName);
    //             $project->floor_plan_image = 'uploads/projects/' . $floorPlanImageName;
    //         }

    //         // Save other project details
    //         $project->location = $request->location;
    //         $project->address = $request->address;
    //         $project->title = $request->title;
    //         $project->description = $request->description;
    //         $project->price_range_start = $request->price_range_start;
    //         $project->price_range_end = $request->price_range_end;
    //         $project->google_link = $request->google_link;
    //         $project->added_by = auth()->id(); // assuming you're using authentication
    //         $project->save();

    //         // Store the property details
    //         foreach ($request->property_title as $key => $title) {
    //             $propertyDetail = new PropertyDetail();
    //             $propertyDetail->project_id = $project->id;
    //             $propertyDetail->title = $title;
    //             $propertyDetail->value = $request->property_value[$key];
    //             $propertyDetail->added_by = auth()->id();
    //             $propertyDetail->save();
    //         }

    //         // Store the property units details
    //         if (isset($request->property_unit['title'])) {
    //             foreach ($request->property_unit['title'] as $index => $unitTitle) {
    //                 $propertyUnit = new PropertyUnit();
    //                 $propertyUnit->project_id = $project->id;
    //                 $propertyUnit->title = $unitTitle;
    //                 $propertyUnit->description = json_encode($request->property_unit['description'][$index]); // Assuming description is a JSON field
    //                 $propertyUnit->added_by = auth()->id();
    //                 $propertyUnit->save();
    //             }
    //         }

    //         return redirect()->route('projects.index')->with('success', 'Project, Property Details and Property Units created successfully!');

    //     } catch (\Exception $e) {
    //         return redirect()->back()->withErrors(['error' => 'An error occurred while saving the project: ' . $e->getMessage()]);
    //     }
    // }

    // public function store(Request $request)
    // {
    //     // Validate the incoming request data
    //     $request->validate([
    //         'cover_image' => 'nullable|image|max:2048',
    //         'location' => 'required|string|max:255',
    //         'address' => 'required|string|max:255',
    //         'title' => 'required|string|max:255',
    //         'banner_image' => 'nullable|image|max:2048',
    //         'video' => 'nullable|url',
    //         'floor_plan_image' => 'nullable|image|max:2048',
    //         'description' => 'required|string',
    //         'price_range_start' => 'required|numeric',
    //         'price_range_end' => 'required|numeric',
    //         'google_link' => 'nullable|url',
    //         'property_title.*' => 'required|string|max:255',
    //         'property_value.*' => 'required|numeric',
    //     ]);

    //     // Store the project details
    //     $project = new Project();

    //     try {
    //         if ($request->hasFile('cover_image')) {
    //             $coverImage = $request->file('cover_image');
    //             $coverImageName = time() . '_' . $coverImage->getClientOriginalName();
    //             $coverImage->move(public_path('uploads/projects'), $coverImageName);
    //             $project->cover_image = 'uploads/projects/' . $coverImageName; // Save the path in the database
    //         }

    //         if ($request->hasFile('banner_image')) {
    //             $bannerImage = $request->file('banner_image');
    //             $bannerImageName = time() . '_' . $bannerImage->getClientOriginalName();
    //             $bannerImage->move(public_path('uploads/projects'), $bannerImageName);
    //             $project->banner_image = 'uploads/projects/' . $bannerImageName; // Save the path in the database
    //         }

    //         if ($request->hasFile('floor_plan_image')) {
    //             $floorPlanImage = $request->file('floor_plan_image');
    //             $floorPlanImageName = time() . '_' . $floorPlanImage->getClientOriginalName();
    //             $floorPlanImage->move(public_path('uploads/projects'), $floorPlanImageName);
    //             $project->floor_plan_image = 'uploads/projects/' . $floorPlanImageName; // Save the path in the database
    //         }

    //         // Save other project details
    //         $project->location = $request->location;
    //         $project->address = $request->address;
    //         $project->title = $request->title;
    //         $project->description = $request->description;
    //         $project->price_range_start = $request->price_range_start;
    //         $project->price_range_end = $request->price_range_end;
    //         $project->google_link = $request->google_link;
    //         $project->added_by = auth()->id(); // assuming you're using authentication
    //         $project->save();

    //         // Store the property details
    //         foreach ($request->property_title as $key => $title) {
    //             $propertyDetail = new PropertyDetail();
    //             $propertyDetail->project_id = $project->id;
    //             $propertyDetail->title = $title;
    //             $propertyDetail->value = $request->property_value[$key];
    //             $propertyDetail->added_by = auth()->id(); // assuming you're using authentication
    //             $propertyDetail->save();
    //         }

    //         return redirect()->route('projects.index')->with('success', 'Project created successfully!');

    //     } catch (\Exception $e) {
    //         // Handle the exception
    //         return redirect()->back()->withErrors(['error' => 'An error occurred while saving the project: ' . $e->getMessage()]);
    //     }
    // }
}
