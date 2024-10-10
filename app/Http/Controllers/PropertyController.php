<?php

namespace App\Http\Controllers;

use App\Models\Amenity;
use App\Models\Area;
use App\Models\City;
use App\Models\Country;
use App\Models\ImageCategory;
use App\Models\Landmark;
use App\Models\Property;
use App\Models\PropertyAmenity;
use App\Models\PropertyImage;
use App\Models\PropertyLocation;
use App\Models\PropertyRelatedAmenity;
use App\Models\PropertyRelatedImage;
use App\Models\PropertyRelatedLocation;
use App\Models\PropertyRelatedUtility;
use App\Models\PropertyUtility;
use App\Models\SpecialHighlight;
use App\Models\State;
use DB;
use Illuminate\Http\Request;

class PropertyController extends Controller
{
    public function index()
    {
        // Fetch properties with related data, eager loading to avoid N+1 problem
        $properties = Property::with(['locations.country', 'locations.state', 'locations.city', 'locations.area', 'locations.landmark', 'amenities', 'utilities', 'images'])
            ->orderByDesc('created_at')
            ->get();

        return view('admin.property.index', compact('properties'));
    }
    // public function view($id)
    // {
    //     // Fetch the property with all related details
    //     $property = Property::with(['images.propertyImage.imageCategory', 'locations.country', 'locations.state', 'locations.city', 'locations.area', 'locations.landmark', 'amenities', 'utilities', 'images'])->findOrFail($id);

    //     return view('admin.property.show', compact('property'));
    // }
    public function view($id)
    {
        // Fetch the property with all related details including landmarks via the pivot table
        $property = Property::with([
            'images.propertyImage.imageCategory',
            'locations.country',
            'locations.state',
            'locations.city',
            'locations.area',
            'landmarks', // Eager load the landmarks via the pivot
            'amenities',
            'utilities',
            'images',
        ])->findOrFail($id);

        return view('admin.property.show', compact('property'));
    }

    public function create()
    {
        // Fetch existing amenities to display as checkboxes in the form
        $existingAmenities = PropertyAmenity::all();
        // Fetch existing special highlights
        $existingHighlights = SpecialHighlight::all();

        // Fetch existing cities, states, countries, areas, and landmarks
        $cities = City::all();
        $states = State::all();
        $countries = Country::all();
        $areas = Area::all();
        $landmarks = Landmark::all();

        // Fetch utilities (if required to show some defaults)
        $existingUtilities = PropertyUtility::all();

        // Fetch image categories for the image section
        $imageCategories = ImageCategory::all();

        // Pass data to the view to populate the form fields
        return view(
            'admin.property.create',
            compact(
                'existingHighlights',
                'existingAmenities',
                'cities',
                'states',
                'countries',
                'areas',
                'landmarks',
                'existingUtilities',
                'imageCategories', // Pass image categories to view
            ),
        );
    }

    // public function store(Request $request)
    // {
    //     try {
    //         // Step 1: Store Property Details
    //         $propertyData = $request->input('properties');
    //         $newProperty = Property::create([
    //             'title' => $propertyData['title'],
    //             'property_type' => $propertyData['property_type'],
    //             'recent_property' => isset($propertyData['recent_property']),
    //             'newly_added_property' => isset($propertyData['newly_added_property']),
    //             'top_projects' => isset($propertyData['top_projects']),
    //             'bhk_type' => $propertyData['bhk_type'],
    //             'price_range_start' => $propertyData['price_range_start'],
    //             'price_range_end' => $propertyData['price_range_end'],
    //             'possession_status' => $propertyData['possession_status'],
    //             'size' => $propertyData['size'],
    //             'video' => $propertyData['video'] ?? null,
    //             'added_by' => auth()->user()->id,
    //         ]);

    //          // Step 2: Store Property Location and Relate with Property
    //     $locationData = $request->input('locations');
    //     $newLocation = PropertyLocation::create([
    //         'city_id' => $locationData['city_id'],
    //         'state_id' => $locationData['state_id'],
    //         'country_id' => $locationData['country_id'],
    //         'area_id' => $locationData['area_id'],
    //         'landmark_id' => $locationData['landmark_id'],
    //         'added_by' => auth()->user()->id,
    //     ]);

    //     // Create a relation between property and location
    //     PropertyRelatedLocation::create([
    //         'property_id' => $newProperty->id,
    //         'property_location_id' => $newLocation->id,
    //     ]);

    //         // Step 3: Store Existing Amenities
    //         // Step 3: Store Existing Amenities
    //         if ($request->has('amenities.existing')) {
    //             foreach ($request->input('amenities.existing') as $existingAmenityId) {
    //                 PropertyRelatedAmenity::create([
    //                     'property_id' => $newProperty->id,
    //                     'property_amenity_id' => $existingAmenityId,
    //                     'is_true' => true,
    //                 ]);
    //             }
    //         }

    //         // Step 4: Store New Amenities
    //         if ($request->has('amenities')) {
    //             foreach ($request->input('amenities') as $index => $amenitySet) {
    //                 if (isset($amenitySet['new']) && !empty($amenitySet['new']['name'])) {
    //                     $newAmenityData = [
    //                         'name' => $amenitySet['new']['name'],
    //                         'added_by' => auth()->user()->id,
    //                     ];

    //                     // Check if 'icon_image' exists and is a valid file
    //                     if ($request->hasFile("amenities.$index.new.icon_image")) {
    //                         $file = $request->file("amenities.$index.new.icon_image");
    //                         if ($file->isValid()) {
    //                             // Store the image and get the relative path
    //                             $newAmenityData['icon_image'] = $this->uploadFile($file, 'amenities'); // File upload method
    //                         }
    //                     }

    //                     // Create the new amenity
    //                     $newAmenity = PropertyAmenity::create($newAmenityData);

    //                     // Relate the newly created amenity with the property
    //                     PropertyRelatedAmenity::create([
    //                         'property_id' => $newProperty->id,
    //                         'property_amenity_id' => $newAmenity->id,
    //                         'is_true' => true,
    //                     ]);
    //                 }
    //             }
    //         }

    //         // Step 5: Store Utilities
    //         if ($request->has('utilities')) {
    //             foreach ($request->input('utilities') as $utilitySet) {
    //                 if (!empty($utilitySet['name'])) {
    //                     $newUtility = PropertyUtility::create([
    //                         'name' => $utilitySet['name'],
    //                         'added_by' => auth()->user()->id,
    //                     ]);

