<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TopProjectController extends Controller
{
    public function viewlotus()
    {
        return view('frontend.topproject.lotusresidency');
    }
    public function viewkrishna()
    {
        return view('frontend.topproject.krishna');
    }
    public function viewmahendra()
    {
        return view('frontend.topproject.mahendra');
    }
    public function vieworchid()
    {
        return view('frontend.topproject.orchid');
    }
    public function viewinsight()
    {
        return view('frontend.topproject.insight');
    }
    public function viewanjaeja()
    {
        return view('frontend.topproject.anjaneja');
    }
}
