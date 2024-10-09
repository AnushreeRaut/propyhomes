<?php

namespace App\Http\Controllers;

use App\Models\Area;
use Illuminate\Http\Request;

class AreaController extends Controller
{
      // Show all areas
      public function index()
      {
          $areas = Area::orderByDesc('created_at')->get();
          return view('admin.area.index', compact('areas'));
      }

      // Store a new area
      public function store(Request $request)
      {
          $request->validate([
              'area_name' => 'required|string|max:255',
          ]);

          Area::create([
              'area_name' => $request->area_name,
          ]);

          return redirect()->route('areas.index')->with('success', 'Area created successfully.');
      }

      // Show a single area
      public function show(Area $area)
      {
          return view('areas.show', compact('area'));
      }

      // Update an area
      public function update(Request $request, Area $area)
      {
          $request->validate([
              'area_name' => 'required|string|max:255',
          ]);

          $area->update([
              'area_name' => $request->area_name,
          ]);

          return redirect()->route('areas.index')->with('success', 'Area updated successfully.');
      }

      // Delete an area
      public function destroy(Area $area)
      {
          $area->delete();
          return redirect()->route('areas.index')->with('success', 'Area deleted successfully.');
      }
}