    //                     // Relate the utility with the property
    //                     PropertyRelatedUtility::create([
    //                         'property_id' => $newProperty->id,
    //                         'property_utility_id' => $newUtility->id,
    //                         'value' => $utilitySet['value'] ?? 0,
    //                         'parking_type' => $utilitySet['parking_type'] ?? null,
    //                     ]);
    //                 }
    //             }
    //         }

    //         // Step 6: Store Property Images
    //         if ($request->has('images')) {
    //             foreach ($request->input('images') as $index => $imageData) {
    //                 // Check if file is provided
    //                 if ($request->hasFile("images.$index.file")) {
    //                     $file = $request->file("images.$index.file");

    //                     if ($file->isValid()) {
    //                         // Store the image file and get the path
    //                         $fileName = $this->uploadFile($file, 'images'); // Updated folder for images

    //                         // Ensure `image_category_id` is present
    //                         if (!empty($imageData['image_category_id'])) {
    //                             // Create property image
    //                             $newImage = PropertyImage::create([
    //                                 'image' => $fileName,
    //                                 'image_category_id' => $imageData['image_category_id'], // Access the category ID
    //                                 'added_by' => auth()->user()->id,
    //                             ]);

    //                             // Create relation to property
    //                             PropertyRelatedImage::create([
    //                                 'property_id' => $newProperty->id,
    //                                 'image_id' => $newImage->id,
    //                                 'is_active' => true,
    //                             ]);
    //                         } else {
    //                             throw new \Exception('Image category is missing.');
    //                         }
    //                     }
    //                 }
    //             }
    //         }

    //         return redirect()->back()->with('success', 'Property and related details have been saved successfully!');
    //     } catch (\Exception $e) {
    //         return redirect()
    //             ->back()
    //             ->with('error', 'An error occurred while saving the property: ' . $e->getMessage());
    //     }
    // }
    public function store(Request $request)
    {
        try {
            // Step 1: Store Property Details
            $propertyData = $request->input('properties');
            $newProperty = Property::create([
                'title' => $propertyData['title'],
                'property_type' => $propertyData['property_type'],
                'recent_property' => isset($propertyData['recent_property']),
                'newly_added_property' => isset($propertyData['newly_added_property']),
                'top_projects' => isset($propertyData['top_projects']),
                'bhk_type' => $propertyData['bhk_type'],
                'price_range_start' => $propertyData['price_range_start'],
                'price_range_end' => $propertyData['price_range_end'],
                'size' => $propertyData['size'],
                'video' => $propertyData['video'] ?? null,
                'flat_area' => $propertyData['flat_area'], // New field
                'project_completion_date' => $propertyData['project_completion_date'], // New field
                'rera' => isset($propertyData['rera']), // New field
                'no_of_flats' => $propertyData['no_of_flats'], // New field
                'no_of_floors' => $propertyData['no_of_floors'], // New field
                'added_by' => auth()->user()->id,
            ]);

            // Step 2: Store Property Location and Relate with Property
            $locationData = $request->input('locations');
            $newLocation = PropertyLocation::create([
                'city_id' => $locationData['city_id'],
                'state_id' => $locationData['state_id'],
                'country_id' => $locationData['country_id'],
                'area_id' => $locationData['area_id'],
                'added_by' => auth()->user()->id,
            ]);

            // Create a relation between property and location
            PropertyRelatedLocation::create([
                'property_id' => $newProperty->id,
                'property_location_id' => $newLocation->id,
            ]);

            // Step 3: Store Multiple Landmarks (Using the pivot table 'property_landmark')
            if ($request->has('locations.landmark_id')) {
                $landmarkIds = $request->input('locations.landmark_id');
                foreach ($landmarkIds as $landmarkId) {
                    DB::table('property_landmark')->insert([
                        'property_id' => $newProperty->id,
                        'landmark_id' => $landmarkId,
                        'created_at' => now(),
                        'updated_at' => now(),
                    ]);
                }
            }

            // Step 4: Store Existing Amenities (Similar to your existing logic)
            if ($request->has('amenities.existing')) {
                foreach ($request->input('amenities.existing') as $existingAmenityId) {
                    PropertyRelatedAmenity::create([
                        'property_id' => $newProperty->id,
                        'property_amenity_id' => $existingAmenityId,
                        'is_true' => true,
                    ]);
                }
            }

            // Step 5: Store New Amenities (Similar to your existing logic)
            if ($request->has('amenities')) {
                foreach ($request->input('amenities') as $index => $amenitySet) {
                    if (isset($amenitySet['new']) && !empty($amenitySet['new']['name'])) {
                        $newAmenityData = [
                            'name' => $amenitySet['new']['name'],
                            'added_by' => auth()->user()->id,
                        ];

                        // Check if 'icon_image' exists and is a valid file
                        if ($request->hasFile("amenities.$index.new.icon_image")) {
                            $file = $request->file("amenities.$index.new.icon_image");
                            if ($file->isValid()) {
                                // Store the image and get the relative path
                                $newAmenityData['icon_image'] = $this->uploadFile($file, 'amenities');
                            }
                        }

                        // Create the new amenity
                        $newAmenity = PropertyAmenity::create($newAmenityData);

                        // Relate the newly created amenity with the property
                        PropertyRelatedAmenity::create([
                            'property_id' => $newProperty->id,
                            'property_amenity_id' => $newAmenity->id,
                            'is_true' => true,
                        ]);
                    }
                }
            }

            // Step 6: Store Utilities (Similar to your existing logic)
            if ($request->has('utilities')) {
                foreach ($request->input('utilities') as $utilitySet) {
                    if (!empty($utilitySet['name'])) {
                        $newUtility = PropertyUtility::create([
                            'name' => $utilitySet['name'],
                            'added_by' => auth()->user()->id,
                        ]);

                        // Relate the utility with the property
                        PropertyRelatedUtility::create([
                            'property_id' => $newProperty->id,
                            'property_utility_id' => $newUtility->id,
                            'value' => $utilitySet['value'] ?? 0,
                            'parking_type' => $utilitySet['parking_type'] ?? null,
                        ]);
                    }
                }
            }

            // Step 7: Store Property Images (Similar to your existing logic)
            if ($request->has('images')) {
                foreach ($request->input('images') as $index => $imageData) {
                    // Check if file is provided
                    if ($request->hasFile("images.$index.file")) {
                        $file = $request->file("images.$index.file");

                        if ($file->isValid()) {
                            // Store the image file and get the path
                            $fileName = $this->uploadFile($file, 'images');

                            // Ensure `image_category_id` is present
                            if (!empty($imageData['image_category_id'])) {
                                // Create property image
                                $newImage = PropertyImage::create([
                                    'image' => $fileName,
                                    'image_category_id' => $imageData['image_category_id'],
                                    'added_by' => auth()->user()->id,
                                ]);

                                // Create relation to property
                                PropertyRelatedImage::create([
                                    'property_id' => $newProperty->id,
                                    'image_id' => $newImage->id,
                                    'is_active' => true,
                                ]);
                            } else {
                                throw new \Exception('Image category is missing.');
                            }
                        }
                    }
                }
            }
            // Step 8: Store New Special Highlights
            if ($request->has('highlights.existing')) {
                foreach ($request->input('highlights.existing') as $existingHighlightId) {
                    DB::table('property_special_highlight')->insert([
                        'property_id' => $newProperty->id,
                        'special_highlight_id' => $existingHighlightId,
                        'is_true' => true,
                        'created_at' => now(),
                        'updated_at' => now(),
                    ]);
                }
            }

            if ($request->has('highlights')) {
                foreach ($request->input('highlights') as $index => $highlightSet) {
                    if (isset($highlightSet['new']) && !empty($highlightSet['new']['name'])) {
                        $newHighlightData = [
                            'name' => $highlightSet['new']['name'],
                            'added_by' => auth()->user()->id,
                        ];

                        $newHighlight = SpecialHighlight::create($newHighlightData);

                        // Relate the newly created special highlight with the property
                        DB::table('property_special_highlight')->insert([
                            'property_id' => $newProperty->id,
                            'special_highlight_id' => $newHighlight->id,
                            'is_true' => true,
                            'created_at' => now(),
                            'updated_at' => now(),
                        ]);
                    }
                }
            }
            return redirect()->route('properties.index')->with('success', 'Property and related details have been saved successfully!');
        } catch (\Exception $e) {
            return redirect()
                ->back()
                ->with('error', 'An error occurred while saving the property: ' . $e->getMessage());
        }
    }

