<?php

namespace App\Http\Controllers;

use App\Models\ImageCategory;
use Illuminate\Http\Request;

class ImageCategoryController extends Controller
{
    // Display a listing of the resource
    public function index()
    {
        $categories = ImageCategory::all();
        return view('admin.category.index', compact('categories'));
    }

    // Store a newly created resource
    public function store(Request $request)
    {
        $request->validate([
            'category_name' => 'required|string|max:255',
        ]);

        ImageCategory::create([
            'category_name' => $request->category_name,
            'added_by' => auth()->id(),
        ]);

        return redirect()->route('image_categories.index')->with('success', 'Image Category added successfully.');
    }

    // Update the specified resource
    public function update(Request $request, ImageCategory $imageCategory)
    {
        $request->validate([
            'category_name' => 'required|string|max:255',
        ]);

        $imageCategory->update([
            'category_name' => $request->category_name,
            'updated_by' => auth()->id(),
        ]);

        return redirect()->route('image_categories.index')->with('success', 'Image Category updated successfully.');
    }

    // Soft-delete the specified resource
    public function destroy(ImageCategory $imageCategory)
    {
        $imageCategory->delete();

        return redirect()->route('image_categories.index')->with('success', 'Image Category deleted successfully.');
    }
}
