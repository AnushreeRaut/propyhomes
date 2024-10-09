<?php
namespace App\Http\Controllers;

use App\Models\Landmark;
use App\Models\Area;
use Illuminate\Http\Request;

class LandmarkController extends Controller
{
    // Display a listing of the landmarks
    public function index()
    {
        $landmarks = Landmark::orderByDesc('created_at')->get(); // Get landmarks with related area
        return view('admin.landmark.index', compact('landmarks'));
    }

    // Store a newly created landmark
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
        ]);

        Landmark::create($request->all());

        return redirect()->route('landmarks.index')->with('success', 'Landmark created successfully.');
    }

    // Update the specified landmark
    public function update(Request $request, $id)
    {
        $landmark = Landmark::findOrFail($id);

        $request->validate([
            'name' => 'required|string|max:255',
        ]);

        $landmark->update($request->all());

        return redirect()->route('landmarks.index')->with('success', 'Landmark updated successfully.');
    }

    // Remove the specified landmark
    public function destroy($id)
    {
        $landmark = Landmark::findOrFail($id);
        $landmark->delete();

        return redirect()->route('landmarks.index')->with('success', 'Landmark deleted successfully.');
    }
}