    /**
     * Handle file upload for amenities and images.
     *
     * @param  \Illuminate\Http\UploadedFile|null $file
     * @param  string $folder
     * @return string|null File path to be stored in the database
     */
    private function uploadFile($file, $folder = 'uploads')
    {
        if ($file && $file instanceof \Illuminate\Http\UploadedFile) {
            // Define the target directory within the public path
            $destinationPath = public_path($folder);

            // Ensure the directory exists, if not create it
            if (!file_exists($destinationPath)) {
                mkdir($destinationPath, 0755, true);
            }

            // Generate a unique name for the file
            $fileName = time() . '_' . $file->getClientOriginalName();

            // Move the file to the target directory
            $file->move($destinationPath, $fileName);

            // Return the path relative to the public directory to store in the database
            return "$folder/" . $fileName;
        }
        return null;
    }

    // public function store(Request $request)
    // {
    //     try {
    //         // Step 1: Store Property Details
    //         $propertyData = $request->input('properties');
    //         $newProperty = Property::create([
    //             'title' => $propertyData['title'],
    //             'property_type' => $propertyData['property_type'],
    //             'recent_property' => isset($propertyData['recent_property']),
    //             'newly_added_property' => isset($propertyData['newly_added_property']),
    //             'top_projects' => isset($propertyData['top_projects']),
    //             'bhk_type' => $propertyData['bhk_type'],
    //             'price_range_start' => $propertyData['price_range_start'],
    //             'price_range_end' => $propertyData['price_range_end'],
    //             'possession_status' => $propertyData['possession_status'],
    //             'size' => $propertyData['size'],
    //             'video' => $propertyData['video'] ?? null,
    //             'added_by' => auth()->user()->id,
    //         ]);

    //         // Step 2: Store Property Location
    //         $locationData = $request->input('locations');
    //         PropertyLocation::create([
    //             'property_id' => $newProperty->id,
    //             'city_id' => $locationData['city_id'],
    //             'state_id' => $locationData['state_id'],
    //             'country_id' => $locationData['country_id'],
    //             'area_id' => $locationData['area_id'],
    //             'landmark_id' => $locationData['landmark_id'],
    //             'added_by' => auth()->user()->id,
    //         ]);

    //         // Step 4: Store New Amenities
    //         if ($request->has('amenities')) {
    //             foreach ($request->input('amenities') as $index => $amenitySet) {
    //                 if (isset($amenitySet['new']) && !empty($amenitySet['new']['name'])) {
    //                     $newAmenityData = [
    //                         'name' => $amenitySet['new']['name'],
    //                         'added_by' => auth()->user()->id,
    //                     ];

    //                     // Check if 'icon_image' exists and is a valid file
    //                     if ($request->hasFile("amenities.$index.new.icon_image")) {
    //                         $file = $request->file("amenities.$index.new.icon_image");
    //                         if ($file->isValid()) {
    //                             // Store the image and get the relative path
    //                             $newAmenityData['icon_image'] = $this->uploadFile($file, 'amenities'); // File upload method
    //                         }
    //                     }

    //                     // Create the new amenity
    //                     $newAmenity = PropertyAmenity::create($newAmenityData);

    //                     // Relate the newly created amenity with the property
    //                     PropertyRelatedAmenity::create([
    //                         'property_id' => $newProperty->id,
    //                         'property_amenity_id' => $newAmenity->id,
    //                         'is_true' => true,
    //                     ]);
    //                 }
    //             }
    //         }

    //         // Step 4: Store Utilities
    //         if ($request->has('utilities')) {
    //             foreach ($request->input('utilities') as $utilitySet) {
    //                 if (!empty($utilitySet['name'])) {
    //                     $newUtility = PropertyUtility::create([
    //                         'name' => $utilitySet['name'],
    //                         'added_by' => auth()->user()->id,
    //                     ]);

