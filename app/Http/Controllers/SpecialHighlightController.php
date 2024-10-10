<?php

namespace App\Http\Controllers;

use App\Models\SpecialHighlight;
use Illuminate\Http\Request;

class SpecialHighlightController extends Controller
{
    // Display a listing of the resource
    public function index()
    {
        $specialHighlights = SpecialHighlight::all();
        return view('admin.highlight.index', compact('specialHighlights'));
    }

    // Store a newly created resource
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
        ]);

        SpecialHighlight::create([
            'name' => $request->name,
            'added_by' => auth()->id(),
        ]);

        return redirect()->route('special_highlights.index')->with('success', 'Special Highlight added successfully.');
    }

    // Update the specified resource
    public function update(Request $request, SpecialHighlight $specialHighlight)
    {
        $request->validate([
            'name' => 'required|string|max:255',
        ]);

        $specialHighlight->update([
            'name' => $request->name,
            'updated_by' => auth()->id(),
        ]);

        return redirect()->route('special_highlights.index')->with('success', 'Special Highlight updated successfully.');
    }

    // Remove the specified resource
    public function destroy(SpecialHighlight $specialHighlight)
    {
        $specialHighlight->delete();
        return redirect()->route('special_highlights.index')->with('success', 'Special Highlight deleted successfully.');
    }
}
