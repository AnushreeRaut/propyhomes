<?php

namespace App\Http\Controllers;

use App\Models\Project;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $projects = Project::where('is_delete', false)->get();
        return view('index',compact('projects'));
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