    //                     // Relate the utility with the property
    //                     PropertyRelatedUtility::create([
    //                         'property_id' => $newProperty->id,
    //                         'property_utility_id' => $newUtility->id,
    //                         'value' => $utilitySet['value'] ?? 0,
    //                         'parking_type' => $utilitySet['parking_type'],
    //                     ]);
    //                 }
    //             }
    //         }
    //         // Step 5: Store Property Images
    //         if ($request->has('images')) {
    //             foreach ($request->input('images') as $index => $imageData) {
    //                 // Check if file is provided
    //                 if ($request->hasFile("images.$index.file")) {
    //                     $file = $request->file("images.$index.file");

    //                     if ($file->isValid()) {
    //                         // Store the image file and get the path
    //                         $fileName = $this->uploadFile($file, 'images'); // Updated folder for images

    //                         // Ensure `image_category_id` is present
    //                         if (!empty($imageData['image_category_id'])) {
    //                             // Create property image
    //                             $newImage = PropertyImage::create([
    //                                 'image' => $fileName,
    //                                 'image_category_id' => $imageData['image_category_id'], // Access the category ID
    //                                 'added_by' => auth()->user()->id,
    //                             ]);

    //                             // Create relation to property
    //                             PropertyRelatedImage::create([
    //                                 'property_id' => $newProperty->id,
    //                                 'image_id' => $newImage->id,
    //                                 'is_active' => true,
    //                             ]);
    //                         } else {
    //                             throw new \Exception('Image category is missing.');
    //                         }
    //                     }
    //                 }
    //             }
    //         }
    //         return redirect()->back()->with('success', 'Property and related details have been saved successfully!');
    //     } catch (\Exception $e) {
    //         return redirect()
    //             ->back()
    //             ->with('error', 'An error occurred while saving the property: ' . $e->getMessage());
    //     }
    // }

    // /**
    //  * Handle file upload for new amenities.
    //  *
    //  * @param  \Illuminate\Http\UploadedFile|null $file
    //  * @return string|null File path to be stored in the database
    //  */
    // private function uploadFile($file, $folder = 'uploads')
    // {
    //     if ($file && $file instanceof \Illuminate\Http\UploadedFile) {
    //         // Define the target directory within the public path
    //         $destinationPath = public_path($folder);

    //         // Ensure the directory exists, if not create it
    //         if (!file_exists($destinationPath)) {
    //             mkdir($destinationPath, 0755, true);
    //         }

    //         // Generate a unique name for the file
    //         $fileName = time() . '_' . $file->getClientOriginalName();

    //         // Move the file to the target directory
    //         $file->move($destinationPath, $fileName);

    //         // Return the path relative to the public directory to store in the database
    //         return "$folder/" . $fileName;
    //     }
    //     return null;
    // }
    // public function show($id)
    // {
    //     $property = Property::with(['images.propertyImage.imageCategory', 'utilities', 'amenities', 'locations.city', 'locations.state', 'locations.country'])->findOrFail($id);
    //     // Get the embed URL for the video
    //     $embedUrl = $this->getEmbedUrl($property->video);
    //     return view('frontend.newproject.property', compact('property', 'embedUrl'));
    // }
    public function show($id)
    {
        // Fetch the property with related details, including landmarks via the pivot table
        $property = Property::with([
            'images.propertyImage.imageCategory',
            'utilities',
            'amenities',
            'locations.city',
            'locations.state',
            'locations.country',
            'landmarks',
            'specialHighlights', // Eager load the landmarks related via the pivot
        ])->findOrFail($id);

        // Get the embed URL for the video
        $embedUrl = $this->getEmbedUrl($property->video);

    // Fetch the latest 2 recently added properties
    $footerProperties = Property::where('recent_property', true)
    ->orderBy('created_at', 'desc') // Order by creation date
    ->take(2) // Limit to 2 properties
    ->with('images.propertyImage.imageCategory') // Eager load the images with their categories
    ->get();
        return view('frontend.newproject.property', compact('property', 'embedUrl','footerProperties'));
    }

    private function getEmbedUrl($videoUrl)
    {
        // Check if the URL contains "youtube.com" or "youtu.be"
        if (strpos($videoUrl, 'youtube.com') !== false || strpos($videoUrl, 'youtu.be') !== false) {
            // Extract the video ID from the URL
            preg_match('/(?:youtube\.com\/(?:[^\/\n\s]+\/\S+\/|(?:v|e(?:mbed)?)\/|\S*?[?&]v=)|youtu\.be\/)([a-zA-Z0-9_-]{11})/', $videoUrl, $matches);
            $videoId = $matches[1] ?? null;

            // If video ID is found, return the embed URL
            if ($videoId) {
                return "https://www.youtube.com/embed/$videoId";
            }
        }
        return null; // Return null if no valid ID is found
    }

    //  public function store(Request $request)
    // {
    //     // Step 1: Store Property Details
    //     $propertyData = $request->input('properties');
    //     $newProperty = Property::create([
    //         'title' => $propertyData['title'],
    //         'property_type' => $propertyData['property_type'],
    //         'recent_property' => isset($propertyData['recent_property']),
    //         'newly_added_property' => isset($propertyData['newly_added_property']),
    //         'top_projects' => isset($propertyData['top_projects']),
    //         'bhk_type' => $propertyData['bhk_type'],
    //         'price_range_start' => $propertyData['price_range_start'],
    //         'price_range_end' => $propertyData['price_range_end'],
    //         'possession_status' => $propertyData['possession_status'],
    //         'size' => $propertyData['size'],
    //         'video' => $propertyData['video'] ?? null,
    //         'added_by' => auth()->user()->id,
    //     ]);

    //     // Step 2: Store Property Location
    //     $locationData = $request->input('locations');
    //     PropertyLocation::create([
    //         'property_id' => $newProperty->id,
    //         'city_id' => $locationData['city_id'],
    //         'state_id' => $locationData['state_id'],
    //         'country_id' => $locationData['country_id'],
    //         'area_id' => $locationData['area_id'],
    //         'landmark_id' => $locationData['landmark_id'],
    //         'added_by' => auth()->user()->id,
    //     ]);

    //     // Step 3: Store Amenities
    //     if ($request->has('amenities')) {
    //         foreach ($request->input('amenities') as $amenitySet) {
    //             // Handle existing amenities (checkbox selection)
    //             if (isset($amenitySet['existing'])) {
    //                 foreach ($amenitySet['existing'] as $existingAmenityId) {
    //                     PropertyRelatedAmenity::create([
    //                         'property_id' => $newProperty->id,
    //                         'property_amenity_id' => $existingAmenityId,
    //                         'is_true' => true,
    //                     ]);
    //                 }
    //             }

