<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        return view('index');
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
