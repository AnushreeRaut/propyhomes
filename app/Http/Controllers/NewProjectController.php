<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NewProjectController extends Controller
{
    public function viewbalaji()
    {
        return view('frontend.newproject.balaji');
    }
    public function viewbella()
    {
        return view('frontend.newproject.bella');
    }
    public function viewmaelite()
    {
        return view('frontend.newproject.elitepark');
    }
    public function viewvedant()
    {
        return view('frontend.newproject.vedant');
    }

}