    //             // Handle new amenities (newly added by user)
    //             if (isset($amenitySet['new']) && !empty($amenitySet['new']['name'])) {
    //                 // Only proceed if 'name' is present
    //                 $newAmenityData = [
    //                     'name' => $amenitySet['new']['name'],
    //                     'added_by' => auth()->user()->id,
    //                 ];

    //                 // Check if 'icon_image' exists and is a valid file
    //                 if (isset($amenitySet['new']['icon_image']) && $request->hasFile("amenities.0.new.icon_image")) {
    //                     $newAmenityData['icon_image'] = $this->uploadFile($amenitySet['new']['icon_image']); // File upload method
    //                 } else {
    //                     $newAmenityData['icon_image'] = null; // No file was uploaded
    //                 }

    //                 // Create the new amenity
    //                 $newAmenity = PropertyAmenity::create($newAmenityData);

    //                 // Relate the newly created amenity with the property
    //                 PropertyRelatedAmenity::create([
    //                     'property_id' => $newProperty->id,
    //                     'property_amenity_id' => $newAmenity->id,
    //                     'is_true' => true,
    //                 ]);
    //             }
    //         }
    //     }

    //     // Step 4: Store Utilities
    //     if ($request->has('utilities')) {
    //         foreach ($request->input('utilities') as $utilitySet) {
    //             // Only proceed if 'name' is provided
    //             if (!empty($utilitySet['name'])) {
    //                 $newUtility = PropertyUtility::create([
    //                     'name' => $utilitySet['name'],
    //                     'added_by' => auth()->user()->id,
    //                 ]);

    //                 // Relate the utility with the property
    //                 PropertyRelatedUtility::create([
    //                     'property_id' => $newProperty->id,
    //                     'property_utility_id' => $newUtility->id,
    //                     'value' => $utilitySet['value'] ?? 0,
    //                     'parking_type' => $utilitySet['parking_type'],
    //                 ]);
    //             }
    //         }
    //     }

    //     return redirect()->back()->with('success', 'Property and related details have been saved successfully!');
    // }
    //worked
    // public function store(Request $request)
    // {
    //     try {
    //         // Step 1: Store Property Details
    //         $propertyData = $request->input('properties');
    //         $newProperty = Property::create([
    //             'title' => $propertyData['title'],
    //             'property_type' => $propertyData['property_type'],
    //             'recent_property' => isset($propertyData['recent_property']),
    //             'newly_added_property' => isset($propertyData['newly_added_property']),
    //             'top_projects' => isset($propertyData['top_projects']),
    //             'bhk_type' => $propertyData['bhk_type'],
    //             'price_range_start' => $propertyData['price_range_start'],
    //             'price_range_end' => $propertyData['price_range_end'],
    //             'possession_status' => $propertyData['possession_status'],
    //             'size' => $propertyData['size'],
    //             'video' => $propertyData['video'] ?? null,
    //             'added_by' => auth()->user()->id,
    //         ]);

    //         // Step 2: Store Property Location
    //         $locationData = $request->input('locations');
    //         PropertyLocation::create([
    //             'property_id' => $newProperty->id,
    //             'city_id' => $locationData['city_id'],
    //             'state_id' => $locationData['state_id'],
    //             'country_id' => $locationData['country_id'],
    //             'area_id' => $locationData['area_id'],
    //             'landmark_id' => $locationData['landmark_id'],
    //             'added_by' => auth()->user()->id,
    //         ]);

    //         // Step 3: Store Amenities
    //         if ($request->has('amenities')) {
    //             foreach ($request->input('amenities') as $amenitySet) {
    //                 // Handle existing amenities (checkbox selection)
    //                 if (isset($amenitySet['existing'])) {
    //                     foreach ($amenitySet['existing'] as $existingAmenityId) {
    //                         PropertyRelatedAmenity::create([
    //                             'property_id' => $newProperty->id,
    //                             'property_amenity_id' => $existingAmenityId,
    //                             'is_true' => true,
    //                         ]);
    //                     }
    //                 }

    //                 // Handle new amenities (newly added by user)
    //                 if (isset($amenitySet['new']) && !empty($amenitySet['new']['name'])) {
    //                     // Only proceed if 'name' is present
    //                     $newAmenityData = [
    //                         'name' => $amenitySet['new']['name'],
    //                         'added_by' => auth()->user()->id,
    //                     ];

    //                     // Check if 'icon_image' exists and is a valid file
    //                     if (isset($amenitySet['new']['icon_image']) && $request->hasFile("amenities.0.new.icon_image")) {
    //                         $newAmenityData['icon_image'] = $this->uploadFile($amenitySet['new']['icon_image']); // File upload method
    //                     } else {
    //                         $newAmenityData['icon_image'] = null; // No file was uploaded
    //                     }

    //                     // Create the new amenity
    //                     $newAmenity = PropertyAmenity::create($newAmenityData);

    //                     // Relate the newly created amenity with the property
    //                     PropertyRelatedAmenity::create([
    //                         'property_id' => $newProperty->id,
    //                         'property_amenity_id' => $newAmenity->id,
    //                         'is_true' => true,
    //                     ]);
    //                 }
    //             }
    //         }

    //         // Step 4: Store Utilities
    //         if ($request->has('utilities')) {
    //             foreach ($request->input('utilities') as $utilitySet) {
    //                 // Only proceed if 'name' is provided
    //                 if (!empty($utilitySet['name'])) {
    //                     $newUtility = PropertyUtility::create([
    //                         'name' => $utilitySet['name'],
    //                         'added_by' => auth()->user()->id,
    //                     ]);

    //                     // Relate the utility with the property
    //                     PropertyRelatedUtility::create([
    //                         'property_id' => $newProperty->id,
    //                         'property_utility_id' => $newUtility->id,
    //                         'value' => $utilitySet['value'] ?? 0,
    //                         'parking_type' => $utilitySet['parking_type'],
    //                     ]);
    //                 }
    //             }
    //         }

    //         return redirect()->back()->with('success', 'Property and related details have been saved successfully!');
    //     } catch (\Exception $e) {
    //         // Handle the exception
    //         return redirect()->back()->with('error', 'An error occurred while saving the property: ' . $e->getMessage());
    //     }
    // }

