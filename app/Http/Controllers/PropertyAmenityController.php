<?php

namespace App\Http\Controllers;

use App\Models\PropertyAmenity;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class PropertyAmenityController extends Controller
{
    // Function to upload files directly to the 'public/amenities' directory
    private function uploadFile($file, $directory)
    {
        // Check if the file is valid
        if (!$file->isValid()) {
            throw new \Exception('Invalid file upload.');
        }

        // Define the upload path (public/amenities)
        $uploadPath = public_path($directory);

        // Ensure the directory exists, if not, create it
        if (!File::exists($uploadPath)) {
            File::makeDirectory($uploadPath, 0755, true);
        }

        // Generate a unique filename to avoid conflicts
        $fileName = time() . '_' . $file->getClientOriginalName();

        // Move the file to the specified path in 'public'
        $file->move($uploadPath, $fileName);

        // Return the relative path to be stored in the database
        return $directory . '/' . $fileName;
    }

    // Display a listing of the resource
    public function index()
    {
        $amenities = PropertyAmenity::where('is_delete', false)->get();
        return view('admin.amenity.index', compact('amenities'));
    }

    // Store a newly created resource
    public function store(Request $request)
    {
        // Validate incoming request data
        $request->validate([
            'name' => 'required|string|max:255',
            'icon_image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        // Handle the icon image upload if provided
        $iconImagePath = null;
        if ($request->hasFile('icon_image')) {
            $iconImagePath = $this->uploadFile($request->file('icon_image'), 'amenities');
        }

        // Create a new amenity entry in the database
        PropertyAmenity::create([
            'name' => $request->name,
            'icon_image' => $iconImagePath,
            'added_by' => auth()->id(),
        ]);

        return redirect()->route('property_amenities.index')->with('success', 'Property Amenity added successfully.');
    }

    // Update the specified resource
    public function update(Request $request, PropertyAmenity $propertyAmenity)
    {
        // Validate incoming request data
        $request->validate([
            'name' => 'required|string|max:255',
            'icon_image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        // Handle the icon image upload and delete old image if necessary
        if ($request->hasFile('icon_image')) {
            // Delete the old image
            if ($propertyAmenity->icon_image && file_exists(public_path($propertyAmenity->icon_image))) {
                unlink(public_path($propertyAmenity->icon_image));
            }

            // Store the new image in 'public/amenities'
            $propertyAmenity->icon_image = $this->uploadFile($request->file('icon_image'), 'amenities');
        }

        // Update amenity details
        $propertyAmenity->update([
            'name' => $request->name,
            'updated_by' => auth()->id(),
        ]);

        return redirect()->route('property_amenities.index')->with('success', 'Property Amenity updated successfully.');
    }

    // Soft-delete the specified resource
    public function destroy(PropertyAmenity $propertyAmenity)
    {
        // Soft delete the amenity by setting the 'is_delete' flag to true
        $propertyAmenity->update(['is_delete' => true]);

        return redirect()->route('property_amenities.index')->with('success', 'Property Amenity deleted successfully.');
    }
}
