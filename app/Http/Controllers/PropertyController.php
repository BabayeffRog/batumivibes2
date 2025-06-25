<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Property;
use Illuminate\Http\Request;

class PropertyController extends Controller
{
    public function index()
    {
        $featuredProperties = Property::where('is_featured', true)->limit(4)->get();

        return view('welcome', compact('featuredProperties'));
    }
}