    /**
     * Handle file upload for new amenities.
     *
     * @param  \Illuminate\Http\UploadedFile|null $file
     * @return string|null File path to be stored in the database
     */
    // private function uploadFile($file)
    // {
    //     if ($file && $file instanceof \Illuminate\Http\UploadedFile) {
    //         // Define the target directory within the public path
    //         $destinationPath = public_path('amenities');

    //         // Ensure the directory exists, if not create it
    //         if (!file_exists($destinationPath)) {
    //             mkdir($destinationPath, 0755, true);
    //         }

    //         // Generate a unique name for the file
    //         $fileName = time() . '_' . $file->getClientOriginalName();

    //         // Move the file to the target directory
    //         $file->move($destinationPath, $fileName);

    //         // Return the path relative to the public directory to store in the database
    //         return 'amenities/' . $fileName;
    //     }
    //     return null;
    // }

    // public function store(Request $request)
    // {

    //     // Validate the request
    //     $request->validate([
    //         'title' => 'required|string|max:255',
    //         'property_type' => 'required|in:Residential,Commercial',
    //         'property_location_id' => 'required|exists:property_locations,id',
    //         'bhk_type' => 'required|in:1BHK,2BHK,3BHK,4BHK,5BHK',
    //         'price_range_start' => 'nullable|numeric',
    //         'price_range_end' => 'nullable|numeric',
    //         'size' => 'required|numeric',
    //         'video' => 'nullable|url',
    //         'possession_status' => 'required|in:Under construction,Ready to Move',
    //         'amenities' => 'array',
    //         'amenities.*' => 'boolean',
    //         'utility_name.*' => 'required|string|max:255',
    //         'utility_parking_type.*' => 'nullable|in:Stilt,Pit,Puzzle,Mechanical',
    //         'images.*' => 'required|file|mimes:jpeg,png,jpg,gif',
    //         'image_category_id.*' => 'required|exists:image_categories,id',
    //     ]);

    //     // Save property data
    //     $property = Property::create([
    //         'title' => $request->title,
    //         'property_type' => $request->property_type,
    //         'property_location_id' => $request->property_location_id,
    //         'recent_property' => $request->boolean('recent_property', false),
    //         'newly_added_property' => $request->boolean('newly_added_property', false),
    //         'top_projects' => $request->boolean('top_projects', false),
    //         'bhk_type' => $request->bhk_type,
    //         'price_range_start' => $request->price_range_start,
    //         'price_range_end' => $request->price_range_end,
    //         'size' => $request->size,
    //         'video' => $request->video,
    //         'possession_status' => $request->possession_status,
    //         'added_by' => auth()->id(),
    //     ]);

    //     // Save Amenities data (Check if amenities exist in request)
    //     if ($request->has('amenities')) {
    //         foreach ($request->amenities as $amenity_id => $is_true) {
    //             PropertyAmenity::create([
    //                 'property_id' => $property->id,
    //                 'amenity_id' => $amenity_id,
    //                 'is_true' => true, // Set to true if checked
    //             ]);
    //         }
    //     }

    //     // Save Utilities data (Check if utilities exist in request)
    //     if ($request->has('utility_name')) {
    //         foreach ($request->utility_name as $index => $utility_name) {
    //             PropertyUtility::create([
    //                 'property_id' => $property->id,
    //                 'name' => $utility_name,
    //                 'parking_type' => $request->utility_parking_type[$index] ?? null,
    //                 'added_by' => auth()->id(),
    //             ]);
    //         }
    //     }

    //     // Save Images (Check if images exist in request)
    //     if ($request->hasFile('images')) {
    //         foreach ($request->file('images') as $index => $image) {
    //             // Store the image in storage/app/public/property_images
    //             $imagePath = $image->store('property_images', 'public');

    //             PropertyImage::create([
    //                 'property_id' => $property->id,
    //                 'image' => $imagePath,
    //                 'image_category_id' => $request->image_category_id[$index],
    //                 'added_by' => auth()->id(),
    //             ]);
    //         }
    //     }

    //     // Redirect back with success message
    //     return redirect()->route('properties.index')->with('success', 'Property added successfully!');
    // }

    // public function edit($id)
    // {
    //     // Fetch the property along with its related data
    //     $property = Property::with([
    //         'locations',
    //         'amenities',
    //         'utilities',
    //         'images.propertyImage.imageCategory', // Eager load images with their categories
    //     ])->findOrFail($id);

    //     // Group images by their categories
    //     $groupedImages = $property->images->groupBy('propertyImage.imageCategory.category_name');

    //     // Fetch other required data for dropdowns
    //     $countries = Country::all(); // Adjust as necessary
    //     $states = State::where('country_id', $property->locations->first()->country_id)->get(); // Get states for the selected country
    //     $cities = City::where('state_id', $property->locations->first()->state_id)->get(); // Get cities for the selected state
    //     $areas = Area::all(); // Fetch areas if required
    //     $landmarks = Landmark::all(); // Fetch landmarks if required
    //     $imageCategories = ImageCategory::all(); // Fetch image categories for the dropdown

    //     return view('admin.property.edit', compact('property', 'groupedImages', 'countries', 'states', 'cities', 'areas', 'landmarks', 'imageCategories','amenities'));
    // }

    public function edit($id)
    {
        // Fetch the property along with its related data
        $property = Property::with([
            'locations',
            'amenities',
            'utilities',
            'images.propertyImage.imageCategory', // Eager load images with their categories
            'specialHighlights' // Load special highlights
        ])->findOrFail($id);

        // Group images by their categories
        $groupedImages = $property->images->groupBy('propertyImage.imageCategory.category_name');

        // Fetch other required data for dropdowns
        $countries = Country::all();
        $states = State::where('country_id', $property->locations->first()->country_id)->get();
        $cities = City::where('state_id', $property->locations->first()->state_id)->get();
        $areas = Area::all();
        $landmarks = Landmark::all();
        $imageCategories = ImageCategory::all(); // Fetch image categories for the dropdown

        // Fetch all existing amenities from the database
        $existingAmenities = PropertyAmenity::all();

        // Fetch the property amenities that are already related to this property
        $propertyAmenities = $property->amenities->pluck('id')->toArray(); // Array of existing amenity IDs

    // Fetch existing highlights
    $existingHighlights = SpecialHighlight::all();
    $propertyHighlights = $property->specialHighlights->pluck('id')->toArray(); // Get associated highlights
        // Fetch all landmarks associated with this property
        $propertyLandmarks = DB::table('property_landmark')->where('property_id', $id)->pluck('landmark_id')->toArray(); // Get an array of associated landmark IDs
        return view('admin.property.edit', compact('property', 'groupedImages', 'countries', 'states', 'cities', 'areas', 'landmarks', 'imageCategories', 'existingAmenities', 'propertyAmenities', 'propertyLandmarks','existingHighlights',
        'propertyHighlights'));
    }
    public function update(Request $request, $id)
    {
        try {
            // Step 1: Update Property Details
            $propertyData = $request->input('properties');
            $property = Property::findOrFail($id);

            $property->update([
                'title' => $propertyData['title'],
                'property_type' => $propertyData['property_type'],
                'recent_property' => isset($propertyData['recent_property']),
                'newly_added_property' => isset($propertyData['newly_added_property']),
                'top_projects' => isset($propertyData['top_projects']),
                'bhk_type' => $propertyData['bhk_type'],
                'price_range_start' => $propertyData['price_range_start'],
                'price_range_end' => $propertyData['price_range_end'],
                'possession_status' => $propertyData['possession_status'],
                'size' => $propertyData['size'],
                'video' => $propertyData['video'] ?? null,
            ]);

            // Step 2: Update Property Location
            $locationData = $request->input('locations');
            $location = PropertyLocation::findOrFail($property->locations->first()->id);

            $location->update([
                'city_id' => $locationData['city_id'],
                'state_id' => $locationData['state_id'],
                'country_id' => $locationData['country_id'],
                'area_id' => $locationData['area_id'],
            ]);

            // Step 3: Update Property Landmarks (Pivot Table)
            if ($request->has('locations.landmark_id')) {
                // Delete old landmarks for this property
                DB::table('property_landmark')
                    ->where('property_id', $property->id)
                    ->delete();

                // Insert new landmarks
                foreach ($request->input('locations.landmark_id') as $landmarkId) {
                    DB::table('property_landmark')->insert([
                        'property_id' => $property->id,
                        'landmark_id' => $landmarkId,
                        'created_at' => now(),
                        'updated_at' => now(),
                    ]);
                }
            }

            // Step 4: Update Amenities
            PropertyRelatedAmenity::where('property_id', $property->id)->delete(); // Remove existing amenities

            if ($request->has('amenities.existing')) {
                foreach ($request->input('amenities.existing') as $existingAmenityId) {
                    PropertyRelatedAmenity::create([
                        'property_id' => $property->id,
                        'property_amenity_id' => $existingAmenityId,
                        'is_true' => true,
                    ]);
                }
            }

            // Step 5: Update New Amenities (Handle new amenity creation)
            if ($request->has('amenities')) {
                foreach ($request->input('amenities') as $index => $amenitySet) {
                    if (isset($amenitySet['new']) && !empty($amenitySet['new']['name'])) {
                        $newAmenityData = [
                            'name' => $amenitySet['new']['name'],
                            'added_by' => auth()->user()->id,
                        ];

                        if ($request->hasFile("amenities.$index.new.icon_image")) {
                            $file = $request->file("amenities.$index.new.icon_image");
                            if ($file->isValid()) {
                                $newAmenityData['icon_image'] = $this->uploadFile($file, 'amenities');
                            }
                        }

                        $newAmenity = PropertyAmenity::create($newAmenityData);

                        PropertyRelatedAmenity::create([
                            'property_id' => $property->id,
                            'property_amenity_id' => $newAmenity->id,
                            'is_true' => true,
                        ]);
                    }
                }
            }

            // Step 6: Update Utilities
            PropertyRelatedUtility::where('property_id', $property->id)->delete(); // Remove existing utilities

            if ($request->has('utilities')) {
                foreach ($request->input('utilities') as $utilitySet) {
                    if (!empty($utilitySet['name'])) {
                        $newUtility = PropertyUtility::create([
                            'name' => $utilitySet['name'],
                            'added_by' => auth()->user()->id,
                        ]);

                        PropertyRelatedUtility::create([
                            'property_id' => $property->id,
                            'property_utility_id' => $newUtility->id,
                            'value' => $utilitySet['value'] ?? 0,
                            'parking_type' => $utilitySet['parking_type'] ?? null,
                        ]);
                    }
                }
            }
   // First, delete old highlights for this property
   DB::table('property_special_highlight')
   ->where('property_id', $property->id)
   ->delete();

// Insert selected existing highlights
if ($request->has('highlights.existing')) {
   foreach ($request->input('highlights.existing') as $existingHighlightId) {
       DB::table('property_special_highlight')->insert([
           'property_id' => $property->id,
           'special_highlight_id' => $existingHighlightId,
           'is_true' => true,
           'created_at' => now(),
           'updated_at' => now(),
       ]);
   }
}

// Handle new highlights
if ($request->has('highlights')) {
   foreach ($request->input('highlights') as $index => $highlightSet) {
       if (isset($highlightSet['new']) && !empty($highlightSet['new']['name'])) {
           $newHighlightData = [
               'name' => $highlightSet['new']['name'],
               'added_by' => auth()->user()->id,
           ];

           // Create new highlight
           $newHighlight = SpecialHighlight::create($newHighlightData);

           // Relate the newly created highlight with the property
           DB::table('property_special_highlight')->insert([
               'property_id' => $property->id,
               'special_highlight_id' => $newHighlight->id,
               'is_true' => true,
               'created_at' => now(),
               'updated_at' => now(),
           ]);
       }
   }
}

            // Step 7: Update or Replace Property Images
            if ($request->has('images')) {
                foreach ($request->input('images') as $index => $imageData) {
                    if (isset($imageData['id'])) {
                        // Update existing image
                        $existingImage = PropertyImage::findOrFail($imageData['id']);

                        if ($request->hasFile("images.$index.file")) {
                            $file = $request->file("images.$index.file");
                            if ($file->isValid()) {
                                $fileName = $this->uploadFile($file, 'images');
                                $existingImage->update([
                                    'image' => $fileName,
                                    'image_category_id' => $imageData['image_category_id'],
                                ]);
                            }
                        } else {
                            $existingImage->update([
                                'image_category_id' => $imageData['image_category_id'],
                            ]);
                        }
                    } else {
                        // Handle new image
                        if ($request->hasFile("images.$index.file")) {
                            $file = $request->file("images.$index.file");
                            if ($file->isValid()) {
                                $fileName = $this->uploadFile($file, 'images');
                                if (!empty($imageData['image_category_id'])) {
                                    $newImage = PropertyImage::create([
                                        'image' => $fileName,
                                        'image_category_id' => $imageData['image_category_id'],
                                        'added_by' => auth()->user()->id,
                                    ]);

                                    PropertyRelatedImage::create([
                                        'property_id' => $property->id,
                                        'image_id' => $newImage->id,
                                        'is_active' => true,
                                    ]);
                                }
                            }
                        }
                    }
                }
            }

            return redirect()->route('properties.index')->with('success', 'Property and related details have been updated successfully!');
        } catch (\Exception $e) {
            return redirect()
                ->back()
                ->with('error', 'An error occurred while updating the property: ' . $e->getMessage());
        }
    }

    // public function update(Request $request, $id)
    // {
    //     try {
    //         // Step 1: Update Property Details
    //         $propertyData = $request->input('properties');
    //         $property = Property::findOrFail($id);

    //         $property->update([
    //             'title' => $propertyData['title'],
    //             'property_type' => $propertyData['property_type'],
    //             'recent_property' => isset($propertyData['recent_property']),
    //             'newly_added_property' => isset($propertyData['newly_added_property']),
    //             'top_projects' => isset($propertyData['top_projects']),
    //             'bhk_type' => $propertyData['bhk_type'],
    //             'price_range_start' => $propertyData['price_range_start'],
    //             'price_range_end' => $propertyData['price_range_end'],
    //             'possession_status' => $propertyData['possession_status'],
    //             'size' => $propertyData['size'],
    //             'video' => $propertyData['video'] ?? null,
    //         ]);

    //         // Step 2: Update Property Location
    //         $locationData = $request->input('locations');
    //         $location = PropertyLocation::findOrFail($property->locations->first()->id);

    //         $location->update([
    //             'city_id' => $locationData['city_id'],
    //             'state_id' => $locationData['state_id'],
    //             'country_id' => $locationData['country_id'],
    //             'area_id' => $locationData['area_id'],
    //             'landmark_id' => $locationData['landmark_id'],
    //         ]);

    //         // Step 3: Update Amenities
    //         PropertyRelatedAmenity::where('property_id', $property->id)->delete(); // Remove existing amenities

    //         if ($request->has('amenities.existing')) {
    //             foreach ($request->input('amenities.existing') as $existingAmenityId) {
    //                 PropertyRelatedAmenity::create([
    //                     'property_id' => $property->id,
    //                     'property_amenity_id' => $existingAmenityId,
    //                     'is_true' => true,
    //                 ]);
    //             }
    //         }

    //         // Step 4: Update New Amenities
    //         if ($request->has('amenities')) {
    //             foreach ($request->input('amenities') as $index => $amenitySet) {
    //                 if (isset($amenitySet['new']) && !empty($amenitySet['new']['name'])) {
    //                     $newAmenityData = [
    //                         'name' => $amenitySet['new']['name'],
    //                         'added_by' => auth()->user()->id,
    //                     ];

    //                     if ($request->hasFile("amenities.$index.new.icon_image")) {
    //                         $file = $request->file("amenities.$index.new.icon_image");
    //                         if ($file->isValid()) {
    //                             $newAmenityData['icon_image'] = $this->uploadFile($file, 'amenities');
    //                         }
    //                     }

    //                     $newAmenity = PropertyAmenity::create($newAmenityData);

    //                     PropertyRelatedAmenity::create([
    //                         'property_id' => $property->id,
    //                         'property_amenity_id' => $newAmenity->id,
    //                         'is_true' => true,
    //                     ]);
    //                 }
    //             }
    //         }

    //         // Step 5: Update Utilities
    //         PropertyRelatedUtility::where('property_id', $property->id)->delete(); // Remove existing utilities

    //         if ($request->has('utilities')) {
    //             foreach ($request->input('utilities') as $utilitySet) {
    //                 if (!empty($utilitySet['name'])) {
    //                     $newUtility = PropertyUtility::create([
    //                         'name' => $utilitySet['name'],
    //                         'added_by' => auth()->user()->id,
    //                     ]);

    //                     PropertyRelatedUtility::create([
    //                         'property_id' => $property->id,
    //                         'property_utility_id' => $newUtility->id,
    //                         'value' => $utilitySet['value'] ?? 0,
    //                         'parking_type' => $utilitySet['parking_type'] ?? null,
    //                     ]);
    //                 }
    //             }
    //         }

    //         // Step 6: Update or Replace Property Images
    //         if ($request->has('images')) {
    //             foreach ($request->input('images') as $index => $imageData) {
    //                 if (isset($imageData['id'])) {
    //                     // Find the existing image and update
    //                     $existingImage = PropertyImage::findOrFail($imageData['id']);

    //                     if ($request->hasFile("images.$index.file")) {
    //                         $file = $request->file("images.$index.file");
    //                         if ($file->isValid()) {
    //                             $fileName = $this->uploadFile($file, 'images');
    //                             $existingImage->update([
    //                                 'image' => $fileName,
    //                                 'image_category_id' => $imageData['image_category_id'],
    //                             ]);
    //                         }
    //                     } else {
    //                         $existingImage->update([
    //                             'image_category_id' => $imageData['image_category_id'],
    //                         ]);
    //                     }
    //                 } else {
    //                     // Handle new image
    //                     if ($request->hasFile("images.$index.file")) {
    //                         $file = $request->file("images.$index.file");
    //                         if ($file->isValid()) {
    //                             $fileName = $this->uploadFile($file, 'images');
    //                             if (!empty($imageData['image_category_id'])) {
    //                                 $newImage = PropertyImage::create([
    //                                     'image' => $fileName,
    //                                     'image_category_id' => $imageData['image_category_id'],
    //                                     'added_by' => auth()->user()->id,
    //                                 ]);

    //                                 PropertyRelatedImage::create([
    //                                     'property_id' => $property->id,
    //                                     'image_id' => $newImage->id,
    //                                     'is_active' => true,
    //                                 ]);
    //                             }
    //                         }
    //                     }
    //                 }
    //             }
    //         }

    //         return redirect()->route('properties.index')->with('success', 'Property and related details have been updated successfully!');
    //     } catch (\Exception $e) {
    //         return redirect()
    //             ->back()
    //             ->with('error', 'An error occurred while updating the property: ' . $e->getMessage());
    //     }
    // }
}
